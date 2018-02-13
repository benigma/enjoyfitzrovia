<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php wp_title('|','true','right'); ?></title>
	<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/modal.css" type="text/css">

	<link href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/android-chrome-192x192.png" sizes="192x192">
	<!--  jQuery 1.7+  -->
	<script async src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
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
		<nav class="st-menu st-effect-1" id="menu-1">
		<h2></h2>
		<? get_search_form(); ?>
		<?php 
			$defaults = array(
			'container' => false, 	
			'theme_location' => 'primary-menu'
			);
						
			wp_nav_menu( $defaults );
		 ?>
		 <a href="http://enjoyfitzrovia.co.uk/download/3129/">
		 <p><img src="<?php echo get_template_directory_uri(); ?>/img/TFP_Christmas2015_Cover.jpg" /></p>
		 <p>Download the @Fitzrovia Christmas Newspaper to discover a great range of ideas to make this a Christmas to remember.</p></a>
		</nav>
		
		<div id="st-trigger-effects" class="menu-red">
			<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/Fitz_Christmas_Logo_white.png" class="logo" /></a>
			<button data-effect="st-effect-1"><img src="<?php echo get_template_directory_uri(); ?>/img/menu-icon.png" /></button>
		</div>
	