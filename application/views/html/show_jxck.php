<?php include "head.php"?>
<!---- news ---->
<div id="news">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="top"><table width="100%" height="24" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="145"><div class="title_1">教学参考</div></td>
          <td align="right" valign="bottom"><div class="title_2"><a href="javascript:window.history.go(-1)">返回目录</a></div></td>
          <td width="8" valign="bottom"><div class="title_3"></div></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td valign="top">
	  <div id="content">
		<?php foreach ($getCategoryList as $cate){ if($cate['pic']!=NULL){?>
		&nbsp;<a href="<?php echo $cate['source']?>" target="_blank"  ><img src="<?php echo $cate['pic']?>" border="0" /></a>
		<?php } }?>
	  </div></td>
    </tr>
  </table>
</div>  
<?php include "foot.php"?>