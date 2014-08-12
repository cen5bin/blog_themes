<?php get_header();?>

<?php include('menubar.php');?>

<?php 
	if (is_single())
	include('post_content.php');
	else {
		$menu_item = $_GET['menu_item'];
		include(cen_get_filename($menu_item));
	}
?>

<?php get_footer();?>
