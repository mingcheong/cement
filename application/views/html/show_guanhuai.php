<?php include "head.php"?>
  <TR> 
    <TD valign="top" height="148"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="1000" height="250">
        <param name=movie value="images/html/go.swf">
        <param name=quality value=high>
        <param name="wmode" value="transparent">
        <embed src="images/html/go.swf" quality=high pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="1000" height="250" wmode="transparent">
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
              <tr> 
                <td colspan="2" height="44"><img src="images/html/48.jpg" width="201" height="34"></td>
              </tr>
              <tr>
                <td colspan="2" height="44">
				  <?php if (!empty($list)){?>
				  <?php foreach ($list as $art){?>
				  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="29%" valign="top">
                        <table id="__01" width="209" height="162" border="0" cellpadding="0" cellspacing="0">
                          <tr> 
                            <td width="90" height="5"></td>
                            <td valign="top" colspan="3"> <img src="images/html/57_01.gif" width="190" height="5" alt=""></td>
                            <td width="20" rowspan="2" valign="top"> <img src="images/html/57_02.gif" width="19" height="143" alt=""></td>
                          </tr>
                          <tr> 
                            <td height="138"></td>
                            <td width="1"></td>
                            <td rowspan="2" width="10" valign="top"> <img src="images/html/57_03.gif" width="10" height="157" alt=""></td>
                            <td width="179" valign="top"><a href="<?php echo site_url('html/show/details/'.$art['id'].'/'.$art['cid']);?>" target="_blank" ><img src="<?php echo $art['pic']?>" width="180" height="138" style="border:0px;"></a></td>
                          </tr>
                          <tr> 
                            <td height="19"></td>
                            <td></td>
                            <td colspan="2" valign="top"> <img src="images/html/57_05.gif" width="199" height="19" alt=""></td>
                          </tr>
                        </table>
                      </td>
                      <td width="71%" valign="top">
                        <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">
                          <tr> 
                            <td height="35"><font color="#FF0000"><img src="images/html/class_li.gif" width="9" height="9"> 
                              <font size="4" color="red"><?php echo $art['title']?></font></font></td>
                          </tr>
                          <tr> 
                            <td> 
                              <table width="104%" border="0" cellspacing="0" cellpadding="0">
                                <tr> 
                                  <td bgcolor="#CCCCCC" height="1"></td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                          <tr> 
                            <td class="unnamed7"><span class="spantd">
								<a href="<?php echo site_url('html/show/details/'.$art['id'].'/'.$art['cid']);?>" target="_blank" ><?php echo strip_tags($art['content']);?></a></span></td>
                          </tr>
                          <tr>
                            <td class="unnamed7">
                              <div align="right">
									<a href="<?php echo site_url('html/show/details/'.$art['id'].'/'.$art['cid']);?>" target="_blank" style="color:black; text-decoration: none"><img src="images/html/z_more.jpg" width="85" height="19" class="unnamed8"></a> 
									</div>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table><br><br>
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
                        <td width="31%" valign="middle" height="5"><span class="unnamed3">每页<?php echo $pagecfg['per_page']?>条 
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
							<a href="<?php echo site_url('html/show/lists/'.$category['id'].'/'.$category['pid'].'/'.$first_page);?>"><img src="images/html/shouye.jpg" width="45" height="21" class="unnamed8"></a>
						</td>
						<td width="9%" valign="middle" height="5">
							<a href="<?php echo site_url('html/show/lists/'.$category['id'].'/'.$category['pid'].'/'.$prev_page);?>"><img src="images/html/shangye.jpg" width="54" height="21" class="unnamed8"></a>
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
							<a href="<?php echo site_url('html/show/lists/'.$category['id'].'/'.$category['pid'].'/'.$next_page);?>"><img src="images/html/xiaye.jpg" width="54" height="21" class="unnamed8"></a>					
						</td>
						<td width="3%" valign="middle" height="5">
							<a href="<?php echo site_url('html/show/lists/'.$category['id'].'/'.$category['pid'].'/'.$last_page);?>"><img src="images/html/weiye.jpg" width="45" height="21" class="unnamed8"></a>
						</td>				
					<?php }?>				
					<td width="40%" valign="middle" class="unnamed3" height="5"> 　跳转到 
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