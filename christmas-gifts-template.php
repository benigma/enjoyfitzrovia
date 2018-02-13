<?php
/*
Template Name: Christmas Gifts 2017 Template
*/
?>
<?php get_header('gifts'); ?>

<div class="row header gifts-header">
	<h1>Christmas<br><strong>Gifts</strong></h1>
</div>

<div class="row">
	<div class="col-md-12 gifts-nav">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
				<?php the_excerpt(); ?>
			<?php else : ?>
				<?php the_content(); ?>
			<?php endif; ?>
		<?php endwhile; ?>
	</div>
	<div class="col-md-12 christmas-gifts">
		
		<div class="gift-intro">
			<?php echo get_field('him_gifts_intro'); ?>
		</div>
		<div class="gift-items">
			
			<?php if( have_rows('him_gifts_items') ): ?>
				<?php while( have_rows('him_gifts_items') ): the_row(); ?>
					<div class="gift-item">
						<div class="gift-image">
							<img src="<?php echo get_sub_field('gift_image'); ?>" />
						</div>
						<?php echo get_sub_field('gift_description'); ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			
		</div>
		
		<div class="gift-intro">
			<?php echo get_field('her_gifts_intro'); ?>
		</div>
		<div class="gift-items">
			
			<?php if( have_rows('her_gifts_items') ): ?>
				<?php while( have_rows('her_gifts_items') ): the_row(); ?>
					<div class="gift-item">
						<div class="gift-image">
							<img src="<?php echo get_sub_field('gift_image'); ?>" />
						</div>
						<?php echo get_sub_field('gift_description'); ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			
		</div>
		
		<div class="gift-intro">
			<?php echo get_field('home_gifts_intro'); ?>
		</div>
		<div class="gift-items">
			
			<?php if( have_rows('home_gifts_items') ): ?>
				<?php while( have_rows('home_gifts_items') ): the_row(); ?>
					<div class="gift-item">
						<div class="gift-image">
							<img src="<?php echo get_sub_field('gift_image'); ?>" />
						</div>
						<?php echo get_sub_field('gift_description'); ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			
		</div>
		
		<div class="gift-intro">
			<?php echo get_field('stocking_gifts_intro'); ?>
		</div>
		<div class="gift-items">
			
			<?php if( have_rows('stocking_gifts_items') ): ?>
				<?php while( have_rows('stocking_gifts_items') ): the_row(); ?>
					<div class="gift-item">
						<div class="gift-image">
							<img src="<?php echo get_sub_field('gift_image'); ?>" />
						</div>
						<?php echo get_sub_field('gift_description'); ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			
		</div>
		
	</div>
	
</div>

<?php get_footer('gifts'); ?>