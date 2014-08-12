<div id="page_navigator">
	<?php 
		$offset = $_GET['offset'];
		if ($offset == null)
			$offset = 1;
		$values = array();
		if ($offset != 1) $values[] = FIRST_PAGE;
		$max_count = cen_get_max_page_count();
		if ($offset < 3) {
			for ($i = 1; $i <= $offset + 2 && $i <= $max_count; $i++)
				$values[] = $i;
		}
		else if ($max_count - $offset >= 2) {
			for ($i = $offset - 2; $i <= $offset + 2; $i++)
				$values[] = $i;
		}	
		else {
			$start = $max_count - 4;
			if ($start < 0) $start = 0;
			for ($i = $start; $i <= $max_count; $i++) $values[] = $i;
		}
		
		if ($offset != $max_count) $values[] = LAST_PAGE;
		foreach ($values as $value):
	?>
	<a href="<?php echo page_div_href($offset, $value);?>"><div class="<?php page_div_class($offset, $value);?>"><?php echo $value;?></div><div class="separate">&nbsp;</div></a>
	<?php endforeach;?>
</div>

