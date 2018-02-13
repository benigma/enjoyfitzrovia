<?php get_header('feast'); ?>

<div class="row news">
	<div class="col-md-6">
		<?php
			$sideimage = get_field('large_news_image');
			$class = "full";
			echo '<img src="'.$sideimage['url'].'" class="'.$class.'" />';
		?>
		<div class="feast-extra">
			<?php echo get_field('additional_news_information'); ?>
		</div>
	</div>
	
	<div class="col-md-6 story">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
				<?php the_excerpt(); ?>
			<?php else : ?>
				
				<?php echo get_field('news_article_title', false, false); ?>
				<?php the_content(); ?>
			<?php endif; ?>
		<?php endwhile; ?>
	</div>
</div>

<div class="row">
	<?php
		$categories = get_the_category( $post->ID );
		$category = $categories[0]-> term_id;
		
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		if($category == 44) {
			query_posts(array('post_type' => 'feast', 'cat'=> 44, 'posts_per_page' => 3, 'paged' => $paged, 'post__not_in' => array($post->ID)));
			$i = 0;
		} else if ($category == 45) {
			query_posts(array('post_type' => 'feast', 'cat'=> 45, 'posts_per_page' => 3, 'paged' => $paged, 'post__not_in' => array($post->ID)));
			$i = 0;
		}
	?>
	
	<div class="col-md-12 news">
	<h2>Other <strong>Feast Events</strong></h2>
	<ul class="news-feed-singles">
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<li>
	<a href="<?php the_permalink(); ?>">
	<div class="module">
	 <header>
	 <?php echo get_field('news_article_title'); ?>
	 <?php the_excerpt(); ?>
	  </header>
	  <?php
	  	if($i == 1 || $i == 2) { 
	  	
	  	$sideimage = get_field('medium_news_image');
	  	$class = "";
	  	echo '<img src="'.$sideimage['url'].'" class="'.$class.'" />';
	  	
	  	} else {
	  
	  	$sideimage = get_field('large_news_image');
	  	$class = "full";
	  	echo '<img src="'.$sideimage['url'].'" class="'.$class.'" />';
	  	
	  	}
	  ?>
	</div></a></li>
				   
	<?php 
	$i ++;
	endwhile; endif; ?>

	</ul>
	</div>
</div>


<?php get_footer('feast'); ?>