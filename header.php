<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php jast_title(); ?></title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
	<!--[if lt IE 9]><script src="http://raw.github.com/aFarkas/html5shiv/master/dist/html5shiv.js"></script><![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="site-header">
		<h1><a href="/"><?php bloginfo('name'); ?></a></h1>
		<h2><?php bloginfo('description'); ?></h2>
		<nav role="navigation">
			<?php wp_nav_menu(array(
				'theme_location' => 'primary_menu',
				'container' => false
			)); ?>
		</nav>
	</header>
	<div class="main">