<?php include "head.php"?>

  <TR> 
    <TD colspan="4" height="384"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="1000" height="384">
        <param name=movie value="images/html/baner4.swf">
        <param name=quality value=high>
        <param name="wmode" value="transparent">
        <embed src="images/html/baner4.swf" quality=high pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="1000" height="384" wmode="transparent">
        </embed> 
      </object> </TD>
  </TR>
  <TR bgcolor="#FFFFFF"> 
    <TD valign="top" colspan="3" rowspan="2"> <br>
      <table width="99%" border="0" cellspacing="1" cellpadding="0" bgcolor="#CCCCCC" align="left">
        <tr> 
          <td bgcolor="#FFFFFF"><img src="images/html/27a.jpg" width="758" height="29"> 
            <table width="99%" border="0" cellspacing="0" cellpadding="0" height="218" align="center">
              <tr bgcolor="#FFFFFF"> 
                <td height="255" width="45%"> 
                  <div align="center"> 
                    <table width="75%" border="0" cellspacing="10">
                      <tr> 
                        <td height="13"> 
                          <script type="text/javascript">
                     var focus_width=318
                     var focus_height=255
                     var text_height=20
                     var swf_height = focus_height+text_height
					 
					 var pics = "";
					 var links = "";
					 var texts = "";
					 <?php if(isset($list['pic_news'])){?>
					 <?php foreach ($list['pic_news'] as $pic_news){?>
						pics += '|<?php echo $pic_news['pic'];?>';
						links += '|<?php echo site_url('html/show/details/'.$pic_news['id'].'/'.$pic_news['cid']);?>';
						texts += '|<?php echo $pic_news['title'];?>';
					 <?php }}?>
					 pics = pics.substr(1);
					 links = links.substr(1);
					 texts = texts.substr(1);		

                     document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ focus_width +'" height="'+ swf_height +'">');
                     document.write('<param name="allowScriptAccess" value="sameDomain"><param name="movie" value="images/html/focus2.swf"><param name=wmode value=transparent><param name="quality" value="high">');
                     document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
                     document.write('<param name="FlashVars" value="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'">');
                     document.write('<embed src="http://mat1.qq.com/2006/flash/playswf.swf" wmode="opaque" FlashVars="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'" menu="false" bgcolor="#DADADA" quality="high" width="'+ focus_width +'" height="'+ swf_height +'" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');  document.write('</object>');
			   </script>
                        </td>
                      </tr>
                    </table>
                    
                  </div>
                </td>
                <td height="245" width="55%" valign="top"> 
                  <table width="98%" border="0" cellspacing="0" cellpadding="0" align="center">
					<?php if(isset($list['qyyw_td'])){?>	
                    <tr valign="top"> 
                      
                    <td colspan="2" height="119"><b><span class="unnamed4"> <font color="315699"> 
                      <?php echo $list['qyyw_td']['title']?>
                      </font></span></b><span class="unnamed3"><br><a href="<?php echo site_url('html/show/details/'.$list['qyyw_td']['id'].'/'.$list['qyyw_td']['cid']);?>" target="_blank" style="color:black; text-decoration: none">
                      <span class="spantd">
                      <a href="javascript:void()"><?php echo substr_replace(strip_tags($list['qyyw_td']['content']),"...",278);?></a>
                     <a href="<?php echo site_url('html/show/details/'.$list['qyyw_td']['id'].'/'.$list['qyyw_td']['cid']);?>" target="_blank" style="color:black; text-decoration: none"><font color="#FF0000">[详细信息]</font><a>
                    
                      <br>
                        </span></td>
                    </tr>
					<?php }?>			
					  <?php foreach ($list['qyyw'] as $qyyw){?>	
					  <tr> 
						<td class="tdd" height="30"><img src="images/html/6.jpg" width="3" height="6">
							<a href="<?php echo site_url('html/show/details/'.$qyyw['id'].'/'.$qyyw['cid']);?>" target="_blank"><?php echo substr_replace(strip_tags($qyyw['title']),"...",60);?></a>
						</td>
						<td class="unnamed3" height="30" width="19%" nowrap>[<?php echo date('Y-m-d',strtotime($qyyw['addtime']))?>]</td>
					  </tr>
					  <tr> 
						<td class="unnamed2" colspan="2"><img src="images/html/5.jpg" width="364" height="3"></td>
					  </tr>
					  <?php }?>					
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </TD>
    <TD width="232" height="226" valign="top"> <br>
      <table width="84%" border="0" cellspacing="1" cellpadding="0" height="208" align="center" bgcolor="#CCCCCC">
        <tr> 
          <td bgcolor="#FFFFFF" valign="top" height="158">
            <table width="75%" border="0" cellspacing="0" cellpadding="0" height="205">
              <tr> 
                
              <td><img src="images/html/28.jpg" width="230" height="31" usemap="#Map" border="0"></td>
              </tr>
              <tr>
                <td> 
                  <table border="0" cellpadding="5" cellspacing="0" width="190" height="152" align="center">
                    <tr> 
                      <td height="158" valign="top"> <marquee scrollamount='1' scrolldelay='30' direction= 'UP' width='190' height='100' onMouseOver='stop();' onMouseOut="start()" class="unnamed2"> 
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" height="98">
						  <?php foreach ($list['qygg'] as $qygg){?>	
                          <tr> 
                            <td class="tdd" height="25"><img src="images/html/6.jpg" width="3" height="6">
								<a href="<?php echo site_url('html/show/details/'.$qygg['id'].'/'.$qygg['cid']);?>" target="_blank"><?php echo substr_replace($qygg['title'],"...",36);?></a>
                            </td>
                          </tr>
                          <tr> 
                            <td class="unnamed2" height="2"><img src="images/html/5a.jpg" width="220" height="3"></td>
                          </tr>
						  <?php }?>
                        </table>
                        </marquee></td>
                    </tr>
                  </table>
                  <div align="center"></div>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </TD>
  </TR>
  <TR bgcolor="#FFFFFF"> 
    <TD valign="top" height="87">
      <table width="75%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td><img src="images/html/btn1.gif" width="232" height="42"></td>
        </tr>
        <tr> 
          <td><img src="images/html/btn2.gif" width="232" height="41"></td>
        </tr>
        <tr>
          <td><img src="images/html/btn3.gif" width="232" height="42"></td>
        </tr>
      </table>
    </TD>
  </TR>
  <TR bgcolor="#FFFFFF"> 
    <TD colspan="4" height="98" valign="top">
      
    <table width="89%" border="0" cellspacing="0" cellpadding="0" align="center">
      <tr> 
          <td width="6%" height="86"><img src="images/html/11.jpg" width="33" height="169"></td>
          <td width="94%" height="86" valign="middle"> 
            <div align="center"> 
              <div id=demo style=overflow:hidden;width:943;> 
                <div align="center"> 
                  <table border="0" cellpadding="0" cellspacing="0" align="center">
                    <tr> 
                      <td id=demo1 > 
                        <table border="0" valign="center" cellpadding="0" cellspacing="0">
                          <tr> 
						  <?php foreach ($list['zdgczs'] as $zdgczs){?>
                            <td class="tdd" style="text-align:center;padding-right:2px;">							
								<a href="<?php echo site_url()?>/html/show/lists/217/142"><img src="<?php echo $zdgczs['pic']?>" width="130" height="120" style="border:0px;"></a><br>
								<a href="<?php echo site_url()?>/html/show/lists/217/142"><?php echo $zdgczs['title']?></a>
                            </td>
							<?php }?>
                          </tr>
                        </table>
                      </td>
                      <td id=demo2 valign=top></td>
                    </tr>
                  </table>
                </div>
              </div>
              <div align="center"> 
                <script> 
var speed=30 
demo2.innerHTML=demo1.innerHTML 
function Marquee(){ 
if(demo2.offsetWidth-demo.scrollLeft<=0) 
demo.scrollLeft-=demo1.offsetWidth 
else{ 
demo.scrollLeft++ 
} 
} 
var MyMar=setInterval(Marquee,speed) 
demo.onmouseover=function() {clearInterval(MyMar)} 
demo.onmouseout=function() {MyMar=setInterval(Marquee,speed)} 
</script>
              </div>
            </div>
          </td>
        </tr>
      </table>
    </TD>
  </TR>
  <TR bgcolor="#FFFFFF"> 
    <TD height="183" width="277" valign="top">
      <table width="95%" border="0" cellspacing="0" cellpadding="0" bgcolor="#CCCCCC" align="left">
        <tr> 
          <td height="208" bgcolor="#FFFFFF" valign="top"> 
            <div align="center"><img src="images/html/92.jpg" width="269" height="212"></div>
          </td>
        </tr>
      </table>
    </TD>
    <TD valign="top" width="248" height="183"> 
      <table width="98%" border="0" cellspacing="1" cellpadding="0" bgcolor="#CCCCCC">
        <tr> 
          <td height="208" bgcolor="#FFFFFF" valign="top"> 
            <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
              <tr> 
                <td background="images/html/m_bg2a.gif" height="38"> 　　<font color="#0066FF"><span class="unnamed4"><font color="#0033CC"><b></b></font></span></font></td>
              </tr>
              <tr> 
                <td> 
                  <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" height="98">
				  <?php foreach ($list['ldgh'] as $ldgh){?>	
				  <tr> 
					<td class="tdd" height="25"><img src="images/html/6.jpg" width="3" height="6">
						<a href="<?php echo site_url('html/show/details/'.$ldgh['id'].'/'.$ldgh['cid']);?>" target="_blank" ><?php echo substr_replace($ldgh['title'],"...",42);?></a>
					</td>
				  </tr>
				  <tr> 
					<td class="unnamed2" height="2"><img src="images/html/5a.jpg" width="220" height="3"></td>
				  </tr>
				  <?php }?>	
                  </table>
                </td>
              </tr>
            </table>
          <div align="left"> 
            <table width="95%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>
                  <div align="right"><a href="index.php/html/show/listNew/206/129"><img src="images/html/more1.jpg" border="0"></a></div>
                </td>
              </tr>
            </table>
          </div>
        </td>
        </tr>
      </table>
    </TD>
    <TD width="243" valign="top" height="183"> 
      <table width="98%" border="0" cellspacing="1" cellpadding="0" bgcolor="#CCCCCC">
        <tr> 
          <td height="206" bgcolor="#FFFFFF" valign="top"> 
            <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
              <tr> 
                <td background="images/html/m_bg2b.jpg" height="38">&nbsp;</td>
              </tr>
              <tr> 
                <td> 
                  <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" height="98">
				  <?php foreach ($list['gsdt'] as $gsdt){?>	
				  <tr> 
					<td class="tdd" height="25"><img src="images/html/6.jpg" width="3" height="6">
						<a href="<?php echo site_url('html/show/details/'.$gsdt['id'].'/'.$gsdt['cid']);?>" target="_blank"><?php echo substr_replace($gsdt['title'],"...",42);?></a>
					</td>
				  </tr>
				  <tr> 
					<td class="unnamed2" height="2"><img src="images/html/5a.jpg" width="220" height="3"></td>
				  </tr>
				  <?php }?>				  
                  </table>
                </td>
              </tr>
            </table>
          <div align="right">
            <table width="95%" border="0" cellspacing="0" cellpadding="0" align="left">
              <tr> 
                <td> 
                  <div align="right"><a href="index.php/html/show/listNew/209/137"><img src="images/html/more1.jpg" border="0"></a></div>
                </td>
              </tr>
            </table>
          </div>
        </td>
        </tr>
      </table>
    </TD>
    <TD height="183" valign="top">
      <table width="98%" border="0" cellspacing="0" cellpadding="0" height="188" align="center" bgcolor="#CCCCCC">
        <tr> 
          
        <td bgcolor="#FFFFFF" valign="bottom" height="205" background="images/html/14z.jpg"> 
          <table width="89%" border="0" cellspacing="0" cellpadding="0" align="center">
				<?php foreach ($list['zp'] as $zp){?>	
              <tr> 
                
              <td class="tdd" height="25"><img src="images/html/6.jpg" width="3" height="6"> 
                <a href="<?php echo site_url('html/show/listNew/222/220');?>" target="_blank"><?php echo $zp['title']?></a>
              </td>
              </tr>
              <tr> 
                <td class="unnamed2"><img src="images/html/5a.jpg" width="210" height="3"></td>
              </tr>
			  <?php }?>
            </table>
          </td>
        </tr>
      </table>
    </TD>
  </TR>
  <TR bgcolor="#FFFFFF"> 
    <TD colspan="4" height="19" valign="top">&nbsp; </TD>
  </TR></TABLE>
<?php include "foot.php"?>
<map name="Map">
  <area shape="rect" coords="183,1,230,28" href="index.php/html/show/listNew/210/137">
</map>
