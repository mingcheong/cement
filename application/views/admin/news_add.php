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
<script type="text/javascript" src="<?php echo base_url()?>FCKeditor/fckeditor.js" language="javascript"></script> 
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
	var fck = new FCKeditor('content');

fck.Width = "100%";

fck.Height = 450;

fck.BasePath = "<?php echo base_url();?>/FCKeditor/";

fck.ReplaceTextarea() ;
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
  <tr style="display:<?php if(!in_array('oripic', $display)) echo "none";?>">
    <td  align="right" >原始图：</td>
    <td align="left" ><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="200" align="left">
        <input type="file" name="oripic" id="oripic" onchange=" document.getElementById('oripicid2').src=this.value"></td>
        <td>
          <?php if(!empty($article ['oripic'])){  ?>
          	<img src="<?php echo base_url().$article['oripic']?>" name="oripicid"  id="oripicid" width="100" height="80" >             
          <?php }else{?>
          <img src="images/admin/nopic.jpg" name="oripicid2"  id="oripicid2" width="100" height="80" >
          <?php }?>
        </td>
      </tr>
    </table></td>
  </tr>  
  <tr style="display:<?php if(!in_array('video', $display)) echo "none";?>">
    <td  align="right" >视频：</td>
    <td align="left" ><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="200" align="left">
			<?php if(in_array('video', $display)) {?>
				<script type="text/javascript" src="<?php echo base_url();?>js/swfupload/swfupload.js"></script>
				<script type="text/javascript" src="<?php echo base_url();?>js/swfupload.swfobject.js"></script>
				<script type="text/javascript" src="<?php echo base_url();?>js/swfupload.queue.js"></script>
				<script type="text/javascript" src="<?php echo base_url();?>js/fileprogress.js"></script>
				<script type="text/javascript" src="<?php echo base_url();?>js/handlers.js"></script>	
				<style>
				<!--
				div.fieldset {
					border:  1px solid #afe14c;
					margin: 10px 0;
					padding: 20px 10px;
				}
				div.fieldset span.legend {
					position: relative;
					background-color: #FFF;
					padding: 3px;
					top: -30px;
					font: 700 14px Arial, Helvetica, sans-serif;
					color: #73b304;
				}

				div.flash {
					width: 375px;
					margin: 10px 5px;
					border-color: #D9E4FF;

					-moz-border-radius-topleft : 5px;
					-webkit-border-top-left-radius : 5px;
					-moz-border-radius-topright : 5px;
					-webkit-border-top-right-radius : 5px;
					-moz-border-radius-bottomleft : 5px;
					-webkit-border-bottom-left-radius : 5px;
					-moz-border-radius-bottomright : 5px;
					-webkit-border-bottom-right-radius : 5px;

				} 	
				.progressWrapper {
					width: 357px;
					overflow: hidden;
				}

				.progressContainer {
					margin: 5px;
					padding: 4px;
					border: solid 1px #E8E8E8;
					background-color: #F7F7F7;
					overflow: hidden;
				}
				/* Message */
				.message {
					margin: 1em 0;
					padding: 10px 20px;
					border: solid 1px #FFDD99;
					background-color: #FFFFCC;
					overflow: hidden;
				}


				/* Current */
				.green {
					border: solid 1px #DDF0DD;
					background-color: #EBFFEB;
				}

				/* Complete */
				.blue {
					border: solid 1px #CEE2F2;
					background-color: #F0F5FF;
				}

				.progressName {
					font-size: 10pt;
					font-weight: 700;
					color: #555;
					width: 323px;
					height: 14px;
					text-align: left;
					white-space: nowrap;
					overflow: hidden;
				}

				.progressBarInProgress,
				.progressBarComplete,
				.progressBarError {
					font-size: 10pt;
					width: 0%;
					height: 2px;
					background-color: blue;
					margin-top: 2px;
				}

				.progressBarComplete {
					width: 100%;
					background-color: green;
					visibility: hidden;
				}

				.progressBarError {
					width: 100%;
					background-color: red;
					visibility: hidden;
				}

				.progressBarStatus {
					margin-top: 2px;
					width: 337px;
					font-size: 10pt;
					font-family: Arial;
					text-align: left;
					white-space: nowrap;
				}

				a.progressCancel {
					font-size: 10pt;
					display: block;
					height: 14px;
					width: 14px;
					background-image: url(../images/cancelbutton.gif);
					background-repeat: no-repeat;
					background-position: -14px 0px;
					float: right;
				}

				a.progressCancel:hover {
					background-position: 0px 0px;
				}


				/* -- SWFUpload Object Styles ------------------------------- */
				.swfupload {
					vertical-align: top;
				}				
				-->
				</style>
				<script type="text/javascript">
				var swfu;

				window.onload = function () {
					var settings = {
						flash_url : "<?php echo base_url();?>js/swfupload/swfupload.swf",
						upload_url: "<?php echo site_url();?>/admin/news/upload",
						post_params: {"PHPSESSID" : ""},
						file_size_limit : "2 MB",//设定上传大小
						file_types : "*.flv;*.wmv",//类型限制
						file_types_description : "All Files",//打开选择窗口的类型说明文字
						file_upload_limit : 1,// 实例控制上传成功的文件总数
						file_queue_limit : 1,// 设置文件上传队列中等待文件的最大数量限制
						debug:false,//是否显示调试窗口
						custom_settings : {//自定义变量
							   progressTarget : "fsUploadProgress",//进度条展示的容器id
							   cancelButtonId : "btnCancel"//取消按钮
						},
						button_image_url : "<?php echo base_url();?>js/swfupload/XPButtonUploadText_61x22.png",
						button_placeholder_id : "spanButtonPlaceholder",
						button_width: 61,
						button_height: 22,
						
						swfupload_loaded_handler : swfUploadLoaded,
						file_queued_handler : fileQueued,
						file_queue_error_handler : fileQueueError,
						file_dialog_complete_handler : fileDialogComplete,
						upload_start_handler : uploadStart,
						upload_progress_handler : uploadProgress,
						upload_error_handler : uploadError,
						upload_success_handler : function(file, serverData){
							try {
								var progress = new FileProgress(file, this.customSettings.progressTarget);
								progress.setComplete();
								progress.setStatus("上传成功");
								progress.toggleCancel(false);
								document.getElementById('video').value = '<?php echo base_url();?>' + serverData;
							} catch (ex) {
								this.debug(ex);
							}						
						},
						upload_complete_handler : uploadComplete,
						queue_complete_handler : queueComplete,	// Queue plugin event
					};
					swfu = new SWFUpload(settings);
				}
				</script>	
					<div class="fieldset  flash" id="fsUploadProgress">
					<span class="legend">上传视频(限制2MB)</span>
					</div>
					<div id="divStatus">已上传 0 个文件</div>
					<div>
						<span id="spanButtonPlaceholder"></span>
						<input id="btnCancel" type="button" value="取消上传" disabled="disabled" style="margin-left: 2px; height: 22px; font-size: 10pt;" />
					</div>	
				<noscript>
					<div style="background-color: #FFFF66; border-top: solid 4px #FF9966; border-bottom: solid 4px #FF9966; margin: 10px 25px; padding: 10px 15px;">
						We're sorry.  SWFUpload could not load.  You must have JavaScript enabled to enjoy SWFUpload.
					</div>
				</noscript>
				<div id="divLoadingContent" class="content" style="background-color: #FFFF66; border-top: solid 4px #FF9966; border-bottom: solid 4px #FF9966; margin: 10px 25px; padding: 10px 15px; display: none;">
					SWFUpload is loading. Please wait a moment...
				</div>
				<div id="divLongLoading" class="content" style="background-color: #FFFF66; border-top: solid 4px #FF9966; border-bottom: solid 4px #FF9966; margin: 10px 25px; padding: 10px 15px; display: none;">
					SWFUpload is taking a long time to load or the load has failed.  Please make sure that the Flash Plugin is enabled and that a working version of the Adobe Flash Player is installed.
				</div>
				<div id="divAlternateContent" class="content" style="background-color: #FFFF66; border-top: solid 4px #FF9966; border-bottom: solid 4px #FF9966; margin: 10px 25px; padding: 10px 15px; display: none;">
					We're sorry.  SWFUpload could not load.  You may need to install or upgrade Flash Player.
					Visit the <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Adobe website</a> to get the Flash Player.
				</div>	
			<input type="text" name="video" id="video" value="<?php echo @$article['video']?>" style="width: 600px;">
			<br>				
			<?php } ?>			
		</td>
      </tr>
    </table>
	</td>
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
    <td align="left">
		<textarea id="content" name="content" ><?php echo @$article['content'];?></textarea>
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
