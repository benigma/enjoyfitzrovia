<?php get_header('red'); ?>

<div class="row header-news">
		<h1>Search<br /><strong>Results</strong></h1>
		<?php if ( have_posts() ) : ?>
			<p>We have found <? echo $total_results = $wp_query->found_posts; ?> item(s) for your search <strong>"<? echo $_GET['s']; ?>"</strong>.</p>
		<?php endif; ?>
</div>

<div class="row">
	<div class="col-md-12">
			<?php if ( have_posts() ) : ?>
				<h3>Results</h3>
				<?php while ( have_posts() ) : the_post(); ?>           
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php the_excerpt(); ?>
			<?php endwhile; ?>
													
			<?php else : ?>
				<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyeleven' ); ?></p>
			<?php endif; ?>
			<hr />
			<?php if (function_exists("pagination")) {
				pagination($additional_loop->max_num_pages);
				} ?>
			<?php wp_reset_query(); ?>
	</div>	
</div>
<?php get_footer(); ?>