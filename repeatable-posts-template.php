<?php
/*
Template Name: Repeatable Posts Page Template
*/
?>
<?php get_header('green'); ?>

<div class="row header repeatable_post" style="background: url('<?php echo the_field('repeatable_header_image'); ?>') no-repeat center; background-size: cover;">
	<div class="col-md-12">
		<?php echo get_field('repeatable_post_intro'); ?>
	</div>
</div>

<?php if( have_rows('repeatable_posts') ): ?>
	<?php while( have_rows('repeatable_posts') ): the_row(); ?>
		<div class="row repeatable">
			<div class="col-md-6">
				<img src="<?php echo the_sub_field('repeatable_post_image'); ?>" class="repeatable-img" />
			</div>
				
			<div class="col-md-6">
				<?php echo get_sub_field('repeatable_post_text'); ?>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer('green'); ?>