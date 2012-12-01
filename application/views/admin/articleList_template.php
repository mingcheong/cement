<?php if (!defined('BASEPATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="<?php echo base_url();?>images/css.css" rel="stylesheet" type="text/css">
<script src="<?php echo base_url();?>js/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
function doAction(a,id,catid){
	ids = 0;
	if(a=='deleteAll'){
		if(confirm('请确认是否删除！')){		
			window.location.href = '<?php echo site_url();?>/admin/news/delete/'+catid+'/'+getCheckedIds('checkbox');		
		}		
	}
	if(a=='delete'){
		if(confirm('请确认是否删除！')){		
			window.location.href = '<?php echo site_url();?>/admin/news/delete/'+catid+'/'+id;		
		}
	}
	if(a=='moveAll'){
		cid = document.getElementById("selectCid").value;
		if(confirm('请确认是否转移！')){
			window.location.href = '<?php echo site_url();?>/admin/news/move/'+cid+'/'+catid+'/'+getCheckedIds('checkbox');		
		}
	}
}
//全选/取消
function checkAll(o,checkBoxName){
	var oc = document.getElementsByName(checkBoxName);
	for(var i=0; i<oc.length; i++) {
		if(o.checked){
			oc[i].checked=true;	
		}else{
			oc[i].checked=false;	
		}
	}
	checkDeleteStatus(checkBoxName)
}
//检查有选择的项，如果有删除按钮可操作
function checkDeleteStatus(checkBoxName){
	var oc = document.getElementsByName(checkBoxName);
	for(var i=0; i<oc.length; i++) {
		if(oc[i].checked){
			document.getElementById('DeleteCheckboxButton').disabled=false;
			document.getElementById('updateCategoryButton').disabled=false;
			document.getElementById('selectCid').disabled=false;
			
			return;
		}
	}
	document.getElementById('DeleteCheckboxButton').disabled=true;
	document.getElementById('updateCategoryButton').disabled=true;
	document.getElementById('selectCid').disabled=true;
}

//获取所有被选中项的ID组成字符串
function getCheckedIds(checkBoxName){
	var oc = document.getElementsByName(checkBoxName);
	var CheckedIds = "";
	for(var i=0; i<oc.length; i++) {
		if(oc[i].checked){
			if(CheckedIds==''){
				CheckedIds = oc[i].value;	
			}else{
				CheckedIds +=","+oc[i].value;	
			}
			
		}
	}
	return CheckedIds;
}
</script>
<base href="<?php echo base_url() ;?>"/>
<link href="css/skin.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #EEF2FB;
}
-->
</style>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/admin/mail_leftbg.gif"><img src="images/admin/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/admin/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31"><div class="titlebt">栏目管理</div></td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/admin/mail_rightbg.gif"><img src="images/admin/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/admin/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0" class="table_head">
      <tr>
        <td  width="69%" height="31" > &nbsp; <?php echo $catname;?>管理
          <select name="select" onchange="window.location.href='<?php echo site_url();?>/admin/news/index/'+this.value">            
            <?php echo ($getCategorySelect); ?>
          </select>
          <input type="button" value="添加内容" onclick="location.href='<?php echo site_url();?>/admin/news/add/<?php echo ($cid); ?>'" class="submit" /></td>
        <td width="31%" align="right">

          <table  border="0" cellpadding="0" cellspacing="0" class="serach">
          <form method="post" action="<?php echo site_url('admin/news/index/'.$cid);?>">
            <tr>
              <td width="50" height="30" align="right"> 搜索：
              </td>
              <td width="140" align="left" style="padding-left:2px"><input title="输入文章标题或文章内容" name="keywords" type="text" value="<?php echo (@$keywords);?>" onclick="this.select();" /></td>
              <td width="100" align="left"> &nbsp;
                <input  type="submit" name="Submit5"  value=" 搜索 "/></td>
            </tr>
            </form>
          </table>
        </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="table_form">
      <tr>
        <th width="40">&nbsp;</th>
        <th height="26">文章标题</th>
        <th width="150" height="26">发布时间</th>
        <th width="80">所属栏目</th>
        <th width="80" height="26">操作</th>
      </tr>
      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?>
      <tr onmouseover="this.className='relow'" onmouseout="this.className='row'" class="row">
        <td align="center"><input type="checkbox" name="checkbox"	value="<?php echo ($vo["id"]); ?>" onclick="checkDeleteStatus('checkbox')" /></td>
        <td height="26" align="left">
        <a href="<?php echo site_url('html/show/index/'.$vo['id']);?>" target="_blank"> <?php echo ($vo["title"]); ?></a>&nbsp;</td>
        <td height="26" align="center"><?php echo ($vo["addtime"]); ?> &nbsp;</td>
        <td align="center"><?php echo ($vo["cname"]); ?> &nbsp;</td>
        <td height="26" align="center">
       		<a href="<?php echo site_url('admin/news/edit/'.$vo['cid'].'/'.$vo['id']);?>"> 修改</a>  | 
        	<a href="javascript:doAction('delete',<?php echo ($vo["id"])?>,<?php echo ($vo["cid"])?>)"> 删除</a> 
        </td>
      </tr>
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0" class="table_footer">
      <tr>
        <td height="29" align="left" >
           &nbsp;
           <input type="checkbox" name="checkbox11"
			value="checkbox" onclick="checkAll(this,'checkbox')" />
          全选&nbsp;
          <input type="button" id="DeleteCheckboxButton" value="批量删除" disabled="disabled" onclick="doAction('deleteAll',<?php echo @$vo["id"]?>,<?php echo @$vo["cid"]?>)" />
          &nbsp;&nbsp; 转移到
          <select id="selectCid" name="selectCid" disabled="disabled">
            <?php echo ($getCategorySelectAll); ?>
          </select>
          <input id="updateCategoryButton" type="button" value="批量转移" disabled="disabled" onclick="doAction('moveAll',<?php echo @$vo["id"]?>,<?php echo @$vo["cid"]?>)" />        
          <div style="float: right; padding-right: 50px"> <?php echo $pagination; ?></div></td>
      </tr>
    </table></td>
  </tr>
</table>
    </td>
    <td background="images/admin/mail_rightbg.gif">&nbsp;</td>
  </tr>
  <tr>
    <td valign="bottom" background="images/admin/mail_leftbg.gif"><img src="images/admin/buttom_left2.gif" width="17" height="17" /></td>
    <td background="images/admin/buttom_bgs.gif"><img src="images/admin/buttom_bgs.gif" width="17" height="17"></td>
    <td valign="bottom" background="images/admin/mail_rightbg.gif"><img src="images/admin/buttom_right2.gif" width="16" height="17" /></td>
  </tr>
</table>
</body>
