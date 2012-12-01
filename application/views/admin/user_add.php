<?php if (!defined('BASEPATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="<?php echo base_url();?>images/css.css" rel="stylesheet" type="text/css">
<script src="<?php echo base_url();?>js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
function doAction(a,id){
	if(a=='delete'){
		if(confirm('请确认是否删除！')){		
			window.location.href = '<?php echo site_url()?>/admin/category/delete/'+id;		
		}
	}
}
$(document).ready(function(){ 

	$(":checkbox") .click(function(){
		var subArr = $(this).attr("name").split("_");
		var subChkName = subArr[0]+"_"+subArr[1];
		var isChk = $(this).attr("checked");
		if(subArr[2] != 0)
			subChkName+="_0";
		$("input[name='"+subChkName+"']").each(function(){
			$(this).attr("checked",isChk);
		 });
	});
	
	var chkIds = $("#chkIds").val();
	if(chkIds != ""){
		var ids = chkIds.split(",");
		for(var i=0;i< ids.length;i++)
			$("#"+ids[i]+"").attr("checked",true);
	}
})
function setData(){
	var limits = [];
	var ids = [];
	$(":checkbox").each(function(){
		if($(this).attr("checked") == true){
			limits.push($(this).val());
			ids.push($(this).attr("id"));
		}
	 });
	 $("#authority").val(limits.join(","));
	 $("#chkIds").val(ids.join(","));
	return true;
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
        <td height="31"><div class="titlebt">栏目管理</div></td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/admin/mail_rightbg.gif"><img src="images/admin/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/admin/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
    <form action="<?php echo site_url('admin/user/addsave');?>" method="post" name="form1" <?php if($_SESSION['userid'] == 1){?>onsubmit="return setData();"<?php }?>>
	<input name="id" type="hidden" value="<?php echo @$user['userid'];?>" />	
	<input id="authority" name="authority" type="hidden" value="<?php echo @$user['authority'];?>" />	
	<input id="chkIds" name="chkIds" type="hidden" value="<?php echo @$user['chkIds'];?>" />	
		<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" class="table_form">
                  <tr>
                    <th height="40" colspan="2" align="left" > &nbsp;&nbsp;  &nbsp; 修改帐号</th>
                  </tr>
                  <tr>
                    <td width="18%" height="40" align="right" >用户名 ：</td>
					<td width="82%" align="left" ><input name="username" type="text"  id="username" style="width: 150px" value="<?php echo @$user['username'];?>" size="30"></td>
				  </tr>
					<tr>
						<td height="40" align="right" >密码：</td>
						<td align="left" >
                        <input name="password" type="password"  id="password" style="width: 150px" value=""></td>
					</tr>
					<tr>
						<td height="40" align="right" >角色：</td>
						<td align="left" ><select name="limits" id="limits">
						 <?php if($_SESSION['userid']==1){ ?>
                          <option value="1" <?php if(@$user['limits'] == 1) echo "selected";?>>管理员</option>
                          <?php }?>
						  <option value="0" <?php if(@$user['limits'] == 0) echo "selected";?>>职员</option>
					    </select></td>
					</tr>
					<?php if($_SESSION['userid'] == 1){?>
					<tr>
						<td height="40" align="right" >权限：</td>
						<td align="left" style="vertical-align:top">
							  <?php if (!empty($category_arr)){?>
							  <table width="100%" border="0" cellspacing="0" cellpadding="0" style="vertical-align:top">
								<?php $index = 0;?>
								<?php foreach ($category_arr as $cate){?>
								<?php if ($index%4 == 0){?>
								<tr>
								<?php }?>									
								  <td width="200px;" style="vertical-align:top;">
									<input type="checkbox" name="chk_<?php echo $cate['id']?>_<?php echo $cate['pid']?>" id="chk_<?php echo $cate['id']?>_<?php echo $cate['pid']?>" value="<?php echo $cate['id']?>"><label for="chk_<?php echo $cate['id']?>_<?php echo $cate['pid']?>" style="cursor:pointer"><?php echo $cate['name']?></label>
									<br>
									<?php
										$query = $this->db->query( "SELECT * FROM category WHERE pid = ".$cate['id']." order by seq,id" );
										$subcate_arr = $query->result_array();	
									?>
									<table width="100%" border="0" cellspacing="0" cellpadding="0" style="vertical-align:top;padding-left:20px;">
									<?php foreach ($subcate_arr as $subcate){?>
										<tr><td><input type="checkbox" name="chk_<?php echo $subcate['pid']?>" id="chk_<?php echo $subcate['id']?>_<?php echo $subcate['pid']?>" value="<?php echo $subcate['id']?>"><label for="chk_<?php echo $subcate['id']?>_<?php echo $subcate['pid']?>" style="cursor:pointer"><?php echo $subcate['name']?></label></td><tr>
									<?php }?>		
									</table>
								  </td>					  
								<?php if (($index%4+1)==4){?>
								<tr><td colspan="4"><hr></td></tr>
								</tr>			
								<?php }$index ++;?>
								<?php }?>				
							  </table>
							  <?php }?>								
						</td>
					</tr>
					<?php }?>	
				  <tr>
				    <td height="40" align="right">&nbsp;</td>
				    <td height="40" align="left">
                      <input type="submit" name="button" id="button" value=" 提 交 " class="submit"/>
                     &nbsp; <input type="button" value="返回" onclick="window.history.go(-1)" class="submit"/>
                    &nbsp;</td>
			    </tr>
         </table>
</form>
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
