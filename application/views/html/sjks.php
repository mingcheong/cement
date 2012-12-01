<?php include "head.php"?>
<!---- news ---->
<div id="news">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="top"><table width="100%" height="24" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="145"><div class="title_1">在线考试</div></td>
          <td align="right" valign="bottom"><div class="title_2"><a href="javascript:window.history.go(-1)">返回目录</a></div></td>
          <td width="8" valign="bottom"><div class="title_3"></div></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td valign="top">
	  <div id="content">
<form action="<?php echo site_url('html/exams/pgsj');?>" method="post" name="formjs" id="formjs" >
				<div class="tmlx">单选题</div>
				<?php foreach ($dx as $key=>$exam ){?>
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

				</div>
				<?php }?>
				<div class="tmlx">多选题</div>
				<?php foreach ($bdx as $key=>$exam){?>
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
				</div>
				<?php }?>
				<div class="tmlx">判断题</div>
				<?php foreach ($pd as $key=>$exam){?>
				<div style="color:#093; font-size:14px; font-weight:bold; margin-top:15px;"><?php echo ++$key;echo "、" ;echo $exam['title'];?></div>
				<table width="89" height="46" style="color: #066; font-size:12px;"><tr><td height="28"><input type="radio" value="对" name="<?php echo $exam['id']?>"  id="d_<?php echo $exam['id']?>">对</td><td><input type="radio" value="错" name="<?php echo $exam['id']?>"  id="c_<?php echo $exam['id']?>">错</td></tr></table>
				<?php }?>

				<div class="tmlx">简答题</div>
				<?php foreach ($jd as $key=>$exam){?>
				<div style="color: color:#093; font-size:14px; font-weight:bold; margin-top:15px;"><?php echo ++$key;echo "、" ;echo $exam['title'];?></div>
				<div class="font_js">
				答：<textarea name="<?php echo  $exam['id'];?>" cols="125"  rows="7" style="font-size:12px; color:#000000; background-color: #f6f6f6"></textarea>
				</div>
				<?php }?>

				<div class="tmlx">综合题</div>
				<?php foreach ($zh as $key=>$exam){?>
				<div style="color: color:#093; font-size:14px; font-weight:bold; margin-top:15px;"><?php echo ++$key;echo "、" ;echo $exam['title'];?></div>
				<div class="font_js">
				答：<textarea  name="<?php echo  $exam['id'];?>" cols="125"  rows="7" style="font-size:12px; color:#000000; background-color: #f6f6f6"></textarea>
				</div>
				<?php }?>

				<div class="tmlx">分析题</div>
				<?php foreach ($fx as $key=>$exam){?>
				<div style="color:#093; font-size:14px; font-weight:bold; margin-top:15px;"><?php echo ++$key;echo "、" ;echo $exam['title'];?></div>
				<div class="font_js">
				答：<textarea name="<?php echo  $exam['id'];?>" cols="125" rows="7" style="font-size:12px; color:#000000; background-color: #f6f6f6"></textarea>
				</div>

				<?php }?>
				<div class="endwc"><a href="javascript:document.getElementById('formjs').submit();">完成</a></div>
				</form>



				<div class="lm2"></div>
</div></td>
    </tr>
  </table>
</div>  
<?php include "foot.php"?>