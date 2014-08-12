<div id="post_list">

<?php 
	$offset = $_GET['offset'];
	if ($offset == null) $offset = 1;
	query_posts(array('posts_per_page'=>POST_LIST_PER_PAGE, 'paged'=>$offset, 'orderby'=>'date', 'order'=>'DESC'));
	cen_set_item_count_per_page(POST_LIST_PER_PAGE);
	while(have_posts()): the_post();
?>
	<h3 class="post_title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>

<?php endwhile;
wp_reset_query();
?>
<div class="separate"></div>
</div>
<?php include('page_naving.php');?>
