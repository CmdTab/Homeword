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

			<?php /* Start the Loop */ ?>
<?php
	$thisCat = single_cat_title("", false);
	if($_GET['cat'] === 'families') :
		//Articles
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array( 'post_type' => 'articles', 'posts_per_archive_page' => 4, 'area' => 'families', 'paged' => $paged);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) : ?>

				<h4 class="archive-title">Articles for Families</h4>
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
				?>
<?php
	wp_reset_postdata();
	elseif($_GET['cat'] === 'church') :
		//Articles
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array( 'post_type' => 'articles', 'posts_per_archive_page' => 4, 'area' => 'church-leaders', 'paged' => $paged);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) : ?>

				<h4 class="archive-title">Articles for Church Leaders</h4>
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
				?>
<?php
	wp_reset_postdata();
	else :
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array( 'post_type' => 'articles', 'posts_per_archive_page' => 4, 'paged' => $paged);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) :
			while ( $loop->have_posts() ) : $loop->the_post();
				echo '<div class="entry-excerpt">';
				get_template_part( 'content', 'archive' );
				echo '</div>';
			endwhile;
			homeword_paging_nav();
		else :
			get_template_part( 'content', 'none' );
		endif;
	endif;
?>

			<?php //homeword_paging_nav(); ?>

		</div><!--content-section-->
		<?php get_sidebar(); ?>
	</div><!--general-content-->

<?php get_footer(); ?>
