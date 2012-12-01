<?php
/**
 * 栏目 模型
 * @author skyline
 *
 */
class Category_model extends CI_Model {

	function __construct(){
    	parent::__construct();	
		
    }
     /**
	 * 获取某个栏目信息
	 * @param $id 栏目ID
	 */
	function getCategoryById($id){	
		$query = $this->db->query("select * from category where id=".$id);
		return $query->row_array();
	}
	//获取某个id的子栏目信息
	function getCategory_child($id){
		$query = $this->db->query("select * from category where pid=".$id." order by id");
		return $query->result_array();
	}
	
	/**
	 * 获取某个栏目的一级父栏目ID
	 * @param $id 栏目ID
	 * @return int
	 */
	function get_pid($id){	
		$query = $this->db->query("select * from category where id=".$id);
		$row = $query->row_array();
		if($row['pid']==0)
			$pid = $id;
		else
			$pid = $this->get_pid($row['pid']);
			
		return $pid;
	}
	
	/**
	 * 获取某个父栏目的所有子栏目
	 * @param $pid 父栏目ID
	 */
	function getCategoryListByPid($pid=0){

		$query = $this->db->query("select * from category where pid=".$pid." and isdis!=0 order by seq");
		return $query->result_array();
	}
	
	/**
	 * 获取指定栏目列表
	 * @param $ids 栏目ID集合 例如：1,2,3
	 */
	function getCategoryList($ids=""){	
		
		$query = $this->db->query("select * from category where id in(".$ids.")");
		return $query->result_array();
	}
	
	/**
	 * 获取所有子节点集合
	 * @param $pid 栏目ID
	 * @return str 子节点ID集合 如 1,2,3
	 */
	function getCategoryChildIds($pid=0){		
		$str = "";		//节点集合
		$strChild = ""; //子节点集合
		$query = $this->db->query("select id from category where pid=".$pid);
		$list = $query->result_array();
		foreach($list as $ls){
			$strChild = $this->getCategoryChildIds($ls['id']);		
			$str .= $str==""?$ls['id']:",".$ls['id'];		
			if ($strChild) {
				$str .= $str==""?$strChild:",".$strChild;
			}
		}
		if ($str!="") $str .= ",".$pid;
		return $str;
	}
	
