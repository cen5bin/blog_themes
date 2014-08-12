<div id="menubar"> 
<ul>
<?php 
	$home = get_bloginfo('url');	
	$prefix = $home.'/?menu_item=';
	$menu_items = array(
			'blog'=>$home, 
			'list'=>($prefix. POST_LIST), 
			'category'=>($prefix.POST_CAT), 
			'about'=>($prefix.ABOUT_ME)
			);
	foreach ($menu_items as $key=>$value):
?>
	<li><a href="<?php echo $value;?>"> <?php echo $key;?> </a><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></li>	
<?php endforeach;?>
</ul>
</div>
