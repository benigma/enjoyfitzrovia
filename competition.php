<?php
/*
Template Name: Competition Template
*/
?>
<?php get_header('red'); ?>

<div class="row news">
	<div class="col-md-6">
		<img src="<?php echo get_template_directory_uri(); ?>/img/West_Elm_Competition.jpg" />
	</div>
	
	<div class="col-md-6">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
				<?php the_excerpt(); ?>
			<?php else : ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endif; ?>
		<?php endwhile; ?>
	</div>
</div>

<?php get_footer(); ?>