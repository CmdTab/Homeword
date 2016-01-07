<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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

		<?php if ( have_posts() ) : ?>
<?php
	$thisCat = single_cat_title("", false);
	if($_GET['cat'] === 'families') :
		//Articles
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array( 'post_type' => 'post', 'posts_per_archive_page' => 4, 'area' => 'families', 'paged' => $paged);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) : ?>

				<h4 class="archive-title">Culture Blog for Families</h4>
				<div class="group">
				<?php while ( $loop->have_posts() ) : $loop->the_post();?>
					<div class="entry-excerpt">
						<?php get_template_part( 'content', 'archive' ); ?>
					</div>
				<?php endwhile;	endif; ?>
				</div>
<?php
	elseif($_GET['cat'] === 'church') :
		//Articles
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array( 'post_type' => 'post', 'posts_per_archive_page' => 4, 'area' => 'church-leaders', 'paged' => $paged);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) : ?>

				<h4 class="archive-title">Culture Blog for Church Leaders</h4>
				<div class="group">
				<?php while ( $loop->have_posts() ) : $loop->the_post();?>
					<div class="entry-excerpt">
						<?php get_template_part( 'content', 'archive' ); ?>
					</div>
				<?php endwhile;	endif; ?>
				</div>
<?php else :
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array( 'post_type' => 'post', 'posts_per_archive_page' => 4, 'paged' => $paged);
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
			echo '<div class="entry-excerpt">';
			get_template_part( 'content', 'archive' );
			echo '</div>';
		endwhile;
	endif;
?>
			<?php homeword_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</div><!--content-section-->
		<?php get_sidebar(); ?>
	</div><!--general-content-->
<?php get_footer(); ?>
