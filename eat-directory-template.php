<?php
/*
Template Name: Eat Directory Template
*/
?>
<?php get_header('green'); ?>
		
		<div class="row">
			<div class="col-md-6">
				<div class="directory-info"><h1><strong>Eat</strong><br />in Fitzrovia</h1></div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/eat-block.jpg" class="full border-right" />
			</div>
			
			<div class="col-md-6 extras">
				<img src="<?php echo get_template_directory_uri(); ?>/img/eat-directory-medium.jpg" class="wide" />
				<ul class="eat-blocks">
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/eat-directory-small.jpg" class="small" /></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/bobo-social.jpg" class="small" /></li>
				</ul>
			</div>
		</div>
		
		<div class="row green-search">
			<div class="col-md-12">
			<select id="FilterSelect">
			    <option value="all">All</option>
			    <option value=".click">Swipii Offers</option>
			    <option value=".american">American</option>
			    <option value=".cafe">Cafe/Sandwich Bar</option>
			    <option value=".chinese">Chinese</option>
			    <option value=".fastfood">Fast Food</option>
			    <option value=".french">French</option>
			    <option value=".greek">Greek</option>
			    <option value=".indian">Indian</option>
			    <option value=".italian">Italian</option>
			    <option value=".japanese">Japanese</option>
			    <option value=".european">Modern European</option>
			    <option value=".pub">Pub/Bar</option>
			    <option value=".spanish">Spanish</option>
			    <option value=".thai">Thai</option>
			    <option value=".vietnamese">Vietnamese</option>
			    <option value=".other">Other</option>
			  </select>
			  
			  <input type="text" id="input" placeholder="What are you looking for?">
			 
			</div>
		</div>
		
		<div id="Container" class="container">
		
		<?php
			query_posts(array('post_type' => 'eat', 'posts_per_page' => -1));
			$i = 1;
			$category = get_the_category();
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<div class="mix <?php echo get_field('business_category'); ?> <?php the_field('swipii_checkbox'); ?>" data-myorder="<?php echo $i; ?>" data-name="<?php echo get_field('quick_name'); ?>">
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
<?php get_footer('eat'); ?>