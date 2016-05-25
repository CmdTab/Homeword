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
						<h1>This is the introductory section</h1>
						<p>This is the introductory paragraph that tells about Homeword and what they do.</p>
					</div>
				</div>
				<div class="card group">
					<div class="half first card-content">
						<img src = "http://placehold.it/100x100">
						<h2>Daily Newsletter</h2>
						<p>Lorem ipsum dolor sit amet, ex ius quidam inciderint, ne habeo congue est. At ius porro consequat, officiis constituam quo in.</p>
						<a href = "#" class="btn">Subscribe</a>
					</div>
					<div class="half card-image">
						<img src = "http://placehold.it/450x450">
					</div>
				</div>
				<div class="card group">
					<div class="half first card-image">
						<img src = "http://placehold.it/450x450">
					</div>
					<div class="half card-content">
						<img src = "http://placehold.it/100x100">
						<h2>Daily Newsletter</h2>
						<p>Lorem ipsum dolor sit amet, ex ius quidam inciderint, ne habeo congue est. At ius porro consequat, officiis constituam quo in.</p>
						<a href = "#" class="btn">Subscribe</a>
					</div>
				</div>
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
				<div class="home-testimonies">
					<div id="carousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
						</div>
					</div>
				</div>
				<?php //get_template_part( 'content', 'newsletter' ); ?>

				<?php //get_template_part( 'content', 'tabs' ); ?>

<?php get_footer(); ?>
