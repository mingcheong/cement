<?php if (!defined('BASEPATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="<?php echo base_url();?>images/css.css" rel="stylesheet" type="text/css">
<script src="<?php echo base_url();?>js/jquery-1.3.2.min.js" type="text/javascript"></script>
<base href="<?php echo base_url() ;?>"/>
<link href="images/admin/skin.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #EEF2FB;
}
-->
</style>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/admin/mail_leftbg.gif"><img src="images/admin/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/admin/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31"><div class="titlebt">栏目管理</div></td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/admin/mail_rightbg.gif"><img src="images/admin/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/admin/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
					<table class=margin2010 cellspacing=0 bordercolordark=#ffffff cellpadding=0 width="95%" align=center bordercolorlight=#e4e4e4 border=2>
                      <tbody> 
                      <tr> 
                        <td class=unnamed3 valign=center align=middle width=26 rowspan=8 bgcolor="#E3E3E3"> 
                          <div align="center"><b>个<br>
                            人<br>
                            情<br>
                            况</b></div>
                        </td>
                        <td class=unnamed3 noWrap align=right width=127 height=33>姓名：</td>
                        <td class="unnamed3" width=204><?php echo @$resume['name'];?></td>
                        <td class=unnamed3 noWrap align=right width=115>性别：</td>
                        <td class="unnamed3" width=202><?php echo @$resume['sex'] == 1 ? '男' : '女';?></td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 noWrap align=right bgcolor=#f7f7f7 height=33>出生年月：</td>
                        <td class="unnamed3" bgcolor=#f7f7f7 colspan=3>
							<?php echo @$resume['birthday_year'];?>-<?php echo @$resume['birthday_month'];?>-<?php echo @$resume['bitthday_day'];?>
                        </td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 noWrap align=right height=33>身份证号：</td>
                        <td class="unnamed3"><?php echo @$resume['idcard'];?></td>
                        <td class=unnamed3 noWrap align=right>民族：</td>
                        <td class="unnamed3"><?php echo @$resume['national'];?></td>
                      </tr>
                      <tr> 
                        <td class="unnamed3" noWrap align=right bgcolor=#f7f7f7 height=33>政治面貌：</td>
                        <td class="unnamed3" bgcolor=#f7f7f7 colspan=3> 
							<?php
								if(@$resume["political"] == 1) echo "中共党员 ";
								else if(@$resume["political"] == 2) echo "共青团员";
								else if(@$resume["political"] == 3) echo "其他";
							?>				
                        </td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 align=right height=33>身高：</td>
                        <td class="unnamed3"> <?php echo @$resume['height'];?>CM</td>
                        <td class="unnamed3" align=right>体重：</td>
                        <td class="unnamed3"> <?php echo @$resume['weight'];?> KG </td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 align=right bgcolor=#f7f7f7 height=33>籍贯：</td>
                        <td class="unnamed3" bgcolor=#f7f7f7> <?php echo @$resume['place'];?></td>
                        <td class="unnamed3" noWrap align=right bgcolor=#f7f7f7>家庭住址： </td>
                        <td class="unnamed3" bgcolor=#f7f7f7> <?php echo @$resume['address'];?></td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 align=right height=33>户口所在地： </td>
                        <td class="unnamed3"> <?php echo @$resume['cityplace'];?></td>
                        <td class=unnamed3 noWrap align=right>婚姻状况：</td>
                        <td class="unnamed3"> <?php echo @$resume['marital'] == 1 ? '已婚' : '未婚';?></td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 noWrap align=right bgcolor=#f7f7f7 height=33>配偶工作单位：</td>
                        <td class="unnamed3" bgcolor=#f7f7f7 colspan=3> <?php echo @$resume['workunit'];?></td>
                      </tr>
                      </tbody> 
                    </table>
                    <table class=margin2010 cellspacing=0 bordercolordark=#ffffff cellpadding=0 width="95%" align=center bordercolorlight=#e4e4e4 border=2>
                      <tbody> 
                      <tr> 
                        <td class=unnamed3 valign=center align=middle width=25 rowspan=6 bgcolor="#E3E3E3"> 
                          <div align="center"><b>专<br>
                            业<br>
                            情<br>
                            况</b></div>
                        </td>
                        <td class=unnamed3 noWrap align=right colspan=2 height=33>最高学历：</td>
                        <td class="unnamed3" width=207>
							<?php
								if(@$resume["degree"] == 1) echo "博士";
								else if(@$resume["degree"] == 2) echo "研究生";
								else if(@$resume["degree"] == 3) echo "本科";
								else if(@$resume["degree"] == 4) echo "大专";
								else if(@$resume["degree"] == 5) echo "中专";
								else if(@$resume["degree"] == 6) echo "初中以下"; 
								else echo "其他"; 
							?> 				
						   </td>
                        <td class=unnamed3 noWrap align=right width=103>毕业学校：</td>
                        <td class="unnamed3" width=211 nowrap><?php echo @$resume['school'];?></td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 noWrap align=right bgcolor=#f7f7f7 colspan=2 height=33>毕业时间：</td>
                        <td class="unnamed3" bgcolor=#f7f7f7 colspan=3> 
								<?php echo @$resume['graduation_year'];?>-<?php echo @$resume['graduation_month'];?>-<?php echo @$resume['graduation_day'];?>
                        </td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 noWrap align=right colspan=2  height=33>培养模式：</td>
                        <td class="unnamed3" colspan=3> 
							<?php
								if(@$resume["mode"] == 1) echo "全日制";
								else if(@$resume["mode"] == 2) echo "脱产自考";
								else if(@$resume["mode"] == 3) echo "夜大";
								else if(@$resume["mode"] == 4) echo "其他";
							?> 								
                         </td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 noWrap align=right bgcolor=#f7f7f7 colspan=2 height=33>专业名称：</td>
                        <td class="unnamed3" bgcolor=#f7f7f7> <?php echo @$resume['pro_name'];?></td>
                        <td class="unnamed3" align=right bgcolor=#f7f7f7>现从事专业：</td>
                        <td class="unnamed3" bgcolor=#f7f7f7> <?php echo @$resume['pro_now'];?></td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 align=middle width=75 rowspan=2>外语</td>
                        <td class=unnamed3 noWrap align=right width=51 height=33>语种：</td>
                        <td class="unnamed3">
							<?php
								if(@$resume["language"] == 1) echo "英语";
								else if(@$resume["language"] == 2) echo "日语";
								else if(@$resume["language"] == 3) echo "其他";
							?> 						  
                        </td>
                        <td class="unnamed3" align=right>计算机水平：</td>
                        <td class="unnamed3"> <?php echo @$resume['computerlevel'];?></td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 noWrap align=right height=33>水平：</td>
                        <td class="unnamed3" bgcolor=#f7f7f7 colspan=3> <?php echo @$resume['level'];?></td>
                      </tr>
                      </tbody> 
                    </table>
                    <table class=margin2010 cellspacing=0 bordercolordark=#ffffff cellpadding=0 width="95%" align=center bordercolorlight=#e4e4e4 border=2>
                      <tbody> 
                      <tr> 
                        <td class=unnamed2 valign=center align=middle width=25 rowspan=2 bgcolor="#E3E3E3"> 
                          <div align="center"><b>个<br>
                            人<br>
                            经<br>
                            历</b></div>
                        </td>
                        <td class=unnamed2  align=right height=33>学习经历：</td>
                        <td class="unnamed2" width=520 colspan=2> <?php echo @$resume['learning'];?></td>
                      </tr>
                      <tr> 
                        <td class=unnamed2  align=right bgcolor=#f7f7f7 height=33>工作经历：</td>
                        <td class="unnamed2" bgcolor=#f7f7f7 colspan=3> <?php echo @$resume['workexperience'];?></td>
                      </tr>
                      </tbody> 
                    </table>
                    <table class=margin2010 cellspacing=0 bordercolordark=#ffffff cellpadding=0 width="95%" align=center bordercolorlight=#e4e4e4 border=2>
                      <tbody> 
                      <tr> 
                        <td class=copy14 valign=center align=middle width=24 rowspan=2 bgcolor="#E3E3E3"> 
                          <div align="center" class="unnamed3"><b>求<br>
                            职<br>
                            情<br>
                            况</b></div>
                        </td>
                        <td class=unnamed3 noWrap align=right width=128 height=33>求职意向：</td>
                        <td class="unnamed3" width=526 colspan=3><span class=red> 
							<?php
								if(@$resume["jobobjective"] == 1) echo "市场营销";
								else if(@$resume["jobobjective"] == 2) echo "水泥工艺";
								else if(@$resume["jobobjective"] == 3) echo "机械设计及制造";
								else if(@$resume["jobobjective"] == 4) echo "电气技术";
								else if(@$resume["jobobjective"] == 5) echo "工业自动化";
								else if(@$resume["jobobjective"] == 6) echo "采矿技术/弹药工程";
								else if(@$resume["jobobjective"] == 7) echo "工程机械";
								else if(@$resume["jobobjective"] == 8) echo "热能工程";
								else if(@$resume["jobobjective"] == 9) echo "工业与民用建筑";
								else if(@$resume["jobobjective"] == 10) echo "物资管理";
								else if(@$resume["jobobjective"] == 11) echo "港口、河道及航运管理";
								else if(@$resume["jobobjective"] == 12) echo "人力资源管理";
								else if(@$resume["jobobjective"] == 13) echo "会计学/审计学";
								else if(@$resume["jobobjective"] == 14) echo "统计学";
								else if(@$resume["jobobjective"] == 15) echo "英语";
								else if(@$resume["jobobjective"] == 16) echo "日语";
								else if(@$resume["jobobjective"] == 17) echo "给排水";
								else if(@$resume["jobobjective"] == 18) echo "铁路管理";
								else if(@$resume["jobobjective"] == 19) echo "其他";
							?> 							
                        </td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 noWrap align=right width=127 bgcolor=#f7f7f7 height=33>期望月薪：</td>
                        <td class="unnamed3" width=206 bgcolor=#f7f7f7><?php echo @$resume['salary'];?></td>
                        <td class=unnamed3 noWrap align=right width=115 bgcolor=#f7f7f7>期望有效期限：</td>
                        <td class="unnamed3" width=202 bgcolor=#f7f7f7>
							<?php
								if(@$resume["salary_year"] == 1) echo "半年";
								else if(@$resume["salary_year"] == 2) echo "一年";
								else if(@$resume["salary_year"] == 3) echo "二年";
								else if(@$resume["salary_year"] == 4) echo "三年";
								else if(@$resume["salary_year"] == 5) echo "五年";
								else if(@$resume["salary_year"] == 6) echo "其他";
							?>						
						   </td>
                      </tr>
                      </tbody> 
                    </table>
                    <table class=margin2010 cellspacing=0 bordercolordark=#ffffff cellpadding=0 width="95%" align=center bordercolorlight=#e4e4e4 border=2>
                      <tbody> 
                      <tr> 
                        <td class=copy14 valign=center align=middle width=23 rowspan=4 bgcolor="#E3E3E3"> 
                          <div align="center" class="unnamed3">联<br>
                            系<br>
                            方<br>
                            式</div>
                        </td>
                        <td class=unnamed3 noWrap align=right width=120 height=33>电话：</td>
                        <td class="unnamed3" width=203><?php echo @$resume['telephone'];?></td>
                        <td class="unnamed3" align=right width=76>手机：</td>
                        <td class="padding5 copy14" width=230><?php echo @$resume['phone'];?></td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 noWrap align=right bgcolor=#f7f7f7 height=33 width="120">E-mail：</td>
                        <td class="unnamed3" bgcolor=#f7f7f7 width="203"><?php echo @$resume['email'];?></td>
                        <td class="unnamed3" align=right bgcolor=#f7f7f7 width="76">通讯地址：</td>
                        <td class="padding5 copy14" bgcolor=#f7f7f7 width="230"><?php echo @$resume['postaddress'];?></td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 noWrap align=right height=33 width="120">邮政编码：</td>
                        <td class="unnamed3" colspan=3> <?php echo @$resume['postcode'];?></td>
                      </tr>
                      </tbody> 
                    </table>
					   <table style="MARGIN-BOTTOM: 25px" cellspacing=0 cellpadding=0 width="95%" align=center border=0>
                      <tbody> 
                      <tr> 
                        <td align=middle> 
                          <div align="center"><label> 
                             <input type="button" value="返回" onclick="window.history.go(-1)" class="submit"/>
                            </label></div>
                        </td>
                      </tr>
                      </tbody> 
                    </table>
    </td>
    <td background="images/admin/mail_rightbg.gif">&nbsp;</td>
  </tr>
  <tr>
    <td valign="bottom" background="images/admin/mail_leftbg.gif"><img src="images/admin/buttom_left2.gif" width="17" height="17" /></td>
    <td background="images/admin/buttom_bgs.gif"><img src="images/admin/buttom_bgs.gif" width="17" height="17"></td>
    <td valign="bottom" background="images/admin/mail_rightbg.gif"><img src="images/admin/buttom_right2.gif" width="16" height="17" /></td>
  </tr>
</table>
</body>
