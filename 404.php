<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Home Word
 */

get_header();
$cat = isset($_GET['cat']) ? $_GET['cat'] : null;
	?>

	<div class="general-content group <?php if ($cat != NULL) {echo $cat.'-content';} ?>">
		<div class="content-section 404">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'homeword' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below.', 'homeword' ); ?></p>



					<div class="feature-tabs group only-two">
						<ul class="nav nav-tabs feature-tab-nav">

							<li class="active">
								<a href="#family" data-toggle="tab" class="family-tab">
									<span aria-hidden="true" data-icon="&#x46;"></span>
									<span class="tab-label">Family Resources</span>
								</a>
							</li>
							<li>
								<a href="#church" data-toggle="tab" class="church-tab">
									<span aria-hidden="true" data-icon="&#x43;"></span>
									<span class="tab-label">Church Leader Resources</span>
								</a>
							</li>
						</ul>

						<div class="tab-content feature-tab-content">
							<div class="tab-pane family-pane active" id="family">
								<div class="tab-column article-preview">
<?php
	$args = array( 'post_type' => 'articles', 'posts_per_page' => 1, 'area' => 'families');
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
?>
									<a href = "<?php the_permalink(); ?>?cat=families">
										<?php
											if ( has_post_thumbnail() ) {
												the_post_thumbnail();
											} elseif (has_term( 'radio', 'area' )) {
												echo '<img src ="';
												echo bloginfo('template_directory');
												echo '/_i/radio.jpg">';
											}
										?>
									</a>
									<h3><a href = "<?php the_permalink(); ?>?cat=families"><?php the_title(); ?></a></h3>
									<p><?php the_excerpt(); ?></p>
									<a href = "<?php the_permalink(); ?>?cat=families" class="read-more">Continue Reading &raquo;</a>
<?php endwhile; wp_reset_postdata(); ?>
								</div>

								<div class="tab-column right-tab link-list">
									<h5>Family Resources Library:</h5>

									<?php wp_nav_menu( array( 'theme_location' => 'families',  'container' => false) ); ?>
								</div>
							</div>
							<div class="tab-pane church-pane" id="church">
								<div class="tab-column link-list">
									<h5>Church Leader Resources Library:</h5>
									<?php wp_nav_menu( array( 'theme_location' => 'church',  'container' => false) ); ?>
								</div>
								<div class="tab-column article-preview">
<?php
	$args = array( 'post_type' => 'articles', 'posts_per_page' => 1, 'area' => 'church-leaders');
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
?>
									<a href = "<?php the_permalink(); ?>?cat=church">
										<?php
											if ( has_post_thumbnail() ) {
												the_post_thumbnail();
											} elseif (has_term( 'radio', 'area' )) {
												echo '<img src ="';
												echo bloginfo('template_directory');
												echo '/_i/radio.jpg">';
											}
										?>
									</a>
									<h3><a href = "<?php the_permalink(); ?>?cat=church"><?php the_title(); ?></a></h3>
									<p><?php the_excerpt(); ?></p>
									<a href = "<?php the_permalink(); ?>?cat=church" class="read-more">Continue Reading &raquo;</a>
<?php endwhile; wp_reset_postdata(); ?>
								</div>

							</div>
						</div>
					</div>
					<?php if ( homeword_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget categories-404">
						<h4><?php _e( 'Popular Categories', 'homeword' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 0,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>
					<h4>Search HomeWord</h4>
					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</div><!-- #main -->
		<?php get_sidebar(); ?>
	</div><!-- #primary -->

<?php get_footer(); ?>