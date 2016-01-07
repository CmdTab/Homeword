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
					<a href = "#" data-video="146207235">
						<img src = "<?php bloginfo('template_directory'); ?>/_i/intent-header.jpg">
					</a>
				</div>
				<div class="med-wrap group">
					<div class="product-options group" id="store">
						<div class="option-free">
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
						<div class="option-individual">
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
						<div class="option-bundle">
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
						<div class="option-church">
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
						<h2>Take the Quick Fix Parent Challenge</h2>
						<p>Lorem ipsum dolor sit amet, vim tibique lobortis ea, in oblique honestatis mei. Te laoreet vituperata qui. Oratio sententiae eu mea. Te sit velit assum torquatos, id zril epicurei mea. Quo munere oblique gubergren et, no sit causae euismod, ne qualisque percipitur vim</p>
					</header>
				</div>
				<div class="sm-wrap group">
					<div class="quiz-form">
						<?php gravity_form( 13, false, false, false, '', false ); ?>
					</div>
				</div><!--sm-wrap-->
			</div><!--quiz-->
			<div class="videos">
				<div class="med-wrap group">
					<ul class="video-slider bxslider">
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
					</ul>
				</div>
			</div>
			<div class="map-section">
				<div class="med-wrap group">
					<header class="section-header">
						<svg viewBox="0 0 252.9 367.3">
							<path class="st0" d="M126.4,181.3c-30.8,0-55.8-25-55.8-55.8c0-30.8,25-55.8,55.8-55.8c30.8,0,55.8,25,55.8,55.8
								C182.2,156.3,157.2,181.3,126.4,181.3z M126.4,0C56.6,0,0,56.6,0,126.4c0,69.8,114.4,240.8,126.4,240.8s126.4-171,126.4-240.8
								C252.9,56.6,196.3,0,126.4,0z"/>
						</svg>
						<h2>Why Intentional Parenting</h2>
						<p>Lorem ipsum dolor sit amet, vim tibique lobortis ea, in oblique honestatis mei. Te laoreet vituperata qui. Oratio sententiae eu mea. Te sit velit assum torquatos, id zril epicurei mea. Quo munere oblique gubergren et, no sit causae euismod, ne qualisque percipitur vim</p>
					</header>
					<ul class="three-list group">
						<li>
							<div class="info-card flip-container">
								<div class="flipper">
									<div class="front">
										<img src = "<?php bloginfo('template_directory'); ?>/_i/icon-1.png">
										<h3>Title of Card</h3>
										<p>This is the summary of the card that is shorter than what is on the back, but the font is a little bigger.</p>
									</div>
									<div class="back">
										<img src = "<?php bloginfo('template_directory'); ?>/_i/icon-black-1.png">
										<h4>Title of Card</h4>
										<p>Lorem ipsum dolor sit amet, vim tibique lobortis ea, in oblique honestatis mei. Te laoreet vituperata qui. Oratio sententiae eu mea.</p>
										<p>Te sit velit assum torquatos, id zril epicurei mea. Quo munere oblique gubergren et, no sit causae euismod, ne qualisque percipitur vim</p>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="info-card flip-container">
								<div class="flipper">
									<div class="front">
										<img src = "<?php bloginfo('template_directory'); ?>/_i/icon-2.png">
										<h3>Title of Card</h3>
										<p>This is the summary of the card that is shorter than what is on the back, but the font is a little bigger.</p>
									</div>
									<div class="back">
										<img src = "<?php bloginfo('template_directory'); ?>/_i/icon-black-2.png">
										<h4>Title of Card</h4>
										<p>Lorem ipsum dolor sit amet, vim tibique lobortis ea, in oblique honestatis mei. Te laoreet vituperata qui. Oratio sententiae eu mea.</p>
										<p>Te sit velit assum torquatos, id zril epicurei mea. Quo munere oblique gubergren et, no sit causae euismod, ne qualisque percipitur vim</p>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="info-card flip-container">
								<div class="flipper">
									<div class="front">
										<img src = "<?php bloginfo('template_directory'); ?>/_i/icon-3.png">
										<h3>Title of Card</h3>
										<p>This is the summary of the card that is shorter than what is on the back, but the font is a little bigger.</p>
									</div>
									<div class="back">
										<img src = "<?php bloginfo('template_directory'); ?>/_i/icon-black-3.png">
										<h4>Title of Card</h4>
										<p>Lorem ipsum dolor sit amet, vim tibique lobortis ea, in oblique honestatis mei. Te laoreet vituperata qui. Oratio sententiae eu mea.</p>
										<p>Te sit velit assum torquatos, id zril epicurei mea. Quo munere oblique gubergren et, no sit causae euismod, ne qualisque percipitur vim</p>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div><!--map-section-->
			<div class="quote-section">
				<div class="med-wrap group">
					<ul class="quote-slider bxslider">
						<li>
							<img src = "<?php bloginfo('template_directory'); ?>/_i/intent-quote.png">
						</li>
						<li>
							<img src = "http://placehold.it/1600x313">
						</li>
						<li>
							<img src = "<?php bloginfo('template_directory'); ?>/_i/intent-quote.png">
						</li>
						<li>
							<img src = "http://placehold.it/1600x313">
						</li>
						<li>
							<img src = "<?php bloginfo('template_directory'); ?>/_i/intent-quote.png">
						</li>
						<li>
							<img src = "http://placehold.it/1600x313">
						</li>
					</ul>
				</div>
			</div><!--quote-section-->
			<div class="who-section">
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
							<img src = "<?php bloginfo('template_directory'); ?>/_i/people-1.png">
							<h3>1) Close Friends</h3>
							<p>Te sit velit assum torquatos, id zril epicurei mea. Quo munere oblique gubergren et, no sit causae euismod, ne qualisque percipitur vim</p>
						</li>
						<li>
							<img src = "<?php bloginfo('template_directory'); ?>/_i/people-2.png">
							<h3>2) Small Group</h3>
							<p>Te sit velit assum torquatos, id zril epicurei mea. Quo munere oblique gubergren et, no sit causae euismod, ne qualisque percipitur vim</p>
						</li>
						<li>
							<img src = "<?php bloginfo('template_directory'); ?>/_i/people-3.png">
							<h3>3) Parenting Classes</h3>
							<p>Te sit velit assum torquatos, id zril epicurei mea. Quo munere oblique gubergren et, no sit causae euismod, ne qualisque percipitur vim</p>
						</li>
					</ul>
				</div>
			</div><!--quote-section-->
		</div><!--path-content-->
		<div class="cta-section">
			<div class="med-wrap group">
				<h1>Become an Intentional Parent Today</h1><a href = "#" class="btn">Buy Now</a>
			</div>
		</div><!--cta-section-->
		<?php while ( have_posts() ) : the_post(); ?>

			<?php //get_template_part( 'content', 'page' ); ?>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #main-content -->

<?php get_footer('intentional'); ?>
