<?php
/**
 * 内容显示页 控制器
 * @author	skyline
 */
class Show extends QT_Controller {
	
	function __construct(){
    	parent::__construct();		
	    $this->load->model('Category_model');
    }

	function index($id){		
		$data['zjgo'] = $this->Category_model->getCategoryListByPid(129);
		$data['culture'] = $this->Category_model->getCategoryListByPid(136);
		$data['news'] = $this->Category_model->getCategoryListByPid(137);
		$data['products'] = $this->Category_model->getCategoryListByPid(134);
		$data['major'] = $this->Category_model->getCategoryListByPid(142);
		$data['rencai'] = $this->Category_model->getCategoryListByPid(220);
		
		$tpl = empty($detail['tpl_show']) ? "html/show_news.php" : $detail['tpl_show'];
		$tpl=explode('.',$tpl);
		$this->load->view($tpl[0], $data);
	}
	
	//文章首页，框架文件
	function view($cid = 201,$pid = 129){
		$data['zjgo'] = $this->Category_model->getCategoryListByPid(129);
		$data['culture'] = $this->Category_model->getCategoryListByPid(136);
		$data['news'] = $this->Category_model->getCategoryListByPid(137);
		$data['products'] = $this->Category_model->getCategoryListByPid(134);
		$data['major'] = $this->Category_model->getCategoryListByPid(142);
		$data['rencai'] = $this->Category_model->getCategoryListByPid(220);
	
		$data['getCategoryList'] = $this->Category_model->getCategoryListByPid($pid);
		$data['title'] = $this->Category_model->getCategoryById($pid);
		$data['category'] = $this->Category_model->getCategoryById($cid);
		$query = $this->db->query("select * from news where cid=".$cid);
		if ($query->num_rows() > 0){
		   $data['article'] = $query->row_array();
		}
		if ($data['category']['type'] == 2)
			$tpl = $data['category']['tpl_show'];
		else
			$tpl = $data['category']['tpl_list'];
		$tpl = explode('.',$tpl);		
		$this->load->view($tpl[0], $data);
	}
	
	//图片列表页，框架文件
	function lists($cid,$pid,$page = 0){
		$data['zjgo'] = $this->Category_model->getCategoryListByPid(129);
		$data['culture'] = $this->Category_model->getCategoryListByPid(136);
		$data['news'] = $this->Category_model->getCategoryListByPid(137);
		$data['products'] = $this->Category_model->getCategoryListByPid(134);
		$data['major'] = $this->Category_model->getCategoryListByPid(142);
		$data['rencai'] = $this->Category_model->getCategoryListByPid(220);
	
		$data['getCategoryList'] = $this->Category_model->getCategoryListByPid($pid);
		$data['title'] = $this->Category_model->getCategoryById($pid);
		$data['category'] = $this->Category_model->getCategoryById($cid);
		if(empty($data['category']['pageSize']))
			$pageSize = 6;
		else
			$pageSize = $data['category']['pageSize'];		
		$sql_string = "select * from news where cid=".$cid." order by addtime desc";
		$query = $this->db->query($sql_string);
		$total = $query->num_rows();
		$config['total_rows'] = $total;	
		$config['per_page'] = $pageSize; 
		$all_page = intval($config['total_rows']/$config['per_page']);	
		if($page > $all_page)
			$page = $all_page;
		if($page < 0)
			$page = 0;
		$config['page'] = $page;
		$query = $this->db->query($sql_string .' limit '. $page*$config['per_page'] .','. $config['per_page']);
		$data['list'] =	$query->result_array();
		$data['pagecfg'] = $config;
		$tpl = $data['category']['tpl_list'];
		$tpl = explode('.',$tpl);		
		$this->load->view($tpl[0], $data);
	}	
	
	//新闻列表页，框架文件
	function listNew($cid,$pid,$page = 0){
		$data['zjgo'] = $this->Category_model->getCategoryListByPid(129);
		$data['culture'] = $this->Category_model->getCategoryListByPid(136);
		$data['news'] = $this->Category_model->getCategoryListByPid(137);
		$data['products'] = $this->Category_model->getCategoryListByPid(134);
		$data['major'] = $this->Category_model->getCategoryListByPid(142);
		$data['rencai'] = $this->Category_model->getCategoryListByPid(220);
	
		$data['getCategoryList'] = $this->Category_model->getCategoryListByPid($pid);
		$data['title'] = $this->Category_model->getCategoryById($pid);
		$data['category'] = $this->Category_model->getCategoryById($cid);
		if(empty($data['category']['pageSize']))
			$pageSize = 10;
		else
			$pageSize = $data['category']['pageSize'];
		$sql_string = "select * from news where cid=".$cid." order by addtime desc";
		$query = $this->db->query($sql_string);
		$total = $query->num_rows();
		$config['total_rows'] = $total;	
		$config['per_page'] = $pageSize; 
		$all_page = intval($config['total_rows']/$config['per_page']);	
		if($page > $all_page)
			$page = $all_page;
		if($page < 0)
			$page = 0;
		$config['page'] = $page;
		$query = $this->db->query($sql_string .' limit '. $page*$config['per_page'] .','. $config['per_page']);
		$data['list'] =	$query->result_array();
		$data['pagecfg'] = $config;
		$tpl = $data['category']['tpl_list'];
		$tpl = explode('.',$tpl);		
		$this->load->view($tpl[0], $data);
	}	
	
