<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Home Word
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php if( have_rows('snippet') ): ?>
			<ul class="about-snippets group">
			<?php while( have_rows('snippet') ): the_row();
				$image = get_sub_field('snippet_icon');
				$title = get_sub_field('snippet_title');
				$desc = get_sub_field('snippet_description');
				$link = get_sub_field('link_location');
				if($link === 'page') {
					$url = get_sub_field('snippet_url');
				} else {
					$url = get_sub_field('snippet_custom_url');
				}
				$text = get_sub_field('snippet_action_text');
			?>
				<li>
					<a href = "<?php echo $url; ?>">
						<img src = "<?php echo $image; ?>">
						<h3><?php echo $title; ?></h3>
						<p><?php echo $desc; ?></p>
						<span><?php echo $text; ?></span>
					</a>
				</li>
			<?php endwhile; ?>
			</ul>
		<?php endif; ?>
		<?php the_field('bottom_content'); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'homeword' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'homeword' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
