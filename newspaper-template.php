<?php
/*
Template Name: Newspaper Template
*/
?>
<?php get_header('red'); ?>

<div class="row header-newspaper">
	<div class="col-md-12">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
				<?php the_excerpt(); ?>
			<?php else : ?>
				<?php the_content(); ?>
			<?php endif; ?>
		<?php endwhile; ?>
	</div>
</div>

<div class="row newspaper-img">
	
	<?php $args = array( 'post_type' => 'newspaper', 'posts_per_page' => -1, 'order' => 'DESC' );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
	    $image = get_field('newspaper_large_image');
	    echo '<div class="col-md-12">';
	    echo '<a href="'.get_permalink().'"><div class="module wide news-segment">';
	    echo '<header>';
	    echo get_field('newspaper_article_title');
	    echo the_excerpt();
	    echo '</header>';
	    echo '<img src="'.$image['url'].'" class="news-full border-top" />';
	    echo '</div></a></div>';
	    endwhile;
	 ?>
	
</div>

<?php get_footer(); ?>