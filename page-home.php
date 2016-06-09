<?php
/**
 * Template name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Home Word
 */

get_header(); ?>

				<?php
					$displaySlider = get_field('display_slider');
					if ($displaySlider == 'Yes') :
						get_template_part( 'content', 'slider' );
						wp_reset_postdata();
					elseif ($displaySlider == 'Image') :
						$image = get_field('top_image');
						if( !empty($image) ):
				?>

				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="top-image"/>

				<?php
						endif;
					endif;
				?>
				<div class="full-section ministry-intro">
					<div class="sm-wrap">
						<h1><?php the_field('intro_title'); ?></h1>
						<?php the_field('intro_paragraph'); ?>
					</div>
				</div>
				<?php
					if( have_rows('card') ):
						$x = 1;
						while ( have_rows('card') ) : the_row();
							$background = get_sub_field('card_background');
				?>
				<div class="card group" <?php if( !empty($background) ): ?>style="background-image: url(<?php echo $background; ?>); "<?php endif; ?>>
				<?php if($x % 2 == 0): ?>
					<div class="half first card-image">
						<?php
							$image = get_sub_field('card_image');
							if( !empty($image) ):
						?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
					</div>
					<div class="half card-content">
						<?php
							$icon = get_sub_field('card_icon');
							if( !empty($icon) ):
						?>
						<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
						<?php endif; ?>
						<h2><?php the_sub_field('card_title'); ?></h2>
						<p><?php the_sub_field('card_paragraph'); ?></p>
						<?php
							$type = get_sub_field('card_action');
							if($type == 'button') :
						?>
						<a href = "<?php the_sub_field('card_cta_url'); ?>" class="btn"><?php the_sub_field('card_cta_text'); ?></a>
						<?php else : ?>
							<a href = "#" class="toggle-overlay btn">Subscribe</a>
						<?php endif; ?>
					</div>
				<?php else: ?>
					<div class="half first card-content">
						<?php
							$icon = get_sub_field('card_icon');
							if( !empty($icon) ):
						?>
						<img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
						<?php endif; ?>
						<h2><?php the_sub_field('card_title'); ?></h2>
						<p><?php the_sub_field('card_paragraph'); ?></p>
						<?php
							$type = get_sub_field('card_action');
							if($type == 'button') :
						?>
						<a href = "<?php the_sub_field('card_cta_url'); ?>" class="btn"><?php the_sub_field('card_cta_text'); ?></a>
						<?php else : ?>
							<a href = "#" class="toggle-overlay btn">Subscribe</a>
						<?php endif; ?>
					</div>
					<div class="half card-image">
						<?php
							$image = get_sub_field('card_image');
							if( !empty($image) ):
						?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
					</div>
				<?php endif; ?>
				</div><!--card-->
				<?php $x++; endwhile; endif; ?>
				<?php
					$product_one = get_field('home_one');
					$product_two = get_field('home_two');
					$product_three = get_field('home_three');
					$product_four = get_field('home_four');
					$codeAction = '[products ids="' . $product_one->ID . ',' . $product_two->ID . ',' .$product_three->ID . ',' .$product_four->ID . '"]';
				?>
				<div class="home-products">
					<h2>Store</h2>
					<?php echo do_shortcode($codeAction); ?>
				</div>
				<?php if( have_rows('testimony') ): ?>
				<div class="home-testimonies">
					<div id="carousel-testimonies" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<?php $y = 0; while ( have_rows('testimony') ) : the_row(); ?>
							<li data-target="#carousel-testimonies" data-slide-to="<?php echo $y; ?>" <?php if($y == 0) : ?>class="active"<?php endif; ?>></li>
							<?php $y++; endwhile; ?>
						</ol>
						<div class="carousel-inner">
							<?php $z = 0; while ( have_rows('testimony') ) : the_row(); ?>
							<div class="item <?php if($z == 0) {echo 'active ';} ?>">
								<?php the_sub_field('testimony_text'); ?>
								<attr>- <?php the_sub_field('testimony_name'); ?></attr>
							</div>
							<?php $z++; endwhile; ?>
						</div>
					</div>
				</div>
				<?php endif; ?>
				<?php //get_template_part( 'content', 'newsletter' ); ?>

				<?php //get_template_part( 'content', 'tabs' ); ?>
				
<?php get_footer(); ?>
