<?php get_header();?>

<?php include('menubar.php');?>

<?php 
	$menu_item = $_GET['menu_item'];
	include(cen_get_filename($menu_item));
?>

<?php get_footer();?>
