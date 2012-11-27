<?php

/**
 * Get things setup.
 */
function jast_setup() {

	// register the sidebar
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'description' => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	) );

	// get rid of the default [gallery] shortcode styles
	add_filter( 'use_default_gallery_style', '__return_false' );

	// load the threaded comment scripts if needed
	function jast_comments_scripts() {
		if ( is_singular() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
	add_action( 'wp_head', 'jast_comments_scripts' );

}

add_action( 'init', 'jast_setup' );


/**
 * Context-sensitive <title> with customizable separator.
 */
function jast_title( $sep = '|' ) {
	wp_title( $sep, true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		echo " $sep $site_description";
	}
}


/**
 * Creates context-sensitive page titles for archive pages.
 */
function jast_archive_title() {
	if ( is_category() ) {
		echo 'Posts categorized ';
		single_cat_title();
	} elseif ( is_tag() ) {
		echo 'Posts tagged ';
		single_tag_title();
	} elseif ( is_day() ) {
		echo 'Archives for ' . get_the_date();
	} elseif ( is_month() ) {
		echo 'Archives for ' . get_the_date( 'F Y' );
	} elseif ( is_year() ) {
		echo 'Archives for ' . get_the_date( 'Y' );
	} else {
		echo 'Archives';
	}
}


/**
 * Easy way to handle theme-wide "published on" date crap.
 */
function jast_published_on() {
	echo 'Published on <a href="' . get_permalink() . '">' . get_the_time( 'F j, Y' ) . '</a>';
}


/**
 * Provides an easy way display the_excerpt and the_content in templates.
 */
function jast_entry_body( $format ) {
	if ( $format == 'excerpt' ) {
		the_excerpt();
	} else {
		the_content( 'Continue reading &rarr;' );
		wp_link_pages();
	}
}

/**
 * Clean way to handle theme-wide post meta.
 */
function jast_post_meta() {
	if ( 'post' == get_post_type() ) {
		the_tags( 'Tagged ', ', ', ' | ' );
		echo 'Categorized ';
		the_category( ', ' );
	}

	if ( comments_open() ) {
		echo ' | <a href="' . get_comments_link() . '">';
		comments_number( 'No Replies', 'One Reply', '% Replies' );
		echo '</a>';
	}
}


/**
 * Function for theme-wide pagination.
 */
function jast_pagination() {
	posts_nav_link( ' | ', '&larr; Newer', 'Older &rarr;' );
}