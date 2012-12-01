<?php
/**
 * 应聘简历 控制器
 * @author	mingcheong
 */
class Resume extends QT_Controller {
	
	function __construct(){
    	parent::__construct();		
		$this->load->model('Category_model');	
    }
	
    function index($cid=222, $page=0){
		$keywords = trim(@$_POST['keywords']);
		$data['keywords'] = $keywords;
		$data['cid'] = $cid;	
		
		$pid = $this->Category_model->get_pid($cid);
		$arr_cat = $this->Category_model->getCategoryById($cid);		
		$data['catname'] = empty($arr_cat['name']) ? '所有栏目' : $arr_cat['name'];
		$data['getCategorySelect'] = $this->Category_model->getCategorySelect($cid, $pid);	 // 显示指定的栏目
		$data['getCategorySelectAll'] = $this->Category_model->getCategorySelect();	 // 显示所有栏目
			
		$where = "where 1 ";
		if($cid){
			$cids = $this->Category_model->getCategoryChildIds($cid);
			$cids = ! empty($cids) ? $cids : $cid;			
			$where .= " and a.cid in(".$cids.")";
		}
		if($keywords){
			$where .= " and (a.title like '%".$keywords."%' or a.content like '%".$keywords."%')";
		}
		if($cid==190 || $cid==191 || $cid==192){
		 	$sql_string = "select a.*,b.name as cname from news a left outer join category b on a.cid=b.id ".$where." order by a.db0";
		}else{
			$sql_string = "select a.*,b.name as cname from news a left outer join category b on a.cid=b.id ".$where." order by a.id desc";
		}
				
		$query = $this->db->query($sql_string); // 查询满足要求的总记录数
		$total = $query->num_rows();
		
		$this->load->library('pagination');
		$config['base_url'] = site_url('admin/news/index/'.$cid);
		$config['total_rows'] = $total;		
		$config['per_page'] = '10'; 
		$config['uri_segment'] = 5;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		$query = $this->db->query($sql_string .' limit '. $page .','. $config['per_page']);
		$data['list'] =	$query->result_array();
		
		$category = $this->Category_model->getCategoryById($cid);	
		$tpl=explode('.',$category['tpl_admin']);
        $this->load->view($tpl[0], $data);
    }
	
	// 默认 列表页
    function lists($cid=0, $page=0){
		$keywords = trim(@$_POST['keywords']);
		$data['keywords'] = $keywords;	
		$data['cid'] = $cid;
		$sql_string = "select * from resume where newid = ".$cid;
				
				
		$where = "";
		if($keywords){
			$where .= " and (name like '%".$keywords."%')";
		}
		$sql_string.=$where;
		$query = $this->db->query($sql_string); // 查询满足要求的总记录数
		$total = $query->num_rows();
		
		$this->load->library('pagination');
		$config['base_url'] = site_url('admin/resume/lists/'.$cid);
		$config['total_rows'] = $total;		
		$config['per_page'] = '10'; 
		$config['uri_segment'] = 5;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		$query = $this->db->query($sql_string .' limit '. $page .','. $config['per_page']);
		$data['list'] =	$query->result_array();
        $this->load->view('admin/rencai_list', $data);
    }	
	
	function add(){
		$data = array(			   
               'newid' => $this->input->post('newid'),
			   'name' => $this->input->post('name'),
			   'sex' => $this->input->post('sex'),
               'idcard' => $this->input->post('idcard'),
			   'national' => $this->input->post('national'),
			   'birthday_year' => $this->input->post('birthday_year'),
			   'birthday_month' => $this->input->post('birthday_month'),
			   'bitthday_day' => $this->input->post('bitthday_day'),
			   'political' => $this->input->post('political'),
			   'height' => $this->input->post('height'),
			   'weight' => $this->input->post('weight'),
			   'place' => $this->input->post('place'),
			   'address' => $this->input->post('address'),
			   'cityplace' => $this->input->post('cityplace'),
			   'marital' => $this->input->post('marital'),
			   'workunit' => $this->input->post('worrkunit'),
			   'degree' => $this->input->post('degree'),
			   'school' => $this->input->post('school'),
			   'graduation_year' => $this->input->post('graduation_year'),
			   'graduation_month' => $this->input->post('graduation_month'),
			   'graduation_day' => $this->input->post('graduation_day'),
			   'mode' => $this->input->post('mode'),
			   'pro_name' => $this->input->post('pro_name'),
			   'pro_now' => $this->input->post('pro_now'),
			   'language' => $this->input->post('language'),
			   'computerlevel' => $this->input->post('computerlevel'),
			   'level' => $this->input->post('level'),
			   'learning' => $this->input->post('learning'),
			   'workexperience' => $this->input->post('workexperience'),
			   'jobobjective' => $this->input->post('jobobjective'),
			   'salary' => $this->input->post('salary'),
			   'salary_year' => $this->input->post('salary_year'),
			   'telephone' => $this->input->post('telephone'),
			   'phone' => $this->input->post('phone'),
			   'email' => $this->input->post('email'),
			   'postaddress' => $this->input->post('postaddress'),
			   'postcode' => $this->input->post('postcode')
        	);
		$this->db->insert('resume', $data);	
		$this->load->view('admin/resume_ok', $data);
	}
	
	public function view($id){
		$query = $this->db->query("select * from resume where id=".$id);
		if ($query->num_rows() > 0){
		   $data['resume'] = $query->row_array();
		}
		$this->load->view('admin/resume_view', $data);
	}
	
	// 删除数据 
    public function delete($id,$cid) {	
		$query = $this->db->query("delete from resume where id in(".$id.")");		
		if($query){
			redirect('admin/resume/lists/'.$cid);			
		}else{
			show_error('删除信息出现错误了');
		}
    } 	
	
}

/* End of file resume.php */