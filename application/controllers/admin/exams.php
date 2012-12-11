<?php
//考试类
class Exams extends HT_Controller
{
	function __construct(){
    	parent::__construct();		
		$this->load->model('Category_model');		
    }
	
	// 默认 列表页
    function index($cid=0, $page=0){	
		$sql_string="SELECT * FROM category WHERE pid = ".$cid ." and type=1";
		$query = $this->db->query($sql_string); // 查询满足要求的总记录数
		$total = $query->num_rows();
		$this->load->library('pagination');
		$config['base_url'] = site_url('admin/exams/index/'.$cid);
		$config['total_rows'] = $total;		
		$config['per_page'] = '14'; 
		$config['uri_segment'] = 5;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		$query = $this->db->query($sql_string .' limit '. $page .','. $config['per_page']);
		$data['list'] =	$query->result_array();
        $this->load->view('admin/examsList_template', $data);
    }
	function examTitlelist($cid, $page=0){
		$sql_string="SELECT * FROM exam WHERE cid = ".$cid;
		$query = $this->db->query($sql_string); // 查询满足要求的总记录数
		$total = $query->num_rows();
		$this->load->library('pagination');
		$config['base_url'] = site_url('admin/exams/examTitlelist/'.$cid);
		$config['total_rows'] = $total;		
		$config['per_page'] = '14'; 
		$config['uri_segment'] = 5;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		$query = $this->db->query($sql_string .' limit '. $page .','. $config['per_page']);
		$data['list'] =	$query->result_array();
		$query = $this->db->query("SELECT * FROM category WHERE id = ".$cid );
		$cate =	$query->row_array();
		$data['catename']=$cate['name'];
		$data['cid']=$cid;
        $this->load->view('admin/examTitlelist_template', $data);
	}
	// 添加题目
    public function add($cid){
		$data['actName'] = "添加";
		$query = $this->db->query("SELECT * FROM category WHERE id = ".$cid );
		$cate =	$query->row_array();
		$data['catename']=$cate['name'];
		$data['article']=array(
			'cid'=>$cid
		);
		$this->load->view('admin/'.$cate['tpl_show'], $data);
	}
	
	// 修改内容
    public function edit($id){
		$data['actName'] = "修改内容";
		$query = $this->db->query("select * from exam where id=".$id);
		$data['article'] = $query->row_array();
		$query = $this->db->query("SELECT * FROM category WHERE id = ".$data['article']['cid'] );
		$cate =	$query->row_array();
		$data['catename']=$cate['name'];				
		$this->load->view('admin/'.$cate['tpl_show'], $data);
	}
	
	// 保存内容  添加和修改的保存都在这里
    public function addsave(){

		$id = empty($_POST['id']) ? 0 : $_POST['id'];		
		
		$array_keys = array_keys($_POST);		// 自动获取提交过来的表单各项值
		foreach($array_keys as $r){
			$data[$r] = is_array($_POST[$r]) ? implode('|',$_POST[$r]) : $_POST[$r];	
		}		
		array_splice($data, -1, 2);	// 表单最后两项不要
		if($id > 0){			
			$this->db->where('id', $id);
			$this->db->update('exam', $data); 
		}else{
			$this->db->insert('exam', $data); 
		}
		echo 
		redirect('admin/exams/examTitlelist/'.$_POST['cid']);
	}	
	
	
	// 删除数据 
    public function delete($cid, $id="") {	
		$query = $this->db->query("delete from exam where id in(".$id.")");		
		if($query){
			redirect('admin/exams/examTitlelist/'.$cid);			
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
			show_error('转移信息出现错误了');
		}
    } 
}