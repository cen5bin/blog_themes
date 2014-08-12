<div id="menubar"> 
<ul>
<?php 
	$home = get_bloginfo('url');
	$menu_items = array(
			'blog'=>$home, 
			'list'=>$home.'/post_list.php', 
			'category'=>'#', 
			'about'=>'#'
			);
	foreach ($menu_items as $key=>$value):
?>
	<li><a href="<?php echo $value;?>"> <?php echo $key;?> </a><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></li>	
<?php endforeach;?>
</ul>
</div>
