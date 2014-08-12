<div id="post_list">

<?php 
	$offset = $_GET['offset'];
	$category = $_GET['category'];
	if ($offset == null) $offset = 1;
	$args = array('posts_per_page'=>POST_LIST_PER_PAGE, 'paged'=>$offset, 'orderby'=>'date', 'order'=>'DESC');
	if ($category != null)
	$args['cat'] = $category;
	query_posts($args);
	cen_set_item_count_per_page(POST_LIST_PER_PAGE);
	while(have_posts()): the_post();
?>
	<div class="post_title"><a href="<?php the_permalink();?>"><?php the_title();?></a> &nbsp;&nbsp;&nbsp;<span class='post_date'><?php echo get_the_date('Y-m-d g:i:s');?></span></div>

<?php endwhile;
wp_reset_query();
?>
</div>
<div class="separate"></div>
<?php include('page_naving.php');?>
