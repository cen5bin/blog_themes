<div class="widgets_div">
	<div class="widgets_title">文章分类</div>
<?php
	$args = array('orderby'=>'name', 'order'=>'ASC');
	$categories = get_categories($args);
?>
<ul>
<?php	foreach ($categories as $value): ?>
	<li> <a href="#"><?php echo $value->name;?></a> (<?php echo $value->count;?>)</li>
<?php endforeach;?>
</ul>
</div>
