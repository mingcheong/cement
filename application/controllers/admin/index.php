<?php

class Index extends HT_Controller {

	function __construct(){
		parent::__construct();	
		$this->load->model('Category_model');	
	}
	
    //管理后台首页，框架文件
	function index(){
		$this->load->view('admin/index');
	}
	//管理页面顶部框架文件
	function top(){
		$this->load->view('admin/top');
	}

	//管理页面左边框架文件
	function left(){
		$query = $this->db->query("select * from user where userid=".$_SESSION['userid']);
		$user = $query->row_array();
		$data['user'] = $user;
		$data['getCategoryList'] = $this->Category_model->getCategoryList3(0,0,$user['authority']);
		$this->load->view('admin/left',$data);
	}
	//管理页面主框架文件
	function main(){
		$this->load->view('admin/main');
	}
	
	
}