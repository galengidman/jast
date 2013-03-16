<form class="search-form" action="<?php echo home_url(); ?>" method="get">
	<input type="text" class="search-box" name="s" placeholder="search" value="<?php the_search_query(); ?>">
	<input type="submit" class="search-submit" value="Search">
</form>