	/**
	 * 栏目分类下拉框
	 * @param int $select_id   选中的id
	 * @param int $id          显示的该id的子id
	 * @param int $level       显示层数
	 */
	function getCategorySelect($select_id=0, $id=0, $level=0) {		
		$strs=""; $level_nbsp="";
		$query = $this->db->query( "select * from category where pid = " . $id . " and type != 2 order by seq" );
		
		if ($query->num_rows()==0 && $this->get_pid($id)==$id && $select_id != 0) {  //  顶级栏目 并且没有下级栏目 	
			$array = $this->getCategoryById($id);
			$strs .=  "<option value=\"".$id."\">".$array['name']."</option>\n";
			return $strs;
		}else{			
			for($lev = 0; $lev < $level * 2 - 1; $lev++) {
				$level_nbsp .= "　";
			}
			if ($level++) $level_nbsp .= "┝";
			foreach ( $query->result_array() as $category ) {
				$id = $category['id'];
				$name = $category['name'];
				$selected = $select_id==$id?'selected':'';
				$strs .=  "<option value=\"".$id."\" ".$selected.">".$level_nbsp." ".$name."</option>\n";	
				$strs .=  $this->getCategorySelect($select_id, $id, $level);
			}
			return $strs;
		}
	}

	
	/**
	 * 获取栏目列表信息
	 * @param int $pid
	 * @param int $id
	 * @return str
	 */
	function getCategoryList2($id = 0, $level = 0) {		
		$strs="";
		$level_nbsp="";
		$query = $this->db->query( "SELECT * FROM category WHERE pid = " . $id . " order by seq,id" );
		$category_arr = $query->result_array();
		for($lev = 0; $lev < $level * 2 - 1; $lev ++) {
			$level_nbsp .= "　";
		}
		$level++;
		$level_nbsp .= "<font style=\"font-size:12px;font-family:wingdings;\">".$level."</font>";
		foreach ( $category_arr as $category ) {
			$id = $category ['id'];
			$name = $category ['name'];
			if($category['pid'] == 0){ 
				$name = "<font style='color:black'>".$name."</font>";
			}else{
				$name = "<font style='color:blue'>".$name."</font>";
			}
			$strs .= "<tr onMouseOver=\"this.className='relow'\" onMouseOut=\"this.className='row'\" class=\"row\">
				<td height=\"26\" align=\"left\">&nbsp;&nbsp;" . $level_nbsp . " &nbsp; " . $name . "</td>
				<td height=\"26\" align=\"center\" >" . $id . "&nbsp;</td>		
				<td height=\"26\" align=\"center\" >" . $this->getArticleNumOfCategory ( $id ) . "&nbsp;</td>
				<td height=\"26\" align=\"center\">" . $category ['seq'] . "&nbsp;</td>";
				switch ($category['type']){
					case 0:
						$strs .="<td height=\"26\" align=\"center\">新闻&nbsp;</td>";
						break;
					case 1:
						$strs .="<td height=\"26\" align=\"center\">图片&nbsp;</td>";
						break;
					case 2:
						$strs .="<td height=\"26\" align=\"center\">文章&nbsp;</td>";
						break;
				}
			$strs .="<td height=\"26\" align=\"center\"><a href='".site_url()."/admin/category/filed/" . $id . "'>字段管理</a> |&nbsp;	";
			$strs .= "<a href='".site_url()."/admin/category/edit/" . $id . "'>修改</a> |&nbsp;		
				<a href=\"javascript:doAction('delete'," . $id . ")\">删除</a></td></tr> ";
			$strs .= $this->getCategoryList2($id, $level);
		}
		return $strs;
	}
/**
	 * 获取栏目列表信息（显示在后台left）
	 * @param int $pid
	 * @param int $id
	 * @return str
	 */
	function getCategoryList3($id = 0, $level = 0,$authority) {		
		$strs="";
		$level_nbsp="";
		$query = $this->db->query( "SELECT * FROM category WHERE pid = " . $id . " and id in(".$authority.") order by seq,id" );
		$category_arr = $query->result_array();
		for($lev = 0; $lev < $level * 2 - 1; $lev ++) {
			$level_nbsp .= "　";
		}
		$level++;
		$level_nbsp .= "<font style=\"font-size:12px;font-family:wingdings\">".$level."</font>";
		foreach ( $category_arr as $category ) {
			$id = $category ['id'];
			$name = $category ['name'];
			if(empty($category['tpl_admin'])){
				if($category['type'] == 2){
					$url = "index.php/admin/news/modify/$id";
				}else{
					$url = "index.php/admin/news/index/$id";
				}
			}else{
				$url = "index.php/admin/resume/index";
			}
			
			if($category['pid'] == 0){  // 一级栏目才显示字段管理
				if($category['type'] != 2)
					$url = "javascript:void(0)";
				$strs.=" <h1 class=\"type\"><a href=\"".$url."\" target=\"main\">$name</a></h1>
				  <div class=\"content\">
					<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
					  <tr>
						<td><img src=\"images/admin/menu_topline.gif\" width=\"182\" height=\"5\" /></td>
					  </tr>
					</table>
					";
			}else{
				$strs .= " <ul class=\"MM\">
						  <li><a href=\"".$url."\" target=\"main\">$name</a></li>
						</ul>";	
			}
			
			$strs .= $this->getCategoryList3($id, $level,$authority);
			if($category['pid'] == 0){ 
			$strs.="</div>";
			}
		}
		return $strs;
	}
	
	/**
	 * 获取指定栏目的总数
	 * @param int $id
	 * @return int
	 */
	function getArticleNumOfCategory($id) {		
		$query = $this->db->query("SELECT id FROM news WHERE cid=".$id );
		return $query->num_rows();
	}
	function getArticle($cid){
		$query=$this->db->query("select * from news where cid=".$cid." order by id");
		return $query->result_array();
	}
	function getContent($id){
		$query=$this->db->query("select * from news where id=".$id);
		return $query->row_array();
	}
	function getcidContent($cid,$id){
		$query=$this->db->query("select * from news where cid=$cid and id=".$id);
		return $query->row_array();
	}
}