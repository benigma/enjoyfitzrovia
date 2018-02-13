<?php
/*
Template Name: Swipii Template
*/
?>
<?php get_header('red'); ?>

<div class="row header-swipii">
	<div class="col-md-12">
		<?php 
			$sideimage = get_field('swipii_header_image');
			echo '<img src="'.$sideimage['url'].'" />';
		?>
	</div>
</div>

<div class="row swipii">
	<div class="col-md-6">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
				<?php the_excerpt(); ?>
			<?php else : ?>
				<?php the_content(); ?>
			<?php endif; ?>
		<?php endwhile; ?>
	</div>
	
	<div class="col-md-6 swipii-image extras">
	<p align="center"><?php 
		$sideimage = get_field('swipii_page_image');
		echo '<img src="'.$sideimage['url'].'" />';
	?></p>
	</div>
</div>

<?php get_footer(); ?>