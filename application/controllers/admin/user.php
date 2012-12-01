<?php

// 帐号管理 类  @author skyline
class User extends HT_Controller
{
	
	function __construct(){
    	parent::__construct();		
    }
	
	// 默认 列表页
    function index($page=0){
		$query = $this->db->query("select userid,limits from user where userid=".$_SESSION['userid']);
		$user = $query->row_array();
		if ($user['limits'] == 1) {
			$sql = "select * from user";
		} else {
			$sql = "select * from user where userid=".$user['userid'];
		}	
		$query = $this->db->query($sql); // 查询满足要求的总记录数
		$total = $query->num_rows();
		
		$this->load->library('pagination');
		$config['base_url'] = site_url('admin/user/index/');
		$config['total_rows'] = $total;		
		$config['per_page'] = '10'; 
		$config['first_link'] = '首页';
		$config['last_link'] = '尾页';		
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>'; 		
		$config['uri_segment'] = 5;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();		
		
		$query = $this->db->query($sql .' limit '. $page .','. $config['per_page']);
		$data['list'] = $query->result_array();			
        $this->load->view('admin/user_list', $data);		
    }
   
	// 添加内容
    public function add(){		
		$data['actName'] = "添加帐号";		
		$query = $this->db->query( "SELECT * FROM category WHERE pid = 0 order by seq,id" );
		$data['category_arr'] = $query->result_array();				
		$this->load->view('admin/user_add', $data);
	}
	
	// 添加内容  保存
    public function addsave(){
		$data = array(			   
                'username'			=> $_POST['username'],
				'password'			=> md5($_POST['password']),				
				'limits'			=> $_POST['limits'],
				'authority'			=> $_POST['authority'],
				'chkIds'			=> $_POST['chkIds']  
        	);	
		if(!empty($_POST['id'])){
			if(empty($_POST['password'])){
				$data = array(			   
						'username'			=> $_POST['username'],
						'limits'			=> $_POST['limits'],
						'authority'			=> $_POST['authority'],
						'chkIds'			=> $_POST['chkIds']  
					);				
			}
			
			$this->db->where('userid', $_POST['id']);			
			$this->db->update('user', $data); 
		}else{
			if(empty($_POST['password'])){
				$data = array(			   
						'username'			=> $_POST['username'],
						'limits'			=> $_POST['limits'],
						'password'			=> md5('111111'),	
						'authority'			=> $_POST['authority'],
						'chkIds'			=> $_POST['chkIds']  
					);				
			}		
			$this->db->insert('user', $data);
		}
		redirect('admin/user/index');
	}
	
	// 修改内容
    public function edit($id=0){		
		$query = $this->db->query("select * from user where userid=".$id);		
		$row = $query->row_array();		
		$data['user'] = $row;		
		
		$query = $this->db->query( "SELECT * FROM category WHERE pid = 0 order by seq,id" );
		$data['category_arr'] = $query->result_array();		
		$this->load->view('admin/user_add', $data);	
	}
	
	// 删除数据 
    function delete($id=0) {	
        $this->db->query("delete from user where userid=".$id);
		redirect('admin/user/index');
    } 
}