<?php include "head.php"?>
<script language="javascript">
function getKey(id){// 需要去掉的文件（ddd.png;),mdid元数据id,clm字段（imgurl或annexurl）
	
	var   div_key=document.getElementById(id+'_key'); 
	      div=document.getElementById('bottom_'+id); 

	if(div.value=="核对"){
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
				<div class="font_js">
				<?php 
					$arr=explode("\n",$exam['description']);
				?>
				<textarea  name="keyword" cols="100" rows="7" style="font-size:12px; color:#000000; background-color: #f6f6f6"></textarea>
				<input type="button" value="核对" onClick="getKey(<?php echo @$exam['id']?>)" id="bottom_<?php echo @$exam['id']?>" >

				<div id="<?php echo @$exam['id']?>_key" style="display:none; border:#0C9 solid 2px; margin-top:6px; padding:8px;"><?php echo @$exam['keyword'];?>
				</div>

				</div>

				<?php }?>
				</div>
	  </div></td>
    </tr>
  </table>
</div>  
<?php include "foot.php"?>