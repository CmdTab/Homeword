<?php
/**
 * Template name: Families Home
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

				<div class="general-content group families-content">
					<div class="content-section">
						<div class="section-intro">
							<h1>Free Resources for Families</h1>
							<?php //the_content(); ?>
						</div>


<?php

	$args = array( 'post_type' => 'jims-blog', 'posts_per_page' => 1);
	$loop = new WP_Query( $args );
	if( $loop->have_posts() ):
		$jimsblog = true;
?>
					<div class="entry-excerpt half first">
<?php
	while ( $loop->have_posts() ) : $loop->the_post();
?>
							<a href = "<?php the_permalink(); ?>?cat=families">
								<?php
									if ( has_post_thumbnail() ) {
										the_post_thumbnail();
									} else {
										echo '<img src ="';
										echo bloginfo('template_directory');
										echo '/_i/devo.jpg">';
									}
								?>
							</a>
							<h5>Jim's Blog</h5>
							<h3><a href = "<?php the_permalink(); ?>?cat=families"><?php the_title(); ?></a></h3>
							<div class="metadata">Published <?php the_date(); ?> by <?php the_author(); ?></div>
							<p><?php the_excerpt(); ?></p>
							<a href = "<?php the_permalink(); ?>?cat=families" class="read-more">Continue Reading &raquo;</a>
<?php endwhile; wp_reset_postdata(); ?>
						</div>
	<?php endif;
	if($jimsblog) : ?>
						<div class="entry-excerpt half">
	<?php else: ?>
						<div class="entry-excerpt devo-excerpt">
	<?php endif; ?>
<?php
	$args = array( 'post_type' => 'devotionals', 'posts_per_page' => 1, 'area' => 'families');
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
?>
							<a href = "<?php the_permalink(); ?>?cat=families">
								<?php
									if ( has_post_thumbnail() ) {
										the_post_thumbnail();
									} else {
										echo '<img src ="';
										echo bloginfo('template_directory');
										echo '/_i/devo.jpg">';
									}
								?>
							</a>
							<h5>Daily Devotional</h5>
							<h3><a href = "<?php the_permalink(); ?>?cat=families"><?php the_title(); ?></a></h3>
							<div class="metadata">Published <?php the_date(); ?> by <?php the_author(); ?></div>
							<p><?php the_excerpt(); ?></p>
							<a href = "<?php the_permalink(); ?>?cat=families" class="read-more">Continue Reading &raquo;</a>
<?php endwhile; wp_reset_postdata(); ?>
						</div>
						<div class="excerpt-group group">
							<div class="entry-excerpt half first">
								<h5>Recent Article</h5>
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
								<div class="metadata">Published <?php the_date(); ?> by <?php the_author(); ?></div>
								<p><?php the_excerpt(); ?></p>
								<a href = "<?php the_permalink(); ?>?cat=families" class="read-more">Continue Reading &raquo;</a>
<?php endwhile; wp_reset_postdata(); ?>
							</div>
							<div class="entry-excerpt half">
								<h5>From the Culture Blog</h5>
<?php
	$args = array( 'post_type' => 'post', 'posts_per_page' => 1, 'area' => 'families');
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
?>
								<a href = "<?php the_permalink(); ?>?cat=families">
									<?php
										if ( has_post_thumbnail() ) {
											the_post_thumbnail();
										}

									?>
								</a>
								<h3><a href = "<?php the_permalink(); ?>?cat=families"><?php the_title(); ?></a></h3>
								<div class="metadata">Published <?php the_date(); ?> by <?php the_author(); ?></div>
								<p><?php the_excerpt(); ?></p>
								<a href = "<?php the_permalink(); ?>?cat=families" class="read-more">Continue Reading &raquo;</a>
<?php endwhile; wp_reset_postdata(); ?>
							</div>
						</div><!--excerpt-group-->
					</div>
					<?php get_sidebar(); ?>

				</div><!--general-content-->
<?php get_template_part( 'content', 'newsletter' ); ?>
<?php get_footer(); ?>
jims-blog
