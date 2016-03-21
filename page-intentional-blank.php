<?php
/**
 * Template name: Intentional Blank
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Home Word
 */

get_header('intentional'); ?>
	<div class="main-content intentional-blank">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #main-content -->

<?php get_footer('intentional-blank'); ?>
