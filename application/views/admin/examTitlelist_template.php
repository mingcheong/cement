<?php if (!defined('BASEPATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="<?php echo base_url();?>images/css.css" rel="stylesheet" type="text/css">
<script src="<?php echo base_url();?>application/views/admin/images/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
function doAction(a,id,cid){
	if(a=='delete'){
		if(confirm('请确认是否删除！')){		
			window.location.href = '<?php echo site_url()?>/admin/exams/delete/'+cid+'/'+id;		
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
        <td height="31"><div class="titlebt">练习考试</div></td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/admin/mail_rightbg.gif"><img src="images/admin/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/admin/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><?php echo $catename;?><input type="button" value="添加试题" onclick="location.href='<?php echo site_url();?>/admin/exams/add/<?php echo ($cid); ?>'" class="submit" /></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="table_form">
      <tr>
        <th width="40">编号</th>
        <th width="661" height="26">题目</th>
       
        <th width="230" height="26">操作</th>
      </tr>
      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?>
      <tr onmouseover="this.className='relow'" onmouseout="this.className='row'" class="row">
        <td align="center"><?php echo $i?></td>
        <td height="26" align="left">
        <?php echo ($vo["title"]); ?>&nbsp;</td>
        <td height="26" align="center"><a href="<?php echo site_url('admin/exams/edit/'.$vo['id']);?>"> 修改</a>  | 
        	<a href="javascript:doAction('delete',<?php echo ($vo["id"])?>,<?php echo ($vo["cid"])?>)"> 删除</a>        </td>
      </tr>
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0" class="table_footer">
      <tr>
        <td height="29" align="left" ><?php echo $pagination; ?>
          </td>
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
