<?php include "head.php"?>
  <TR> 
    <TD valign="top" height="148"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="1000" height="250">
        <param name=movie value="images/html/go2.swf">
        <param name=quality value=high>
        <param name="wmode" value="transparent">
        <embed src="images/html/go2.swf" quality=high pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="1000" height="250" wmode="transparent">
        </embed> 
      </object></TD>
  </TR>
  <TR bgcolor="#FFFFFF"> 
    <TD height="613" valign="top">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td width="24%" height="623" valign="top" style="padding-top:0px;">
            <div align="center"><br>
              <table width="85%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td><img src="images/html/33.jpg" width="214" height="34"></td>
                </tr>
                <?php include "menu.php"?>
              </table>
			  	<table  height="100%" border="0" bgcolor="CAEDFE" cellspacing="0" cellpadding="0">
                <tr> 
                  <td width="214">&nbsp;</td>
                </tr>
              </table>			  
            </div>
          </td>
          
        <td width="76%" height="623" valign="top"> <br>
          <br>
          <table width="94%" border="0" cellspacing="0" cellpadding="0" align="center" height="15">
			  <form action="<?php echo site_url();?>/html/show/search" method="post">
			  <tr>
				<td height="50" align="center">
				<input name="sval" type="text" size="40" value="<?php echo @$sval;?>" style="font-size:14px;">
				<input type="submit" name="Submit" value=" 检 索 " style="height:23px"></td>
			  </tr>
			  </form>
		  
			  <tr>
				<td height="40" valign="top" class="font15"><?php echo @$pagecfg['base_url'];?>
				<strong>检索结果:共检索出<span class=red><?php echo @$pagecfg['total_rows'];?></span>条关于 <font color=red><?php echo @$sval;?></font> 的信息</strong></td>
			  </tr>
              <tr>
                <td colspan="2" height="44">
				  <?php if (!empty($list)){?>
					<?php foreach ($list as $art){?>
						<table width="92%" border="0" cellspacing="0" cellpadding="3" align="center">
						  <tr>
							<td>
							
							  <a href="<?php echo site_url('html/show/details/'.$art['id'].'/'.$art['cid']);?>" target="_blank" style="text-decoration: none" title="<?php echo $art['title']?>" class="unnamed7">·<?php echo str_replace($sval,'<font color=red><strong>'.$sval.'</strong></font>',@$art['title']);?></a>
								</td>
						  </tr>
						  <tr>
							<td>
							<?php echo str_replace($sval,'<font color=red><strong>'.$sval.'</strong></font>',@$art['content']);?>
							</td>
						  </tr>
						  <tr>
							<td height="40" valign="top" style="color:#336600"><?php echo site_url('html/show/details/'.$art['id'].'/'.$art['cid']);?>&nbsp;&nbsp;[[<?php echo date('Y-m-d',strtotime($art['addtime']))?>]]&nbsp;
							<?php if (isset($art['pic'])){?><img src="images/html/ico_camera.jpg" width="15" height="11"><?php }?></td>
						  </tr>
						</table>
					<?php }?>				
				  <?php }?>
                  <div align="center"> <br>
                    <br>
					<?php if (!empty($list)){?>
					<?php 
						$cur_page = $pagecfg['page']+1;
						$total_page = intval($pagecfg['total_rows']/$pagecfg['per_page'])+1;
						$first_page = 0;
						$last_page = intval($pagecfg['total_rows']/$pagecfg['per_page']);						
						$next_page = $cur_page ? $last_page : $last_page;;
						$prev_page = $cur_page - 1? $first_page : $first_page;
						
					?>
                    <table width="95%" border="0" cellspacing="0" cellpadding="0">
                      <tr> 
                        <td width="31%" valign="middle" height="5" nowrap><span class="unnamed3">每页<?php echo $pagecfg['per_page']?>条 
						共<?php echo $pagecfg['total_rows']?>条信息&nbsp;页次：<?php echo $cur_page?>/<?php echo $total_page?>页</span><br>
                        </td>
					<?php if ($cur_page - 1 == $first_page){?>
						<td width="8%" valign="middle" height="5">
							<img src="images/html/shouye.jpg" width="45" height="21">
						</td>
						<td width="9%" valign="middle" height="5">
							<img src="images/html/shangye.jpg" width="54" height="21">
						</td>
					<?php }else{?>
						<td width="8%" valign="middle" height="5">
							<a href="<?php echo site_url('html/show/lists/'.$first_page.'/'.$sval);?>"><img src="images/html/shouye.jpg" width="45" height="21" class="unnamed8"></a>
						</td>
						<td width="9%" valign="middle" height="5">
							<a href="<?php echo site_url('html/show/lists/'.$prev_page.'/'.$sval);?>"><img src="images/html/shangye.jpg" width="54" height="21" class="unnamed8"></a>
						</td>			
					<?php }?>				
				
					<?php if ($cur_page == $total_page){?>
					<td width="9%" valign="middle" height="5">
						<img src="images/html/xiaye.jpg" width="54" height="21">
					</td>
					<td width="3%" valign="middle" height="5">
						<img src="images/html/weiye.jpg" width="45" height="21">
					</td>
					<?php }else{?>
						<td width="9%" valign="middle" height="5">
							<a href="<?php echo site_url('html/show/lists/'.$next_page.'/'.$sval);?>"><img src="images/html/xiaye.jpg" width="54" height="21" class="unnamed8"></a>					
						</td>
						<td width="3%" valign="middle" height="5">
							<a href="<?php echo site_url('html/show/lists/'.$last_page.'/'.$sval);?>"><img src="images/html/weiye.jpg" width="45" height="21" class="unnamed8"></a>
						</td>				
					<?php }?>				
					<td width="40%" valign="middle" class="unnamed3" height="5"> 　跳转到 
					  <input type="text" name="gopage" id="gopage" size="2">页
					  <?php if($total_page == 1){?>
						<img src="images/html/go.jpg" width="28" height="18" class="unnamed8">
					  <?php }else{?>
						<a href="javascript:goto_page('<?php echo site_url('html/show/lists/'.$cate['id'].'/'.$cate['pid']);?>');"><img src="images/html/go.jpg" width="28" height="18" class="unnamed8"></a>
					  <?php }?>
					  </td>
                      </tr>
                    </table>
					<?php }?>
                  </div>
				</td>
              </tr>
			  
			  <form action="<?php echo site_url();?>/html/show/search" method="post">
			  <tr>
				<td height="50" align="center">
				<input name="sval" type="text" size="40" value="<?php echo @$sval;?>" style="font-size:14px;">
				<input type="submit" name="Submit" value=" 检 索 " style="height:23px"></td>
			  </tr>
			  </form>
            </table>
            <br>
          </td>
        </tr>
      </table>
    </TD>
  </TR>
</TABLE>
<?php include "foot.php"?>
<script>
function goto_page(site_url){
	var pageNo = document.getElementById('gopage').value;
	if(pageNo != null && pageNo!=""){
		if(!isNaN(pageNo)){
			pageNo = pageNo - 1;
			var url = site_url+"/"+pageNo;
			window.location=url;
		}
	}
}
</script>