<?php


function jast_setup() {
	
	// register the theme's sidebar
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'description' => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	) );
	
	// get rid of the annoying default [gallery] shortcode styles
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



// context-sensitive title
// change the value of $sep to whatever you like

function jast_title( $sep = '|' ) {
	
	// first off, add the title
	wp_title( $sep, true, 'right' );

	// then the blog name
	bloginfo( 'name' );

	// and add the blog description for front/homepage
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		echo " $sep $site_description";		
	}

}



// function for created the published on links

function jast_published_on() {
	echo 'Published on <a href="' . get_permalink() . '">' . get_the_time( 'F j, Y' ) . '</a>';
}


// the post body
// $format defaults to 'content' but also accepts 'excerpt'
function jast_entry_body( $format = 'content' ) {
	if ( $format == 'excerpt' ) {
		the_excerpt();
	} else {
		the_content( 'Continue reading &rarr;' );
		wp_link_pages();
	}
}


// function for the post meta

function jast_post_meta() {
	
	if ( 'post' == get_post_type() ) {
		// tags
		the_tags( 'Tagged ', ', ', ' | ' );

		// categories
		echo 'Categorized ';
		the_category( ', ' );
	}
		
	// comments
	if ( comments_open() ) {
		echo ' | <a href="' . get_comments_link() . '">';
		comments_number( 'No Replies', 'One Reply', '% Replies' );
		echo '</a>';
	}
	
}


// context-sensitive title for archive pages

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


function jast_pagination() {
	posts_nav_link( ' | ', '&larr; Newer', 'Older &rarr;' );
}