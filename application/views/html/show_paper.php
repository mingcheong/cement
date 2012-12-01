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
              <table width="85%" border="0" cellspacing="0" cellpadding="0" height="626">
                <tr> 
                  <td height="29"><img src="images/html/33.jpg" width="214" height="34"></td>
                </tr>
				<?php include "menu.php"?>
              </table>
            </div>
          </td>
          <td width="76%" height="623" valign="top"> 
            <table width="97%" border="0" cellspacing="0" cellpadding="0" height="15" align="center">
              <tr> 
                <td class="unnamed3" height="31" valign="bottom"> 　 <img src="images/html/arrowbule.jpg" width="11" height="9"> 
                  当前位置：首页 &gt; <?php echo $title['name']?> &gt; <?php echo $category['name']?></td>
              </tr>
            </table>
            <table width="75%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td colspan="3" height="19"><img src="images/html/78.jpg" width="777" height="19"></td>
              </tr>
              <tr> 
                <td height="73" width="36" valign="top" background="images/html/79.jpg">&nbsp;</td>
                <td width="705" height="73" valign="top"> 
                  <?php 
					if(!empty($article['content'])) {echo $article['content'];}
				  ?>
                </td>
                <td width="41" valign="top" background="images/html/79.jpg" height="73">&nbsp;</td>
              </tr>
              <tr> 
                <td colspan="3" height="27"><img src="images/html/81.jpg" width="778" height="27"></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </TD>
  </TR>
</TABLE>
<?php include "foot.php"?>