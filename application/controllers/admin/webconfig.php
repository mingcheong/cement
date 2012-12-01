<?php

// 网站设置基本信息  ken 105167721@qq.com
class Webconfig extends HT_Controller
{
	
	function __construct(){
    	parent::HT_Controller();		
		$this->load->config('webconfig');		
    }
	
	// 默认页
    function index(){
		$data['webconfig'] = $this->config->item('webconfig');		
        $this->load->view('admin/webconfig_template', $data);	
    }
	
	// 保存修改
    function configsave(){		
		if(isset($_POST['name'])){
			$str = "array(
				'name'				=>	'".$_POST['name']."',
				'url'				=>	'".$_POST['url']."',
				'keywords'			=>	'".$_POST['keywords']."',
				'description'		=>	'".$_POST['description']."',
				'tel'				=>	'".$_POST['tel']."',
				'address'			=>	'".$_POST['address']."',
				'email'		        =>	'".$_POST['email']."',
				'icp'				=>	'".$_POST['icp']."',
				'copyright'			=>	'".$_POST['copyright']."');";
			$str = "<?php 
					\$config['webconfig']=".str_replace("\$", "\\$", $str)."";			
		}
		$this->load->helper('file');
		write_file('system/application/config/webconfig.php', $str);		
        redirect('admin/webconfig/index');
    }
}
