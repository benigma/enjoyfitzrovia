<?php get_header('red'); ?>

<div class="svg-wrap">
	<svg width="64" height="64" viewBox="0 0 64 64">
	<path id="arrow-left-1" d="M46.077 55.738c0.858 0.867 0.858 2.266 0 3.133s-2.243 0.867-3.101 0l-25.056-25.302c-0.858-0.867-0.858-2.269 0-3.133l25.056-25.306c0.858-0.867 2.243-0.867 3.101 0s0.858 2.266 0 3.133l-22.848 23.738 22.848 23.738z" />
	</svg>
	<svg width="64" height="64" viewBox="0 0 64 64">
	<path id="arrow-right-1" d="M17.919 55.738c-0.858 0.867-0.858 2.266 0 3.133s2.243 0.867 3.101 0l25.056-25.302c0.858-0.867 0.858-2.269 0-3.133l-25.056-25.306c-0.858-0.867-2.243-0.867-3.101 0s-0.858 2.266 0 3.133l22.848 23.738-22.848 23.738z" />
	</svg>
</div>

<div class="row">
	<div class="col-md-12">
		<nav class="nav-slit">
		
		<?php
			$prev_post = get_previous_post();
			$prev_id = $prev_post->ID;
			$prev_image = get_field('newspaper_small_image', $prev_id);
		?>
		<a class="prev" href="<?php echo get_permalink( $prev_post->ID ); ?>">
		<span class="icon-wrap"><svg class="icon" width="22" height="22" viewBox="0 0 64 64"><use xlink:href="#arrow-left-1"></svg></span>
		<div>
			<h3><?php echo get_the_title( $prev_post->ID ); ?></h3>
			<img src="<?php echo $prev_image; ?>" />
		</div>
		</a>
		
		<?php
			$next_post = get_next_post();
			$next_id = $next_post->ID;
			$next_image = get_field('newspaper_small_image', $next_id);
		?>
		<?php if ($next_post != 0) { ?>
		<a class="next" href="<?php echo get_permalink( $next_post->ID ); ?>">
		<span class="icon-wrap"><svg class="icon" width="22" height="22" viewBox="0 0 64 64"><use xlink:href="#arrow-right-1"></svg></span>
		<div>
			<h3><?php echo get_the_title( $next_post->ID ); ?></h3>
			<img src="<?php echo $next_image; ?>" />
		</div>
		</a>
		<?php } else { } ?>	
		</nav>
		<div class="newspaper center">
			<h1><?php echo get_field('newspaper_article_company'); ?></h1>
			<p><?php the_excerpt(); ?></p>
			<?php
				$sideimage = get_field('newspaper_large_image');
				$class = "";
				echo '<img src="'.$sideimage['url'].'" class="'.$class.'" />';
			?>
		</div>
	</div>
</div>

<div class="row news">
	<div class="col-md-6">
	
	<?php echo get_field('newspaper_article_title'); ?>
	<?php
	$sectionLocation = get_field('newspaper_address_field');
	if(strlen($sectionLocation) == 0) {
		
		} else {
			echo "<div class='location'>".$sectionLocation."</div>";
		}
	
	?>
	
	<?php while ( have_posts() ) : the_post(); ?>
		<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
			<?php the_excerpt(); ?>
		<?php else : ?>
			<?php the_content(); ?>
		<?php endif; ?>
	<?php endwhile; ?>
	
	</div>

	<div class="col-md-6 newspaper-img">
		<?php 
		$images = get_field('newspaper_image_strip');
		if( $images ): ?>
			<?php foreach( $images as $image ): ?>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="border-top" />
			<?php echo $image['caption']; ?>
		<?php endforeach; ?>
		<?php endif; ?>
	</div>
	
</div>

<?php get_footer(); ?>