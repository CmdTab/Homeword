<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Home Word
 */

get_header(); ?>

	<div class="general-content group <?php if(!empty($_GET['cat'])) {echo $_GET['cat'] . '-content';} ?>">
		<div class="content-section archive">

			<?php /* Start the Loop */ ?>
<?php
	$thisCat = single_cat_title("", false);
	if(!empty($_GET['cat'])) :
	if($_GET['cat'] === 'families') :
		//Articles
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array( 'post_type' => 'articles', 'posts_per_archive_page' => 4, 'area' => 'families', 'category_name' => $thisCat, 'paged' => $paged);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) : ?>

				<h4 class="archive-title">Articles about <?php single_cat_title(); ?></h4>
				<div class="archive-grouping group">
				<?php $i = 1;
					while ( $loop->have_posts() ) : $loop->the_post();?>
					<?php if($loop->post_count == 1) : ?>
						<div class="entry-excerpt">
							<?php get_template_part( 'content', 'archiveexcerpt' ); ?>
						</div>
					<?php else :  ?>
					<div class="entry-excerpt half <?php if($i & 1){echo 'clear';}?>">
						<?php get_template_part( 'content', 'archiveexcerpt' ); ?>
					</div>
				<?php endif;  $i++; endwhile; ?>
				</div>
		<?php endif; ?>
		<?php wp_reset_postdata();
		//Devotions
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array( 'post_type' => 'devotionals', 'posts_per_archive_page' => 4, 'area' => 'families', 'category_name' => $thisCat, 'paged' => $paged);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) : ?>

				<h4 class="archive-title">Devotions about <?php single_cat_title(); ?></h4>
				<div class="archive-grouping group">
				<?php $i = 1; ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post();?>
					<?php if($loop->post_count == 1) : ?>
						<div class="entry-excerpt">
							<?php get_template_part( 'content', 'archiveexcerpt' ); ?>
						</div>
					<?php else : ?>
					<div class="entry-excerpt half <?php if($i & 1){echo 'clear';}?>">
						<?php get_template_part( 'content', 'archiveexcerpt' ); ?>
					</div>
				<?php endif; $i++; endwhile; ?>
				</div>
		<?php endif; ?>
		<?php wp_reset_postdata();
		//Posts
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array( 'post_type' => 'post', 'posts_per_archive_page' => 4, 'area' => 'families', 'category_name' => $thisCat, 'paged' => $paged);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) : ?>

				<h4 class="archive-title">Blog Posts about <?php single_cat_title(); ?></h4>
				<div class="archive-grouping group">
				<?php $i = 1; ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post();?>
					<?php if($loop->post_count == 1) : ?>
						<div class="entry-excerpt">
							<?php get_template_part( 'content', 'archiveexcerpt' ); ?>
						</div>
					<?php else : ?>
					<div class="entry-excerpt half <?php if($i & 1){echo 'clear';}?>">
						<?php get_template_part( 'content', 'archiveexcerpt' ); ?>
					</div>
				<?php endif; $i++; endwhile; ?>
				</div>
		<?php endif; ?>
<?php
	elseif($_GET['cat'] === 'church') :
		//Articles
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array( 'post_type' => 'articles', 'posts_per_archive_page' => 4, 'area' => 'church-leaders', 'category_name' => $thisCat, 'paged' => $paged);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) : ?>

				<h4 class="archive-title">Articles about <?php single_cat_title(); ?></h4>
				<div class="archive-grouping group">
				<?php $i = 1; ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post();?>
					<?php if($loop->post_count == 1) : ?>
						<div class="entry-excerpt">
							<?php get_template_part( 'content', 'archiveexcerpt' ); ?>
						</div>
					<?php else : ?>
					<div class="entry-excerpt half <?php if($i & 1){echo 'clear';}?>">
						<?php get_template_part( 'content', 'archiveexcerpt' ); ?>
					</div>
				<?php endif; $i++; endwhile; ?>
				</div>
		<?php endif; ?>
		<?php wp_reset_postdata();
		//Devotions
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array( 'post_type' => 'devotionals', 'posts_per_archive_page' => 4, 'area' => 'church-leaders', 'category_name' => $thisCat, 'paged' => $paged);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) : ?>

				<h4 class="archive-title">Devotions about <?php single_cat_title(); ?></h4>
				<div class="archive-grouping group">
				<?php $i = 1; ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post();?>
					<?php if($loop->post_count == 1) : ?>
						<div class="entry-excerpt">
							<?php get_template_part( 'content', 'archiveexcerpt' ); ?>
						</div>
					<?php else : ?>
					<div class="entry-excerpt half <?php if($i & 1){echo 'clear';}?>">
						<?php get_template_part( 'content', 'archiveexcerpt' ); ?>
					</div>
				<?php endif; $i++; endwhile; ?>
				</div>
		<?php endif; ?>
		<?php wp_reset_postdata();
		//Posts
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array( 'post_type' => 'post', 'posts_per_archive_page' => 4, 'area' => 'church-leaders', 'category_name' => $thisCat, 'paged' => $paged);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) : ?>

				<h4 class="archive-title">Blog Posts about <?php single_cat_title(); ?></h4>
				<div class="archive-grouping group">
				<?php $i = 1; ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post();?>
					<?php if($loop->post_count == 1) : ?>
						<div class="entry-excerpt">
							<?php get_template_part( 'content', 'archiveexcerpt' ); ?>
						</div>
					<?php else : ?>
					<div class="entry-excerpt half <?php if($i & 1){echo 'clear';}?>">
						<?php get_template_part( 'content', 'archiveexcerpt' ); ?>
					</div>
				<?php endif; $i++; endwhile; ?>
				</div>
		<?php endif; ?>
		<?php endif; ?>
<?php else :
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array( 'post_type' => array( 'articles', 'devotionals', 'post'), 'posts_per_archive_page' => 4, 'category_name' => $thisCat, 'paged' => $paged);
		$loop = new WP_Query( $args );
		?>
		<h4 class="archive-title">HomeWord content about  <?php echo $thisCat; ?></h4>
		<?php $i = 1; ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post();?>
					<?php if($loop->post_count == 1) : ?>
						<div class="entry-excerpt">
							<?php get_template_part( 'content', 'archiveexcerpt' ); ?>
						</div>
					<?php else : ?>
					<div class="entry-excerpt half <?php if($i & 1){echo 'clear';}?>">
						<?php get_template_part( 'content', 'archiveexcerpt' ); ?>
					</div>
				<?php endif; $i++; endwhile; ?>
<?php
	endif;
?>

			<?php homeword_paging_nav(); ?>

		</div><!--content-section-->
		<?php get_sidebar(); ?>
	</div><!--general-content-->

<?php get_footer(); ?>
