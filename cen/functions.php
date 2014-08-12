<?php
    define('POSTS_PER_PAGE', 5);
    define('POST_LIST_PER_PAGE', 25);
	define('FIRST_PAGE', '首页');
	define('LAST_PAGE', '尾页');

	define('POST_LIST', 'post_list');
	define('POST_CAT', 'post_category');
	define('ABOUT_ME', 'about');
	
	$count = POSTS_PER_PAGE;

	function cen_get_filename($item) {
		if ($item == null) return 'posts_container.php';
		return $item . '.php';
	}

	function cen_get_post_count() {
		return wp_count_posts()->publish;
	}

	function cen_get_max_page_count() {
		global $count;
		return floor((cen_get_post_count() + $count - 1) / $count);
	}

	function cen_get_item_count_per_page() {
		global $count;
		return $count;
	}
	
	function cen_set_item_count_per_page($count1) {
		global $count;
		$count = $count1;
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
		$menu_item = $_GET['menu_item'];
		$flag = false;
		if ($menu_item != null) {
			$home .= '?menu_item=' . $menu_item;
			$flag = true;
		}
		$category = $_GET['category'];
		if ($category != null) {
			$home .= ($flag?'&':'?').'category='.$category;
			$flag = true;
		}
		if ($offset == $value) 	return $ret;
		if ($value == FIRST_PAGE) $ret = $home;
	   	elseif ($value == LAST_PAGE) $ret = $home . ($flag?'&':'?').'offset='.cen_get_max_page_count();
		else $ret = $home . ($flag?'&':'?').'offset='.$value;
		return $ret;	
	}

	function cen_get_pre_post() {
		$prev_post = get_previous_post();
		if (!empty( $prev_post )) return $prev_post;
		return null;
	}

	function cen_get_next_post() {
		$next_post = get_next_post();
		if (!empty($next_post)) return $next_post;
		return null;
	}
?>
