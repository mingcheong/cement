<HTML>
<HEAD>
<TITLE>宁波科环新型建材股份有限公司</TITLE>
<base href="<?php echo base_url() ;?>"/>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<script src="<?php echo base_url();?>js/jquery-1.4.3.min.js" type="text/javascript"></script>
<style type="text/css">
<!--
.unnamed1 {  font-size: 14px; color: #454545; text-decoration: none; line-height: 24px}
.unnamed2 {  font-size: 14px; color: #454545; text-decoration: none; line-height: 24px}
.unnamed3 {  font-size: 14px; color: #666666; text-decoration: none; line-height: 24px}
.unnamed4 {  font-size: 14px; color: #003399; text-decoration: none}
.unnamed5 {  font-size: 12px; color: #FFFFFF; text-decoration: none}
.unnamed6 {  font-family: "Arial", "Helvetica", "sans-serif"; font-size: 14px; color: 0059CB; text-decoration: none}
.unnamed7 {  font-size: 14px; color: #333333; line-height: 25px}
.unnamed8 {  border:0px; line-height: 25px; color: #484848}
.tdd{font-size: 14px; color: #676767; text-decoration: none; line-height: 24px}
.tdd a{text-decoration: none;color:#454545;}
.tdd a:hover{color:#0033FF;}
.spantd{font-size: 14px; color: #676767; text-decoration: none; line-height: 24px}
.spantd a{text-decoration: none;color:#454545;}
.spantd a:hover{color:red;text-decoration:underline}
-->

#nav{ 
 position:absolute;
 top: 72px;
; clip:  rect(   )
}
.list{
position:absolute;
background-color:#99CCFF;
width:100px;
line-height:20px;
text-align:center;
padding:0px 0px;
font-weight:normal;
; background-position: 1px 1px; clip:  rect(   )}
.list a:link{
color:white;
text-decoration:none;
font-size:12px;
width:100px;
padding:3px 3px;
; margin: 3px 3px; clip:   rect(   )}
.list a:visited{
color:#FFFFFF;
text-decoration:none;
padding:3px 3px;
width:100px;
; clip:   rect(   )}
.list a:hover{
color:white;
padding:3px 3px; 	
width:100px;
text-decoration:none;
background-color:#a3d7da;
; background-position: 1px 1px; clip:   rect(   )}
a:hover {  font-size: 14px; color: #0033CC; text-decoration: none}
</style>
<script language="JavaScript">
<!--
var isInSubMenu = false;
function popMenu(sourceObj,targetObjName)
{
 var targetObj = document.getElementById(targetObjName); 
 targetObj.style.top=getIEPosY(sourceObj) + sourceObj.offsetHeight;
 targetObj.style.left=getIEPosX(sourceObj);
 targetObj.style.display="";
}
function leaveMenu(targetObjName)
{
 if(isInSubMenu)return;
 var targetObj = document.getElementById(targetObjName);
 targetObj.style.display="none";
}
function getIEPosX(elt)
{
 return getIEPos(elt,"Left"); 
}

function getIEPosY(elt)
{
 return getIEPos(elt,"Top");
}

function getIEPos(elt,which) 
{
 iPos = 0
 while (elt!=null)
 {
  iPos += elt["offset" + which];
  elt = elt.offsetParent;
 }
 return iPos
}

function hideSubMenu(sourceObject)
{
 isInSubMenu = false;
 sourceObject.style.display="none";
}
function showSubMenu(sourceObject)
{
 isInSubMenu = true;
 sourceObject.style.display="";
}
//-->
</script></script>
</HEAD>
<BODY BGCOLOR=#B1DDFE LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>
<div id="menucontent1" class="list" style="display:none;width:100px" onMouseOver = "showSubMenu(this)" onMouseOut="hideSubMenu(this)"> 
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
<div id="menucontent2" class="list" style="display:none;width:100px" onMouseOver = "showSubMenu(this)" onMouseOut="hideSubMenu(this)"> 
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
<div id="menucontent3" class="list" style="display:none;; width: 100px; height: 46px" onMouseOver = "showSubMenu(this)" onMouseOut="hideSubMenu(this)"> 
  <table width="100" border="0" cellspacing="2" cellpadding="0" class="unnamed5">
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
<div id="menucontent4" class="list" style="display:none;; width: 123px; height: 49px" onMouseOver = "showSubMenu(this)" onMouseOut="hideSubMenu(this)"> 
  <table width="123" border="0" cellspacing="2" cellpadding="0" class="unnamed5">
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
<div id="menucontent5" class="list" style="display:none;" onMouseOver = "showSubMenu(this)" onMouseOut="hideSubMenu(this)"> 
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
<div id="menucontent6" class="list" style="display:none;; width: 100px; height: 72px; z-index: 0" onMouseOver = "showSubMenu(this)" onMouseOut="hideSubMenu(this)"> 
  <table width="106" border="0" cellspacing="2" cellpadding="0" class="unnamed5" align="left">
    <?php foreach ($rencai as $r){?>
    <tr> 
      <td bgcolor="3796D8" height="25" class="unnamed5"> 
        <div align="center"> 
          <?php if ($r['type'] == 0){?>
          <a href="<?php echo site_url('html/show/listNew/'.$r['id'].'/'.$r['pid']);?>" class="unnamed5"> 
          <?php echo $r['name']?>
          </a> 
          <?php }else if($r['type'] == 1){?>
          <a href="<?php echo site_url('html/show/lists/'.$r['id'].'/'.$r['pid']);?>" class="unnamed5"> 
          <?php echo $r['name']?>
          </a> 
          <?php }else if($r['type'] == 2){?>
          <a href="<?php echo site_url('html/show/view/'.$r['id'].'/'.$r['pid']);?>" class="unnamed5"> 
          <?php echo $r['name']?>
          </a> 
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
			<form action="<?php echo site_url();?>/html/show/search" name="form1" method="post" target="_blank">
              <tr> 
                <td valign="bottom" height="41"> 
                  <div align="right"></div>
                  
                <div align="right"> <span class="unnamed2">搜索：</span>              
                  <input type="text" name="sval" size="10">           
                  </div>
                </td>
                <td width="16%" height="41" valign="bottom"> 
                  <div align="right"><input name="imageField" type="image" src="images/html/29.jpg" width="45" height="20" align="middle" /></div>
                </td>
				</form>
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
    
  <TD colspan="4" height="36" class="unnamed1"> 
    <table id="__01" width="1000" height="36" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td> <a href="<?php echo site_url()?>"><img src="images/html/munen_01.gif" width="132" height="36" alt="" class="unnamed8"></a></td>
          <td> <img src="images/html/munen_02.gif" width="2" height="36" alt=""></td>
          <td> <a href="<?php echo site_url()?>/html/show/view/201/129" onMouseOver="popMenu(this,'menucontent1')"  onMouseOut="leaveMenu('menucontent1')"><img src="images/html/munen_03.gif" width="106" height="36" alt="" border="0"></a></td>
          <td> <img src="images/html/munen_04.gif" width="2" height="36" alt=""></td>
          <td> <a href="<?php echo site_url()?>/html/show/view/178/136" onMouseOver="popMenu(this,'menucontent2')"  onMouseOut="leaveMenu('menucontent2')"><img src="images/html/munen_05.gif" width="107" height="36" alt="" border="0"></a></td>
          <td> <img src="images/html/munen_06.gif" width="2" height="36" alt=""></td>
          <td> <a href="<?php echo site_url()?>/html/show/news" onMouseOver="popMenu(this,'menucontent3')"  onMouseOut="leaveMenu('menucontent3')"><img src="images/html/munen_07.gif" width="109" height="36" alt="" border="0"></a></td>
          <td> <img src="images/html/munen_08.gif" width="2" height="36" alt=""></td>
          <td> <a href="<?php echo site_url()?>/html/show/view/236/134" onMouseOver="popMenu(this,'menucontent4')"  onMouseOut="leaveMenu('menucontent4')"><img src="images/html/munen_09.gif" width="123" height="36" alt="" border="0"></a></td>
          <td> <img src="images/html/munen_10.gif" width="2" height="36" alt=""></td>
          
        <td> <a href="index.php/html/show/lists/217/142" onMouseOver="popMenu(this,'menucontent5')"  onMouseOut="leaveMenu('menucontent5')""><img src="images/html/munen_11.gif" width="109" height="36" alt="" border="0"></a></td>
          <td> <img src="images/html/munen_12.gif" width="2" height="36" alt=""></td>
          
        <td> <a href="index.php/html/show/view/221/220" onMouseOver="popMenu(this,'menucontent6')"  onMouseOut="leaveMenu('menucontent6')""><img src="images/html/munen_13.gif" width="108" height="36" alt="" border="0"></a></td>
          <td> <img src="images/html/munen_14.gif" width="2" height="36" alt=""></td>
          
        <td> <a href="index.php/html/show/view/221/220"><img src="images/html/munen_15.gif" width="106" height="36" alt="" border="0"></a></td>
          <td> <img src="images/html/munen_16.gif" width="2" height="36" alt=""></td>
          <td> <img src="images/html/munen_17.gif" width="84" height="36" alt=""></td>
        </tr>
      </table>
    
  </TD>
  </TR>