	//新闻内容页，框架文件
	function details($id,$cid){
		$data['zjgo'] = $this->Category_model->getCategoryListByPid(129);
		$data['culture'] = $this->Category_model->getCategoryListByPid(136);
		$data['news'] = $this->Category_model->getCategoryListByPid(137);
		$data['products'] = $this->Category_model->getCategoryListByPid(134);
		$data['major'] = $this->Category_model->getCategoryListByPid(142);
		$data['rencai'] = $this->Category_model->getCategoryListByPid(220);
		
		$data['category'] = $this->Category_model->getCategoryById($cid);
		$data['getCategoryList'] = $this->Category_model->getCategoryListByPid($data['category']['pid']);
		$data['title'] = $this->Category_model->getCategoryById($data['category']['pid']);
		
		$query = $this->db->query("select * from news where id=".$id);
		if ($query->num_rows() > 0){
		   $data['article'] = $query->row_array();
		}
		$tpl = $data['category']['tpl_show'];
		$tpl = explode('.',$tpl);		
		$this->load->view($tpl[0], $data);
	}
	
	//新闻首页，框架文件
	function news(){
		$data['zjgo'] = $this->Category_model->getCategoryListByPid(129);
		$data['culture'] = $this->Category_model->getCategoryListByPid(136);
		$data['news'] = $this->Category_model->getCategoryListByPid(137);
		$data['products'] = $this->Category_model->getCategoryListByPid(134);
		$data['major'] = $this->Category_model->getCategoryListByPid(142);
		$data['rencai'] = $this->Category_model->getCategoryListByPid(220);		
		$data['getCategoryList'] = $this->Category_model->getCategoryListByPid(137);
		$query = $this->db->query("select * from news where cid = 208 order by id desc limit 5");
		$list["gsdt"] = $query->result_array();
		$query = $this->db->query("select * from news where cid = 209 order by id desc limit 5");
		$list["hyzx"] = $query->result_array();
		$query = $this->db->query("select * from news where cid = 210 order by id desc limit 5");
		$list["qygg"] = $query->result_array();
		$query = $this->db->query("select * from news where cid = 211 order by id desc limit 5");
		$list["mtjj"] = $query->result_array();
		$data['list'] = $list;
		$this->load->view("html/show_newsIndex", $data);
	}	
	
	//搜索列表页，框架文件
	function search($page = 0,$sval="",$pid = 137){
		$sval = $_POST['sval'];
		$data['zjgo'] = $this->Category_model->getCategoryListByPid(129);
		$data['culture'] = $this->Category_model->getCategoryListByPid(136);
		$data['news'] = $this->Category_model->getCategoryListByPid($pid);
		$data['products'] = $this->Category_model->getCategoryListByPid(134);
		$data['major'] = $this->Category_model->getCategoryListByPid(142);
		$data['rencai'] = $this->Category_model->getCategoryListByPid(220);
		$data['sval'] = $sval;
		$data['getCategoryList'] = $data['news'];
		$data['title'] = $this->Category_model->getCategoryById($pid);
		
		if(!empty($sval)){
			$sql_string = "select a.* from news a inner join category b on a.cid = b.id where b.pid = 137 and (a.title like '%".$sval."%' or a.content like '%".$sval."%')";
			$query = $this->db->query($sql_string);
			$total = $query->num_rows();
			$config['total_rows'] = $total;	
			$config['per_page'] = 100; 
			$all_page = intval($config['total_rows']/$config['per_page']);	
			if($page > $all_page)
				$page = $all_page;
			if($page < 0)
				$page = 0;
			$config['page'] = $page;
			$query = $this->db->query($sql_string .' limit '. $page*$config['per_page'] .','. $config['per_page']);
			$data['list'] =	$query->result_array();
		}else{
			$config['total_rows'] = 0;	
		}
		$data['pagecfg'] = $config;
		$this->load->view("html/show_search", $data);
	}	
	
}

/* End of file show.php */