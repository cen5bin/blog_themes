<div id="post_content_div">
<?php 
	$postid = get_the_ID();
	query_posts('p='.$postid);
	while (have_posts()):the_post();
?>
	<h2 class="post_title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
	<p class="post_date">发表于 <?php echo get_the_date();?><p>
	<div class="post_content"> <?php the_content();?></div>

<?php
	endwhile;
?>
</div>
<div id="post_footer">
<div id="pre_post">
<?php 
	$pre_post = cen_get_pre_post();
	if ($pre_post == null):
		echo '上一篇：无';
	else:	
	$pre_href = get_permalink( $pre_post->ID );
?>
	<a = href="<?php echo $pre_href; ?>"> <?php echo '上一篇：'.$pre_post->post_title;?></a>
<?php endif;?>
</div> 
<div id="next_post">
<?php 
	$next_post = cen_get_next_post();
	if ($next_post == null):
		echo '下一篇：无';
	else:
	$next_href = get_permalink( $next_post->ID);
?>
	<a href="<?php echo $next_href;?>"><?php echo '下一篇：'.$next_post
	->post_title;?></a>
<?php endif;?>
</div> 
</div>
<div class="separate"></div>
	<?php //comments_template();?>
