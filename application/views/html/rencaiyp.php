<?php include "head.php"?>
  <TR> 
    
  <TD valign="top" height="148"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="1000" height="250">
      <param name=movie value="images/html/go4.swf">
        <param name=quality value=high>
        <param name="wmode" value="transparent">
        <embed src="images/html/go4.swf" quality=high pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="1000" height="250" wmode="transparent">
        </embed> 
      </object></TD>
  </TR>
  <TR bgcolor="#FFFFFF"> 
    <TD height="602" valign="top"> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td width="24%" height="601" valign="top"> 
            <div align="center"><br>
              <table width="85%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td><img src="images/html/66.jpg" width="214" height="34"></td>
                </tr>
               <?php include "menu.php"?>
              </table>
            </div>
          </td>
          <td width="76%" height="601" valign="top"> 
            <table width="97%" border="0" cellspacing="0" cellpadding="0" height="15" align="center">
              <tr>
                <td class="unnamed3" height="31"> 　 <img src="images/html/arrowbule.jpg" width="11" height="9"> 
                  当前位置：　首页 &gt; 应聘岗位&gt; </td>
              </tr>
            </table>
            <div align="center"> 
              <table width="75%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td colspan="3" height="19"><img src="images/html/78.jpg" width="777" height="19"></td>
                </tr>
                <tr> 
                  <td height="73" width="36" valign="top" background="images/html/79.jpg">&nbsp;</td>
                  <td width="701" height="73" valign="top"> 
					<form action="<?php echo site_url();?>/admin/resume/add" id="frm" method="post" onSubmit="return checkFrom();" target="ifrm">
						<input type="hidden" name="newid" value="<?php echo @$article['id']?>"/>
                    <table class=margin2010 cellspacing=0 bordercolordark=#ffffff cellpadding=0 width="95%" align=center bordercolorlight=#e4e4e4 border=2>
                      <tbody> 
                      <tr> 
                        <td style="PADDING-LEFT: 10px" class="unnamed3" colspan=5 height=33><span class=newsbule14><font color="#FF0000">在线应聘</font></span><font color="#FF0000"><span  class=red>(注:*为必填项,谢谢您的合作)</span></font></td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 valign=center align=middle width=26 rowspan=8 bgcolor="#E3E3E3"> 
                          <div align="center"><b>个<br>
                            人<br>
                            情<br>
                            况</b></div>
                        </td>
                        <td class=unnamed3 noWrap align=right width=127 height=33>姓名：</td>
                        <td class="unnamed3" width=204> 
                          <input alt=请输入您的姓名！ size=25 name="name" check="1">
                          <span class=red><font color="#FF0000">*</font></span></td>
                        <td class=unnamed3 noWrap align=right width=115>性别：</td>
                        <td class="unnamed3" width=202> 
                          <input type=radio CHECKED value="1" name="sex">男 
                          <input type=radio value="2" name="sex">女<span class=red> <font color="#FF0000">*</font></span></td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 noWrap align=right bgcolor=#f7f7f7 height=33>出生年月：</td>
                        <td class="unnamed3" bgcolor=#f7f7f7 colspan=3> 
                          <select name="birthday_year">
                            <option value=1994 selected>1994</option>
                            <option value=1993>1993</option>
                            <option value=1992>1992</option>
                            <option value=1991>1991</option>
                            <option value=1990>1990</option>
                            <option value=1989>1989</option>
                            <option value=1988>1988</option>
                            <option value=1987>1987</option>
                            <option value=1986>1986</option>
                            <option value=1985>1985</option>
                            <option value=1984>1984</option>
                            <option value=1983>1983</option>
                            <option value=1982>1982</option>
                            <option value=1981>1981</option>
                            <option value=1980>1980</option>
                            <option value=1979>1979</option>
                            <option value=1978>1978</option>
                            <option value=1977>1977</option>
                            <option value=1976>1976</option>
                            <option value=1975>1975</option>
                            <option value=1974>1974</option>
                            <option value=1973>1973</option>
                            <option value=1972>1972</option>
                            <option value=1971>1971</option>
                            <option value=1970>1970</option>
                            <option value=1969>1969</option>
                            <option value=1968>1968</option>
                            <option value=1967>1967</option>
                            <option value=1966>1966</option>
                            <option value=1965>1965</option>
                            <option value=1964>1964</option>
                            <option value=1963>1963</option>
                            <option value=1962>1962</option>
                            <option value=1961>1961</option>
                            <option value=1960>1960</option>
                            <option value=1959>1959</option>
                            <option value=1958>1958</option>
                            <option value=1957>1957</option>
                            <option value=1956>1956</option>
                            <option value=1955>1955</option>
                            <option value=1954>1954</option>
                            <option value=1953>1953</option>
                            <option value=1952>1952</option>
                            <option value=1951>1951</option>
                            <option value=1950>1950</option>
                            <option value=1949>1949</option>
                            <option value=1948>1948</option>
                            <option value=1947>1947</option>
                            <option value=1946>1946</option>
                            <option value=1945>1945</option>
                            <option value=1944>1944</option>
                            <option value=1943>1943</option>
                            <option value=1942>1942</option>
                          </select>年<select name="birthday_month">
                            <option value=1 selected>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value=5>5</option>
                            <option value=6>6</option>
                            <option value=7>7</option>
                            <option value=8>8</option>
                            <option value=9>9</option>
                            <option value=10>10</option>
                            <option value=11>11</option>
                            <option value=12>12</option>
                          </select>月
						  <select name="bitthday_day">
                            <option value=1 selected>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value=5>5</option>
                            <option value=6>6</option>
                            <option value=7>7</option>
                            <option value=8>8</option>
                            <option value=9>9</option>
                            <option value=10>10</option>
                            <option value=11>11</option>
                            <option value=12>12</option>
                            <option value=13>13</option>
                            <option value=14>14</option>
                            <option value=15>15</option>
                            <option value=16>16</option>
                            <option value=17>17</option>
                            <option value=18>18</option>
                            <option value=19>19</option>
                            <option value=20>20</option>
                            <option value=21>21</option>
                            <option value=22>22</option>
                            <option value=23>23</option>
                            <option value=24>24</option>
                            <option value=25>25</option>
                            <option value=26>26</option>
                            <option value=27>27</option>
                            <option value=28>28</option>
                            <option value=29>29</option>
                            <option value=30>30</option>
                            <option value=31>31</option>
                          </select>
                          日 
						  <span class=red><font color="#FF0000">*</font></span></td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 noWrap align=right height=33>身份证号：</td>
                        <td class="unnamed3"> 
                          <input size=25 name="idcard">
                        </td>
                        <td class=unnamed3 noWrap align=right>民族：</td>
                        <td class="unnamed3"> 
                          <input alt=请输入您的民族！ size=15 name="national" check="1">
                          <span class=red><font color="#FF0000">*</font></span></td>
                      </tr>
                      <tr> 
                        <td class="unnamed3" noWrap align=right bgcolor=#f7f7f7 height=33>政治面貌：</td>
                        <td class="unnamed3" bgcolor=#f7f7f7 colspan=3> 
                          <input type=radio value="1" name="political">
                          中共党员 
                          <input type=radio CHECKED value="2" name="political">
                          共青团员 
                          <input type=radio value="3" name="political">
                          其他</td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 align=right height=33>身高：</td>
                        <td class="unnamed3"> 
                          <input alt=请输入您的身高！ size=10 name="height" check="1">
                          CM <span class=red><font color="#FF0000">*</font></span></td>
                        <td class="unnamed3" align=right>体重：</td>
                        <td class="unnamed3"> 
                          <input alt=请输入您的体重！ size=10 name="weight" check="1">
                          KG <span class=red><font color="#FF0000">*</font></span></td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 align=right bgcolor=#f7f7f7 height=33>籍贯：</td>
                        <td class="unnamed3" bgcolor=#f7f7f7> 
                          <input size=25 name="place">
                        </td>
                        <td class="unnamed3" noWrap align=right bgcolor=#f7f7f7>家庭住址： </td>
                        <td class="unnamed3" bgcolor=#f7f7f7> 
                          <input alt=请输入您的家庭住址！ size=25 name="address" check="1">
                          <span class=red><font color="#FF0000">*</font></span> </td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 align=right height=33>户口所在地： </td>
                        <td class="unnamed3"> 
                          <input size=25 name="cityplace">
                        </td>
                        <td class=unnamed3 noWrap align=right>婚姻状况：</td>
                        <td class="unnamed3"> 
                          <input type=radio value="1" name="marital">已婚 
                          <input type=radio CHECKED value="0" name="marital">未婚 <span class=red>*</span></td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 noWrap align=right bgcolor=#f7f7f7 height=33>配偶工作单位：</td>
                        <td class="unnamed3" bgcolor=#f7f7f7 colspan=3> 
                          <input size=30 name="workunit">
                        </td>
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
                        <td class="unnamed3" width=207><span class=red> 
                          <select name="degree">
                            <option value="1">博士</option>
                            <option value="2">研究生</option>
                            <option value="3" selected>本科</option>
                            <option value="4">大专</option>
                            <option value="5">中专</option>
                            <option value="6">初中以下</option>
                            <option value="7">其他</option>
                          </select>
                          <font color="#FF0000">*</font></span></td>
                        <td class=unnamed3 noWrap align=right width=103>毕业学校：</td>
                        <td class="unnamed3" width=211 nowrap><span class=red> 
                          <input alt=请输入您的毕业学校！ size=30 name="school" check="1"><font color="#FF0000">*</font></span></td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 noWrap align=right bgcolor=#f7f7f7 colspan=2 height=33>毕业时间：</td>
                        <td class="unnamed3" bgcolor=#f7f7f7 colspan=3> 
                          <select name="graduation_year">
                            <option value=2012 selected>2012</option>
                            <option value=2011>2011</option>
                            <option value=2010>2010</option>
                            <option value=2009>2009</option>
                            <option value=2008>2008</option>
                            <option value=2007>2007</option>
                            <option value=2006>2006</option>
                            <option value=2005>2005</option>
                            <option value=2004>2004</option>
                            <option value=2003>2003</option>
                            <option value=2002>2002</option>
                            <option value=2001>2001</option>
                            <option value=2000>2000</option>
                            <option value=1999>1999</option>
                            <option value=1998>1998</option>
                            <option value=1997>1997</option>
                            <option value=1996>1996</option>
                            <option value=1995>1995</option>
                            <option value=1994>1994</option>
                            <option value=1993>1993</option>
                            <option value=1992>1992</option>
                            <option value=1991>1991</option>
                            <option value=1990>1990</option>
                            <option value=1989>1989</option>
                            <option value=1988>1988</option>
                            <option value=1987>1987</option>
                            <option value=1986>1986</option>
                            <option value=1985>1985</option>
                            <option value=1984>1984</option>
                            <option value=1983>1983</option>
                            <option value=1982>1982</option>
                            <option value=1981>1981</option>
                            <option value=1980>1980</option>
                            <option value=1979>1979</option>
                            <option value=1978>1978</option>
                            <option value=1977>1977</option>
                            <option value=1976>1976</option>
                            <option value=1975>1975</option>
                            <option value=1974>1974</option>
                            <option value=1973>1973</option>
                            <option value=1972>1972</option>
                            <option value=1971>1971</option>
                            <option value=1970>1970</option>
                            <option value=1969>1969</option>
                            <option value=1968>1968</option>
                            <option value=1967>1967</option>
                            <option value=1966>1966</option>
                            <option value=1965>1965</option>
                            <option value=1964>1964</option>
                            <option value=1963>1963</option>
                            <option value=1962>1962</option>
                            <option value=1961>1961</option>
                            <option value=1960>1960</option>
                            <option value=1959>1959</option>
                            <option value=1958>1958</option>
                            <option value=1957>1957</option>
                            <option value=1956>1956</option>
                            <option value=1955>1955</option>
                            <option value=1954>1954</option>
                            <option value=1953>1953</option>
                            <option value=1952>1952</option>
                            <option value=1951>1951</option>
                            <option value=1950>1950</option>
                            <option value=1949>1949</option>
                            <option value=1948>1948</option>
                            <option value=1947>1947</option>
                            <option value=1946>1946</option>
                            <option value=1945>1945</option>
                            <option value=1944>1944</option>
                            <option value=1943>1943</option>
                            <option value=1942>1942</option>
                          </select>
                          年 
                          <select name="graduation_month">
                            <option value=1 selected>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value=5>5</option>
                            <option value=6>6</option>
                            <option value=7>7</option>
                            <option value=8>8</option>
                            <option value=9>9</option>
                            <option value=10>10</option>
                            <option value=11>11</option>
                            <option value=12>12</option>
                          </select>
                          月 
                          <select name="graduation_day">
                            <option value=1 selected>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value=5>5</option>
                            <option value=6>6</option>
                            <option value=7>7</option>
                            <option value=8>8</option>
                            <option value=9>9</option>
                            <option value=10>10</option>
                            <option value=11>11</option>
                            <option value=12>12</option>
                            <option value=13>13</option>
                            <option value=14>14</option>
                            <option value=15>15</option>
                            <option value=16>16</option>
                            <option value=17>17</option>
                            <option value=18>18</option>
                            <option value=19>19</option>
                            <option value=20>20</option>
                            <option value=21>21</option>
                            <option value=22>22</option>
                            <option value=23>23</option>
                            <option value=24>24</option>
                            <option value=25>25</option>
                            <option value=26>26</option>
                            <option value=27>27</option>
                            <option value=28>28</option>
                            <option value=29>29</option>
                            <option value=30>30</option>
                            <option value=31>31</option>
                          </select>
                          日 <span class=red><font color="#FF0000">*</font></span></td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 noWrap align=right colspan=2  height=33>培养模式：</td>
                        <td class="unnamed3" colspan=3> 
                          <input type=radio CHECKED value="1" name="mode">
                          全日制 
                          <input type=radio value="2" name="mode">
                          脱产自考 
                          <input type=radio value="3" name="mode">
                          夜大 
                          <input type=radio value="4" name="mode">
                          其他 <span class=red><font color="#FF0000">*</font></span></td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 noWrap align=right bgcolor=#f7f7f7 colspan=2 height=33>专业名称：</td>
                        <td class="unnamed3" bgcolor=#f7f7f7> 
                          <input alt=请输入您的专业名称！ size=25 name="pro_name" check="1">
                          <span class=red><font color="#FF0000">*</font></span></td>
                        <td class="unnamed3" align=right bgcolor=#f7f7f7>现从事专业：</td>
                        <td class="unnamed3" bgcolor=#f7f7f7> 
                          <input alt=请输入您的现从事专业！ size=25 name="pro_now" check="1">
                          <span class=red><font color="#FF0000">*</font></span></td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 align=middle width=75 rowspan=2>外语</td>
                        <td class=unnamed3 noWrap align=right width=51 height=33>语种：</td>
                        <td class="unnamed3"><span class=red> 
                          <select name="language">
                            <option value="1" selected>英语</option>
                            <option value="2">日语</option>
                            <option value="3">其他</option>
                          </select>
                          *</span></td>
                        <td class="unnamed3" align=right>计算机水平：</td>
                        <td class="unnamed3"> 
                          <input size=25 name="computerlevel">
                        </td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 noWrap align=right height=33>水平：</td>
                        <td class="unnamed3" bgcolor=#f7f7f7 colspan=3> 
                          <input size=25 name="level">
                        </td>
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
                        <td class="unnamed2" width=520 colspan=2> 
                          <textarea name="learning" rows=6 cols=70></textarea>
                          <br>
                          请尽量简洁，字数在200以内</td>
                      </tr>
                      <tr> 
                        <td class=unnamed2  align=right bgcolor=#f7f7f7 height=33>工作经历：</td>
                        <td class="unnamed2" bgcolor=#f7f7f7 colspan=3> 
                          <textarea name="workexperience" rows=6 cols=70></textarea>
                          <br>
                          请尽量简洁，字数在200以内</td>
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
                          <select name="jobobjective">
                            <option value="1" selected>市场营销</option>
                            <option value="2">水泥工艺</option>
                            <option value="3">机械设计及制造</option>
                            <option value="4">电气技术</option>
                            <option value="5">工业自动化</option>
                            <option value="6">采矿技术/弹药工程</option>
                            <option value="7">工程机械</option>
                            <option value="8">热能工程</option>
                            <option value="9">工业与民用建筑</option>
                            <option value="10">物资管理</option>
                            <option value="11">港口、河道及航运管理</option>
                            <option value="12">人力资源管理</option>
                            <option value="13">会计学/审计学</option>
                            <option value="14">统计学</option>
                            <option value="16">英语</option>
                            <option value="17">日语</option>
                            <option value="18">给排水</option>
                            <option value="19">铁路管理</option>
                          </select>
                          *</span>说明：表中列舜江所有涉及专业 
                        </td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 noWrap align=right width=127 bgcolor=#f7f7f7 height=33>期望月薪：</td>
                        <td class="unnamed3" width=206 bgcolor=#f7f7f7><span class=red> 
                          <input alt=请输入您的期望月薪！size=25 name="salary" check="1">
                          <font color="#FF0000">*</font></span></td>
                        <td class=unnamed3 noWrap align=right width=115 bgcolor=#f7f7f7>期望有效期限：</td>
                        <td class="unnamed3" width=202 bgcolor=#f7f7f7><span class=red> 
                          <select name="salary_year">
                            <option value="1" selected>半年</option>
                            <option value="2">一年</option>
                            <option value="3">二年</option>
                            <option value="4">三年</option>
                            <option value="5">五年</option>
                            <option value="6">其他</option>
                          </select>
                          </span></td>
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
                        <td class="unnamed3" width=203><span class=red> 
                          <input alt=请输入您的电话！ size=25 name="telephone" check="1">
                          <font color="#FF0000">*</font></span></td>
                        <td class="unnamed3" align=right width=76>手机：</td>
                        <td class="padding5 copy14" width=230><span class=red> 
                          <input size=25 name="phone">
                          </span></td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 noWrap align=right bgcolor=#f7f7f7 height=33 width="120">E-mail：</td>
                        <td class="unnamed3" bgcolor=#f7f7f7 width="203"><span class=red> 
                          <input size=25 name="email">
                          </span></td>
                        <td class="unnamed3" align=right bgcolor=#f7f7f7 width="76">通讯地址：</td>
                        <td class="padding5 copy14" bgcolor=#f7f7f7 width="230"><span  class=red> 
                          <input alt=请输入您的通讯地址！ size=25 name="postaddress" check="1">
                          <font color="#FF0000">*</font></span></td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 noWrap align=right height=33 width="120">邮政编码：</td>
                        <td class="unnamed3" colspan=3> 
                          <input alt=请输入您的邮政编码！ size=25 name="postcode" check="1">
                          <span  class=red><font color="#FF0000">*</font></span></td>
                      </tr>
                      <tr> 
                        <td class=unnamed3 noWrap colspan=4 height=33> 
                          <div align="center"><font color="#FF0000">本人承诺：以上所填内容均为属实，若有失实之处，本人愿意承担由此引起的一切责任</font></div>
                        </td>
                      </tr>
                      </tbody> 
                    </table>
                    <table style="MARGIN-BOTTOM: 25px" cellspacing=0 cellpadding=0 width="95%" align=center border=0>
                      <tbody> 
                      <tr> 
                        <td align=middle> 
                          <div align="center"><label> 
                            <input style="WIDTH: 65px; HEIGHT: 25px" type="submit" value=提交 name=Submit2>
                            <input style="WIDTH: 65px; HEIGHT: 25px" type="reset" value=重填 name=reset2>
                            </label></div>
                        </td>
                      </tr>
                      </tbody> 
                    </table>
					</form>
                  </td>
                  <td width="41" valign="top" background="images/html/79.jpg" height="73">&nbsp;</td>
                </tr>
                <tr> 
                  <td colspan="3" height="27"><img src="images/html/81.jpg" width="778" height="27"></td>
                </tr>
              </table>
              </div>
          </td>
        </tr>
      </table>
    </TD>
  </TR>
