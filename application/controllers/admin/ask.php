<?php
//������
class Ask extends HT_Controller
{
	function __construct(){
    	parent::__construct();		
		$this->load->model('Category_model');		
    }
	
	// Ĭ�� �б�ҳ
    function index($cid=0, $page=0){	
		$sql_string="SELECT * FROM guestbook WHERE cid = ".$cid ." and p_id=0";
		$query = $this->db->query($sql_string); // ��ѯ����Ҫ����ܼ�¼��
		$total = $query->num_rows();
		$this->load->library('pagination');
		$config['base_url'] = site_url('admin/ask/index/'.$cid);
		$config['total_rows'] = $total;		
		$config['per_page'] = '14'; 
		$config['uri_segment'] = 5;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		$query = $this->db->query($sql_string .' limit '. $page .','. $config['per_page']);
		$data['list'] =	$query->result_array();
		$data['cid']=$cid;
		$query = $this->db->query("SELECT * FROM category WHERE id = ".$cid );
		$cate =	$query->row_array();
		$data['catename']=$cate['name'];
        $this->load->view('admin/askList_template', $data);
    }
	function askContent($id){
		$sql_string="SELECT * FROM guestbook WHERE id = ".$id." and p_id=0";
		$query = $this->db->query($sql_string); // ��ѯ����Ҫ����ܼ�¼��
		$data['asktitle'] =	$query->row_array();
		$cid=$data['asktitle']['cid'];
		$data['cid']=$data['asktitle']['cid'];
		$query = $this->db->query("SELECT * FROM category WHERE id = ".$cid );
		$cate =	$query->row_array();
		$data['catename']=$cate['name'];
		
		$query = $this->db->query("SELECT a.*,b.* FROM guestbook as a,user as b WHERE a.user_id=b.userid and  a.p_id = ".$id );
		$data['list'] =	$query->result_array();
        $this->load->view('admin/askContent_template', $data);
	}
	// �����Ŀ
    public function add($cid){
		$data['actName'] = "���";
		$query = $this->db->query("SELECT * FROM category WHERE id = ".$cid );
		$cate =	$query->row_array();
		$data['catename']=$cate['name'];
		$data['article']=array(
			'cid'=>$cid
		);
		$this->load->view('admin/'.$cate['tpl_show'], $data);
	}
	
	// �޸�����
    public function edit($id){
		$data['actName'] = "�޸�����";
		$query = $this->db->query("select * from exam where id=".$id);
		$data['article'] = $query->row_array();
		$query = $this->db->query("SELECT * FROM category WHERE id = ".$data['article']['cid'] );
		$cate =	$query->row_array();
		$data['catename']=$cate['name'];				
		$this->load->view('admin/'.$cate['tpl_show'], $data);
	}
	
	// ��������  ��Ӻ��޸ĵı��涼������
    public function addsave(){
		$id = empty($_POST['id']) ? 0 : $_POST['id'];		
		
		$array_keys = array_keys($_POST);		// �Զ���ȡ�ύ�����ı�����ֵ
		foreach($array_keys as $r){
			$data[$r] = is_array($_POST[$r]) ? implode('|',$_POST[$r]) : $_POST[$r];	
		}		
		array_splice($data, -1, 2);	// ��������Ҫ
		if($id > 0){			
			$this->db->where('id', $id);
			$this->db->update('exam', $data); 
		}else{
			$this->db->insert('exam', $data); 
		}
		echo 
		redirect('admin/exams/examTitlelist/'.$_POST['cid']);
	}	
	
	
	// ɾ������ 
    public function delete($cid, $id="",$url) {	
		$query = $this->db->query("delete from guestbook where id in(".$id.")");		
		if($query){
			redirect('admin/ask/'.$url.'/'.$cid);			
		}else{
			show_error('ɾ����Ϣ���ִ�����');
		}
    } 
	
	// ת������ 
    public function move($newcid, $oldcid, $id="") {
        $query = $this->db->query("update news set cid=$newcid where id in(".$id.")");		
		if($query){
			redirect('admin/news/index/'.$oldcid);			
		}else{
			show_error('ת����Ϣ���ִ�����');
		}
    } 
}