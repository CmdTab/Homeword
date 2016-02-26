<?php
/**
 * Template name: Intentional
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Home Word
 */

get_header('intentional'); ?>
	<div class="main-content">
		<div class="path-content">
			<img src = "<?php bloginfo('template_directory'); ?>/_i/path.png" class="path">
			<div class="intent-store">
				<div class="wrap group">
					<a href = "#" data-video="<?php the_field('intent_video'); ?>">
						<?php 
							$intent_image = get_field('intent_header');
							if( !empty($intent_image) ): ?>
								<img src="<?php echo $intent_image['url']; ?>" alt="<?php echo $intent_image['alt']; ?>" />
						<?php endif; ?>
					</a>
				</div>
				<div class="med-wrap group">
					<div class="product-options group" id="store">
						<div class="option-free option-height">
							<div class="flip-container">
								<h2><?php the_field('free_title'); ?></h2>
								<div class="flipper">
									<div class="option-main front">
									<?php 
										$image = get_field('free_image');
										if( !empty($image) ): ?>
											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
										<?php endif; ?>
									</div>
									<div class="option-details back">
										<?php the_field('free_details'); ?>
									</div>
								</div>
							</div>
							<p><?php the_field('free_summary'); ?></p>
							<?php gravity_form( get_field('free_form'), false, false, false, '', false ); ?>
						</div>
						<div class="option-individual option-height">
							<div class="flip-container">
								<h2><?php the_field('indiv_title'); ?></h2>
								<div class="flipper">
									<div class="option-main front">
										<?php 
										$image = get_field('indiv_image');
										if( !empty($image) ): ?>
											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
										<?php endif; ?>
									</div>
									<div class="option-details back">
										<?php the_field('indiv_details'); ?>
									</div>
								</div>
								
							</div>
							<div class="pricing">
								<span>$<?php the_field('dvd_price'); ?></span>
								<span>$<?php the_field('workbook_price'); ?></span>
							</div>
							<a href = "#" class="btn dd-trigger">Options</a>
							<div class="option-dropdown group">
								<?php 
									$args = array(
												'post__in' => array(get_field('dvd_product'),get_field('workbook_product')),
												'post_type' => 'product'
											);
									$the_query = new WP_Query( $args );
									while ( $the_query->have_posts() ) : $the_query->the_post();
										echo '<div class="option-cart">';
										echo '<h3>' . get_the_excerpt() . '</h3>';
										do_action( 'woocommerce_single_product_cart' );
										echo '</div>';
									endwhile; wp_reset_postdata();
								?>
							</div>
						</div>
						<div class="option-bundle option-height">
							<div class="flip-container">
								<h2><?php the_field('bundle_title'); ?></h2>
								<div class="flipper">
									<div class="option-main front">
										<?php 
										$image = get_field('bundle_image');
										if( !empty($image) ): ?>
											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
										<?php endif; ?>
									</div>
									<div class="option-details back">
										<?php the_field('bundle_details'); ?>
									</div>
								</div>
							</div>
							<div class="pricing">
								$<?php the_field('bundle_price'); ?>
							</div>
							<a href = "#" class="btn dd-trigger">Buy Now</a>
							<div class="option-dropdown group">
								<?php 
									$args = array(
												'post__in' => array(get_field('bundle_product')),
												'post_type' => 'product'
											);
									$the_query = new WP_Query( $args );
									while ( $the_query->have_posts() ) : $the_query->the_post();
										echo '<div class="option-cart">';
										echo '<h3>' . get_the_excerpt() . '</h3>';
										do_action( 'woocommerce_single_product_cart' );
										echo '</div>';
									endwhile; wp_reset_postdata();
								?>
							</div>
						</div>
						<div class="option-church option-height">
							<div class="bulk-details-form">
								<?php gravity_form( get_field('church_option_form'), false, false, false, '', true ); ?>
							</div>
							<div class="flip-container">
								<h2><?php the_field('church_title'); ?></h2>
								<div class="flipper">
									<div class="option-main front">
										<?php 
										$image = get_field('church_image');
										if( !empty($image) ): ?>
											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
										<?php endif; ?>
									</div>
									<div class="option-details back">
										<?php the_field('church_details'); ?>
									</div>
								</div>
							</div>
							<div class="pricing">
								$<?php the_field('church_price'); ?>
							</div>
							<a href = "#" class="btn dd-trigger">Buy Now</a>
							<div class="option-dropdown group">
								<?php 
									$args = array(
												'post__in' => array(get_field('church_product')),
												'post_type' => 'product'
											);
									$the_query = new WP_Query( $args );
									while ( $the_query->have_posts() ) : $the_query->the_post();
										echo '<div class="option-cart">';
										echo '<h3>' . get_the_excerpt() . '</h3>';
										do_action( 'woocommerce_single_product_cart' );
										echo '</div>';
									endwhile; wp_reset_postdata();
								?>
							</div>
						</div>
					</div>
				</div><!-- .wrap -->
			</div><!--intent-store-->
			<div class="quiz" id="quiz">
				<div class="med-wrap group">
					<header class="section-header">
						<svg viewBox="0 0 252.9 367.3">
							<path class="st0" d="M126.4,181.3c-30.8,0-55.8-25-55.8-55.8c0-30.8,25-55.8,55.8-55.8c30.8,0,55.8,25,55.8,55.8
								C182.2,156.3,157.2,181.3,126.4,181.3z M126.4,0C56.6,0,0,56.6,0,126.4c0,69.8,114.4,240.8,126.4,240.8s126.4-171,126.4-240.8
								C252.9,56.6,196.3,0,126.4,0z"/>
						</svg>
						<h2><?php the_field('quiz_title'); ?></h2>
						<p><?php the_field('quiz_description'); ?></p>
					</header>
				</div>
				<div class="sm-wrap group">
					<div class="quiz-form">
						<?php
							$gravity = get_field('gravity_form_id');
						?>
						<div class="fb-share-button" data-href="https://homeword.com/intentional/" data-layout="button"></div>
						<?php gravity_form( $gravity, false, false, false, '', true ); ?>

					</div>
				</div><!--sm-wrap-->
			</div><!--quiz-->
			<div class="videos">
				<div class="med-wrap group">

					<?php if( have_rows('video_slider') ): ?>

						<ul class="video-slider bxslider">

						<?php while( have_rows('video_slider') ): the_row(); 

							// vars
							$video_image = get_sub_field('video_image');
							$video_link = get_sub_field('video_link');

							?>

							<li class="slide">
								<a href = "#" data-video="<?php echo $video_link; ?>">
									<img src="<?php echo $video_image['url']; ?>" alt="<?php echo $video_image['alt'] ?>" />
								</a>
							</li>

						<?php endwhile; ?>

						</ul>

					<?php endif; ?>

					<!-- <ul class="video-slider bxslider">
						<li>
							<a href = "#" data-video="130730908"><img src = "http://placehold.it/300x200"></a>
						</li>
						<li>
							<a href = "#" data-video="143512551"><img src = "http://placehold.it/300x200"></a>
						</li>
						<li>
							<a href = "#" data-video=""><img src = "http://placehold.it/300x200"></a>
						</li>
						<li>
							<a href = "#" data-video=""><img src = "http://placehold.it/300x200"></a>
						</li>
						<li>
							<a href = "#" data-video=""><img src = "http://placehold.it/300x200"></a>
						</li>
						<li>
							<a href = "#" data-video=""><img src = "http://placehold.it/300x200"></a>
						</li>
					</ul> -->
				</div>
			</div>
			<div id="about" class="map-section">
				<div class="med-wrap group">
					<header class="section-header">
						<svg viewBox="0 0 252.9 367.3">
							<path class="st0" d="M126.4,181.3c-30.8,0-55.8-25-55.8-55.8c0-30.8,25-55.8,55.8-55.8c30.8,0,55.8,25,55.8,55.8
								C182.2,156.3,157.2,181.3,126.4,181.3z M126.4,0C56.6,0,0,56.6,0,126.4c0,69.8,114.4,240.8,126.4,240.8s126.4-171,126.4-240.8
								C252.9,56.6,196.3,0,126.4,0z"/>
						</svg>
						<h2><?php the_field('why_header');?></h2>
						<p><?php the_field('why_paragraph');?></p>
					</header>
					<ul class="three-list group">
						<li>
							<div class="info-card flip-container">
								<div class="flipper">
									<div class="front card-height">
										<?php 
											$card_image = get_field('card_one_icon');
											if( !empty($card_image) ): ?>
												<img src="<?php echo $card_image['url']; ?>" alt="<?php echo $card_image['alt']; ?>" />
										<?php endif; ?>
										<h3><?php the_field('card_one_title'); ?></h3>
										<p><?php the_field('card_one_text'); ?></p>
										<a href="#" class="turn-btn">
											<svg class="icon icon-redo2"><use xlink:href="#icon-redo2"></use></svg>
										</a>
									</div>
									<div class="back card-height">
										<?php 
											$back_card_image = get_field('card_one_back_icon');
											if( !empty($back_card_image) ): ?>
												<img src="<?php echo $back_card_image['url']; ?>" alt="<?php echo $back_card_image['alt']; ?>" />
										<?php endif; ?>
										<h4><?php the_field('card_one_back_title'); ?></h4>
										<?php the_field('card_one_back_text'); ?>
										<a href="#" class="turn-btn inside">
											<svg class="icon icon-redo2"><use xlink:href="#icon-redo2"></use></svg>
										</a>
									</div>
									
								</div>
							</div>
							
						</li>
						<li>
							<div class="info-card flip-container">
								<div class="flipper">
									<div class="front card-height">
										<?php 
											$card_image = get_field('card_two_icon');
											if( !empty($card_image) ): ?>
												<img src="<?php echo $card_image['url']; ?>" alt="<?php echo $card_image['alt']; ?>" />
										<?php endif; ?>
										<h3><?php the_field('card_two_title'); ?></h3>
										<p><?php the_field('card_two_text'); ?></p>
										<a href="#" class="turn-btn">
											<svg class="icon icon-redo2"><use xlink:href="#icon-redo2"></use></svg>
										</a>
									</div>
									<div class="back card-height">
										<?php 
											$back_card_image = get_field('card_two_back_icon');
											if( !empty($back_card_image) ): ?>
												<img src="<?php echo $back_card_image['url']; ?>" alt="<?php echo $back_card_image['alt']; ?>" />
										<?php endif; ?>
										<h4><?php the_field('card_two_back_title'); ?></h4>
										<?php the_field('card_two_back_text'); ?>
										<a href="#" class="turn-btn">
											<svg class="icon icon-redo2"><use xlink:href="#icon-redo2"></use></svg>
										</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="info-card flip-container">
								<div class="flipper">
									<div class="front card-height">
										<?php 
											$card_image = get_field('card_three_icon');
											if( !empty($card_image) ): ?>
												<img src="<?php echo $card_image['url']; ?>" alt="<?php echo $card_image['alt']; ?>" />
										<?php endif; ?>
										<h3><?php the_field('card_three_title'); ?></h3>
										<p><?php the_field('card_three_text'); ?></p>
										<a href="#" class="turn-btn">
											<svg class="icon icon-redo2"><use xlink:href="#icon-redo2"></use></svg>
										</a>
									</div>
									<div class="back card-height">
										<?php 
											$back_card_image = get_field('card_three_back_icon');
											if( !empty($back_card_image) ): ?>
												<img src="<?php echo $back_card_image['url']; ?>" alt="<?php echo $back_card_image['alt']; ?>" />
										<?php endif; ?>
										<h4><?php the_field('card_three_back_title'); ?></h4>
										<?php the_field('card_three_back_text'); ?>
										<a href="#" class="turn-btn">
											<svg class="icon icon-redo2"><use xlink:href="#icon-redo2"></use></svg>
										</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div><!--map-section-->
			<div class="quote-section">
				<div class="med-wrap group">

					<?php if( have_rows('quote_slider') ): ?>

						<ul class="quote-slider bxslider">

						<?php while( have_rows('quote_slider') ): the_row(); 

							// vars
							$quote_image = get_sub_field('quote_slider_image');
							?>

							<li>
								<img src="<?php echo $quote_image['url']; ?>" alt="<?php echo $quote_image['alt'] ?>" />
							</li>

						<?php endwhile; ?>

						</ul>

					<?php endif; ?>

				</div>
			</div><!--quote-section-->
			<div id="groups" class="who-section">
				<div class="med-wrap group">
					<header class="section-header">
						<svg viewBox="0 0 252.9 367.3">
							<path class="st0" d="M126.4,181.3c-30.8,0-55.8-25-55.8-55.8c0-30.8,25-55.8,55.8-55.8c30.8,0,55.8,25,55.8,55.8
								C182.2,156.3,157.2,181.3,126.4,181.3z M126.4,0C56.6,0,0,56.6,0,126.4c0,69.8,114.4,240.8,126.4,240.8s126.4-171,126.4-240.8
								C252.9,56.6,196.3,0,126.4,0z"/>
						</svg>
						<h2>Who Is It For?</h2>
					</header>
					<ul class="three-list group who-list">
						<li>
							<?php 
								$who_icon = get_field('who_icon_one');
								if( !empty($who_icon) ): ?>
									<img src="<?php echo $who_icon['url']; ?>" alt="<?php echo $who_icon['alt']; ?>" />
							<?php endif; ?>
							<h3><?php the_field('who_title_one'); ?></h3>
							<p><?php the_field('who_text_one'); ?></p>
						</li>
						<li>
							<?php 
								$who_icon_two = get_field('who_icon_two');
								if( !empty($who_icon_two) ): ?>
									<img src="<?php echo $who_icon_two['url']; ?>" alt="<?php echo $who_icon_two['alt']; ?>" />
							<?php endif; ?>
							<h3><?php the_field('who_title_two'); ?></h3>
							<p><?php the_field('who_text_two'); ?></p>
						</li>
						<li>
							<?php 
								$who_icon_three = get_field('who_icon_three');
								if( !empty($who_icon_three) ): ?>
									<img src="<?php echo $who_icon_three['url']; ?>" alt="<?php echo $who_icon_three['alt']; ?>" />
							<?php endif; ?>
							<h3><?php the_field('who_title_three'); ?></h3>
							<p><?php the_field('who_text_three'); ?></p>
						</li>
					</ul>
				</div>
			</div><!--quote-section-->
		</div><!--path-content-->
		<div class="cta-section">
			<div class="med-wrap group">
				<h1><?php the_field('cta_header'); ?></h1><a href = "#" class="btn scroll-trigger"><?php the_field('cta_button'); ?></a>
			</div>
		</div><!--cta-section-->
		<?php while ( have_posts() ) : the_post(); ?>

			<?php //get_template_part( 'content', 'page' ); ?>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #main-content -->

<?php get_footer('intentional'); ?>
