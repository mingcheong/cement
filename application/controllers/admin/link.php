<?php

// 友情链接 类  @author skyline
class Link extends HT_Controller
{
	
	function __construct(){
    	parent::HT_Controller();		
    }
	
	// 默认 列表页
    function index($cid=0, $firstrow=0){		
		$query = $this->db->query("select * from link order by seq");		
		$data['list'] = $query->result_array();			
        $this->load->view('admin/link_list', $data);		
    }
	
	// 添加内容
    public function add(){		
		$data['actName'] = "添加信息";		
		$this->load->view('admin/link_add', $data);
	}
	
	// 添加内容  保存
    public function addsave(){
		$data = array(			   
                'name'			=>$_POST ['name'],
				'url'			=>$_POST ['url'],
				'description'	=>$_POST ['description'],
				'logo'			=>$_POST ['logo'],
				'seq'			=>$_POST ['seq']  
        	);	
		if(!empty($_POST['id'])){
			$this->db->where('id', $_POST['id']);			
			$this->db->update('ken_link', $data); 
		}else{
			$this->db->insert('ken_link', $data);	
		}
		redirect('admin/link/index');
	}
	
	// 修改内容
    public function edit($id=""){		
		$data['actName'] = "修改";
		$query = $this->db->query("select * from link where id=".$id);		
		$row = $query->row_array();		
		$data['friendlink'] = $row;		
		$this->load->view('admin/link_add', $data);	
	}
	
	// 删除数据 
    function delete($id="") { 		
        $this->db->query("delete from link where id in(".$id.")");
		redirect('admin/link/index');
    } 
}