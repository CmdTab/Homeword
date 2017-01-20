<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Home Word
 */

get_header(); ?>


	<div class="general-content group <?php echo $_GET['cat']; ?>-content">

		<?php
			$postType = get_post_type();
			if($postType == 'jims-blog'): ?>
			<div class="blog-banner">
				<?php

					$blog_image = get_field('jims_blog_banner_image', 'options');

					if( !empty($blog_image) ): ?>

						<img src="<?php echo $blog_image['url']; ?>" alt="<?php echo $blog_image['alt']; ?>" />

				<?php endif; ?>
			</div>
			<?php else : ?>

			<?php endif;
		?>

		<div class="content-section archive blog-archive">

			<?php if ( have_posts() ) : ?>

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

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

			<?php //homeword_paging_nav(); ?>

		</div><!--content-section-->
		<?php get_sidebar(); ?>
	</div><!--general-content-->

<?php get_footer(); ?>
