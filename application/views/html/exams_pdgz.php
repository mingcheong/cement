<?php include "head.php"?>
<script src="<?php echo base_url();?>/js/jquery-1.4.3.js" language="javascript" type="text/javascript"></script>
<script language="javascript">
function getKey(id){// 需要去掉的文件（ddd.png;),mdid元数据id,clm字段（imgurl或annexurl）
	var   div_key=document.getElementById(id+'_key'); 
	   key=document.getElementById('key'+id); 
	      div=document.getElementById('bottom_'+id); 
	if(div.value=="核对"){
		if($(".pdc_"+id+":checked").val()==key.value){alert("恭喜你答对了!");}else{alert("答错了，再接再厉！")}
		div_key.style.display="block";
		div.value="隐藏";
	}else{
		div_key.style.display="none";
		div.value="核对";
	}
		
}

</script>
<!---- news ---->
<div id="news">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="top"><table width="100%" height="24" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="145"><div class="title_1">课后习题</div></td>
          <td align="right" valign="bottom"><div class="title_2"><a href="javascript:window.history.go(-1)">返回目录</a></div></td>
          <td width="8" valign="bottom"><div class="title_3"></div></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td valign="top">
	  <div id="content">
				<div >
				<?php foreach ($showList as $key=>$exam){?>
				<div style="font-size:14px; font-weight:bold; margin-top:15px;"><?php echo ++$key;echo "、" ;echo $exam['title'];?></div>
				<table style="color:#CCCC00; font-size:12px;"><tr><td><input type="radio" value="对" class="pdc_<?php echo $exam['id']?>" name="pd"  id="d_<?php echo $exam['id']?>">对</td><td><input type="radio" value="错" class="pdc_<?php echo $exam['id']?>" name="pd"  id="c_<?php echo $exam['id']?>">错</td></tr></table>
				<div class="font_js">

				<input type="button" onClick="getKey(<?php echo $exam['id']?>);" value="核对" id="bottom_<?php echo $exam['id']?>" style=" float:left;">
				<?php 
					$arr=explode("，",$exam['keyword']);
				?>
				<input type="hidden" value="<?php echo $arr[0]?>" id="key<?php echo $exam['id']?>" >
				<div id="<?php echo $exam['id']?>_key" style="display:none;">答案：<?php echo @$exam['keyword'];?></div>
				</div>
				<div style="clear:both;"></div>
				<?php }?>
				</div>
				</div>
	  </div></td>
    </tr>
  </table>
</div>  
<?php include "foot.php"?>