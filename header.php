<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php jast_title(); ?></title>
	<meta name="viewport" content="width=device-width">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="site-header" role="banner">

		<hgroup>
			<h1>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
			</h1>
			<h2><?php bloginfo( 'description' ); ?></h2>
		</hgroup>

		<nav role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>

	</header>

	<div role="main">