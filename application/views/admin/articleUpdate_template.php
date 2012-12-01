<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="<?php echo base_url() ;?>"/>
<!--<link href="base.css" rel="stylesheet" type="text/css">-->
<script language="javascript" type="text/javascript" src="js/tiny_mce/tiny_mce.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
*{
	margin:0;
	padding:0;
}
body {

	margin-left: 3px;
	background: #f1f5f2;
}
a{
	text-decoration:none;
	color: #344b50;
}
#add_article{
width:100%;
margin-top:5px;
font-size:12px;
margin-left:25px;
margin-bottom:5px;
}
#add_article h3{
	font-size:14px;
	padding-bottom:10px;
}
#add_article p{

margin-top:5px;

}
#add_article p label{
padding-right:5px;
}
#add_article p label span a{
	color:red;
}
margin-top:5px;

}
.STYLE1 {
	color: #e1e2e3;
	font-size: 12px;
}
#article_source,#article_author{
background:#fff;
border:1px solid #abc6dd;
width:100px;
height:20px;
}

#article_title{
background:#fff;
border:1px solid #abc6dd;
width:400px;
height:20px;
}
.xhx{border-bottom:#CCCCCC dashed 1px; padding-bottom:10px;}
.STYLE1 {color: #FFFFFF}
.STYLE2 {
	color: #6699FF;
	font-weight: bold;
}
.litpic_span {
	width:77px;
	overflow:hidden;
	height:21px;
	*vertical-align:3px;
	margin-left:-60px;
	*margin-left:-75px;
	cursor:pointer;
}
#litpic {
	width:85px;
	height:20px;
	margin-left: -20px;
	filter:alpha(opacity=00);
	-moz-opacity:.0;
	opacity:0.0;
	cursor:pointer;
}
.np {
	border:none;
}
.coolbg {
	border:none;
	border-right: 1px solid #ACACAC;
	border-bottom: 1px solid #ACACAC;
	background-color: #F1F8B4;
	padding:2px;
	padding-right:5px;
	padding-left:5px;
	background: url(allbtbg2.gif) #EFF7D0;
	cursor:pointer;
}
</style>
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="24" bgcolor="#353c44"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="47%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6%" height="19" valign="bottom"><div align="center"><img src="images/admin/tb.gif" width="14" height="14" /></div></td>
                <td width="94%" valign="bottom"><span class="STYLE1">文章列表>>发布文章</span></td>
              </tr>
            </table></td>
            <td></td>
          </tr>
        </table></td>
      </tr>
    </table>
<div id="add_article">
<?php foreach ($article as $row):?>
<script language="JavaScript" type="text/javascript" src="js/form.js"></script>
<?php echo form_open_multipart(site_url('admin/articleUpdate_do'));?>
<p class="xhx">
  <label for="title">文章标题：</label>
  <input type="text" name="title" id="title" value="<?=$row->title?>" style="width:388px">
  *不能为空</p>
<p class="xhx">
 缩 略 图：&nbsp; &nbsp;    <input name="picname" type="text" id="picname" style="width:240px" />
                  <input type="button"  value="本地上传" style="width:70px;cursor:pointer;" />
                  <span class="litpic_span"><input name="litpic" type="file" id="litpic"  onChange="SeePicNew();" size="1" class='np coolbg'/></span>
</p>
<p class="xhx">
  <label for="creator">作 &nbsp;&nbsp; 者：&nbsp;&nbsp;&nbsp; &nbsp; </label><input type="text" name="writer" id="creator" value="<?=$row->writer?>"></p>
<p class="xhx"><font color="#996600"><strong>文章内容：</strong></font></p>
<p class="xhx"><?php

include("FCKeditor/fckeditor.php") ;

$oFCKeditor = new FCKeditor('body') ;

$oFCKeditor->BasePath = './FCKeditor/';

$oFCKeditor->Value = $row->body;
$oFCKeditor-> Height	= 450 ;
$oFCKeditor->Width	= '90%' ;
$oFCKeditor->Create() ;

?></p>

<p ><input type="hidden" value="<?=$this->uri->segment(3)?>" name="cateid"/><input type="hidden" value="<?=$row->arid?>" name="arid"/><input type="submit" name="submit_article"  value="发布内容" style="background-color:#339999; border:0px;color:#FFFFFF"/> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="button"  value="返回列表" onclick="javascript:history.go(-1);" style="background-color:#339999; border:0px;color:#FFFFFF"/></p>
</form>
<?php endforeach;?>
</div>

</body>
</html>
