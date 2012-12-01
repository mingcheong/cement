<?php include "head.php"?>
<style type="text/css">
.page{ background-color:#C30; padding:2px;}
.bottom2 { margin-left:10px;float:left; }
 .bottom2 a{ float:left;  background:url(images/html/page.gif) no-repeat left; padding-top:5px; padding-bottom:5px; padding-right:12px; padding-left:12px; color: #FFF; font-size:14px; font-weight:bold; }
 .bottom2 a:hover{ background:url(images/html/page.gif) no-repeat;}
</style>
<!---- news ---->
<div id="news">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="top"><table width="100%" height="24" border="0" cellpadding="0" cellspacing="0" style="border:1px black soild">
        <tr>
          <td width="145"><div class="title_1">多媒体</div></td>
          <td align="right" valign="bottom"><div class="title_2"><a href="javascript:window.history.go(-1)">返回目录</a></div></td>
          <td width="8" valign="bottom"><div class="title_3"></div></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td valign="top">
	  <div id="content">
	  <div class="title"><?php echo $getContent['title'];?></div>
	  <div class="main">
	  	<?php $arr=explode("<hr />",$getContent['content']);
$count=count($arr);
//echo strip_selected_tags($arr[$page],'div');
echo str_replace("div","p",$arr[$page]);
//echo strip_tags($arr[$page],'<p><a><img><b><span><br><blockquote><table><tr><td><th>') ;
?>
	  </div>
  
	  </div></td>
    </tr>
    <tr>
    	<td style="width:100%;text-align:center;">
    		<table style="width:350px;;">
    			<tr>
    				<td style="text-align:right;">
			<div class="bottom2 "><a href="javascript:history.go(-1);" class="page" >上一页</a></div>
		    <?php if($page<$count-1){?><div class="bottom2 ">
		     <a href="<?php echo site_url('html/show/dmt_content/'.$getContent['cid'].'/'.$getContent['id'].'/'.++$page);?>" class="page" >下一页</a></div>
		    <?php }else{?>
		    <?php $qcontent=$getContent['id']+1;?>
		    <div class="bottom2 ">  <a href="<?php echo site_url('html/show/dmt_content/'.$getContent['cid'].'/'.$qcontent);?>" class="page" >下一页</a></div>
		    <?php }?>
		     <div class="bottom2 "><a href="<?php echo site_url('html/show/dmt_list/'.$getContent['cid']);?>" class="page" >本章列表</a></div>
		    
		     <div class="bottom2 "><a href="<?php echo site_url('html/show/dmt/');?>" class="page" >返回首页</a></div>
    				</td>
    			</tr>
    		</table>
    	</td>
    </tr>
  </table>
</div>  
<?php 
//去掉 指定的html标签
function strip_selected_tags($text, $tags = array())
   {
       $args = func_get_args();
       $text = array_shift($args);
       $tags = func_num_args() > 2 ? array_diff($args,array($text))  : (array)$tags;
       foreach ($tags as $tag){
           if(preg_match_all('/<'.$tag.'[^>]*>(.*)<\/'.$tag.'>/iU', $text, $found)){
               $text = str_replace($found[0],$found[1],$text);
         }
       }
       return $text;
   }
 
?><?php include "foot.php"?>