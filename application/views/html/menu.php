<tr>
  <td bgcolor="CAEDFE" valign="top"> <br>
	<table width="81%" border="0" cellspacing="0" cellpadding="0" align="center">
		<?php foreach ($getCategoryList as $cate){?>
	  <tr> 
		<td background="images/html/34.jpg" height="33" class="unnamed6"> 
		  <div align="left"> 　　<img src="images/html/35.jpg" width="11" height="11"> 
			<?php if ($cate['type'] == 0){?>
			<a href="<?php echo site_url('html/show/listNew/'.$cate['id'].'/'.$cate['pid']);?>" class="unnamed6"><?php echo $cate['name']?></a></div>
			<?php }else if($cate['type'] == 1){?>
			<a href="<?php echo site_url('html/show/lists/'.$cate['id'].'/'.$cate['pid']);?>" class="unnamed6"><?php echo $cate['name']?></a></div>
			<?php }else if($cate['type'] == 2){?>
			<a href="<?php echo site_url('html/show/view/'.$cate['id'].'/'.$cate['pid']);?>" class="unnamed6"><?php echo $cate['name']?></a></div>
			<?php }?>
		</td>
	  </tr>
		<?php }?>
	</table>
	<br>
	<table width="75%" border="0" cellspacing="0" cellpadding="0" align="center">
	  <tr> 
		<td><img src="images/html/36.jpg" width="172" height="55"></td>
	  </tr>
	  <tr> 
		<td height="75"><img src="images/html/37.jpg" width="172" height="55"></td>
	  </tr>
	  <tr>
		<td height="77"><img src="images/html/38.jpg" width="172" height="55"></td>
	  </tr>
	</table>
	<div align="center"></div>
	<p class="unnamed6" align="center">&nbsp;</p>
	<div align="center"></div>
  </td>
</tr>