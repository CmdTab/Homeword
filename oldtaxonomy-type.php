<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Home Word
 */

get_header(); ?>

	<?php
		$displaySlider = get_field('display_slider');
		if ($displaySlider == 'Yes'){
			get_template_part( 'content', 'slider' );
			wp_reset_postdata();
		}

	?>
	<div class="general-content group">
		<div class="content-section archive">

		<?php  ?>
				<h4 class="archive-title">
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							/* Queue the first post, that way we know
							 * what author we're dealing with (if that is the case).
							*/
							the_post();
							printf( __( 'Author: %s', 'homeword' ), '<span class="vcard">' . get_the_author() . '</span>' );
							/* Since we called the_post() above, we need to
							 * rewind the loop back to the beginning that way
							 * we can run the loop properly, in full.
							 */
							rewind_posts();

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'homeword' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'homeword' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'homeword' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'homeword' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'homeword' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'homeword' );

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'homeword');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'homeword' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'homeword' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'homeword' );
						elseif ( is_tax() ) :
							echo get_query_var( 'term' );

						else :
							_e( 'Archives', 'homeword' );

						endif;
					?>
				</h1>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="entry-excerpt">
				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', 'archive' );
				?>
				</div>

			<?php endwhile; ?>

			<?php homeword_paging_nav(); ?>


		</div><!--content-section-->
		<?php get_sidebar(); ?>
	</div><!--general-content-->

<?php get_footer(); ?>
