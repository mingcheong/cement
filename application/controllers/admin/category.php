<?php
// 栏目类  ken 105167721@qq.com
class Category extends HT_Controller
{
	function __construct(){
    	parent::__construct();				
		$this->load->model('Category_model');		
    }
	
	// 默认 列表页
    function index(){				
		$data['getCategoryList'] = $this->Category_model->getCategoryList2();
		$this->load->view('admin/category', $data);
    }
	
	// 添加栏目
    function add($id=0){		
		$data['actName'] = "添加栏目";		
		$data['getCategorySelect'] = $this->Category_model->getCategorySelect($id);	
		$this->load->view('admin/category_add', $data);
	}
	
	// 保存栏目  添加和修改 都是这里保存
    function addsave(){
		$type = $this->input->post('type');
		if($type == 0){
			$display = 'title|pic|author|content|addtime';
		}else if($type == 1){
			$display = 'title|pic';
		}else if($type == 2){
			$display = 'content';
		}		

		$data = array(			   
               'pid' => $this->input->post('pid'),
			   'name' => $this->input->post('name'),
			   'seq' => $this->input->post('seq'),
               'description' => $this->input->post('description'),
			   'display' => $display,
			   'tpl_list' => $this->input->post('tpl_list'),
			   'tpl_show' => $this->input->post('tpl_show'),
			   'type' => $type,
			   'logo' => $this->input->post('logo'),
			   'isdis' => $this->input->post('isdis')
        	);
		if(!empty($_POST['id'])){
			$this->db->where('id', $_POST['id']);			
			$this->db->update('category', $data); 
		}else{
			$this->db->insert('category', $data);	
		}
		redirect('admin/category/index');
	}
	
	// 修改内容
    function edit($id=0){		
		$data['actName'] = "修改";
		$query = $this->db->query("select * from category where id=".$id);		
		$row = $query->row_array();		
		$data['article'] = $row;		
		$data['getCategorySelect'] = $this->Category_model->getCategorySelect($row['pid']);	
		$this->load->view('admin/category_add', $data);	
	}	
	
	// 删除数据 
    function delete($id=0) { 		
        $this->db->query("delete from category where id=".$id);
		redirect('admin/category/index');
    } 
	
	// 修改字段
    function filed($id=0){
		$data['id'] = $id;
		$query = $this->db->query("select * from category where id=".$id);	
		$row = $query->row_array();
		$data['display'] = explode("|", $row['display']);
		
		$str_filed = $row['fileds'];
		$str_filed = explode("|||",$str_filed);
		foreach($str_filed as $rs){
			$str_filed2[] =  explode("@@",$rs);
		}
		//print_r($str_filed2);
		if (is_array($str_filed2)){
			$data['str_filed2'] = $str_filed2;
		}else{
			$data['str_filed2'] = "";	
		}		
		$this->load->view('admin/category_filed', $data);
	}
	
	// 保存字段 
    function filedsave(){
		$str = "";
		for($i=0; $i<=9; $i++){
			$required = empty($_POST['required'.$i]) ? "" : $_POST['required'.$i];
			$str .= $_POST['name'.$i]."@@". $_POST['type'.$i]."@@". $_POST['title'.$i]."@@". $_POST['unit'.$i]."@@". $_POST['option'.$i]."@@". $_POST['index'.$i]."@@". $required ."@@". $_POST['width'.$i];
			if ($i!=9) $str .= "|||";
		}
		
		$data['fileds'] =  $str;
		$data['display'] =  is_array($_POST['display']) ? implode('|',$_POST['display']) : $_POST['display'];		
		$this->db->update('category', $data, array('id' => $_POST['id']));
		redirect('admin/category/index');
	}
}
