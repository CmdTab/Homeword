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
	<div class="general-content group <?php echo $_GET['cat']; ?>-content">
		<div class="content-section archive">

		<?php  ?>

		<?php /* Start the Loop */
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array( 'post_type' => 'articles', 'posts_per_archive_page' => 4, 'area' => 'radio', 'paged' => $paged);
			$loop = new WP_Query( $args );
			if ( $loop->have_posts() ) : ?>
				<h4 class="archive-title">Radio Archives</h4>
				<?php while ( $loop->have_posts() ) : $loop->the_post();?>
				<div class="entry-excerpt">
				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', 'archivefull' );
				?>
				</div>

			<?php endwhile; endif; ?>

			<?php homeword_paging_nav(); ?>


		</div><!--content-section-->
		<?php get_sidebar(); ?>
	</div><!--general-content-->

<?php get_footer(); ?>
