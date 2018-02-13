<?php
/*
Template Name: Art Directory Template
*/
?>
<?php get_header('purple'); ?>
		
		<div class="row">
			<div class="col-md-6">
				<div class="directory-info"><h1><strong>Art</strong><br />in Fitzrovia</h1></div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/art-block.jpg" class="full border-right" />
			</div>
			
			<div class="col-md-6 extras">
				<img src="<?php echo get_template_directory_uri(); ?>/img/TFP_web_Art_640x320_090915.jpg" class="wide" />
				<ul class="eat-blocks">
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/TFP_web_Art1_320x320_090915.jpg" class="small" /></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/TFP_web_Art2_320x320_090915.jpg" class="small" /></li>
				</ul>
			</div>
		</div>
		
		<div class="row purple-search">
			<div class="col-md-12">
			  
			  <input type="text" id="input" placeholder="What are you looking for?">
			 
			</div>
		</div>
		
		<div id="Container" class="artist container">
		
		<?php
			query_posts(array('post_type' => 'art', 'posts_per_page' => -1));
			$i = 1;
			$category = get_the_category();
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<div class="mix artist <?php echo get_field('business_category'); ?>" data-myorder="<?php echo $i; ?>" data-name="<?php echo get_field('quick_name'); ?>">
			<div class="front">
				<h3><?php the_title(); ?></h3>
				<h4><?php echo get_field('business_category'); ?></h4>
				<?php the_content(); ?>
				<h4>Address</h4>
				<?php echo the_field('business_address'); ?>
			</div>
			<div class="back">
				<h4>Swipii Offers</h4>
				<?php echo get_field('swipii_offers'); ?>
			</div>
			</div>	   
			<?php 
			$i ++;
			endwhile; endif; ?>
		
		<?php wp_reset_query(); ?>
		
		<div class="gap"></div>
		  
		</div>
	</div>
<?php get_footer('art'); ?>