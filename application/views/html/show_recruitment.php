<?php include "head.php"?>
  <TR> 
    
  <TD valign="top" height="148"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="1000" height="250">
      <param name=movie value="images/html/go4.swf">
        <param name=quality value=high>
        <param name="wmode" value="transparent">
        <embed src="images/html/go4.swf" quality=high pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="1000" height="250" wmode="transparent">
        </embed> 
      </object></TD>
  </TR>
  <TR bgcolor="#FFFFFF"> 
    <TD height="602" valign="top"> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td width="24%" height="601" valign="top"> 
            <div align="center"><br>
              <table width="85%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td><img src="images/html/66.jpg" width="214" height="34"></td>
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
          <td width="76%" height="601" valign="top"> 
            <table width="97%" border="0" cellspacing="0" cellpadding="0" height="15" align="center">
              <tr>
                <td class="unnamed3" height="31"> 　 <img src="images/html/arrowbule.jpg" width="11" height="9"> 
                  当前位置：　首页 &gt; 招聘信息&gt; </td>
              </tr>
            </table>
            <div align="center">
              <table width="75%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td colspan="3" height="19"><img src="images/html/78.jpg" width="777" height="19"></td>
                </tr>
                <tr> 
                  <td height="73" width="36" valign="top" background="images/html/79.jpg">&nbsp;</td>
                  <td width="705" height="73" valign="top"> 
				  <?php if (!empty($list)){?>
					<?php foreach ($list as $art){?>		  
                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="2" bgcolor="#FFFFFF" >
                      <tr bgcolor="#FFFFFF" valign="bottom"> 
                        <td colspan="4" height="29" align="center" class="unnamed1" > 
                          <div align="left"><font color="#000000"> </font>&nbsp; 
                            <table width="28%" border="0" cellspacing="0" height="20">
                              <tr> 
                                <td background="images/html/45d.jpg" height="29" nowrap><font color="#000000">&nbsp; 
                                  　<b><font size="2" color="#FFFFFF"><?php echo $art['title']?></font></b></font></td>
                              </tr>
                            </table>
                          </div>
                        </td>
                      </tr>
                      <tr bgcolor="#E7E7E7"> 
                        <td width="100" height="22" align="center" class="unnamed1" ><font color="#000000">工作地点：</font></td>
                        <td colspan="3" valign="top" class="unnamed1" ><font color="#000000">&nbsp; <?php echo $art['db0']?>
                          </font></td>
                      </tr>
                      <tr bgcolor="#E7E7E7"> 
                        <td width="100" height="22" align="center" class="unnamed1" ><font color="#000000">工资待遇：</font></td>
                        <td width="248" class="unnamed1">&nbsp;<?php echo $art['db1']?></td>
                        <td width="97" align="center" class="unnamed1" ><font color="#000000">发布日期：</font></td>
                        <td width="256" class="unnamed1" ><font color="#000000">&nbsp; <?php echo $art['addtime']?>
                          </font></td>
                      </tr>
                      <tr bgcolor="#E7E7E7"> 
                        <td height="26" align="center" width="100" class="unnamed1" ><font color="#000000">需求人数：</font></td>
                        <td align="center" width="248" class="unnamed1"> 
                          <div align="left"><font color="#000000">&nbsp; <?php echo $art['db2']?></font></div>
                        </td>
                        <td align="center" width="97" class="unnamed1"><font color="#000000">有效期限：</font></td>
                        <td align="center" width="256" class="unnamed1"> 
                          <div align="left"><font color="#000000">&nbsp;<?php echo $art['db3']?></font></div>
                        </td>
                      </tr>
                      <tr bgcolor="#E7E7E7"> 
                        <td width="100" height="26" align="center" class="unnamed1" ><font color="#000000">具体要求：</font></td>
                        <td colspan="3" align="center" class="unnamed1"> 
                          <table width="100%"  border="0" cellpadding="5" cellspacing="0" >
                            <tr> 
                              <td class="News-05 unnamed1">&nbsp;<font color="#000000"><?php echo $art['db4']?></font></td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                      <tr bgcolor="#F7F7F7"> 
                        <td height="10" colspan="4"> 
                          <div align="right"><a href="<?php echo site_url('html/show/details/'.$art['id'].'/'.$art['cid']);?>"><img src="images/html/87.jpg" width="136" height="30" border="0"></a></div>
                        </td>
                      </tr>
                    </table>
					<?php }?>				
				  <?php }?>							
                  </td>
                  <td width="41" valign="top" background="images/html/79.jpg" height="73">&nbsp;</td>
                  </tr>
                <tr> 
                  <td colspan="3" height="27"><img src="images/html/81.jpg" width="778" height="27"></td>
                </tr>
              </table>
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
    </TD>
  </TR>
</TABLE>
<?php include "foot.php"?>