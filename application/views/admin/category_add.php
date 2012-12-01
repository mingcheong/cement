
<base href="<?php echo base_url() ;?>"/>
<link href="images/admin/skin.css" rel="stylesheet" type="text/css" />
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
<script language="javascript" type="text/javascript">
function setTplVal(val){
	switch(parseInt(val)){
		case 0 : 
			document.getElementById('tpl_show').value = "html/show_news.php"; 
			document.getElementById('tpl_list').value = "html/show_listNews.php"; 
		break;
		case 1 : 
			document.getElementById('tpl_show').value = "";
			document.getElementById('tpl_list').value = "html/show_list.php"; 
		break;
		case 2 : 
			document.getElementById('tpl_show').value = "html/show_paper.php"; 
			document.getElementById('tpl_list').value = ""; 
		break;
	}
}
</script>
<body <?php if(empty($article['id'])){?> onload="setTplVal(document.getElementById('type').value);"<?php }?>>
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
  
     <table  border="0" align="center" cellpadding="3" cellspacing="1" class="table_form">
<form action="<?php echo site_url('admin/category/addsave');?>" method="post" >
	<input type="hidden" name="id" value="<?php echo @$article['id'];?>">
	<tr >
	  <th height="30" colspan="2" align="left" >&nbsp;<?php echo $actName;?>栏目</th>
    </tr>
	<tr >
	  <td  align="right" >父栏目：</td>
	  <td height="26" align="left" >
      <select name="pid" style="font-size:12px">
      	<option value="0">--顶层栏目--</option>
      	<?php echo $getCategorySelect; ?>
      </select>      </td>
    </tr>
	<tr >
		<td align="right" >栏目名称：</td>
	  <td height="26" align="left" ><input name="name" type="text" value="<?php echo @$article['name'];?>" style="width: 250px"></td>
	</tr>
	<tr >
		<td align="right" >栏目类别：</td>
		<td height="26" align="left" >
			<select name="type" id="type" style="width:120px" onchange="setTplVal(this.value)">
				<option value="0" <?php if(@$article['type'] == 0) echo "selected='selected'"?>>新闻</option>
				<option value="1" <?php if(@$article['type'] == 1) echo "selected='selected'"?>>图片</option>
				<option value="2" <?php if(@$article['type'] == 2) echo "selected='selected'"?>>文章</option>
			</select>
		</td>
	</tr>	
	<tr >
		<td align="right" >排序：</td>
	  <td height="26" align="left" ><input name="seq" type="text" id="seq" style="width: 50px" value="<?php if(@$article['id']) 
	  			echo @$article['seq'];
	  		else
				echo 10;
	  ?>"></td>
	</tr>
	<tr >
		<td align="right" >前台显示：</td>
		<td height="26" align="left" >
			<select name="isdis" id="isdis" style="width:80px">
				<option value="1" <?php if(@$article['isdis'] == 1) echo "selected='selected'"?>>是</option>
				<option value="0" <?php if(@$article['isdis'] == 0) echo "selected='selected'"?>>否</option>
			</select>
		</td>
	</tr>		
	<tr >
	  <td align="right" valign="top"  style="padding-top:6px">栏目介绍：</td>
	  <td height="26" align="left" >
      <textarea id="description" name="description" cols="35" rows="4"><?php echo @$article['description'];?></textarea>      
      </td>
    </tr>
	<tr >
	  <td align="right" valign="top"  style="padding-top:6px">导航图：</td>
	  <td height="26" align="left" ><input name="logo" type="text" value="<?php echo @$article['logo'];?>" style="width: 150px"></td>
    </tr>	
	<tr >
	  <td align="right" valign="top"  style="padding-top:6px">列表页模版：</td>
	  <td height="26" align="left" ><input name="tpl_list" type="text" id="tpl_list" style="width: 150px" value="<?php echo @$article['tpl_list'];?>" />
	  &nbsp; 如：list_news.php</td>
    </tr>
	<tr >
	  <td align="right" valign="top"  style="padding-top:6px">内容页模版：</td>
	  <td height="26" align="left" ><input name="tpl_show" type="text" id="tpl_show" style="width: 150px" value="<?php echo @$article['tpl_show'];?>" />
	  &nbsp;如：show_news.php</td>
    </tr>
	<tr >
	  <td align="right" valign="top"  style="padding-top:6px">&nbsp;</td>
	  <td height="26" align="left" ><input	type="submit" name="button" id="button" value="确认"> 
        &nbsp; <input type="button" onClick="window.history.go(-1)" value="返回" /> </td>
    </tr>
</form>
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
