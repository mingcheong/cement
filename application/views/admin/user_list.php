<?php if (!defined('BASEPATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="<?php echo base_url();?>images/css.css" rel="stylesheet" type="text/css">
<script src="<?php echo base_url();?>application/views/admin/images/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
function doAction(a,id){
	if(a=='delete'){
		if(confirm('请确认是否删除！')){		
			window.location.href = '<?php echo site_url()?>/admin/user/delete/'+id;		
		}
	}
}
</script>
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
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/admin/mail_leftbg.gif"><img src="images/admin/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/admin/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31"><div class="titlebt">账号管理</div></td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/admin/mail_rightbg.gif"><img src="images/admin/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/admin/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
  <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table_head">
          <tr>
            <td width="39%" height="31">&nbsp;&nbsp; &nbsp;&nbsp; 
          </td>
            <td width="61%" align="right"></td>
            <td width="61%" align="right">  <?php if($_SESSION['userid'] == 1){?> <input name="button" type="button" class="submit" onClick="location.href='<?php echo site_url('admin/user/add');?>'" value="添加帐号"><?php }?></td>
          </tr>
        </table>
      <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="table_form">
        <tr>
          <th width="40"></th>
          <th width="200" height="26">ID</th>
          <th width="200">用户名</th>
          <th height="26">说明</th>
          <th width="80" height="26">操作</th>
        </tr>
        <?php
	foreach ($list as $list){		
  ?>
        <tr onMouseOver="this.className='relow'" onMouseOut="this.className='row'" class="row">
          <td align="center" ><input type="checkbox" name="checkbox" value="<?php echo $list['userid'];?>" onClick="checkDeleteStatus('checkbox')"></td>
          <td height="26" align="center" ><?php echo $list['userid'];?></td>
          <td align="center"><a href="<?php echo site_url('admin/user/edit/'.$list['userid']);?>"><?php echo $list['username'];?></a></td>
          <td height="26" align="center"><?php 
		  if($list['limits'] == 1)
		      echo "管理员";
		  else
		  	  echo "职员";
		  ?>&nbsp;</td>
          <td height="26" align="center">
          	<a href="<?php echo site_url('admin/user/edit/'.$list['userid']);?>"> 修改</a><?php if($_SESSION['userid']== 1){ ?>  | 
            				
        		<a href="javascript:doAction('delete',<?php echo $list["userid"]?>)"> 删除</a>
            <?php }?>
           
            </td>
        </tr>
        <?php
	}
  ?>
  <tr>
    <td colspan="5"><div style="float: right; padding-right: 50px"> <?php echo $pagination; ?></div></td>
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
