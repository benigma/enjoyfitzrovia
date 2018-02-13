<?php
/*
Template Name: About Template
*/
?>
<?php get_header('red'); ?>

<div class="row header about">
	<div class="col-md-12">
		<?php echo get_field('about_introduction_text'); ?>
	</div>
</div>
<div class="row travel">
	<div class="col-md-6">
		<?php
			$sideimage = get_field('about_welcome_image');
			echo '<img src="'.$sideimage['url'].'" />';
		?>
	</div>
	
	<div class="col-md-6">
		<?php echo get_field('about_welcome_text'); ?>
	</div>
</div>

<div class="row travel">
	<div class="col-md-6">
		<?php echo get_field('about_shopping_text'); ?>
		<input type="button" class="shop" onclick="window.location.href='http://enjoyfitzrovia.co.uk/shop'" value="Visit our Shopping Directory">
	</div>
		
	<div class="col-md-6">
		<?php
			$sideimage = get_field('about_shopping_image');
			echo '<img src="'.$sideimage['url'].'" />';
		?>
	</div>
</div>
	
<div class="row travel">
	<div class="col-md-6">
		<?php
			$sideimage = get_field('about_eat_image');
			echo '<img src="'.$sideimage['url'].'" />';
		?>
	</div>
		
	<div class="col-md-6">
		<?php echo get_field('about_eat_text'); ?>
		<input type="button" class="eat" onclick="window.location.href='http://enjoyfitzrovia.co.uk/eat'" value="Visit our Restaurant &amp; Drinks Directory">
	</div>
</div>

<div class="row travel">
	<div class="col-md-6">
		<?php echo get_field('about_art_text'); ?>
		<input type="button" class="art" onclick="window.location.href='http://enjoyfitzrovia.co.uk/art'" value="Visit our Art Directory">
	</div>
		
	<div class="col-md-6">
		<?php 
			$sideimage = get_field('about_art_image');
			echo '<img src="'.$sideimage['url'].'" />';
		?>
	</div>
</div>

<?php get_footer(); ?>