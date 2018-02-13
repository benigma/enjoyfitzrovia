<?php
/*
Template Name: Transport Template
*/
?>
<?php get_header('red'); ?>

<div class="row header transport">
	<div class="col-md-12">
		<?php echo get_field('transport_header_text'); ?>
	</div>
</div>
<div class="row travel">
	<div class="col-md-6">
		<?php 
			$sideimage = get_field('transport_tube_image');
			echo '<img src="'.$sideimage['url'].'" />';
		?>
	</div>
	
	<div class="col-md-6">
		<?php echo get_field('transport_tube_text'); ?>
	</div>
</div>

<div class="row travel">
	<div class="col-md-6">
		<?php echo get_field('transport_bus_text'); ?>
	</div>
		
	<div class="col-md-6">
		<?php 
			$sideimage = get_field('transport_bus_image');
			echo '<img src="'.$sideimage['url'].'" />';
		?>
	</div>
</div>
	
<div class="row travel">
	<div class="col-md-6">
		<?php 
			$sideimage = get_field('transport_bike_image');
			echo '<img src="'.$sideimage['url'].'" />';
		?>
	</div>
		
	<div class="col-md-6">
		<?php echo get_field('transport_bike_text'); ?>
	</div>
</div>

<?php get_footer(); ?>