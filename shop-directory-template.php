<?php
/*
Template Name: Shop Directory Template
*/
?>
<?php get_header('blue'); ?>
		
		<div class="row">
			<div class="col-md-6">
				<div class="directory-info"><h1><strong>Shop</strong><br />in Fitzrovia</h1></div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/shop-block.jpg" class="full border-right" />
			</div>
			
			<div class="col-md-6 extras">
				<img src="<?php echo get_template_directory_uri(); ?>/img/Brik-Rug_Print_640x320.jpg" class="wide" />
				<ul class="eat-blocks">
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/TFP_Paperchase_RobotClocks_320x320.jpg" class="small" /></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/img/TFP_RobertDyas_MiniBuddy_320x320.jpg" class="small" /></li>
				</ul>
			</div>
		</div>
		
		<div class="row blue-search">
			<div class="col-md-12">
			<select id="FilterSelect">
			    <option value="all">All</option>
			    <option value=".click">Swipii Offers</option>
			    <option value=".bank">Bank</option>
			    <option value=".bookmakers">Bookmaker</option>
			    <option value=".gifts">Cards & Gifts</option>
			    <option value=".electronics">Electronics</option>
			    <option value=".groceries">Groceries</option>
			    <option value=".hairdresser">Hairdresser</option>
			    <option value=".health">Health</option>
			    <option value=".homeware">Homeware</option>
			    <option value=".leisure">Leisure & Entertainment</option>
			    <option value=".phone">Mobile Phones</option>
			    <option value=".newsagent">Newsagents</option>
			    <option value=".opticians">Opticians</option>
			    <option value=".other">Other</option>
			  </select>
			  
			  <input type="text" id="input" placeholder="What are you looking for?">
			 
			</div>
		</div>
		
		<div id="Container" class="container">
		
		<?php
			query_posts(array('post_type' => 'shop', 'posts_per_page' => -1));
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
<?php get_footer('shop'); ?>