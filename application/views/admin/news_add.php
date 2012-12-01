<?php if (!defined('BASEPATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<base href="<?php echo base_url() ;?>"/>
<link href="<?php echo base_url();?>css.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>css/skin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/swfobject.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.uploadify.v2.1.0.min.js"></script>
<script type="text/javascript">
function doAction(a,id){
	ids = 0;
	if(a=='delpic'){
		$.ajax({
			url:'article.php',
			type: 'POST',
			data:'act=delpic&id='+id,
			success: function(data){
				document.getElementById('picdiv').innerHTML="";
			}
		});
	}
}

function chechFrom(){   
    if (document.getElementById('title').value==""){
        alert("请您填写信息标题！");
        document.getElementById('title').focus();
        return false;
    }
	if (document.getElementById('cid').value==0){
        alert("请您选择栏目！");
        document.getElementById('cid').focus();
        return false;
    }
}
</script>

<script type="text/javascript">
$(document).ready(function() {
	$("#uploadify").uploadify({
		'uploader'       : '<?php echo base_url();?>js/scripts/uploadify.swf',
		'script'         : '<?php echo base_url();?>js/scripts/uploadify.php',
		'cancelImg'      : '<?php echo base_url();?>/images/admin/cancel.png',
		'folder'         : '/mycms/uploads',
		'queueID'        : 'fileQueue',
		'fileDesc'       : '支持格式:jpg,gif,png', 
    	'fileExt'        : '*.jpg;*.jepg;*.gif;*.png' ,
		'auto'           : true,
		'multi'          : true,
		'height'         : 26,
		'width'          : 82,
		'onComplete'  	 : function(event, ID, fileObj, response, data) {
								var strs = document.getElementById('photos').value;
								if (strs==""){
									document.getElementById('photos').value = response;
								}else{
									document.getElementById('photos').value = strs + "||" + response;	
								}
    						}

		
	});
});
</script>
</head>
<body <?php if(in_array('title', $display)){?> onLoad="document.getElementById('title').focus()"<?php }?>>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/admin/mail_leftbg.gif"><img src="images/admin/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/admin/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31"><div class="titlebt"><?php echo @$actName;?></div></td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/admin/mail_rightbg.gif"><img src="images/admin/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/admin/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" >
     <form action="<?php echo site_url();?>/admin/news/addsave" method="post" enctype="multipart/form-data"  onSubmit="return chechFrom();">
  <table width="100%"  border="0"  cellpadding="3" cellspacing="1" class="table_form" >
  <tr>
    <td  align="right" height="10" ></td>
    <td width="94%"  ></td>
  </tr>
  <tr>
    <td  align="right" nowrap><span class="red">* </span>栏目：<input name="id" type="hidden" value="<?php echo @$article['id'];?>"></td>
    <td align="left" ><select name="cid" id ="cid">     
      <?php echo ($getCategorySelect); ?>
    </select></td>
    </tr>
 
  <tr style="display:<?php if(!in_array('title', $display)) echo "none";?>">
    <td width="6%"  align="right" nowrap><span class="red">* </span>标题 ：</td>
    <td align="left" ><input name="title" id="title" type="text" class="form" style="width: 400px" value="<?php echo @$article['title'];?>"></td>
    </tr>
    
<?php   // ==========循环输入字段 添加内容时 ===========
if($actName=='添加内容'){
 foreach ($str_filed2 as $rs){ 
  if ($rs[2]!=""){
	$radios = explode("|",$rs[4]); ?>
  <tr>
    <td  align="right" nowrap><?php 
	if ($rs[6]=="是") echo "<span class='red'>* </span>";
	echo $rs[2]?>：</td>
    <td align="left" > 
    <?php if ($rs[1]==1){ //文本框      ?>
    <input name="<?php echo $rs[0]?>" type="text" value="<?php echo $rs[5]?>" style="width:<?php echo $rs[7]?>px"> <?php echo $rs[3]?>
       
    <?php }elseif($rs[1]==2){  //下拉框   ?>
     <select name="<?php echo $rs[0]?>">
            <?php foreach($radios as $vo){?>
          		<option value="<?php echo $vo;?>"  <?php if($rs[5]==$vo) echo "selected";?>><?php echo $vo;?></option>
            <?php }?>
        </select>
    <?php }elseif($rs[1]==3){   //单选框	
    		  foreach($radios as $vo){  ?>	
    	<input name="<?php echo $rs[0]?>" type="radio" value="<?php echo $vo;?>" <?php if($rs[5]==$vo) echo "checked";?>><?php echo $vo;?>
     
    <?php     }
	   }elseif($rs[1]==4){   //复选框 
	   			$rs[5] = explode("|",$rs[5]);
		  		foreach($radios as $vo){?>	
    	<input name="<?php echo $rs[0]?>[]" type="checkbox" value="<?php echo $vo;?>" <?php if(in_array($vo,$rs[5])) echo "checked";?>><?php echo $vo;?>
    <?php }
	   }?>
    </td>
  </tr>
<?php
}
} 
//// ==========循环输入字段 修改内容时===========
}else{
 foreach ($str_filed2 as $key=>$rs){ 
 if ($rs[2]!=""){	 
	 $rs[5] = $article['db'.$key];
	$radios = explode("|",$rs[4]); ?>
  <tr>
    <td  align="right" ><?php 
	if ($rs[6]=="是") echo "<span class='red'>* </span>";
	echo $rs[2]?>：</td>
    <td align="left" > 
    <?php if ($rs[1]==1){ //文本框      ?>
    <input name="<?php echo $rs[0]?>" type="text" value="<?php echo $rs[5]?>" style="width:<?php echo $rs[7]?>px"> <?php echo $rs[3]?>
       
    <?php }elseif($rs[1]==2){  //下拉框   ?>
     <select name="<?php echo $rs[0]?>">
            <?php foreach($radios as $vo){?>
          		<option value="<?php echo $vo;?>"  <?php if($rs[5]==$vo) echo "selected";?>><?php echo $vo;?></option>
            <?php }?>
        </select>
    <?php }elseif($rs[1]==3){   //单选框	
    		  foreach($radios as $vo){  ?>	
    	<input name="<?php echo $rs[0]?>" type="radio" value="<?php echo $vo;?>" <?php if($rs[5]==$vo) echo "checked";?>><?php echo $vo;?>
     
    <?php     }
	   }elseif($rs[1]==4){   //复选框 
	   			$rs[5] = explode("|",$article['db'.$key]);
		  		foreach($radios as $vo){?>	
    	<input name="<?php echo $rs[0]?>[]" type="checkbox" value="<?php echo $vo;?>" <?php if(in_array($vo,$rs[5])) echo "checked";?>><?php echo $vo;?>
    <?php }
	   }?>
    </td>
  </tr>
<?php
  }
 } 
}//// ==========循环输入字段 结束===========
?>

  <tr style="display:<?php if(!in_array('pic', $display)) echo "none";?>">
    <td  align="right" >缩略图：</td>
    <td align="left" ><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="200" align="left">
        <input type="file" name="pic" id="pic" onchange=" document.getElementById('picid2').src=this.value"></td>
        <td>
          <?php if(!empty($article ['pic'])){  ?>
          	<img src="<?php echo base_url().$article['pic']?>" name="picid"  id="picid" width="100" height="80" >             
          <?php }else{?>
          <img src="images/admin/nopic.jpg" name="picid2"  id="picid2" width="100" height="80" >
          <?php }?>
        </td>
      </tr>
    </table></td>
  </tr>
  <tr style="display:<?php if(!in_array('source', $display)) echo "none";?>">
    <td  align="right" >来源：</td>
    <td align="left" ><input name="source" type="text" class="form" style="width: 400px;" value="<?php echo @$article ['source'];?>"></td>
    </tr>
  <tr style="display:<?php if(!in_array('author', $display)) echo "none";?>">
    <td  align="right" >作者：</td>
    <td align="left" ><input name="author" type="text" class="form" style="width: 200px;" value="<?php echo @$article ['author'];?>" >    
    </tr>
  <tr style="display:<?php if(!in_array('description', $display)) echo "none";?>">
    <td  align="right" >摘要：</td>
    <td align="left" ><textarea name="description" id="description" class="form" style="width: 800px; height: 50px; overflow: auto"><?php echo trim ( @$article ['description'] );?></textarea>
    </tr>
  <tr style="display:<?php if(!in_array('content', $display)) echo "none";?>">
    <td  align="right" ><span class="red">* </span>内容：</td>
    <td align="left"  >
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
				id : 'content',
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
<textarea id="content" name="content" style=" width:950px;height:450px;visibility:hidden;"><?php echo @$article['content'];?></textarea>


    </td>
    </tr>
  <tr>
    <td colspan="2"  align="left" height="1px;" c></td>
    </tr>
   <tr style="display:<?php if(!in_array('photos', $display)) echo "none";?>">
     <td  align="right" >批量传图：</td>
     <td align="left" ><div id="fileQueue"></div>
    <input type="file" name="uploadify" id="uploadify" style="float:left"/> 
    <input name="photos" type="hidden" value="" id="photos"/>
    </td>
   </tr>
   <tr style="display:<?php if(!in_array('addtime', $display)) echo "none";?>">
     <td  align="right" >发布时间：</td>
     <td align="left" ><input name="addtime" type="text" class="form" id="addtime" style="width: 200px;" value="<?php if(empty($article['addtime'])){echo date("Y-m-d H:i:s");} else {echo $article['addtime'];}?>" /></td>
   </tr>
   <tr style="display:<?php if(!in_array('recommend', $display)) echo "none";?>">
    <td  align="right" >属性：</td>
    <td align="left" ><input name="recommend" type="checkbox" id="recommend" value="1" 
	<?php if(@$article['recommend']) echo "checked";?>>       推荐</td>
  </tr>
  <tr>
    <td height="40"  align="right" >&nbsp;</td>
<td align="left">
<input name="gourl" type="hidden"  value="<?php echo $_SERVER['HTTP_REFERER'];?>" > 
<input type="submit" name="button" id="button" value=" 提 交 ">
              &nbsp; <input type="button" value=" 返 回 " onClick="window.history.go(-1)">
            </td>
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
