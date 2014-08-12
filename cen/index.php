<?php get_header();?>

<?php include('menubar.php');?>

<div id="posts_container">
<?php 
	$posts = cen_get_posts();
	foreach ($posts as $postdata): setup_postdata( $postdata ); the_post();
?>
	<h2 class="post_title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
	<div class="post_content"><?php the_content();?></div>
	<div class="separate"></div>
<?php endforeach;?>
</div>
<?php include('page_naving.php');?>

<?php get_footer();?>
