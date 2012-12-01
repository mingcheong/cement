<?php include "head.php"?>
<!---- news ---->
<div id="news">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="top"><table width="100%" height="24" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="145"><div class="title_1">考试结果</div></td>
          <td align="right" valign="bottom"><div class="title_2"><a href="javascript:window.history.go(-1)">返回目录</a></div></td>
          <td width="8" valign="bottom"><div class="title_3"></div></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td valign="top">
	  <div id="content">
				<div class="tmlx">单选题：总共10题，做对<?php echo $dxnum?>题</div>
				<?php foreach ($dxarr as $key=>$exam ){?>
				   <div style=" color:#093;font-size:14px; font-weight:bold; margin-top:15px;"><?php echo ++$key;echo "、" ;echo $exam['title'];?></div>
				<div class="font_js">
				<?php 
					$arr=explode("\n",$exam['description']);
				?>
				<table width="100%" border="0" style="color: #066; font-size:12px;" >
				  <tr>
					<td width="47%"><input type="radio" id="<?php echo $exam['id'];?>_A" name="<?php echo $exam['id'];?>" value="A"  /><?php echo $arr[0];?></td>
					<td width="53%"><input type="radio" id="<?php echo $exam['id'];?>_B" name="<?php echo $exam['id'];?>"value="B" /><?php echo $arr[1];?></td>
				  </tr>
				  <tr>
					<td><input type="radio" id="<?php echo $exam['id'];?>_C" value="C" name="<?php echo $exam['id'];?>"/><?php echo $arr[2];?></td>
					<td><input type="radio" id="<?php echo $exam['id'];?>_D" value="D"  name="<?php echo $exam['id'];?>"/><?php echo $arr[3];?></td>
				  </tr>
				</table>
				<div>你的答案:<?php echo $exam['mykey']?><br />正确答案：<?php echo $exam['keyword'];?></div>
				</div>
				<?php }?>
				<div class="tmlx">多选题：总共10题，做对<?php echo $bdnum?>题</div>
				<?php foreach ($bdarr as $key=>$exam){?>
				<div style="color:#093;font-size:14px; font-weight:bold; margin-top:15px;"><?php echo ++$key;echo "、" ;echo $exam['title'];?></div>
				<div class="font_js">
				<?php 
					$arr=explode("\n",$exam['description']);
				?>
				<table width="100%" border="0" style="color: #066; font-size:12px;" >
				  <tr>
					<td width="47%"><input type="checkbox" id="<?php echo $exam['id'];?>_A" name="<?php echo $exam['id'];?>[]" value="A"  /><?php echo $arr[0];?></td>
					<td width="53%"><input type="checkbox"  id="<?php echo $exam['id'];?>_B" name="<?php echo $exam['id'];?>[]"value="B"  /><?php echo $arr[1];?></td>
				  </tr>
				  <tr>
					<td><input type="checkbox"  id="<?php echo $exam['id'];?>_C" value="C" name="<?php echo $exam['id'];?>[]" /><?php echo $arr[2];?></td>
					<td><input type="checkbox"  id="<?php echo $exam['id'];?>_D" value="D"  name="<?php echo $exam['id'];?>[]"/><?php echo $arr[3];?></td>
				  </tr>
				   <tr>
					<td><input type="checkbox"  id="<?php echo $exam['id'];?>_E" value="E" name="<?php echo $exam['id'];?>[]" /><?php echo $arr[4];?></td>
					<td></td>
				  </tr>
				</table>
				<div>你的答案:<?php echo $exam['mykey']?><br />正确答案：<?php echo $exam['keyword'];?></div>
				</div>
				<?php }?>
				<div class="tmlx">判断题：总共10题，做对<?php echo $pdnum?>题</div>
				<?php foreach ($pdarr as $key=>$exam){?>
				<div style="color:#093; font-size:14px; font-weight:bold; margin-top:15px;"><?php echo ++$key;echo "、" ;echo $exam['title'];?></div>
				<table width="89" height="46" style="color: #066; font-size:12px;"><tr><td height="28"><input type="radio" value="对" name="<?php echo $exam['id']?>"  id="d_<?php echo $exam['id']?>">对</td><td><input type="radio" value="错" name="pd"  id="c_<?php echo $exam['id']?>">错</td></tr></table>
				<div>你的答案:<?php echo $exam['mykey']?><br />正确答案：<?php echo $exam['keyword'];?></div>
				<?php }?>

				<div class="tmlx">简答题</div>
				<?php foreach ($jdarr as $key=>$exam){?>
				<div style="color: color:#093; font-size:14px; font-weight:bold; margin-top:15px;"><?php echo ++$key;echo "、" ;echo $exam['title'];?></div>
				<div class="font_js">
				你的答案：<div  style="border:#0C9 solid 2px; margin-top:6px; padding:8px;"><?php echo $exam['mykey'];?>
				</div>
				正确答案：
				<div  style=" border:#0C9 solid 2px; margin-top:6px; padding:8px;"><?php echo $exam['keyword'];?>
				</div>
				</div>
				<?php }?>

				<div class="tmlx">综合题</div>
				<?php foreach ($zharr as $key=>$exam){?>
				<div style="color: color:#093; font-size:14px; font-weight:bold; margin-top:15px;"><?php echo ++$key;echo "、" ;echo $exam['title'];?></div>
				<div class="font_js">
				你的答案：<div  style="border:#0C9 solid 2px; margin-top:6px; padding:8px;"><?php echo $exam['mykey'];?>
				</div>
				正确答案：
				<div  style=" border:#0C9 solid 2px; margin-top:6px; padding:8px;"><?php echo @$exam['keyword'];?>
				</div>
				</div>
				<?php }?>

				<div class="tmlx">分析题</div>
				<?php foreach ($fxarr as $key=>$exam){?>
				<div style="color:#093; font-size:14px; font-weight:bold; margin-top:15px;"><?php echo ++$key;echo "、" ;echo $exam['title'];?></div>
				<div class="font_js">
				你的答案：<div  style=" border:#0C9 solid 2px; margin-top:6px; padding:8px;"><?php echo $exam['mykey'];?>
				</div>
				正确答案：
				<div  style=" border:#0C9 solid 2px; margin-top:6px; padding:8px;"><?php echo $exam['keyword'];?>
				</div>

				<?php }?>
	  </div></td>
    </tr>
  </table>
</div>  
<?php include "foot.php"?>