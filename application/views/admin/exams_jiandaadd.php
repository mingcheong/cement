<?php if (!defined('BASEPATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<base href="<?php echo base_url() ;?>"/>
<link href="<?php echo base_url();?>images/css.css" rel="stylesheet" type="text/css">
<link href="images/admin/skin.css" rel="stylesheet" type="text/css" />

<style type="text/css">
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
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/admin/mail_leftbg.gif"><img src="images/admin/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/admin/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31"><div class="titlebt">练习考试</div></td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/admin/mail_rightbg.gif"><img src="images/admin/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/admin/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
  
     <table width="100%" height="113"  border="0" align="center" cellpadding="3" cellspacing="1" class="table_form">
<form action="<?php echo site_url('admin/exams/addsave');?>" name="example" id="example" method="post" onSubmit="return chechFrom();">
	<input type="hidden" name="id" value="<?php echo @$article['id'];?>">
    <input type="hidden" name="cid" value="<?php echo @$article['cid'];?>">
	<tr >
	  <th height="30" colspan="2" align="left" >&nbsp;<?php echo $actName;?><?php echo $catename;?></th>
    </tr>
	<tr >
		<td width="42" align="right" >题目：</td>
	  <td width="595" height="26" align="left" >
			<style>

			form {
				margin: 0;
			}
			textarea {
				display: block;
			}
		</style>
		<script charset="utf-8" src="edit/kindeditor.js"></script>
		<script>
		
			KE.show({
				id : 'title',
				cssPath : './index.css',
				afterCreate : function(id) {
					KE.event.ctrl(document, 13, function() {
						KE.sync(id);
						document.forms['example'].submit();
					});
					KE.event.ctrl(KE.g[id].iframeDoc, 13, function() {
						KE.sync(id);
						document.forms['example'].submit();
					});
				}
			});
	function chechFrom(){   
 KE.sync('title');
  KE.sync('keyword');
}
		</script>

<textarea id="title" name="title" style=" width:950px;height:250px;visibility:hidden; "><?php echo @$article['title'];?></textarea>

          </td>
	</tr>
	<tr >
	  <td align="right" valign="top"  style="padding-top:6px">答案：</td>
	  <td height="26" align="left" >
      	<script>
		
			KE.show({
				id : 'keyword',
				cssPath : './index.css',
				afterCreate : function(id) {
					KE.event.ctrl(document, 13, function() {
						KE.sync(id);
						document.forms['example'].submit();
					});
					KE.event.ctrl(KE.g[id].iframeDoc, 13, function() {
						KE.sync(id);
						document.forms['example'].submit();
					});
				}
			});
		</script>

<textarea id="keyword" name="keyword" style=" width:950px;height:250px;visibility:hidden; "><?php echo @$article['keyword'];?></textarea>
         </td>
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
