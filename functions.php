<?php

/**
 * Get things setup.
 */

function jast_setup() {

	// register the sidebar
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'description' => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));

	// register nav menus
	register_nav_menus(array(
		'primary_meny' => 'Primary Menu Location'
	));

	// get rid of the default [gallery] shortcode styles
	add_filter('use_default_gallery_style', '__return_false');

	// load the threaded comment scripts if needed
	function jast_comments_scripts() {
		if (is_singular() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
	add_action('wp_head', 'jast_comments_scripts');

}

add_action('init', 'jast_setup');


/**
 * Context-sensitive <title> with customizable separator.
 */

function jast_title($sep = '|') {
	wp_title($sep, true, 'right');
	bloginfo('name');
	$site_description = get_bloginfo('description', 'display');
	if ($site_description && (is_home() || is_front_page())) {
		echo " $sep $site_description";
	}
}


/**
 * Context-sensivive archive page titles.
 */

function jast_archive_title() {
	if (is_category()) {
		echo 'Posts categorized ';
		single_cat_title();
	} elseif (is_tag()) {
		echo 'Posts tagged ';
		single_tag_title();
	} elseif (is_day()) {
		echo 'Archives for ' . get_the_date();
	} elseif (is_month()) {
		echo 'Archives for ' . get_the_date('F Y');
	} elseif (is_year()) {
		echo 'Archives for ' . get_the_date('Y');
	} else {
		echo 'Archives';
	}
}