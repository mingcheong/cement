<?php include "head.php"?>

	 <!---- news ---->
    <div id="news">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td colspan="2" valign="top">		  <table width="100%" height="24" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="145"><div class="title_1">实践教学</div></td>
              <td align="right" valign="bottom"><div class="title_2"></div></td>
                <td width="8" valign="bottom"><div class="title_3"></div></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td width="200" valign="top" background="about1.html" bgcolor="#E6E6E6">
		      <br/>
			  <span class="title_left"></span><br>
          <td width="718" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td valign="top">
			  <div class="new_2" id="div">
					<?php foreach ($getCategoryList as $cate){?>
						<div class="list">
						  <div class="list_content"><?php echo $cate['name']?></div>
						</div>
						<?php  $getArticle = $this->Category_model->getArticle($cate['id']);
							foreach($getArticle as $article ){?>
						<div class="list">
						  <div class="list_content">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url('html/show/index/'.$article['id']);?>" target="_blank"><?php echo $article['title']?></a></div>
						</div>
						<?php }?>
					<?php }?>  		  
              </div>
			  </div></td>
            </tr>
          </table></td>
        </tr>
      </table>
    </div>
<?php include "foot.php"?>