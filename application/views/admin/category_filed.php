
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
<body>
<form action="<?php echo site_url('admin/category/filedsave');?>" method="post" >
<input type="hidden" name="id" value="<?php echo $id;?>">
<table width="100%" border="0" cellpadding="0" cellspacing="0" >
  <tr>
    <td width="17" valign="top" background="images/admin/mail_leftbg.gif"><img src="images/admin/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/admin/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31"><div class="titlebt">字段管理</div></td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/admin/mail_rightbg.gif"><img src="images/admin/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/admin/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9">
 
      <table width="100%" border="0" cellspacing="1" cellpadding="3" class="table_form">
  <tr>
    <th width="35%" align="center">字段名</th>
    <th width="29%" align="center">名称</th>
    <th width="36%" align="center">操作</th>
    </tr>
  <tr>
    <td align="left">cid</td>
    <td align="left">栏目</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td align="left">title</td>
    <td align="left">标题</td>
    <td><input name="display[]" type="checkbox" id="display[]" value="title"  <?php if(in_array('title', $display)) echo "checked";?> />
启用</td>
    </tr>
  <tr>
    <td align="left">pic</td>
    <td align="left">缩略图</td>
    <td><input name="display[]" type="checkbox" id="display[]" value="pic" <?php if(in_array('pic', $display)) echo "checked";?>  />
启用</td>
  </tr>
  <tr>
    <td align="left">oripic</td>
    <td align="left">原始图</td>
    <td><input name="display[]" type="checkbox" id="display[]" value="oripic" <?php if(in_array('oripic', $display)) echo "checked";?>  />
启用</td>
  </tr>  
  <tr>
    <td align="left">video</td>
    <td align="left">视频</td>
    <td><input name="display[]" type="checkbox" id="display[]" value="video" <?php if(in_array('video', $display)) echo "checked";?>  />
启用</td>
  </tr>   
   <tr>
    <td align="left">photos</td>
    <td align="left">图组</td>
    <td><input name="display[]" type="checkbox" id="display[]" value="photos" <?php if(in_array('photos', $display)) echo "checked";?>  />
启用</td>
  </tr>
  <tr>
    <td align="left">source</td>
    <td align="left">来源</td>
    <td><input name="display[]" type="checkbox" id="display[]" value="source" <?php if(in_array('source', $display)) echo "checked";?> />
启用</td>
    </tr>
  <tr>
    <td align="left">author</td>
    <td align="left">作者</td>
    <td><input name="display[]" type="checkbox" id="display[]" value="author" <?php if(in_array('author', $display)) echo "checked";?> />
启用</td>
    </tr>
  <tr>
    <td align="left">description</td>
    <td align="left">摘要</td>
    <td><input name="display[]" type="checkbox" id="display[]" value="description" <?php if(in_array('description', $display)) echo "checked";?> />
启用</td>
    </tr>
  <tr>
    <td align="left">content</td>
    <td align="left">内容</td>
    <td><input name="display[]" type="checkbox" id="display[]" value="content" <?php if(in_array('content', $display)) echo "checked";?>/>
启用</td>
    </tr>
  <tr>
    <td align="left">addtime</td>
    <td align="left">发布时间</td>
    <td><input name="display[]" type="checkbox" id="display[]" value="addtime" <?php if(in_array('addtime', $display)) echo "checked";?>/>
启用</td>
    </tr>
  <tr>
    <td align="left">recommend</td>
    <td align="left">推荐</td>
    <td><input name="display[]" type="checkbox" id="display[]" value="recommend" <?php if(in_array('recommend', $display)) echo "checked";?> />
启用</td>
  </tr>
    </table>
     <table width="100%" border="0" align="center" cellpadding="2" cellspacing="0" class="table_form" style="margin-top:8px;">
      <tr >
        <th width="57" align="center" >字段名</th>
        <th width="89" height="26" align="center" >表单类型</th>
        <th width="116" align="center" >名称*</th>
        <th width="125" align="center" >单位</th>
        <th width="333" align="center" >选项值(多个值以 | 隔开)</th>
        <th width="216" align="center" >默认值</th>
        <th width="85" align="center" >是否必填</th>
        <th width="129" align="center" >文本框宽度</th>
        </tr>
  <?php 
$rs = $str_filed2;
for($i=0; $i<=9; $i++){		
	  for ($n=0; $n<10; $n++){
		  $rs[$i][$n] = empty($rs[$i][$n]) ? "" : $rs[$i][$n];			
	  }
?>
      <tr class="row">
        <td align="center" ><input name="name<?php echo $i;?>" type="text"  value="db<?php echo $i;?>" size="5" readonly="readonly" /></td>
        <td height="26" align="center" ><select name="type<?php echo $i;?>" style="font-size:12px" >
          <option value=""> </option>
          <option value="1" <?php if($rs[$i][1]==1) echo "selected";?>>文本框</option>
          <option value="2" <?php if($rs[$i][1]==2) echo "selected";?>>下拉框</option>
          <option value="3" <?php if($rs[$i][1]==3) echo "selected";?>>单选框</option>
          <option value="4" <?php if($rs[$i][1]==4) echo "selected";?>>多选框</option>
          </select></td>
        <td align="center" ><input name="title<?php echo $i;?>" type="text"  size="12" value="<?php echo $rs[$i][2];?>" /></td>
        <td align="center" ><input name="unit<?php echo $i;?>" type="text" size="10" value="<?php echo $rs[$i][3];?>" /></td>
        <td align="center" ><input name="option<?php echo $i;?>" type="text" size="40" maxlength="50" value="<?php echo $rs[$i][4];?>" /></td>
        <td align="center" ><input name="index<?php echo $i;?>" type="text"  value="<?php echo $rs[$i][5];?>" /></td>
        <td align="center" ><input name="required<?php echo $i;?>" type="checkbox" value="是"  <?php if($rs[$i][6]=='是') echo "checked";?> /></td>
        <td align="center" ><input name="width<?php echo $i;?>" type="text"  size="6" value="<?php echo $rs[$i][7];?>" />
          px</td>
        </tr>    
  <?php }?>
  
    </table>
    <table>
     <tr>
    <td height="60" align="left">
       &nbsp;<input type="submit" name="button" id="button" value=" 确认 " />
      &nbsp; <input type="button" onClick="window.history.go(-1)" value="返回" /> <br />
     &nbsp;&nbsp; <span style=" font-size:12px">注意：名称为空则为不启用该字段</span></td>
  </tr>
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
</form>
</body>
