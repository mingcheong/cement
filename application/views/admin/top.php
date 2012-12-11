<html>
<head>
<title>管理页面</title>
<base href="<?php echo base_url() ;?>"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<base target="main">
<link href="images/admin/skin.css" rel="stylesheet" type="text/css">
</head>
<body leftmargin="0" topmargin="0">
<table width="100%" height="64" border="0" cellpadding="0" cellspacing="0" class="admin_topbg">
  <tr>
    <td width="61%" height="64"><img src="images/admin/logo.gif" width="262" height="64"></td>
    <td width="39%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="81%" height="38" class="admin_txt" align="right">用户名：<b><?php echo $_SESSION['username'];?> </b> 您好,感谢登陆使用！</td>
        <td width="15%"><a href="<?php echo site_url();?>/admin/login/loginout" target="_parent"><img src="images/admin/out.gif" alt="安全退出" width="46" height="20" border="0"></a></td>
        <td width="4%">&nbsp;</td>
      </tr>
      <tr>
        <td height="19" colspan="3">&nbsp;</td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
