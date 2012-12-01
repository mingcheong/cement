<style type="text/css">
.font_js{ line-height:200%; font-size:12px; color:#FFFFFF; margin-top:10px;}
</style>
<?php foreach ($showList as $exam){?>
<div style="color:#CC6600; font-size:14px; font-weight:bold;"><?php echo $exam['title'];?></div>

<div class="font_js"> <?php echo $exam['keyword']?></div>
<?php }?>
