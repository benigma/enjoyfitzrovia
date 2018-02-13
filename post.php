<?php get_header('red'); ?>

<div class="row news">
	<div class="col-md-6">
		<img src="img/swedish-summer-heals.jpg" class="full" />
		<?php get_field('additional_news_information'); ?>
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