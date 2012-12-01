<?php include "head.php"?>
<!---- news ---->
<div id="news">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="top"><table width="100%" height="24" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="145"><div class="title_1">视频动画</div></td>
          <td align="right" valign="bottom"><div class="title_2"><a href="javascript:window.history.go(-1)">返回目录</a></div></td>
          <td width="8" valign="bottom"><div class="title_3"></div></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td valign="top">
	  <div id="content">
				<div style=" padding:30px;">
				<div  style="font-size:18px; font-family:'微软雅黑'; font-weight:bolder; color:#066; border-bottom:solid 2px #066">自开发动画</div>
				<div style="margin-top:20px; margin-left:20px;">
				<?php foreach ($dh as $key=>$item ){?>
					<li><a href="<?php echo site_url().'/html/index/spdhshow/'.$item['id']?>"><?php echo $item['title'];?></a></li>
					<?php }?>

					</div>
					<div style="clear:both"></div>
					<div  style="font-size:18px; font-family:'微软雅黑'; font-weight:bolder; color:#066; border-bottom:solid 2px #066">下载动画</div>
				<div style="margin-top:20px; margin-left:20px;">
				<?php foreach ($dhx as $key=>$item ){?>
					<li><a href="<?php echo site_url().'/html/index/spdhshow/'.$item['id']?>"><?php echo $item['title'];?></a></li>
					<?php }?>

					</div>
					<div style="clear:both"></div>
				<div  style=" margin-top:30px;font-size:18px; font-family:'微软雅黑'; font-weight:bolder; color:#066; border-bottom:solid 2px #066">视频</div>
				<div style="margin-top:20px; margin-left:20px;">
				<?php foreach ($sp as $key=>$item ){?>
				  <li> <a href="<?php echo site_url().'/html/index/spdhshow/'.$item['id']?>" ><?php echo $item['title'];?></a></p></li>
					<?php }?>
					</div>
					   <div style="clear:both"></div>
				</div>
				<div class="lm2"></div>
	  </div></td>
    </tr>
  </table>
</div>  
<?php include "foot.php"?>