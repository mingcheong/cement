<?php

// 留言板类 skyline
class Guestbook extends HT_Controller
{	
	function __construct(){
    	parent::HT_Controller();		
    }
	
	// 默认 列表页
    function index($firstrow=0){
		$sql_string = "select * from guestbook order by id desc";
		$query = $this->db->query($sql_string);
		
		$this->load->library('pagination');
		$config['base_url'] = site_url('admin/guestbook/index');
		$config['total_rows'] = $total;
		$config['per_page'] = $query->num_rows();
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();	
		
		$query = $this->db->query($sql_string .' limit '. $firstrow .','. $config['per_page']);		
		$data['lists'] =	$query->result_array();			
        $this->load->view('admin/guestbook', $data);		
    }

	
	
	// 删除数据 
    public function delete($id="") {		
		$query = $this->db->query("delete from guestbook where id in(".$id.")");		
		if($query){
			redirect('admin/guestbook/index');			
		}else{
			show_error('删除信息出现错误了');
		}
    } 
	
	// 修改验证 是否通过验证
    public function validate($id, $v){	
		$query = $this->db->query("update guestbook set validate=$v where id=$id");				
		if($query){
			redirect('admin/guestbook/index');			
		}else{
			show_error('验证信息出现错误了');
		}
	}
	
	// 回复留言
    public function reply(){
		$id = $_POST['id'];
		$reply = $_POST['reply'];
		$reply_date = date('Y-m-d H:i:s',time());
		$query = $this->db->query("update guestbook set reply='$reply',reply_date='$reply_date' where id=$id");				
		if($query){
			redirect('admin/guestbook/index');			
		}else{
			show_error('验证信息出现错误了');
		}
	}
}
