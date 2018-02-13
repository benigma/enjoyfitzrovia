<?php
/*
Template Name: Celebrate Template
*/
?>
<?php get_header('red'); ?>

<div class="row">

	<div class="col-md-6 celebrate">
		<img src="<?php echo get_template_directory_uri(); ?>/img/Fitz_Celebrate_Logo.png" />
		<img src="<?php echo get_template_directory_uri(); ?>/img/Fitzrovia-festival-8.jpg" />
		<img src="<?php echo get_template_directory_uri(); ?>/img/Fitzrovia-festival-16.jpg" />
		<img src="<?php echo get_template_directory_uri(); ?>/img/Fitzrovia-festival-21.jpg" />
		<img src="<?php echo get_template_directory_uri(); ?>/img/Fitzrovia-festival-23.jpg" />
		<!--<img src="<?php echo get_template_directory_uri(); ?>/img/Fitzrovia-festival-38.jpg" />
		<img src="<?php echo get_template_directory_uri(); ?>/img/Fitzrovia-festival-112.jpg" />
		<img src="<?php echo get_template_directory_uri(); ?>/img/gfonne-pr-2430.jpg" />
		<img src="<?php echo get_template_directory_uri(); ?>/img/gfonne-pr-2846.jpg" />-->
	</div>
		
	<div class="col-md-6">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
				<?php the_excerpt(); ?>
			<?php else : ?>
				<?php the_content(); ?>
			<?php endif; ?>
		<?php endwhile; ?>
	</div>
</div>

<?php get_footer(); ?>