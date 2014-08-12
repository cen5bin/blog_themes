<div id="posts_container">
<?php 
$postid = null;
if (is_single())
	$postid = get_the_ID();
	if ($postid == null):
?>
<?php 
	$offset = $_GET['offset'];
	if ($offset == null) $offset = 1;
	query_posts(array('posts_per_page'=>POSTS_PER_PAGE, 'paged'=>$offset, 'orderby'=>'date', 'order'=>'DESC'));
	cen_set_item_count_per_page(POSTS_PER_PAGE);
	while(have_posts()): the_post();
?>
	<h2 class="post_title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
	<div class="post_content"><?php the_content();?></div>
	<div class="separate"></div>
<?php endwhile;
wp_reset_query();
?>
<?php else:
	query_posts('p='.$postid);
	while (have_posts()):the_post();
?>
	<h2 class="post_title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
	<div class="post_content"><?php the_content();?></div>

<?php
	endwhile;
	endif;
?>
</div>
<?php if ($postid == null) include('page_naving.php');?>
