<?php
/**
 * 内容显示页 控制器
 * @author	skyline
 */
class Exams extends QT_Controller {
	
	function __construct(){
    	parent::__construct();		
			
    }

	function index(){		
		$query = $this->db->query("SELECT * FROM category WHERE pid = 150 order by id");
		$data['cate_list'] =	$query->result_array();
		$this->load->view('html/exam_list', $data);
	}
	
	function showList($cid){
		$query = $this->db->query("SELECT * FROM category WHERE id = ".$cid );
		$cate =	$query->row_array();
		
		$query = $this->db->query("SELECT * FROM exam WHERE cid = ".$cid);
		$data['showList'] =	$query->result_array();
		$this->load->view('html/'.$cate['tpl_list'], $data);
	}
	//随机考试
	function sjks(){
		$query = $this->db->query("SELECT * FROM exam WHERE cid = 169 ORDER BY RAND() limit 10   ");//单选
		$data['dx'] =	$query->result_array();
		$query = $this->db->query("SELECT * FROM exam WHERE cid = 170 ORDER BY RAND() limit 10 ");//不定选
		$data['bdx'] =	$query->result_array();
		$query = $this->db->query("SELECT * FROM exam WHERE cid = 171 ORDER BY RAND() limit 10 ");//判断
		$data['pd'] =	$query->result_array();
		$query = $this->db->query("SELECT * FROM exam WHERE cid = 172 ORDER BY RAND() limit 5 ");//简答题
		$data['jd'] =	$query->result_array();
		$query = $this->db->query("SELECT * FROM exam WHERE cid = 173 ORDER BY RAND() limit 2 ");//综合题
		$data['zh'] =	$query->result_array();
		$query = $this->db->query("SELECT * FROM exam WHERE cid = 174 ORDER BY RAND() limit 2 ");//分析题
		$data['fx'] =	$query->result_array();
		$this->load->view('html/sjks', $data);
	}
	//批试卷
	function pgsj(){
		//print_r($_POST);exit;
		$array_keys = array_keys($_POST);		// 自动获取提交过来的表单各项值
		foreach($array_keys as $r){
			$data[$r] = is_array($_POST[$r]) ? implode('',$_POST[$r]) : $_POST[$r];	
		}	
		$data=array_filter($data);
		$dxnum=$bdnum=$pdnum=0;
		$dxarr=$bdarr=$pdarr=$jdarr=$zharr=$fxarr=array();
		foreach($data  as $key=>$item){
				$check=$this->check($key);
				switch($check['cid']){
					 case '169':
							 if($item==$check['keyword']){
								 $dxnum++;
							 }else{
								 $check['mykey']=$item;
								 $dxarr[]=$check;
							 }
						 break;
					 case '170':
						  if($item==$check['keyword']){
								 $bdnum++;
							 }else{
								 $check['mykey']=$item;
								 $bdarr[]=$check;
							 }
						 break;
					 case '171':
					 $arr=explode('，',$check['keyword']);
					  if($item==$arr[0]){
								 $pdnum++;
							 }else{
								 $check['mykey']=$item;
								 $pdarr[]=$check;
							 }
						 break;
					 case '172':
					  $check['mykey']=$item;
					  $jdarr[]=$check;
					 break;
					 case '173':
					  $check['mykey']=$item;
					  $zharr[]=$check;
					 break;
					 case '174':
					  $check['mykey']=$item;
					  $fxarr[]=$check;
					 break;
				}
		}
		$data['dxnum']=$dxnum;
		$data['bdnum']=$bdnum;
		$data['pdnum']=$pdnum;
		$data['dxarr']=$dxarr;
		$data['bdarr']=$bdarr;
		$data['pdarr']=$pdarr;
		$data['jdarr']=$jdarr;
		$data['zharr']=$zharr;
		$data['fxarr']=$fxarr;
		$this->load->view('html/sjksend', $data);
	}
	//检查试题
	function check($id){
		$query = $this->db->query("SELECT * FROM exam WHERE id=".$id);//判断
	    $aa=$query->row_array();
		return $aa;
	}
}

/* End of file show.php */