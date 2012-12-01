<body>
<!--head start-->
<div   >
    <div class="top">
    <div style=" width:960px; margin:0px auto; padding-top:4px; "><table width="100%" border="0">
  <tr>
    <td width="63%" align="right" style="display:none"><img src="images/html/help.gif"   />&nbsp; 帮助</td>
    <td width="37%" align="right" valign="bottom">
      <?php  if(@$_SESSION["limits"]==1) {?>
      欢迎 <?php echo $_SESSION['username'];?> 老师,<a href="<?php echo site_url();?>/admin/index/index" style="color: #CC0000; background-color:#66CC33" >后台管理</a>|<a href="<?php echo site_url();?>/admin/login/loginout" style="color:#333333;" >退出</a>
      <?php }else if(isset($_SESSION["limits"])){
	?>
	欢迎 <?php echo $_SESSION['username'];?> 同学,<a href="<?php echo site_url();?>/admin/login/loginout" style="color:#333333;" >退出</a>
	<?php } else{
	?>
	<form action="<?php echo site_url('admin/login/check_login')?>" method="post" name="loginform">
	  账号:<input type="text" size="12"  name="username" style="height:15px;" />&nbsp;&nbsp密码:
	  <input type="password" size="12"  name="password"  style="height:15px;" />
	  <input type="submit" value="登入" />
	  </form>	<?php 
	}?>	</td>
     </tr>
</table>
    </div>
    </div>
    <div class="head" style="position:relative"><div style="position:absolute;top:0px; left:0px;"><embed src="images/html/ssh.swf" width="500" height="135" quality="high"  wmode="transparent"  ></embed></div>
    <img src="images/html/head.jpg" />
    <div class="dht">
    <ul>
    <li><a href="<?php echo site_url()?>">首页</a></li>
    <li><a href="<?php echo site_url()?>/html/show/kcjj">课程简介</a></li>
     <li><a href="<?php echo site_url()?>/html/index/djb">单机版</a></li>
     <li><a href="<?php echo site_url()?>/html/index/spdh">视频动画</a></li>
    <li><a href="<?php echo site_url()?>/html/show/dmt">多媒体</a></li>
     <li><a href="<?php echo site_url()?>/html/show/dzkj">电子课件</a></li>  
    <li><a href="<?php echo site_url()?>/html/show/sjjx">实践教学</a></li>
   
    <li><a href="<?php echo site_url()?>/html/show/jxck">教学参考</a></li>  
    <li><a href="<?php echo site_url()?>/html/exams">练习考试</a></li>
    <li><a href="<?php echo site_url()?>/html/ask">互动学习</a></li>
    
    <li><a href="<?php echo site_url()?>/html/index/link">友情链接</a></li>
    </ul>
    </div>
    </div>
</div>