<?php
/*
Template Name: News Template
*/
?>
<?php get_header('red'); ?>

<div class="row header-news">
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

<div class="row">
	<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		query_posts('cat=43&posts_per_page=5&paged=' . $paged); 
		$i = 1;
	?>
	
	<div class="col-md-12 news">
		<ul class="news-feed">
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<li>
		<a href="<?php the_permalink(); ?>">
		<div class="module">
		 <header>
		 <?php echo get_field('news_article_title'); ?>
		 <?php the_excerpt(); ?>
		  </header>
		  <?php
		  	if($i == 3 || $i == 4 || $i == 8 || $i == 9) { 
		  	
		  	$sideimage = get_field('medium_news_image');
		  	$class = "";
		  	echo '<img src="'.$sideimage['url'].'" class="'.$class.'" />';
		  	
		  	} else if ($i == 6) {
		  
		  	$sideimage = get_field('large_news_image');
		  	$class = "fullRowImage";
		  	echo '<img src="'.$sideimage['url'].'" class="'.$class.'" />';
		  	
		  	} else if ($i == 7) {
		  	
		  		$sideimage = get_field('large_news_image');
		  		$class = "fullRowImageLeft";
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
	   
	<?php wp_reset_query(); ?>
	
</div>

<?php get_footer(); ?>