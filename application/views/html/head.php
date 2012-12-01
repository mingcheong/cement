<HTML>
<HEAD>
<TITLE>宁波科环新型建材股份有限公司</TITLE>
<base href="<?php echo base_url() ;?>"/>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<style type="text/css">
<!--
.unnamed1 {  font-size: 12px; color: #FF0000; text-decoration: none}
.unnamed2 {  font-size: 12px; color: #333333; text-decoration: none}
.unnamed3 {  font-size: 12px; color: 656565; text-decoration: none; line-height: 22px}
.unnamed4 {  font-size: 12px; color: #003399; text-decoration: none}
.unnamed5 {  font-size: 12px; color: #FFFFFF; text-decoration: none}
.unnamed6 {  font-family: "Arial", "Helvetica", "sans-serif"; font-size: 14px; color: 0059CB; text-decoration: none}
.unnamed7 {  font-size: 14px; color: #333333; line-height: 25px}
.unnamed8 {  border:0px}
-->
</style>
<script language="JavaScript">
<!--
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
// -->

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_showHideLayers() { //v3.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=MM_findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v='hide')?'hidden':v; }
    obj.visibility=v; }
}
//-->
</script>
</HEAD>
<BODY BGCOLOR=#B1DDFE LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>
<div id="Layer1" style="position:absolute; left:302px; top:134px; width:102px; height:200px; z-index:1; visibility: hidden" onMouseMove="MM_showHideLayers('Layer1','','show')" onMouseOut="MM_showHideLayers('Layer1','','hide')"> 
  <table width="110%" border="0" cellspacing="2" cellpadding="0" class="unnamed5">
	<?php foreach ($zjgo as $z){?>
    <tr> 
      <td bgcolor="3796D8" height="25" class="unnamed5"> 
        <div align="center">
			<?php if ($z['type'] == 0){?>
			<a href="<?php echo site_url('html/show/listNew/'.$z['id'].'/'.$z['pid']);?>" class="unnamed5"><?php echo $z['name']?></a>
			<?php }else if($z['type'] == 1){?>
			<a href="<?php echo site_url('html/show/lists/'.$z['id'].'/'.$z['pid']);?>" class="unnamed5"><?php echo $z['name']?></a>
			<?php }else if($z['type'] == 2){?>
			<a href="<?php echo site_url('html/show/view/'.$z['id'].'/'.$z['pid']);?>" class="unnamed5"><?php echo $z['name']?></a>
			<?php }?>			
		</div>
      </td>
    </tr>
	<?php }?> 
  </table>
</div>
<div id="Layer2" style="position:absolute; left:412px; top:135px; width:100px; height:207px; z-index:2; visibility: hidden" onMouseMove="MM_showHideLayers('Layer2','','show')" onMouseOut="MM_showHideLayers('Layer2','','hide')"> 
  <table width="110%" border="0" cellspacing="2" cellpadding="0" class="unnamed5">
	<?php foreach ($culture as $c){?>
    <tr> 
      <td bgcolor="3796D8" height="25" class="unnamed5"> 
        <div align="center">
			<?php if ($c['type'] == 0){?>
			<a href="<?php echo site_url('html/show/listNew/'.$c['id'].'/'.$c['pid']);?>" class="unnamed5"><?php echo $c['name']?></a>
			<?php }else if($c['type'] == 1){?>
			<a href="<?php echo site_url('html/show/lists/'.$c['id'].'/'.$c['pid']);?>" class="unnamed5"><?php echo $c['name']?></a>
			<?php }else if($c['type'] == 2){?>
			<a href="<?php echo site_url('html/show/view/'.$c['id'].'/'.$c['pid']);?>" class="unnamed5"><?php echo $c['name']?></a>
			<?php }?>		
		</div>
      </td>
    </tr>
	<?php }?>
  </table>
</div>
<div id="Layer3" style="position:absolute; left:524px; top:134px; width:108px; height:117px; z-index:3; visibility: hidden" onMouseOut="MM_showHideLayers('Layer3','','hide')" onMouseMove="MM_showHideLayers('Layer3','','show')"> 
  <table width="97%" border="0" cellspacing="2" cellpadding="0" class="unnamed5">
	<?php foreach ($news as $n){?>
    <tr> 
      <td bgcolor="3796D8" height="25" class="unnamed5"> 
        <div align="center">
			<?php if ($n['type'] == 0){?>
			<a href="<?php echo site_url('html/show/listNew/'.$n['id'].'/'.$n['pid']);?>" class="unnamed5"><?php echo $n['name']?></a>
			<?php }else if($n['type'] == 1){?>
			<a href="<?php echo site_url('html/show/lists/'.$n['id'].'/'.$n['pid']);?>" class="unnamed5"><?php echo $n['name']?></a>
			<?php }else if($n['type'] == 2){?>
			<a href="<?php echo site_url('html/show/view/'.$n['id'].'/'.$n['pid']);?>" class="unnamed5"><?php echo $n['name']?></a>
			<?php }?>			
		</div>
      </td>
    </tr>
	<?php }?>
  </table>
</div>
<div id="Layer4" style="position:absolute; left:635px; top:135px; width:118px; height:198px; z-index:4; visibility: hidden" onMouseMove="MM_showHideLayers('Layer4','','show')" onMouseOut="MM_showHideLayers('Layer4','','hide')"> 
  <table width="100%" border="0" cellspacing="2" cellpadding="0" class="unnamed5">
	<?php foreach ($products as $p){?>
    <tr> 
      <td bgcolor="3796D8" height="25" class="unnamed5"> 
        <div align="center">
			<?php if ($p['type'] == 0){?>
			<a href="<?php echo site_url('html/show/listNew/'.$p['id'].'/'.$p['pid']);?>" class="unnamed5"><?php echo $p['name']?></a>
			<?php }else if($p['type'] == 1){?>
			<a href="<?php echo site_url('html/show/lists/'.$p['id'].'/'.$p['pid']);?>" class="unnamed5"><?php echo $p['name']?></a>
			<?php }else if($p['type'] == 2){?>
			<a href="<?php echo site_url('html/show/view/'.$p['id'].'/'.$p['pid']);?>" class="unnamed5"><?php echo $p['name']?></a>
			<?php }?>			
		</div>
      </td>
    </tr>
	<?php }?>
  </table>
</div>
<div id="Layer5" style="position:absolute; left:757px; top:135px; width:110px; height:94px; z-index:5; visibility: hidden" onMouseMove="MM_showHideLayers('Layer5','','show')" onMouseOut="MM_showHideLayers('Layer5','','hide')"> 
  <table width="99%" border="0" cellspacing="2" cellpadding="0" class="unnamed5">
	<?php foreach ($major as $m){?>
    <tr> 
      <td bgcolor="3796D8" height="25" class="unnamed5"> 
        <div align="center">
			<?php if ($m['type'] == 0){?>
			<a href="<?php echo site_url('html/show/listNew/'.$m['id'].'/'.$m['pid']);?>" class="unnamed5"><?php echo $m['name']?></a>
			<?php }else if($m['type'] == 1){?>
			<a href="<?php echo site_url('html/show/lists/'.$m['id'].'/'.$m['pid']);?>" class="unnamed5"><?php echo $m['name']?></a>
			<?php }else if($m['type'] == 2){?>
			<a href="<?php echo site_url('html/show/view/'.$m['id'].'/'.$m['pid']);?>" class="unnamed5"><?php echo $m['name']?></a>
			<?php }?>		
		</div>
      </td>
    </tr>
	<?php }?>
  </table>
</div>
<div id="Layer6" style="position:absolute; left:865px; top:136px; width:116px; height:117px; z-index:6; visibility: hidden" onMouseMove="MM_showHideLayers('Layer6','','show')" onMouseOut="MM_showHideLayers('Layer6','','hide')"> 
  <table width="99%" border="0" cellspacing="2" cellpadding="0" class="unnamed5">
	<?php foreach ($rencai as $r){?>
    <tr> 
      <td bgcolor="3796D8" height="25" class="unnamed5"> 
        <div align="center">
			<?php if ($r['type'] == 0){?>
			<a href="<?php echo site_url('html/show/listNew/'.$r['id'].'/'.$r['pid']);?>" class="unnamed5"><?php echo $r['name']?></a>
			<?php }else if($r['type'] == 1){?>
			<a href="<?php echo site_url('html/show/lists/'.$r['id'].'/'.$r['pid']);?>" class="unnamed5"><?php echo $r['name']?></a>
			<?php }else if($r['type'] == 2){?>
			<a href="<?php echo site_url('html/show/view/'.$r['id'].'/'.$r['pid']);?>" class="unnamed5"><?php echo $r['name']?></a>
			<?php }?>		
		</div>
      </td>
    </tr>
	<?php }?>
  </table>
</div>
<TABLE WIDTH=742 BORDER=0 CELLPADDING=0 CELLSPACING=0 align="center">
  <TR bgcolor="#FFFFFF"> 
    <TD height="101" colspan="4"> 
      <table width="97%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td width="41%" height="101"><img src="images/html/index_1a1.jpg" width="447" height="101"></td>
          <td width="524" valign="middle"> 
            <table width="61%" border="0" cellspacing="5" cellpadding="0" align="right">
              <tr> 
                <td valign="bottom" height="41"> 
                  <div align="right"></div>
                  <div align="right"> <span class="unnamed2">网站搜索：</span> 
                    <input type="text" name="textfield" size="10">
                  </div>
                </td>
                <td width="16%" height="41" valign="bottom"> 
                  <div align="right"><img src="images/html/29.jpg" width="45" height="20"></div>
                </td>
              </tr>
              <tr> 
                <td colspan="2" height="2"> 
                  <div align="right"><font color="#808080"><font color="#808080"><font color="#FFFFFF"><font color="#FDFDFD"><span class="unnamed2"><font color="#666666" face="Arial, Helvetica, sans-serif">今天是:</font></span></font> 
                    <font color="#666666" face="Arial, Helvetica, sans-serif" class="unnamed2"> 
                    <script language=JavaScript>
<!---
//作者:www.qpsh.com 网页特效
today=new Date();
var hours = today.getHours();
var minutes = today.getMinutes();
var seconds = today.getSeconds();
function initArray(){
this.length=initArray.arguments.length
for(var i=0;i<this.length;i++)
this[i+1]=initArray.arguments[i] }
var d=new initArray("星期日","星期一","星期二","星期三","星期四","星期五","星期六");
document.write(today.getYear(),"年",today.getMonth()+1,"月",today.getDate(),"日 ",d[today.getDay()+1]," ");
//-->
</script>
                    </font></font></font></font><font color="#666666"> </font></div>
                </td>
              </tr>
            </table>
            <div align="right"><br>
              <br>
            </div>
            <br>
            <br>
            <div align="right"> 
              <div align="right"><br>
              </div>
            </div>
          </td>
        </tr>
      </table>
    </TD>
  </TR>
  <TR> 
    <TD colspan="4" height="36"> 
      <table id="__01" width="1000" height="36" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td> <a href="<?php echo site_url()?>"><img src="images/html/munen_01.gif" width="132" height="36" alt="" class="unnamed8"></a></td>
          <td> <img src="images/html/munen_02.gif" width="2" height="36" alt=""></td>
          <td> <a href="<?php echo site_url()?>/html/show/view/201/129" onMouseMove="MM_showHideLayers('Layer1','','show')" onMouseOut="MM_showHideLayers('Layer1','','hide')"><img src="images/html/munen_03.gif" width="106" height="36" alt="" border="0"></a></td>
          <td> <img src="images/html/munen_04.gif" width="2" height="36" alt=""></td>
          <td> <a href="<?php echo site_url()?>/html/show/view/178/136" onMouseMove="MM_showHideLayers('Layer2','','show')" onMouseOut="MM_showHideLayers('Layer2','','hide')"><img src="images/html/munen_05.gif" width="107" height="36" alt="" border="0"></a></td>
          <td> <img src="images/html/munen_06.gif" width="2" height="36" alt=""></td>
          <td> <a href="<?php echo site_url()?>/html/show/news" onMouseMove="MM_showHideLayers('Layer3','','show')" onMouseOut="MM_showHideLayers('Layer3','','hide')"><img src="images/html/munen_07.gif" width="109" height="36" alt="" border="0"></a></td>
          <td> <img src="images/html/munen_08.gif" width="2" height="36" alt=""></td>
          <td> <a href="<?php echo site_url()?>/html/show/view/151/134" onMouseMove="MM_showHideLayers('Layer4','','show')" onMouseOut="MM_showHideLayers('Layer4','','hide')"><img src="images/html/munen_09.gif" width="123" height="36" alt="" border="0"></a></td>
          <td> <img src="images/html/munen_10.gif" width="2" height="36" alt=""></td>
          <td> <a href="<?php echo site_url()?>/html/show/view/217/142" onMouseMove="MM_showHideLayers('Layer5','','show')" onMouseOut="MM_showHideLayers('Layer5','','hide')"><img src="images/html/munen_11.gif" width="109" height="36" alt="" border="0"></a></td>
          <td> <img src="images/html/munen_12.gif" width="2" height="36" alt=""></td>
          <td> <a href="<?php echo site_url()?>/html/show/view/221/220" onMouseMove="MM_showHideLayers('Layer6','','show')" onMouseOut="MM_showHideLayers('Layer6','','hide')"><img src="images/html/munen_13.gif" width="108" height="36" alt="" border="0"></a></td>
          <td> <img src="images/html/munen_14.gif" width="2" height="36" alt=""></td>
          <td> <a href="<?php echo site_url()?>/html/show/view/226/225"><img src="images/html/munen_15.gif" width="106" height="36" alt="" border="0"></a></td>
          <td> <img src="images/html/munen_16.gif" width="2" height="36" alt=""></td>
          <td> <img src="images/html/munen_17.gif" width="84" height="36" alt=""></td>
        </tr>
      </table>
    </TD>
  </TR>