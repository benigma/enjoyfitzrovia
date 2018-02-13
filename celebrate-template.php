<?php
/*
Template Name: Celebrate Template New
*/
?>
<?php get_header('celebrate'); ?>

<div class="row">

	<div class="col-md-6">
		<div class="sixforty-thumb"><?php the_post_thumbnail('sixforty'); ?></div>
		 </br>
		<a href="/book" style="color: rgb(255,0,0);font-weight: bold; font-size: 20px; margin-left: 10px;">VIEW ALL EVENTS TO BOOK ></a>
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

<?php get_footer('feast'); ?>