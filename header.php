<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>

		<nav>
			<?php wp_nav_menu( [
				'theme_location' => 'main',
				'container'      => false,
				'depth'          => 2,
				'fallback_cb'    => false,
			] ); ?>
		</nav>
	</header>

	<main class="main">
