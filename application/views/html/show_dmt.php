<?php include "head.php"?>
<!---- news ---->
<div id="news">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="top"><table width="100%" height="24" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="145"><div class="title_1">多媒体</div></td>
          <td align="right" valign="bottom"><div class="title_2"><a href="javascript:window.history.go(-1)">返回目录</a></div></td>
          <td width="8" valign="bottom"><div class="title_3"></div></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td valign="top" align="center">
	  <div id="content">
	  <div class="title">包装机械多媒体</div>
	  <div class="main">
		<table>
		<?php $index = 0;?>
		<?php foreach ($getCategoryList as $cate){?>
			<?php if ($index%4 == 0){?>
			<tr>
			<?php }?>
				<td>
					<button class="btn_2k3" onclick="window.location='<?php echo site_url()?>/html/show/dmt_list/<?php echo $cate['id']?>'"><?php echo $cate['name']?></button>
				</td>
			<?php if (($index%4+1)==4){?>
			</tr>			
			<?php }$index ++;?>
		<?php }?>
		</table>		
	  </div>
	  </div></td>
    </tr>
  </table>
</div>  
<?php include "foot.php"?>