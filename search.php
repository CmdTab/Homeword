<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Home Word
 */
$cat = isset($_GET['cat']) ? $_GET['cat'] : null;
get_header(); ?>
	<div class="general-content search-page group <?php if ($cat != NULL) {echo $cat.'-content';} ?>">
		<div class="content-section page">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h4 class="archive-title"><?php printf( __( 'Search Results for: %s', 'homeword' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'archive' ); ?>

			<?php endwhile; ?>

			<?php homeword_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</div><!-- content-section -->
		<?php get_sidebar(); ?>
	</div><!-- .general-content -->

<?php get_footer(); ?>
