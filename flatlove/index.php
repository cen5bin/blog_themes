<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo('name');?>|<?php bloginfo('description')?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
<script> </script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.js"></script>  
<script type="text/javascript">  
	var adjustSidebar = function() {
		var sidebar = document.getElementById('sidebar');
		var content = document.getElementById('post_title_list');
		if (content.scrollHeight > sidebar.scrollHeight)
			sidebar.style.height = content.scrollHeight+'px';
	}
</script>  
</head>
<body onload="adjustSidebar()">
<div id="index_main">
<div class="content_div">
	<div class="content_title1"> 全部文章</div>
	<div id='post_title_list'>
		<?php if (have_posts()) :?>
			<?php while (have_posts()) : the_post();?>
				<!--	<p><span class='post_title'><a href="<?php the_permalink();?>"><h3><?php the_title(); ?></h3><a/></span> 
					<span class='post_date'><?php the_date('Y-m-d');?></span></p> -->
					<p>
					<span class="list_post_title"><?php the_title();?></span><br/>
					<span class="post_date">asd</span>
					</p>

			<?php endwhile; ?>
		<?php else :?>
		<?php endif; ?>
	</div>
	</div>
	<?php get_sidebar();?>
</div>


</body>
</html>
