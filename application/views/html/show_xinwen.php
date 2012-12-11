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
                  <td><img src="images/html/59.jpg" width="214" height="34"></td>
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
          <table width="97%" border="0" cellspacing="0" cellpadding="0" height="15" align="center">
              <tr> 
                
              <td class="unnamed3" height="31" valign="middle" background="images/html/2.jpg"> 
                <img src="images/html/arrowbule.jpg" width="11" height="9"> 当前位置：首页 &gt; 
                <?php echo $title['name']?>&gt; 
                <?php echo $category['name']?>
              </td>
              </tr>
            </table>
			
			
          <br>
          <table width="94%" border="0" cellspacing="0" cellpadding="0" align="center" height="15">
			  <?php if (!empty($category['logo'])){?>
              <tr> 
                <td colspan="2" height="44"><img src="images/html/<?php echo $category['logo']?>"height="34"></td>
              </tr>
			  <?php }?>	
              <tr>
                <td colspan="2" height="44">
				  <?php if (!empty($list)){?>
                  <table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
					<?php foreach ($list as $art){?>
						<tr> 
						  
                    <td class="tdd" width="88%" height="27" valign="middle"><img src="images/html/W020110725469023291409.gif" width="9" height="9"> 
                      <a href="<?php echo site_url('html/show/details/'.$art['id'].'/'.$art['cid']);?>" target="_blank"> 
                      <?php echo $art['title']?>
                      </a> 
                      <?php if (isset($art['pic'])){?>
                      <img src="images/html/ico_camera.jpg" width="15" height="11"> 
                      <?php }?>
                    </td>
						  
                    <td class="unnamed3" width="12%" height="16">[ 
                      <?php echo date('Y-m-d',strtotime($art['addtime']))?>
                      ]</td>
						</tr>
						<tr> 
						  <td colspan="2" class="unnamed7"><img src="images/html/63.jpg" width="719" height="5"></td>
						</tr>
					<?php }?>				
                  </table>
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
                    
                  <table width="99%" border="0" cellspacing="0" cellpadding="0">
                    <tr> 
                        
                      <td width="30%" valign="middle" height="5"><span class="unnamed3">每页 
                        <?php echo $pagecfg['per_page']?>
                        条 共 
                        <?php echo $pagecfg['total_rows']?>
                        条信息&nbsp;页次： 
                        <?php echo $cur_page?>
                        / 
                        <?php echo $total_page?>
                        页</span><br>
                        </td>
					<?php if ($cur_page - 1 == $first_page){?>
						
                      <td width="2%" valign="middle" height="5"> <img src="images/html/shouye.jpg" width="45" height="21"> 
                      </td>
						
                      <td width="5%" valign="middle" height="5"> <img src="images/html/shangye.jpg" width="54" height="21"> 
                      </td>
					<?php }else{?>
						
                      <td width="5%" valign="middle" height="5"> <a href="<?php echo site_url('html/show/lists/'.$category['id'].'/'.$category['pid'].'/'.$first_page);?>"><img src="images/html/shouye.jpg" width="45" height="21" class="unnamed8"></a> 
                      </td>
						
                      <td width="6%" valign="middle" height="5"> <a href="<?php echo site_url('html/show/lists/'.$category['id'].'/'.$category['pid'].'/'.$prev_page);?>"><img src="images/html/shangye.jpg" width="54" height="21" class="unnamed8"></a> 
                      </td>			
					<?php }?>				
				
					<?php if ($cur_page == $total_page){?>
					  <td width="5%" valign="middle" height="5"> <img src="images/html/xiaye.jpg" width="54" height="21"> 
                      </td>
					  <td width="5%" valign="middle" height="5"> <img src="images/html/weiye.jpg" width="45" height="21"> 
                      </td>
					<?php }else{?>
						
                      <td width="6%" valign="middle" height="5"> <a href="<?php echo site_url('html/show/lists/'.$category['id'].'/'.$category['pid'].'/'.$next_page);?>"><img src="images/html/xiaye.jpg" width="54" height="21" class="unnamed8"></a>	
                      </td>
						
                      <td width="5%" valign="middle" height="5"> <a href="<?php echo site_url('html/show/lists/'.$category['id'].'/'.$category['pid'].'/'.$last_page);?>"><img src="images/html/weiye.jpg" width="45" height="21" class="unnamed8"></a> 
                      </td>				
					<?php }?>				
					  <td width="31%" valign="middle" class="unnamed3" height="5"> 
                        跳转到 
                        <input type="text" name="gopage" id="gopage" size="2">页
					  <?php if($total_page == 1){?>
						<img src="images/html/go.jpg" width="28" height="18" class="unnamed8">
					  <?php }else{?>
						<a href="javascript:goto_page('<?php echo site_url('html/show/lists/'.$category['id'].'/'.$category['pid']);?>');"><img src="images/html/go.jpg" width="28" height="18" class="unnamed8"></a>
					  <?php }?>
					  </td>
                      </tr>
                    </table>
					<?php }?>
                  </div>
				</td>
              </tr>
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