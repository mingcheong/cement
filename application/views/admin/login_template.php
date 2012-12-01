<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml"><HEAD><TITLE>舜江水泥网站后台管理</TITLE><LINK 
href="<?php echo base_url();?>images/admin/Default.css" type=text/css rel=stylesheet><LINK 
href="<?php echo base_url();?>images/admin/xtree.css" type=text/css rel=stylesheet><LINK 
href="<?php echo base_url();?>images/admin/User_Login.css" type=text/css rel=stylesheet>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<META content="MSHTML 6.00.6000.16674" name=GENERATOR></HEAD>
<BODY id=userlogin_body>
<form action="<?php echo site_url('admin/login/check_login')?>" method="post" name="loginform">
<DIV></DIV>
<DIV id=user_login>
<DL>
  <DD id=user_top>
  <UL>
    <LI class=user_top_l></LI>
    <LI class=user_top_c></LI>
    <LI class=user_top_r></LI></UL>
  <DD id=user_main>
  <UL>
    <LI class=user_main_l></LI>
    <LI class=user_main_c>
    <DIV class=user_main_box>
    <UL>
      <LI class=user_main_text>用户名 </LI>
      <LI class=user_main_input><INPUT class="TxtUserNameCssClass" id="TxtUserName" 
      maxLength=20 name="username" type="text"  value="" > </LI></UL>
    <UL>
      <LI class=user_main_text>密　码</LI>
      <LI class=user_main_input><INPUT class="TxtPasswordCssClass" id="TxtPassword" 
     name="password" type="password"  > </LI></UL>
  </DIV></LI>
    <LI class=user_main_r><INPUT class=IbtnEnterCssClass id=IbtnEnter 
    style="BORDER-TOP-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-RIGHT-WIDTH: 0px" 
    type=image src="<?php echo base_url();?>images/admin/user_botton.gif" name=IbtnEnte onClick=" document.loginform.submit();"> </LI></UL>
  <DD id=user_bottom>
  <UL>
    <LI class=user_bottom_l></LI>
    <LI class=user_bottom_c><SPAN style="MARGIN-TOP: 40px">后台管理1.0 <A 
    href=""></A></SPAN> </LI>
    <LI class=user_bottom_r></LI></UL></DD></DL></DIV><SPAN id=ValrUserName 
style="DISPLAY: none; COLOR: red"></SPAN><SPAN id=ValrPassword 
style="DISPLAY: none; COLOR: red"></SPAN><SPAN id=ValrValidateCode 
style="DISPLAY: none; COLOR: red"></SPAN>
<DIV id=ValidationSummary1 style="DISPLAY: none; COLOR: red"></DIV>

<DIV></DIV>

</FORM></BODY></HTML>
