<?php
//新闻类
class News extends HT_Controller
{
	function __construct(){
    	parent::__construct();		
		$this->load->model('Category_model');		
    }
	
	// 默认 列表页
    function index($cid=0, $page=0){
		switch($cid){
			case '145':redirect(site_url('/admin/ask/index/'.$cid));//师生问答
			break;
			case '146':redirect(site_url('/admin/ask/index/'.$cid));//学生交流
			break;
			case '147':redirect(site_url('/admin/work/index/'.$cid));//作业提交
			break;
			case '150':redirect(site_url('/admin/exams/index/'.$cid));//考试材料
			break;
		}
		$keywords = trim(@$_POST['keywords']);
		$data['keywords'] = $keywords;
		$data['cid'] = $cid;	
		
		$pid = $this->Category_model->get_pid($cid);
		$arr_cat = $this->Category_model->getCategoryById($cid);		
		$data['catname'] = empty($arr_cat['name']) ? '所有栏目' : $arr_cat['name'];
		$data['getCategorySelect'] = $this->Category_model->getCategorySelect($cid, $pid);	 // 显示指定的栏目
		$data['getCategorySelectAll'] = $this->Category_model->getCategorySelect();	 // 显示所有栏目
			
		$where = "where 1 ";
		if($cid){
			$cids = $this->Category_model->getCategoryChildIds($cid);
			$cids = ! empty($cids) ? $cids : $cid;			
			$where .= " and a.cid in(".$cids.")";
		}
		if($keywords){
			$where .= " and (a.title like '%".$keywords."%' or a.content like '%".$keywords."%')";
		}
		if($cid==190 || $cid==191 || $cid==192){
		 	$sql_string = "select a.*,b.name as cname from news a left outer join category b on a.cid=b.id ".$where." order by a.db0";
		}else{
			$sql_string = "select a.*,b.name as cname from news a left outer join category b on a.cid=b.id ".$where." order by a.id desc";
		}
				
		$query = $this->db->query($sql_string); // 查询满足要求的总记录数
		$total = $query->num_rows();
		
		$this->load->library('pagination');
		$config['base_url'] = site_url('admin/news/index/'.$cid);
		$config['total_rows'] = $total;		
		$config['per_page'] = '10'; 
		$config['uri_segment'] = 5;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		$query = $this->db->query($sql_string .' limit '. $page .','. $config['per_page']);
		$data['list'] =	$query->result_array();
        $this->load->view('admin/articleList_template', $data);
    }
	
	// 添加内容
    public function add($cid){
		$data['actName'] = "添加内容";
		$pid = $this->Category_model->get_pid($cid);//获取一级父栏目	
		$data['cid']=$cid;
		$data['getCategorySelect'] = $this->Category_model->getCategorySelect($cid, $pid);		
		$query = $this->db->query("select * from category where id=".$cid);
		$row = $query->row_array();
		$data['display'] = explode("|", $row['display']);
		$str_filed = $row['fileds'];
		$str_filed = explode("|||",$str_filed);
		foreach($str_filed as $rs){
			$str_filed2[] =  explode("@@",$rs);
		}		
		if (is_array($str_filed2)){
			$data['str_filed2'] = $str_filed2;	
		}
		$this->load->view('admin/news_add', $data);
	}
	
	public function modify($cid){
		$cate = $this->Category_model->getCategoryById($cid);
		$data['cate'] = $cate;
		$data['actName'] = "编辑".$cate['name'];
		$data['display'] = explode("|", $cate['display']);
		$str_filed = $cate['fileds'];
		$str_filed = explode("|||",$str_filed);
		foreach($str_filed as $rs){
			$str_filed2[] =  explode("@@",$rs);
		}
		if (is_array($str_filed2)){
			$data['str_filed2'] = $str_filed2;	
		}		
		$query = $this->db->query("select * from news where cid=".$cid);
		if ($query->num_rows() > 0){
		   $data['article'] = $query->row_array();
		}
		$this->load->view('admin/news_modify', $data);
	}
	
	// 修改内容
    public function edit($cid, $id){
		$data['actName'] = "修改内容";
		$pid = $this->Category_model->get_pid($cid);  //获取一级父栏目
		$data['getCategorySelect'] = $this->Category_model->getCategorySelect($cid, $pid);				
		$query = $this->db->query("select * from category where id=".$cid);
		$row = $query->row_array();	
		$data['display'] = explode("|", $row['display']);
		$str_filed = $row['fileds'];
		$str_filed = explode("|||",$str_filed);
		foreach($str_filed as $rs){
			$str_filed2[] =  explode("@@",$rs);
		}
		if (is_array($str_filed2)){
			$data['str_filed2'] = $str_filed2;	
		}
		
		$query = $this->db->query("select * from news where id=".$id);
		$data['article'] = $query->row_array();		
		$this->load->view('admin/news_add', $data);
	}
	
	// 保存内容  添加和修改的保存都在这里
    public function addsave(){
		$id = empty($_POST['id']) ? 0 : $_POST['id'];		
		
		$array_keys = array_keys($_POST);		// 自动获取提交过来的表单各项值
		foreach($array_keys as $r){
			if($id <= 0 && $r == 'id')
				continue;
			$data[$r] = is_array($_POST[$r]) ? implode('|',$_POST[$r]) : $_POST[$r];	
		}		
		array_splice($data, -2, 3);	// 表单最后两项不要
		
		if(!empty($_FILES['pic']['name'])){
			$attachment_dir = "uploads/".date('Ym')."/";
			!is_dir($attachment_dir) && mkdir($attachment_dir,0777, true);	
			$config['upload_path'] = $attachment_dir;
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '500';
			$config['max_width']  = '1000';
			$config['max_height']  = '1000';	
			$config['encrypt_name'] = TRUE;			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('pic'))	{
				$error = $this->upload->display_errors();
				show_error($error);
			} else{
				$file = $this->upload->data();	
				$data['pic'] = $attachment_dir.$file['file_name'] ;  //上传图片，返回图片地址	 		 
			}
		}
		
		if($id > 0){			
			$this->db->where('id', $id);
			$this->db->update('news', $data); 
		}else{
			$this->db->insert('news', $data); 
		}
		//redirect('admin/news/index/'.$_POST['cid']);
		redirect($_POST['gourl']);
		
	}	
	
	
	// 删除数据 
    public function delete($cid, $id="") {	
		$query = $this->db->query("delete from news where id in(".$id.")");		
		if($query){
			redirect('admin/news/index/'.$cid);			
		}else{
			show_error('删除信息出现错误了');
		}
    } 
	
	// 转移数据 
    public function move($newcid, $oldcid, $id="") {
        $query = $this->db->query("update news set cid=$newcid where id in(".$id.")");
				
		if($query){
			redirect('admin/news/index/'.$oldcid);			
		}else{
			show_error("转移信息出现错误了");
		}
    } 
}