<?php

/**
 * 内容首页 控制器
 * @author	skyline
 */
class Index extends QT_Controller {
	
	function __construct(){
    	parent::__construct();
		$this->load->model('Category_model');
    	$this->load->helper('url');	
    }

	function index($pages=0){
		if (isset($_GET["course"])){
			if(isset($_SESSION["userid"])) {
				session_destroy();
			}	
		}

		$data['zjgo'] = $this->Category_model->getCategoryListByPid(129);
		$data['culture'] = $this->Category_model->getCategoryListByPid(136);
		$data['news'] = $this->Category_model->getCategoryListByPid(137);
		$data['products'] = $this->Category_model->getCategoryListByPid(134);
		$data['major'] = $this->Category_model->getCategoryListByPid(142);
		$data['rencai'] = $this->Category_model->getCategoryListByPid(220);
		
		$query = $this->db->query("select * from news where cid = 210 order by id desc limit 5");		
		$list["qygg"] = $query->result_array();
		$query = $this->db->query("select * from news where cid = 208 order by id desc limit 5");
		$list["gsdt"] = $query->result_array();		
		$query = $this->db->query("select * from news where cid = 206 order by id desc limit 5");
		$list["ldgh"] = $query->result_array();			
		$query = $this->db->query("select * from news where cid = 230 order by id desc limit 5");
		$list["qyyw"] = $query->result_array();		
		$query = $this->db->query("select * from news where cid = 230 and db0 = '是'");
		$list["qyyw_td"] = $query->row_array();				
		$query = $this->db->query("select * from news where cid = 217 order by id desc");
		$list["zdgczs"] = $query->result_array();
		$data['list'] = $list;
		
		$this->load->view('html/index',$data);		
	}	
	//单机版
	function djb(){
		$this->load->view('html/djb');		
	}
	//pdf直接打开
	function pdf($name){
		$data['urlname']=$name;
		$this->load->view('html/pdf',$data);	 
	}
	//友情链接
	function link(){
		$query = $this->db->query('SELECT * FROM news where cid=189 order by id desc' );
		$data['link'] = $query->result_array();	
		$this->load->view('html/link',$data);	
	}
	//视频动画
	function spdh(){
		$query = $this->db->query('SELECT * FROM news where cid=191 order by db0 ' );//视频
		$data['sp'] = $query->result_array();	
		$query = $this->db->query('SELECT * FROM news where cid=192 order by db0 ' );//动画
		$data['dh'] = $query->result_array();	
		$query = $this->db->query('SELECT * FROM news where cid=194 order by db0 ' );//动画下载
		$data['dhx'] = $query->result_array();	
		$this->load->view('html/spdh',$data);		
	}
	//视频动画显示
	function spdhshow($id){
		$query = $this->db->query('SELECT * FROM news where id='.$id );	//  课程简介	
		$data['show'] = $query->row_array();
		$this->load->view('html/show_flash',$data);		
	}
}

