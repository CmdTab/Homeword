<?php
/**
 * @package Home Word
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href = "<?php the_permalink(); ?>?cat=<?php echo $_GET['cat']; ?>"><?php the_title(); ?></a></h1>
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
				<a href = "<?php echo $authorURL;?>"><?php the_author(); ?></a> &middot; <?php echo get_the_date('F j, Y'); ?>
						<?php edit_post_link( __( 'Edit', 'homeword' ), '<span class="edit-link">', '</span>' ); ?>

			</div>
			<div class="entry-cats">
				Published in
<?php
	$area_terms = wp_get_object_terms($post->ID, 'area');
	if(!empty($area_terms)){
	  if(!is_wp_error( $area_terms )){
	    foreach($area_terms as $term){
			if($term->slug === 'radio') {
				echo '<a href="' .  esc_url( home_url( '/' ) ) . 'area/' . $term->slug . '/?cat='. $_GET['cat'].'">'.$term->name.'</a>';
			} else {
				echo '<a href="' .  esc_url( home_url( '/' ) ) . $term->slug . '/?cat='. $_GET['cat'].'">'.$term->name.'</a>';
			}
			if ($term != end($area_terms)) {
				echo ', ';
			}
	    }
	  }
	}
	//echo get_the_term_list( $post->ID, 'area', '', ', ', '' );
	//echo get_the_term_list( $post->ID, 'category', '', ', ', '' );
	$cat_terms = wp_get_object_terms($post->ID, 'category');
	if(!empty($cat_terms)){
	  if(!is_wp_error( $cat_terms )){
	    foreach($cat_terms as $term){
	      echo ', <a href="'.get_term_link($term->slug, 'category').'?cat='. $_GET['cat'].'">'.$term->name.'</a>';
	    }
	  }
	}
?>
			</div>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<a href = "<?php the_permalink(); ?>?cat=<?php echo $_GET['cat']; ?>">
		<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
				echo '<div class="caption">';
				echo get_post(get_post_thumbnail_id())->post_excerpt;
				echo '</div>';
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
		<p><?php the_excerpt(); ?></p>
		<a href = "<?php the_permalink(); ?>?cat=<?php echo $_GET['cat']; ?>" class="archive-more <?php echo $cat; ?>">Read More</a>
	</div>
</article><!-- #post-## -->
