<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="user-scalable=no">
	<title><?php wp_title('|','true','right'); ?><?php bloginfo('name'); ?></title>
	<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flip.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/component.css" type="text/css">
	
	<link href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-art-180x180.png" rel="apple-touch-icon" sizes="180x180" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/android-chrome-art-192x192.png" sizes="192x192">
	<!--[if lt IE 9]>
	<script async src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<script async src="//use.typekit.net/xyz1hvx.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.js"></script>
	
	<?php wp_head(); ?>
		
</head>
<body>
	<div id="st-container" class="st-container">
		<nav class="st-menu purple st-effect-1" id="menu-1">
		<h2></h2>
		<?php get_search_form(); ?>
		<?php 
			$defaults = array(	
			'container' => false, 	
			'theme_location' => 'primary-menu'
			);
						
			wp_nav_menu( $defaults );
		 ?>
		</nav>
		
		<div id="st-trigger-effects" class="menu-purple">
			<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/fitzrovia-art-logo.png" class="logo" /></a>
			<button data-effect="st-effect-1"><img src="<?php echo get_template_directory_uri(); ?>/img/menu-icon.png" /></button>
		</div>
	