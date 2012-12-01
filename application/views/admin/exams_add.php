
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
  
     <table width="100%" height="269"  border="0" align="center" cellpadding="3" cellspacing="1" class="table_form">
<form action="<?php echo site_url('admin/exams/addsave');?>" method="post" >
	<input type="hidden" name="id" value="<?php echo @$article['id'];?>">
    <input type="hidden" name="cid" value="<?php echo @$article['cid'];?>">
	<tr >
	  <th height="30" colspan="2" align="left" >&nbsp;<?php echo $actName;?><?php echo $catename;?></th>
    </tr>
	<tr >
		<td width="42" align="right" >题目：</td>
	  <td width="595" height="26" align="left" ><input name="title" type="text" value="<?php echo @$article['title'];?>" style="width: 500px"></td>
	</tr>
	<tr >
		<td align="right" >选项：</td>
	  <td height="26" align="left" ><textarea id="description" name="description" cols="70" rows="7"><?php echo @$article['description'];?></textarea></td>
	</tr>
	<tr >
	  <td align="right" valign="top"  style="padding-top:6px">答案：</td>
	  <td height="26" align="left" >
      <textarea id="keyword" name="keyword" cols="70" rows="4"><?php echo @$article['keyword'];?></textarea>      </td>
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
