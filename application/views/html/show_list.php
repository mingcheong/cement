<?php include "head.php"?>
  <TR> 
    <TD valign="top" height="148"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="1000" height="250">
        <param name=movie value="images/html/go.swf">
        <param name=quality value=high>
        <param name="wmode" value="transparent">
        <embed src="images/html/o.swf" quality=high pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="1000" height="250" wmode="transparent">
        </embed> 
      </object></TD>
  </TR>
  <TR bgcolor="#FFFFFF"> 
    <TD height="613" valign="top">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td width="24%" height="623" valign="top"> 
            <div align="center"><br>
              <table width="85%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td><img src="images/html/33.jpg" width="214" height="34"></td>
                </tr>
                <?php include "menu.php"?>
              </table>
            </div>
          </td>
          <td width="76%" height="623" valign="top"> 
            <table width="97%" border="0" cellspacing="0" cellpadding="0" height="15" align="center">
              <tr> 
                <td class="unnamed3" height="31" valign="bottom"> 　 <img src="images/html/arrowbule.jpg" width="11" height="9"> 
                  当前位置：　首页 &gt; <?php echo $title['name']?> &gt; <?php echo $category['name']?></td>
              </tr>
            </table>
            <table width="75%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td colspan="3" height="19"><img src="images/html/78.jpg" width="777" height="19"></td>
              </tr>
              <tr> 
                <td height="73" width="36" valign="top" background="images/html/79.jpg">&nbsp;</td>
                <td width="705" height="73" valign="top"> 
                  <table width="103%" border="0" cellspacing="0" cellpadding="0" align="center" height="15">
                    <tr> 
                      <td colspan="2" height="44"><img src="images/html/<?php echo $category['logo']?>"  height="34"></td>
                    </tr>
                  </table>
				  <?php if (!empty($list)){?>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0" height="15">
					<?php $index = 0;?>
					<?php foreach ($list as $art){?>
					<?php if ($index%3 == 0){?>
					<tr>
					<?php }?>					
                      <td width="38%"> 
						<table width="100%" border="0" cellspacing="0" cellpadding="0" height="15">
							<tr><td><div align="center"><img src="<?php echo $art['pic']?>" width="220" height="184"></div></td></tr>
							<tr><td class="unnamed3"><div align="center"><img src="images/html/arrowbule.jpg" width="11" height="9"> <?php echo $art['title']?></div></td></tr>
						</table>
                      </td>					  
					<?php if (($index%3+1)==3){?>
					</tr>			
					<?php }$index ++;?>
					<?php }?>				
                  </table>
				  <?php }?>
                </td>
                <td width="41" valign="top" background="images/html/79.jpg" height="73">&nbsp;</td>
              </tr>
              <tr> 
                <td colspan="3" height="27"><img src="images/html/81.jpg" width="778" height="27"></td>
              </tr>
            </table>
            <br>
			<?php if (!empty($list)){?>
            <table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
              <tr> 
                <td width="31%" valign="middle" height="5">
					<span class="unnamed3">
					<?php 
						$cur_page = $pagecfg['page']+1;
						$total_page = intval($pagecfg['total_rows']/$pagecfg['per_page'])+1;
						$first_page = 0;
						$last_page = intval($pagecfg['total_rows']/$pagecfg['per_page']);						
						$next_page = $cur_page ? $last_page : $last_page;;
						$prev_page = $cur_page - 1? $first_page : $first_page;
						
					?>
					每页<?php echo $pagecfg['per_page']?>条 
                  共<?php echo $pagecfg['total_rows']?>条信息&nbsp;页次：<?php echo $cur_page?>/<?php echo $total_page?>页</span>
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
						<a href="<?php echo site_url('html/show/lists/'.$cate['id'].'/'.$cate['pid'].'/'.$first_page);?>"><img src="images/html/shouye.jpg" width="45" height="21" class="unnamed8"></a>
					</td>
					<td width="9%" valign="middle" height="5">
						<a href="<?php echo site_url('html/show/lists/'.$cate['id'].'/'.$cate['pid'].'/'.$prev_page);?>"><img src="images/html/shangye.jpg" width="54" height="21" class="unnamed8"></a>
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
						<a href="<?php echo site_url('html/show/lists/'.$cate['id'].'/'.$cate['pid'].'/'.$next_page);?>"><img src="images/html/xiaye.jpg" width="54" height="21" class="unnamed8"></a>					
					</td>
					<td width="3%" valign="middle" height="5">
						<a href="<?php echo site_url('html/show/lists/'.$cate['id'].'/'.$cate['pid'].'/'.$last_page);?>"><img src="images/html/weiye.jpg" width="45" height="21" class="unnamed8"></a>
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