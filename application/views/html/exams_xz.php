<?php include "head.php"?>
<script language="javascript">
function getKey(idk,id){// 需要去掉的文件（ddd.png;),mdid元数据id,clm字段（imgurl或annexurl）
	var   div=document.getElementById(idk); 
	var   div_key=document.getElementById(id+'_key'); 
	if(div.value==div_key.value){
		alert('恭喜你答对了！'); 
	}else{
		alert('答错了！'); 
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
				<div class="font_js">
				<?php 
					$arr=explode("\n",$exam['description']);
				?>
				<table width="100%" border="0" style="color:#CCCC00; font-size:12px;" >
				  <tr>
					<td width="47%"><input type="radio" id="<?php echo $exam['id'];?>_A" name="<?php echo $exam['id'];?>" value="A" onClick="getKey('<?php echo $exam['id'];?>_A','<?php echo $exam['id'];?>');"  /><?php echo $arr[0];?></td>
					<td width="53%"><input type="radio" id="<?php echo $exam['id'];?>_B" name="<?php echo $exam['id'];?>"value="B" onClick="getKey('<?php echo $exam['id'];?>_B','<?php echo $exam['id'];?>');" /><?php echo $arr[1];?></td>
				  </tr>
				  <tr>
					<td><input type="radio" id="<?php echo $exam['id'];?>_C" value="C" name="<?php echo $exam['id'];?>"onclick="getKey('<?php echo $exam['id'];?>_C','<?php echo $exam['id'];?>');" /><?php echo $arr[2];?></td>
					<td><input type="radio" id="<?php echo $exam['id'];?>_D" value="D"  name="<?php echo $exam['id'];?>"onclick="getKey('<?php echo $exam['id'];?>_D','<?php echo $exam['id'];?>');"/><?php echo $arr[3];?></td>
				  </tr>
				</table>

				</div>
				<input type="hidden" id="<?php echo $exam['id'];?>_key" value="<?php echo $exam['keyword']?>" />
				<?php }?>
				</div>
	  </div></td>
    </tr>
  </table>
</div>  
<?php include "foot.php"?>