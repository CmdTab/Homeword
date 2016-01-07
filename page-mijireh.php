<?php
/**
 * Template name: Mijireh
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Home Word
 */

get_header('mijireh'); ?>
	
	<div class="general-content group">
		<div class="content-wrap full">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
