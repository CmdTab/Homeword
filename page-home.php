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
				<?php get_template_part( 'content', 'newsletter' ); ?>
				<div class="content-wrap general-content">
					<div class="feature-tabs group">
						<ul class="nav nav-tabs feature-tab-nav">

							<li class="active">
								<a href="#radio" data-toggle="tab" class="radio-tab">
									<!--<span aria-hidden="true" data-icon="&#x52;"></span>-->
									<span class="icon-seminars"></span>
									<span class="tab-label">Seminars</span>
								</a>
							</li>
							<li>
								<a href="#family" data-toggle="tab" class="family-tab">
									<!--<span aria-hidden="true" data-icon="&#x46;"></span>-->
									<span class="icon-devotional"></span>
									<span class="tab-label">Daily Devotional</span>
								</a>
							</li>
							<li>
								<a href="#church" data-toggle="tab" class="church-tab">
									<!--<span aria-hidden="true" data-icon="&#x43;"></span>-->
									<span class="icon-culture"></span>
									<span class="tab-label">Culture Blog</span>
								</a>
							</li>
						</ul>

						<div class="tab-content feature-tab-content">
							<div class="tab-pane radio-pane active" id="radio">
								<div class="tab-column image">
									<a href = "#">
										<img src = "<?php bloginfo('template_directory'); ?>/_i/seminar-tab.jpg">
									</a>
								</div>
								<div class="tab-column double right-tab seminars">
									<?php the_field('about_seminars'); ?>
									<a href = "<?php the_field('learn_more_link'); ?>" class="read-more">Learn More &raquo;</a>
								<!--</div>
								<div class="tab-column right-tab">-->
									<?php if( have_rows('seminar', 599) ): ?>
										<div class="up-seminar-list">
											<h5>Upcoming Seminars</h5>
											<a href = "<?php echo esc_url( home_url( '/' ) ); ?>/seminars/upcoming-seminars/" class="more-upcoming">View All &raquo;</a>
											<ul class="two-list group">
											<?php $i = 0; while ( $i < 2 && have_rows('seminar', 599) ) : the_row();
												$startdate = DateTime::createFromFormat('Ymd', get_sub_field('seminar_start_date'));
											?>
												<li class="seminar-preview">
													<h3><a href = "<?php the_sub_field('seminar_url'); ?>"><?php the_sub_field('seminar_title'); ?></a></h3>
													<h4><?php echo $startdate->format('F j, Y'); ?></h4>
													<div class="event-location"><?php the_sub_field('seminar_location'); ?></div>
													<div class="event-address"><?php the_sub_field('seminar_address'); ?></div>
												</li>
											<?php $i++; endwhile; ?>
											</ul>
										</div>
									<?php endif; ?>
								</div>
							</div>
							<div class="tab-pane family-pane" id="family">
								<div class="tab-column article-preview">
<?php
	$args = array( 'post_type' => 'devotionals', 'posts_per_page' => 2);
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
?>									<div class="tab-article">
										<h3><a href = "<?php the_permalink(); ?>?cat=families"><?php the_title(); ?></a></h3>
										<h6><?php the_date(); ?></h6>
										<p><?php the_excerpt(); ?></p>
										<a href = "<?php the_permalink(); ?>?cat=families" class="read-more">Continue Reading &raquo;</a>
									</div>
<?php endwhile; wp_reset_postdata(); ?>
								</div>
								<div class="tab-column image">
									<a href = "<?php echo esc_url( home_url( '/' ) ); ?>/families/?cat=families">
										<img src = "<?php bloginfo('template_directory'); ?>/_i/devo-tab.jpg">
									</a>
								</div>
								<div class="tab-column right-tab link-list">
									<h5>Devotional Links:</h5>

									<?php wp_nav_menu( array( 'theme_location' => 'devo',  'container' => false) ); ?>
									<div class="tab-signup">
										<h5>Receive via Email</h5>
										<p>Get the daily devotional delivered to you every day in your inbox.</p>
										<?php mc4wp_form(5120); ?>
									</div>
								</div>
							</div>
							<div class="tab-pane church-pane" id="church">
								<div class="tab-column article-preview">
<?php
	$args = array( 'post_type' => 'post', 'posts_per_page' => 2);
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
?>
									<div class="tab-article">
										<h3><a href = "<?php the_permalink(); ?>?cat=church"><?php the_title(); ?></a></h3>
										<p><?php the_excerpt(); ?></p>
										<a href = "<?php the_permalink(); ?>?cat=church" class="read-more">Continue Reading &raquo;</a>
									</div>
<?php endwhile; wp_reset_postdata(); ?>
								</div>
								<div class="tab-column link-list">
									<h5>Culture Blog Links:</h5>
									<?php wp_nav_menu( array( 'theme_location' => 'blog',  'container' => false) ); ?>
									<div class="tab-signup">
										<h5>Receive via Email</h5>
										<p>Get a weekly culture update delivered to your inbox.</p>
										<?php mc4wp_form(5131); ?>
									</div>
								</div>
								<div class="tab-column image">
									<a href = "<?php echo esc_url( home_url( '/' ) ); ?>/families/?cat=church">
										<img src = "<?php bloginfo('template_directory'); ?>/_i/culture-tab.jpg">
									</a>
								</div>
							</div>
						</div>
					</div>
					<?php get_template_part( 'content', 'tabs' ); ?>
				</div><!--general-content-->

<?php get_footer(); ?>
