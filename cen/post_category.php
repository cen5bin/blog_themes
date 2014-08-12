<div id="post_category">
<?php	
	$args = array('orderby'=>'name', 'order'=>'ASC');
	$categories = get_categories($args);
?>
<ul>
<?php   foreach ($categories as $value): ?>
<li> <a href="<?php 
	echo get_bloginfo('url').'/?menu_item='.POST_LIST.'&category='.$value->cat_ID;
?>"><?php echo $value->name;?></a> (<?php echo $value->count;?>)</li>
<?php endforeach;?>
</ul>

</div>

<div class='separate'> </div>
