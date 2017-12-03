<?php

// Increment this every time you deploy new style or script changes to bust browser caches
define( 'JAST_ASSET_VER', 1 );

include get_template_directory() . '/includes/template-tags.php';

add_action( 'after_setup_theme', function() {

	// Replace 500 with whatever the width of your main content column
	$GLOBALS['content_width'] = 500;

	load_theme_textdomain( 'jast' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'html5' );

	register_nav_menus( [
		'main' => esc_html__( 'Main Menu', 'jast' ),
	] );

} );

add_action( 'wp_enqueue_scripts', function() {

	wp_enqueue_style(
		'jast',
		esc_url( get_template_directory_uri() . '/assets/css/jast.css' ),
		[],
		JAST_ASSET_VER
	);

	wp_enqueue_script(
		'jast',
		esc_url( get_template_directory_uri() . '/assets/js/jast.js' ),
		[ 'jquery' ],
		JAST_ASSET_VER,
		true // Output in footer for better performance
	);

} );

add_action( 'widgets_init', function() {

	$markup = [
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>'
	];

	register_sidebar( array_merge( $markup, [
		'name' => esc_html__( 'Sidebar', 'jast' ),
		'id'   => 'sidebar',
	] ) );

} );
