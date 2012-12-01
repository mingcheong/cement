<?php include "head.php"?>
<!---- news ---->
<div id="news">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="top"><table width="100%" height="24" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="145"><div class="title_1">互动学习</div></td>
          <td align="right" valign="bottom"><div class="title_2"><a href="javascript:window.history.go(-1)">返回目录</a></div></td>
          <td width="8" valign="bottom"><div class="title_3"></div></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td valign="top" align="center">
	  <div id="content">
			<div class="content">
			<div style="width:565px; margin:60px auto; position:relative ">
			<form action="<?php echo site_url('admin/login/check_login')?>" method="post" name="loginform" >
			<div style="width:565px; height:295px; background:url(images/admin/login.jpg) no-repeat">
			<div style=" position:absolute; left:196px; top:124px;">
			<div style=""><input maxLength=20 name="username" type="text"  value="" border="0" style=" border:0px; width:144px;" ></div>
			<div style="margin-top:18px;"><input maxLength=20 name="password" type="text"  value=""  border="0" style=" border:0px; width:144px;"></div>
			</div>
			<div style="position:absolute; left:404px; top:117px; width:84px; height:86px;cursor:pointer" >
			<input type="submit"  value=" "  style="width:84px; height:86px; background-color:transparent; border:0px;"/>
			</div>
			</div>

			</form>
			</div>
			<div class="lm2"></div>
			</div>
	  </div></td>
    </tr>
  </table>
</div>  
<?php include "foot.php"?>