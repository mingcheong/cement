<?php include "head.php"?>
<!---- news ---->
<div id="news">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="top"><table width="100%" height="24" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="145"><div class="title_1">视频动画</div></td>
          <td align="right" valign="bottom"><div class="title_2"><a href="javascript:window.history.go(-1)">返回视频动画</a></div></td>
          <td width="8" valign="bottom"><div class="title_3"></div></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td valign="top" align="center">
	  <div id="content">
	  <div class="title"><?php echo $show['title']?></div>
	  <div class="main">
	  	<?php echo $show['content']?>
	  </div>	  
	  </div></td>
    </tr>
  </table>
</div>  
<?php include "foot.php"?>	  