<?php include "head.php"?>
<style type="text/css">
.table_list{color:#848484; /*background:url(images/html/mu-down-bg1.jpg) repeat-x;*/  height:15px; background-color:#6699CC; padding:10px;}
a{ text-decoration:none; color: #848484;}
</style>
<!---- news ---->
<div id="news">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="top"><table width="100%" height="24" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="145"><div class="title_1">互动学习</div></td>
          <td align="right" valign="bottom"><div class="title_2">								<?php  if(@$_SESSION["limits"]==1) {?>
							      欢迎 <?php echo $_SESSION['username'];?> 老师,<a href="<?php echo site_url();?>/admin/index/index" style="color: #CC0000; background-color:#66CC33" >后台管理</a>|<a href="<?php echo site_url();?>/admin/login/loginout" style="color:#333333;" >退出</a>
							      <?php }else if(isset($_SESSION["limits"])){
								?>
								欢迎 <?php echo $_SESSION['username'];?> 同学,<a href="<?php echo site_url();?>/admin/login/loginout" style="color:#333333;" >退出</a>
								<?php } ?></div></td>
          <td width="8" valign="bottom"><div class="title_3"></div></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td valign="top" align="center">
<!--content-->
<div class="content">
<div class="lm1">
	<table width="100%" border="0"  cellpadding="0" cellspacing="0" style="border:2px #9C0 dashed; background-color: #f4f4f4">
     <tr>
    <td class="table_list" ><b><font color="#FFFFFF" face="微软雅黑" size="+1"><?php echo $catename?></font></b></td>
    <td class="table_list" ><span class="wlm1"  ><b><font color="#FFFFFF" face="微软雅黑" size="+1">我来提问</font></b></span><div style="position:absolute; background-color: #99CC66;z-index:100; width:193px; height:120px; display:none " id="tm1"><form action="<?php echo site_url('html/ask/add');?>" method="post"> <textarea cols="25" rows="6" name="content"  ></textarea><input type="hidden" value="0" name="p_id" /><input type="hidden" value="0" name="type" /><input type="hidden" name="cid" value="145" /><input type="submit" value="提交" /></form></div></td>
     </tr>
    <?php foreach($list as $ssrow){?>
  <tr  >
    <td width="77%" class="tdc" >
    <div style="border-bottom:solid 1px #CCCC99; ">&nbsp;&nbsp;
    <a href="javascript:void(0);" class="wt" id="wt_<?php echo $ssrow['id'];?>" ><?php echo $ssrow['content']?></a>
    <div style="display:none;" id="hd_<?php echo $ssrow['id'];?>">
    <?php 
	$query = $this->db->query("SELECT a.*,b.* FROM guestbook as a,user as b WHERE a.p_id=".$ssrow['id']." and a.user_id=b.userid order by a.id");
	$sc_list =	$query->result_array();
	foreach($sc_list as $scrow){?>
    <div style="color:#848484; background-color:#eceaea; padding-left:20px; line-height:200%; padding-top:6px"  >
	&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $scrow['username'];?>&nbsp;&nbsp;答：<?php echo $scrow['content'];?>
	</div>
    <?php }?>
    </div>
   
    <div style="display:none" id="<?php echo $ssrow['id'];?>_ext" >
    <form action="<?php echo site_url('html/ask/add');?>" method="post">
    <textarea cols="50" rows="5"  name="content"  ></textarea>
    <input type="hidden" value="1" name="type" /><input type="hidden" name="cid" value="145" />
    <input type="hidden" name="p_id" value="<?php echo $ssrow['id'];?>" />
     <input type="submit" value="提交" />
    </form>
    </div>
    </div>
    </td>
    <td width="23%" valign="top"  class="tdc"><font color="#999999"><?php echo $ssrow['add_date']?></font>&nbsp; <span class="gb" id="gb_<?php echo $ssrow['id']?>">我来回答</span></td>
  </tr>
  <?php }?>
  <tr><td colspan="2"><?php echo $pagination; ?></td></tr>
</table>
</div>
<div class="lm2"></div>
</div>
	  </td>
    </tr>
  </table>
</div>  
<?php include "foot.php"?>