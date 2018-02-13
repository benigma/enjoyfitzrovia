<?php
/*
Template Name: Feast Application Form
*/
?>
<?php get_header('red'); ?>

<div class="row news">
	<div class="col-md-6 feastimages">
		<img src="<?php echo get_template_directory_uri(); ?>/img/TFP_FEAST2015_StreetFayre.jpg" />
		<img src="<?php echo get_template_directory_uri(); ?>/img/festival-21.jpg" />
		<img src="<?php echo get_template_directory_uri(); ?>/img/festival-2.jpg" />
		<img src="<?php echo get_template_directory_uri(); ?>/img/JC20642.jpg" />
		<img src="<?php echo get_template_directory_uri(); ?>/img/festival-37.jpg" />
		<img src="<?php echo get_template_directory_uri(); ?>/img/StreetFayre_0089.jpg" />
	</div>
	
	<div class="col-md-6 application">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
				<?php the_excerpt(); ?>
			<?php else : ?>
				<img src="<?php echo get_template_directory_uri(); ?>/img/Fitz_Celebrate_Logo.png" />
				<?php the_content(); ?>
			<?php endif; ?>
		<?php endwhile; ?>
	</div>
</div>

<?php get_footer(); ?>