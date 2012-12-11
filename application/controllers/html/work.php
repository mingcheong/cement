<?php
/**
 * 问答显示页 控制器
 * @author	skyline
 */
class Work extends QT_Controller {
	
	function __construct(){
    	parent::__construct();
		
		/** 检查登陆 */		
		if( !isset($_SESSION['userid'])){		
		 redirect('html/index/index');
		}	
			
    }

	function index(){		
		$query = $this->db->query("SELECT * FROM guestbook WHERE cid = 145 and p_id=0 order by id");
		$data['ss_list'] =	$query->result_array();
		$query = $this->db->query("SELECT * FROM guestbook WHERE cid = 146 and p_id=0 order by id");
		$data['xs_list'] =	$query->result_array();
		$query = $this->db->query("SELECT * FROM guestbook WHERE cid = 147 and p_id=0 order by id");
		$data['zy_list'] =	$query->result_array();
		$this->load->view('html/ask', $data);
	}
	//添加问题
	function add(){
		  $config['upload_path'] = './uploads/work';
		  $config['allowed_types'] = 'rar|zip|gif|jpg';
		  $config['file_name'] = time();
		  $this->load->library('upload', $config);
		 
		  if ( ! $this->upload->do_upload()){
		   $error = array('error' => $this->upload->display_errors());
		  } 
		  else{
		   $upfile = $this->upload->data();
		  }
		$id=empty($_POST['id']) ? 0 : $_POST['id'];
		$data=array(
			'id' =>$id ,	
			'cid'=>$_POST['cid'],
			'content'=>$upfile['orig_name'],
			'user_id'=>$_SESSION['userid'],
			'p_id'=>$_POST['p_id'],
			'ip'=>getenv('REMOTE_ADDR'),
			'add_date'=>date('Y-m-d H:i:s')
		);
		if($id > 0){			
			$this->db->where('id', $id);
			$this->db->update('guestbook', $data); 
		}else{
			$this->db->insert('guestbook', $data); 
		}
		  redirect('/html/ask', 'refresh');
	}
	
}

/* End of file show.php */