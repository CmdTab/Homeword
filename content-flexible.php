<?php
/**
 * The template used for displaying page content in the flexible template
 *
 * @package Home Word
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
	<?php
		if( have_rows('layout') ):
			while ( have_rows('layout') ) : the_row();
	?>
		<section class="content-block group">

		<?php if( get_row_layout() == 'halves' ):
			if( have_rows('half') ):
		?>
			<ul class="halves group">
			<?php while ( have_rows('half') ) : the_row(); ?>
				<li><?php the_sub_field('half_content'); ?></li>
			<?php endwhile; ?>
			</ul>
			<?php endif; //have_rows(half) ?>

		<?php elseif( get_row_layout() == 'third_and_two_third' ): ?>
			<div class="third first">
				<?php the_sub_field('left_third'); ?>
			</div>
			<div class="two-third">
				<?php the_sub_field('right_two_third'); ?>
			</div>

		<?php elseif( get_row_layout() == 'full_width' ): ?>
			<?php the_sub_field('full_width_content'); ?>

		<?php elseif( get_row_layout() == 'thirds' ):
			if( have_rows('third') ):
		?>
			<ul class="three-list group">
			<?php while ( have_rows('third') ) : the_row(); ?>
				<li><?php the_sub_field('third_content'); ?></li>
			<?php endwhile; ?>
			</ul>
			<?php endif; //have_rows(third) ?>

		<?php endif; //get_row_layout ?>
		</section>

<?php endwhile; endif; ?>

	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'homeword' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
