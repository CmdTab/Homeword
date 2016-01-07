<?php
/**
 * Template name: Radio Home
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

					while ( have_posts() ) : the_post();
				?>

				<div class="general-content group radio-content">
					<div class="content-section archive">
						<div class="section-intro radio-intro">
							<h1>Radio</h1>
							<?php //the_content(); ?>
						</div>
<?php //Articles
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array( 'post_type' => 'articles', 'posts_per_archive_page' => 4, 'area' => 'radio', 'paged' => $paged);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) : ?>

				<div class="group">
				<?php while ( $loop->have_posts() ) : $loop->the_post();?>
					<div class="entry-excerpt">
						<?php get_template_part( 'content', 'archive' ); ?>
					</div>
				<?php
					endwhile;
					homeword_paging_nav();
				?>
				</div>
					<?php else :
						get_template_part( 'content', 'none' );
					endif;
					wp_reset_postdata(); endwhile;
				?>
					</div>
					<?php get_sidebar(); ?>

				</div><!--general-content-->
<?php get_template_part( 'content', 'newsletter' ); ?>
<?php get_footer(); ?>
