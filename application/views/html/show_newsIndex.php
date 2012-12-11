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
          <td width="24%" height="623" valign="top" style="padding-top:19px;">
            <div align="center">
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
                <td class="unnamed3" height="31" bgcolor="#CCCCCC" background="images/html/2.jpg"> 
                  　 <img src="images/html/arrowbule.jpg" width="11" height="9"> 当前位置：　首页 
                  &gt; 新闻动态&gt; </td>
              </tr>
            </table>
            <br>
            <table width="94%" border="0" cellspacing="0" cellpadding="0" align="center" height="15">
              <tr> 
                <td colspan="2" height="44"><img src="images/html/60.jpg" width="188" height="34"></td>
              </tr>
            </table>
            <div align="center">
              <table width="94%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td background="images/html/2.jpg" height="32"> 　<img src="images/html/35.jpg" width="11" height="11">　<b class="unnamed7"><font face="Arial, Helvetica, sans-serif">企业公告</font></b></td>
                </tr>
                <tr>
                  <td>
                    <table width="98%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="25%" valign="top"> <br>
                          <table width="77%" border="0" cellspacing="1" cellpadding="0" bgcolor="#CCCCCC" align="center">
                            <tr>
                              <td bgcolor="#FFFFFF" height="156"> 
                                <div align="center"><img src="images/html/nnews_pic.jpg" width="115" height="150"></div>
                              </td>
                            </tr>
                          </table>
                        </td>
                        <td width="75%" valign="top">
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
							<?php foreach ($list['qygg'] as $qygg){?>						  
                            <tr> 
                              <td class="tdd" height="32" valign="bottom"><img src="images/html/W020110725469023291409.gif" width="9" height="9"> 
                                <a href="<?php echo site_url('html/show/details/'.$qygg['id'].'/'.$qygg['cid']);?>" target="_blank"><?php echo substr_replace($qygg['title'],"...",75)?></a></td>
                              <td class="unnamed3" width="30%" height="32" style="text-align:right">[<?php echo date('Y-m-d',strtotime($qygg['addtime']))?>]</td>
                            </tr>
                            <tr> 
                              <td colspan="2" class="unnamed7"><img src="images/html/61.jpg" width="537" height="6"></td>
                            </tr>
							<?php }?>
                            <tr>
                              <td colspan="2" class="unnamed3" height="28"> 
                                <div align="right"><a href="<?php echo site_url('html/show/listNew/'.$qygg['cid'].'/137');?>"><img src="images/html/more.jpg" width="55" height="20" border="0"></a></div>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
              <table width="94%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td background="images/html/2.jpg" height="32"> 　<img src="images/html/35.jpg" width="11" height="11">　<b class="unnamed7"><font face="Arial, Helvetica, sans-serif">公司动态</font></b></td>
                </tr>
                <tr> 
                  <td> 
                    <table width="98%" border="0" cellspacing="0" cellpadding="0">
                      <tr> 
                        <td width="25%" valign="top"> <br>
                          <table width="77%" border="0" cellspacing="1" cellpadding="0" bgcolor="#CCCCCC" align="center">
                            <tr> 
                              <td bgcolor="#FFFFFF" height="156"> 
                                <div align="center"><img src="images/html/nnews_pic_xwkd.jpg" width="115" height="150"></div>
                              </td>
                            </tr>
                          </table>
                        </td>
                        <td width="75%" valign="top"> 
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
							<?php foreach ($list['gsdt'] as $gsdt){?>	
                            <tr> 
                              <td class="tdd" height="32" valign="bottom"><img src="images/html/W020110725469023291409.gif" width="9" height="9"> 
                                <a href="<?php echo site_url('html/show/details/'.$gsdt['id'].'/'.$gsdt['cid']);?>" target="_blank"><?php echo substr_replace($gsdt['title'],"...",75)?></a></td>
                              <td class="unnamed3" width="30%" height="32" style="text-align:right">[<?php echo date('Y-m-d',strtotime($gsdt['addtime']))?>]</td>
                            </tr>
                            <tr> 
                              <td colspan="2" class="unnamed7"><img src="images/html/61.jpg" width="537" height="6"></td>
                            </tr>
							<?php }?>
                            <tr> 
                              <td colspan="2" class="unnamed3" height="28"> 
								<div align="right"><a href="<?php echo site_url('html/show/listNew/'.$gsdt['cid'].'/137');?>"><img src="images/html/more.jpg" width="55" height="20" border="0"></a></div>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
              <table width="94%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td background="images/html/2.jpg" height="32"> 　<img src="images/html/35.jpg" width="11" height="11">　<b class="unnamed7"><font face="Arial, Helvetica, sans-serif">行业资讯</font></b></td>
                </tr>
                <tr> 
                  <td> 
                    <table width="98%" border="0" cellspacing="0" cellpadding="0">
                      <tr> 
                        <td width="25%" valign="top"> <br>
                          <table width="77%" border="0" cellspacing="1" cellpadding="0" bgcolor="#CCCCCC" align="center">
                            <tr> 
                              <td bgcolor="#FFFFFF" height="156"> 
                                <div align="center"><img src="images/html/nnews_pic1.jpg" width="115" height="150"></div>
                              </td>
                            </tr>
                          </table>
                        </td>
                        <td width="75%" valign="top"> 
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
							<?php foreach ($list['hyzx'] as $hyzx){?>	
                            <tr> 
                              <td class="tdd" height="32" valign="bottom"><img src="images/html/W020110725469023291409.gif" width="9" height="9"> 
                                <a href="<?php echo site_url('html/show/details/'.$hyzx['id'].'/'.$hyzx['cid']);?>" target="_blank"><?php echo substr_replace($hyzx['title'],"...",75)?></a></td>
                              <td class="unnamed3" width="30%" height="32" style="text-align:right">[<?php echo date('Y-m-d',strtotime($hyzx['addtime']))?>]</td>
                            </tr>
                            <tr> 
                              <td colspan="2" class="unnamed7"><img src="images/html/61.jpg" width="537" height="6"></td>
                            </tr>
							<?php }?>
                            <tr> 
                              <td colspan="2" class="unnamed3" height="28"> 
								<div align="right"><a href="<?php echo site_url('html/show/listNew/'.$hyzx['cid'].'/137');?>"><img src="images/html/more.jpg" width="55" height="20" border="0"></a></div>
                              </td>
                            </tr>                        
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
              <table width="94%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td background="images/html/2.jpg" height="32"> 　<img src="images/html/35.jpg" width="11" height="11">　<b class="unnamed7">媒体聚焦</b></td>
                </tr>
                <tr> 
                  <td> 
                    <table width="98%" border="0" cellspacing="0" cellpadding="0">
                      <tr> 
                        <td width="25%" valign="top"> <br>
                          <table width="77%" border="0" cellspacing="1" cellpadding="0" bgcolor="#CCCCCC" align="center">
                            <tr> 
                              <td bgcolor="#FFFFFF" height="156"> 
                                <div align="center"><img src="images/html/nnews_pic2.jpg" width="115" height="150"></div>
                              </td>
                            </tr>
                          </table>
                        </td>
                        <td width="75%" valign="top"> 
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
 							<?php foreach ($list['mtjj'] as $mtjj){?>	
                            <tr> 
                              <td class="tdd" height="32" valign="bottom"><img src="images/html/W020110725469023291409.gif" width="9" height="9"> 
                                <a href="<?php echo site_url('html/show/details/'.$mtjj['id'].'/'.$mtjj['cid']);?>" target="_blank"><?php echo substr_replace($mtjj['title'],"...",75)?></a></td>
                              <td class="unnamed3" width="30%" height="32" style="text-align:right">[<?php echo date('Y-m-d',strtotime($mtjj['addtime']))?>]</td>
                            </tr>
                            <tr> 
                              <td colspan="2" class="unnamed7"><img src="images/html/61.jpg" width="537" height="6"></td>
                            </tr>
							<?php }?>
                            <tr> 
                              <td colspan="2" class="unnamed3" height="28"> 
								<div align="right"><a href="<?php echo site_url('html/show/listNew/'.$mtjj['cid'].'/137');?>"><img src="images/html/more.jpg" width="55" height="20" border="0"></a></div>
                              </td>
                            </tr>  
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
              <br>
              <br>
            </div>
          </td>
        </tr>
      </table>
    </TD>
  </TR>
</TABLE>
<?php include "foot.php"?>