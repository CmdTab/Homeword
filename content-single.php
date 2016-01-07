<?php
/**
 * @package Home Word
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
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
				<a href = "<?php echo $authorURL; ?>"><?php the_author(); ?></a> &middot; <?php the_date(); ?>
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
				$radioLink = '<a href="' .  esc_url( home_url( '/' ) ) . 'area/' . $term->slug;
				if(!empty($_GET['cat'])) {
					$radioLink .= '/?cat='. $_GET['cat'];
				}
				$radioLink .= '">'.$term->name.'</a>';
				echo $radioLink;
			} else {
				$catLink = '<a href="' .  esc_url( home_url( '/' ) ) . $term->slug;
				if(!empty($_GET['cat'])) {
					$catLink .= '/?cat='. $_GET['cat'];
				}
				$catLink .= '">'.$term->name.'</a>';
				echo $catLink;
			}
			if ($term != end($area_terms)) {
				echo ', ';
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
	      $catLink = ', <a href="'.get_term_link($term->slug, 'category');
	      if(!empty($_GET['cat'])) {
	      	$catLink .= '?cat='. $_GET['cat'];
	      }
	      $catLink .= '">'.$term->name.'</a>';
	      echo $catLink;
	    }
	  }
	}
?>
			</div>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
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
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'homeword' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<div class="entry-social group">
		<div class="social-buttons">
			<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
				<a class="addthis_button_facebook"></a>
				<a class="addthis_button_twitter"></a>
				<a class="addthis_button_email"></a>
				<a class="addthis_button_pinterest_share"></a>
				<a class="addthis_button_compact"></a><a class="addthis_counter addthis_bubble_style"></a>
				</div>
				<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
				<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52f536aa5bdabe20"></script>
			<!-- AddThis Button END -->
		</div>
		<a href = "#post-<?php the_ID(); ?>" class="to-top"><span>&uarr;</span>Back to Top</a>

	</div>
	<footer class="entry-footer group">
		<?php echo get_avatar(get_the_author_meta('ID'), 240); ?>
		<div class="author-info">
			<h4><?php the_author_meta('display_name'); ?></h4>
			<p><?php the_author_meta('description'); ?></p>
		</div>

	</footer><!-- .entry-meta -->
	<?php homeword_post_nav(); ?>
	<div class="related-posts">
		<?php
//for use in the loop, list 5 post titles related to first tag on current post
$term_list = wp_get_post_terms($post->ID, 'category');
if ($term_list) {
  echo '<h4>Recommended Reading</h4>';
  $first_term = $term_list[0]->term_id;
  $args=array(
    'category__in' => array($first_term),
    'post__not_in' => array($post->ID),
    'showposts'=>3,
    'caller_get_posts'=>1,
    'post_type' => array( 'post', 'articles', 'devotionals' )
   );
  $my_query = new WP_Query($args);
  if( $my_query->have_posts() ) {
  	echo '<ul class="three-list group">';
    while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <li>
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
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
      		the_title();
      	?>
		</a>
	</li>
      <?php
    endwhile;
    echo '</ul>';
  }
wp_reset_query();
}
?>
	</div>
</article><!-- #post-## -->
