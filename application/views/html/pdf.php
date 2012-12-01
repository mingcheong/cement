
<script src="/js/jquery-1.4.3.js" language="javascript" type="text/javascript"></script>
<script type="text/javascript"><!-- 
function isAcrobatPluginInstall(){ 
//如果是firefox浏览器 
if (navigator.plugins && navigator.plugins.length) { 
for (x=0; x<navigator.plugins.length;x++) { 
     
if (navigator.plugins[x].name== 'Adobe Acrobat') 
return true; 
} 
} 
//下面代码都是处理IE浏览器的情况 
else if (window.ActiveXObject) 
{ 
for (x=2; x<10; x++) 
{ 
try 
{ 
oAcro=eval("new ActiveXObject('PDF.PdfCtrl."+x+"');"); 
if (oAcro) 
{ 
    return true; 
} 
} 
catch(e) {} 
} 
try 
{ 
oAcro4=new ActiveXObject('PDF.PdfCtrl.1'); 
if (oAcro4) 
return true; 
} 
catch(e) {} 
try 
{ 
oAcro7=new ActiveXObject('AcroPDF.PDF.1'); 
if (oAcro7) 
return true; 
} 
catch(e) {} 
} 
}
$(function(){
 if(isAcrobatPluginInstall()){
  $("#isok").css('display','none');
  $("#isok2").css('display','block');
 }else{
  $("#isok").css('display','block');
  $("#isok2").css('display','none');
 }
});
// --></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div id="isok">
        <a href="http://get.adobe.com/cn/reader/" target="_blank">此网页需要下载插件 单击此处下载</a></div>
    <div id="isok2">
        
                <object classid="clsid:CA8A9780-280D-11CF-A24D-444553540000" width="100%" height="600px"
                    border="0">
                    <param name="_Version" value="65539">
                    <param name="_ExtentX" value="20108">
                    <param name="_ExtentY" value="10866">
                    <param name="_StockProps" value="0">
                    <param name="SRC" value="http://bzjx.nit.net.cn/uploads/pdf/<?php echo $urlname?>">
                </object>
            
    </div>