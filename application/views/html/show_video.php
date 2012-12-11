<?php include "head.php"?>
	<style type="text/css">
	<!--
	.imgpic {
		border: 1px solid #BBB;
		padding: 2px;
		margin: 10px 20px 10px 0;
		vertical-align: top;
	}
-->
	</style>
  <TR> 
    
  <TD valign="top" height="148"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="1000" height="250">
      <param name=movie value="images/html/go7.swf">
        <param name=quality value=high>
        <param name="wmode" value="transparent">
        <embed src="images/html/go7.swf" quality=high pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="1000" height="250" wmode="transparent">
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
          <table width="97%" border="0" cellspacing="0" cellpadding="0" height="15" align="center">
              <tr> 
                
              <td class="unnamed3" height="31" valign="middle" background="images/html/2.jpg"> 
                <img src="images/html/arrowbule.jpg" width="11" height="9"> 当前位置：首页 &gt; 
                <?php echo $title['name']?>&gt; 
                <?php echo $category['name']?>
              </td>
              </tr>
            </table>
            
            <table width="75%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td colspan="3" height="19"><img src="images/html/78.jpg" width="777" height="19"></td>
              </tr>
              <tr> 
                <td height="73" width="36" valign="top" background="images/html/79.jpg">&nbsp;</td>

              <td width="705" height="73" valign="top" class="unnamed1"> 
                <div align="center" style="color:red;font-weight:bold" class="unnamed1">
                  <?php echo $article['title']?>
                </div>			  
                <table width="95%" border="0" cellspacing="0" cellpadding="0" align="center">
                  <tr>
                    <td>
						 <?php if(strpos($article['video'],"wmv") > 0){?>
						 <EMBED id=MediaPlayer src="<?php echo @$article['video']?>" width="640" height="480" loop="false" autostart="true"></EMBED>
						 <?php }else if(strpos($article['video'],"flv") > 0){?>
							<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
								codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0"
								width="600" height="480">
								<param name="movie"
									value="http://www.ask123.net/player/vcastr22.swf?vcastr_file=<?php echo @$article['video']?>">
								<param name="quality" value="high">
								<param name="allowFullScreen" value="true" />
								<embed
									src="http://www.ask123.net/player/vcastr22.swf?vcastr_file=<?php echo @$article['video']?>"
									quality="high"
									pluginspage="http://www.macromedia.com/go/getflashplayer"
									type="application/x-shockwave-flash" width="640" height="480">
								</embed>
							</object>						 
						 <?php }?>	
                    </td>
                  </tr>
                </table>
              </td>
                <td width="41" valign="top" background="images/html/79.jpg" height="73">&nbsp;</td>
              </tr>
              <tr> 
                <td colspan="3" height="27"><img src="images/html/81.jpg" width="778" height="27"></td>
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
<script type="text/javascript">
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