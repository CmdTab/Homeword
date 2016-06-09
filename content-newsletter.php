<?php
/**
 * The template used for displaying the slider
 *
 * @package Home Word
 */
?>
<div class="newsletter-signup full-section">
	<!-- <div class = "content-wrap group">
		<span aria-hidden="true" data-icon="&#x4e;"></span>
		<h1>Subscribe to our Newsletters</h1>
		<p>Stay in touch with HomeWord to hear about upcoming events, special offers, and more!</p>
		<div class="sm-wrap">
			<?php //mc4wp_form(1160); ?>
		</div>
	</div> -->
	<?php
		if( have_rows('card_global' , 'option') ):
			$x = 1;
			while ( have_rows('card_global' , 'option') ) : the_row();
				$background = get_sub_field('card_background_global' , 'option');
	?>
	<div class="card group" <?php if( !empty($background) ): ?>style="background-image: url(<?php echo $background; ?>); "<?php endif; ?>>
	<?php if($x % 2 == 0): ?>
		<div class="half first card-image">
			<?php
				$image = get_sub_field('card_image_global' , 'option');
				if( !empty($image) ):
			?>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
		</div>
		<div class="half card-content">
			<?php
				$icon = get_sub_field('card_icon_global' , 'option');
				if( !empty($icon) ):
			?>
			<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
			<?php endif; ?>
			<h2><?php the_sub_field('card_title_global' , 'option'); ?></h2>
			<p><?php the_sub_field('card_paragraph_global' , 'option'); ?></p>
			<?php
				$type = get_sub_field('card_action_global' , 'option');
				if($type == 'button') :
			?>
			<a href = "<?php the_sub_field('card_cta_url_global' , 'option'); ?>" class="btn"><?php the_sub_field('card_cta_text_global'); ?></a>
			<?php else : ?>
				<a href = "#" class="toggle-overlay btn">Subscribe</a>
			<?php endif; ?>
		</div>
	<?php else: ?>
		<div class="half first card-content">
			<?php
				$icon = get_sub_field('card_icon_global' , 'option');
				if( !empty($icon) ):
			?>
			<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
			<?php endif; ?>
			<h2><?php the_sub_field('card_title_global' , 'option'); ?></h2>
			<p><?php the_sub_field('card_paragraph_global' , 'option'); ?></p>
			<?php
				$type = get_sub_field('card_action_global' , 'option');
				if($type == 'button') :
			?>
			<a href = "<?php the_sub_field('card_cta_url_global' , 'option'); ?>" class="btn"><?php the_sub_field('card_cta_text_global' , 'option'); ?></a>
			<?php else : ?>
				<a href = "#" class="toggle-overlay btn">Subscribe</a>
			<?php endif; ?>
		</div>
		<div class="half card-image">
			<?php
				$image = get_sub_field('card_image_global' , 'option');
				if( !empty($image) ):
			?>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
		</div>
	<?php endif; ?>
	</div><!--card-->
	<?php $x++; endwhile; endif; ?>
</div>