</TABLE>
<iframe id="ifrm" name="ifrm" border="0" vspace="0" hspace="0" marginwidth="0" marginheight="0" framespacing="0" frameborder="0" scrolling="no" width="468" height="60" style="display:none"></iframe> 
<?php include "foot.php"?>
<script>
function checkFrom(){
	var frm = document.getElementById('frm');
	if(frm.elements('name').value == ""){
		alert("姓名不能为空!");
		return false;
	}
	if(frm.elements('national').value == ""){
		alert("民族不能为空!");
		return false;
	}	
	if(frm.elements('height').value == ""){
		alert("身高不能为空!");
		return false;
	}	
	if(frm.elements('weight').value == ""){
		alert("体重不能为空!");
		return false;
	}	
	if(frm.elements('address').value == ""){
		alert("家庭住址不能为空!");
		return false;
	}	
	if(frm.elements('school').value == ""){
		alert("毕业学校不能为空!");
		return false;
	}	
	if(frm.elements('pro_name').value == ""){
		alert("专业名称不能为空!");
		return false;
	}	
	if(frm.elements('pro_now').value == ""){
		alert("现从事专业不能为空!");
		return false;
	}		
	if(frm.elements('salary').value == ""){
		alert("期望月薪不能为空!");
		return false;
	}	
	if(frm.elements('telephone').value == ""){
		alert("电话不能为空!");
		return false;
	}	
	if(frm.elements('postaddress').value == ""){
		alert("通讯地址不能为空!");
		return false;
	}	
	if(frm.elements('postcode').value == ""){
		alert("邮政编码不能为空!");
		return false;
	}		
	return true;
}
</script>