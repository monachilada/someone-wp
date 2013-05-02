<!DOCTYPE HTML>
<html>
	<head>
		<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"/>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css"/>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header>
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			<?php bloginfo( 'description' ); ?>
		</header>
		<section>