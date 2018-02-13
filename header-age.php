<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="user-scalable=no">
	<title><?php wp_title('|','true','right'); ?></title>
	<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<link href="<?php echo get_template_directory_uri(); ?>/css/modalwindow.css" type="text/css" rel="stylesheet" />
	<link href="<?php echo get_template_directory_uri(); ?>/ageform.css" type="text/css" rel="stylesheet" />
	
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
	
	<style>
		label {
			width: 100%;
			text-align: center;
		}
		input[type=number] {
			padding: 16px 8px;
			font-size: 24px;
			text-align: center;
		}
		::-webkit-input-placeholder {
		    color: #999;
		    font-size: 22px;
		    text-align: center;
		}
		:-moz-placeholder {
		    color: #999;
		    font-size: 22px;
		    text-align: center;
		}
		::-moz-placeholder {
		    color: #999;
		    font-size: 22px;
		    text-align: center;
		}
		:-ms-input-placeholder {
		    color: #999;
		    font-size: 22px;
		    text-align: center;
		}
	</style>
	
	<?php wp_head(); ?>
<body>

<div class="" id="modal-1">
	<div class="md-content">
		<div>
	<section class="agegate">
      <form name="agegate" action="" class="agecheck"><h2 class="h5">THANKS FOR YOUR INTEREST</h2>
      <p>Before you access your offers, we just need to check you’re of legal drinking age. It's part of our commitment to responsible drinking.</p>
      <p>To enter the site, you will need to confirm you're 18 years of age or older.</p>
        <div class="agegate__item">
          <label>
            
            <input type="number" name="day" placeholder="DD" min="1" max="31" style="width: 100px;min-width: 100px;margin-left: 1.5%;">
            <input type="number" name="month" placeholder="MM" min="1" max="12" class="middle" style="width: 100px;min-width: 100px;margin-left: 10px; margin-right: 10px;">
            <input type="number" name="year" placeholder="YYYY" min="1900" max="2015" style="width: 100px;min-width: 100px;margin-left: 1.5%;">
          </label>
        </div>
        <div class="agegate__item button-container">
          <button type="submit" class="md-close button button--primary">Let Me In</button>
        </div>
      </form>
    </section>
		</div>
	</div>
</div>

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
		</nav>
		
		<div id="st-trigger-effects" class="menu-red">
			<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/fitzrovia-logo.png" class="logo" /></a>
			<button data-effect="st-effect-1"><img src="<?php echo get_template_directory_uri(); ?>/img/menu-icon.png" /></button>
		</div>
	