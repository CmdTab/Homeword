<?php
/**
 * @package Home Word
 */
$entryTitle = get_the_title();
if(strlen($entryTitle) > 40) {
	$entryTitle = substr($entryTitle, 0, 40) . '...';
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h3><a href = "<?php the_permalink(); ?>?cat=<?php echo $_GET['cat']; ?>"><?php echo $entryTitle; ?></a></h3>
		<div class="entry-meta">
			<div class="entry-author">
				<?php
					$authorURL = get_author_posts_url( get_the_author_meta( 'ID' ) );
					if(!empty($_GET['cat'])) {
						$authorURL .= '?cat=' . $_GET['cat'];
					}
				?>
				<?php 
					$postType = get_post_type();
					if($postType == 'post'):
						echo 'Posted by ';
					else :
						echo 'By ';
					endif;					
				?>
				<a href = "<?php echo $authorURL; ?>"><?php the_author(); ?></a> &middot; <?php the_time('F j, Y'); ?>
			</div>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<a href = "<?php the_permalink(); ?>?cat=<?php echo $_GET['cat']; ?>">
		<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} elseif (get_post_type( get_the_ID() ) === 'devotionals') {
				echo '<img src ="';
				echo bloginfo('template_directory');
				echo '/_i/devo.jpg">';
			} elseif (has_term( 'radio', 'area' )) {
				echo '<img src ="';
				echo bloginfo('template_directory');
				echo '/_i/radio.jpg">';
			}
		?>
		</a>
		<p><?php echo get_excerpt(140); ?></p>
		<a href = "<?php the_permalink(); ?>?cat=<?php echo $_GET['cat']; ?>">Continue Reading &raquo;</a>
	</div>
</article><!-- #post-## -->
