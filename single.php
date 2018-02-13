<?php
	$id = get_the_ID();
	if ($id == 3308) {
		get_header('age');
	} else {
 		get_header('red');
	}
?>
<div class="row news">
	<div class="col-md-6">
		<?php
			$sideimage = get_field('large_news_image');
			$class = "full";
			echo '<img src="'.$sideimage['url'].'" class="'.$class.'" />';
		?>
		
		<span class="additional_news"><?php echo get_field('additional_news_information', false, false); ?></span>
	</div>
	
	<div class="col-md-6">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
				<?php the_excerpt(); ?>
			<?php else : ?>
				
				<?php echo get_field('news_article_title'); ?>
				<?php the_content(); ?>
			<?php endif; ?>
		<?php endwhile; ?>
	</div>
</div>	

<div class="row">
	<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		query_posts(array('cat'=> 43, 'posts_per_page' => 3, 'paged' => $paged, 'post__not_in' => array($post->ID)));
		$i = 0;
	?>
	
	<div class="col-md-12 news">
	<h2>In other <strong>news</strong></h2>
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
<?php
	if ($id == 3217) {
		get_footer('age');
	} else {
 		get_footer();
	}
?>