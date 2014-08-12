<?php
    define('POSTS_PER_PAGE', 5);
	define('FIRST_PAGE', '首页');
	define('LAST_PAGE', '尾页');
	function cen_get_posts() {
		$offset= $_GET['offset'];
		$args = array(
				'posts_per_page'=> POSTS_PER_PAGE, 
				'orderby'=>'post_date',
				'order'=>'DESC',
				'post_status'=>'publish'
				);
		if ($offset != null)
			$args['offset'] = ($offset - 1) * POSTS_PER_PAGE;
		return get_posts($args);
	}
	
	function cen_get_post_count() {
		return wp_count_posts()->publish;
	}

	function cen_get_max_page_count() {
		return floor((cen_get_post_count() + POSTS_PER_PAGE - 1) / POSTS_PER_PAGE);
	}

	function page_div_class($offset, $value) {
		$ret = 'page_div';
		if ($offset == $value) $ret .= ' '. 'page_div_now';
		if ($value == FIRST_PAGE || $value == LAST_PAGE) $ret .= ' page_div_smallfont';
		echo $ret;
	}

	function page_div_href($offset, $value) {
		$ret = '';
		$home = get_bloginfo('url') . '/';
		if ($offset == $value) 	return $ret;
		if ($value == FIRST_PAGE) $ret = $home;
	   	elseif ($value == LAST_PAGE) $ret = $home . '?offset='.cen_get_max_page_count();
		else $ret = $home . '?offset='.$value;
		return $ret;	
	}
?>
