<?php
/**
 * 问答显示页 控制器
 * @author	skyline
 */
class Ask extends QT_Controller {
	
	function __construct(){
    	parent::__construct();	
		/** 检查登陆 */		
		if( !isset($_SESSION['userid'])){		
		 redirect('admin/login/stu_login');
		}	
		$this->load->helper(array('form', 'url'));
			
    }

	function index(){		
		$query = $this->db->query("SELECT * FROM guestbook WHERE cid = 145 and p_id=0  order by add_date desc limit 0,5 ");
		$data['ss_list'] =	$query->result_array();
		$query = $this->db->query("SELECT * FROM guestbook WHERE cid = 146 and p_id=0 order by add_date desc limit 0,5 ");
		$data['xs_list'] =	$query->result_array();
		$query = $this->db->query("SELECT * FROM guestbook WHERE cid = 147 and p_id=0 order by add_date desc limit 0,5 ");
		$data['zy_list'] =	$query->result_array();
		$this->load->view('html/ask', $data);
	}
	function askList($cid, $page=0){
		$sql_string="SELECT * FROM guestbook WHERE  p_id=0 and cid = ".$cid." order by add_date desc ";
		$query = $this->db->query($sql_string); // 查询满足要求的总记录数
		$total = $query->num_rows();
		$this->load->library('pagination');
		$config['base_url'] = site_url('html/ask/askList/'.$cid);
		$config['total_rows'] = $total;		
		$config['per_page'] = '15'; 
		$config['uri_segment'] = 5;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		$query = $this->db->query($sql_string .' limit '. $page .','. $config['per_page']);
		$data['list'] =	$query->result_array();
		$data['cid']=$cid;
		$query = $this->db->query("SELECT * FROM category WHERE id = ".$cid );
		$cate =	$query->row_array();
		$data['catename']=$cate['name'];
        $this->load->view('html/askList_template', $data);
	
	}
	//添加问题
	function add(){
		$id=empty($_POST['id']) ? 0 : $_POST['id'];
		$data=array(
			'id' =>$id ,	
			'cid'=>$_POST['cid'],
			'content'=>$_POST['content'],
			
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