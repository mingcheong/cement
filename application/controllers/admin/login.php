<?php

// 帐号登入 类  @author tangjian
class Login extends QT_Controller
{
	
	function __construct(){
    	parent::__construct();		
    }
	
	// 用户登入
    function index(){
		//echo $_SESSION['userid'];
		if(isset($_SESSION['userid'])){
			redirect('admin/index');
		}else{
		$this->load->view('admin/login_template');
		}
    }
 
	//用户登出
	function  loginout(){
	  if(isset($_SESSION["userid"])) {
			session_destroy();
		}	
		echo "<script language='javascript'>";
		echo "location='";
		echo base_url();
		echo "';</script>"; 
	}
	//互动学习登入
	function stu_login(){
		if(isset($_SESSION['userid'])){
			redirect('html/ask');
		}else{
			$this->load->view('html/stu_login_template');
		}
	}
	//用户登入检查
	function check_login(){
	    header('Content-Type: text/html; charset=utf-8');
		$username = $this->input->post('username', TRUE);
		$password = $this->input->post('password', TRUE);
		
		$backurl=$_SERVER['HTTP_REFERER'];
		$username = mysql_escape_string($username);
		$password = mysql_escape_string ($password);			
		
		if (empty($username)||empty($password)){
			exit("<script>alert('用户名或密码不能为空！');window.history.go(-1)</script>");
		}
		$query = $this->db->query("select userid,username,limits from user where username = '".$username."' and password='".md5 ( $password ) ."'");
		if ($query->num_rows() > 0) {
			$user_row = $query->row();
			$_SESSION['userid'] = $user_row->userid;
			$_SESSION['username'] = $user_row->username;
			$_SESSION['limits'] = 1;
					
			redirect($backurl);
		}else{
			exit("<script>alert('用户名或密码不正确！');window.history.go(-1)</script>");
		}
		
	}
	// 添加内容
    public function add(){		
		$data['actName'] = "添加帐号";		
		$this->load->view('admin/user_add', $data);
	}
	
 
}