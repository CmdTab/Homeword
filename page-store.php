<?php
/**
 * Template name: Store
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Home Word
 */

get_header(); ?>

	<?php
		$displaySlider = get_field('display_slider');
		if ($displaySlider == 'Yes') :
			get_template_part( 'content', 'slider' );
			wp_reset_postdata();
		elseif ($displaySlider == 'Image') :
			$image = get_field('top_image');
			if( !empty($image) ):
	?>

	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="top-image"/>

	<?php
			endif;
		endif;

		$cat = isset($_GET['cat']) ? $_GET['cat'] : null;
		while ( have_posts() ) : the_post();
	?>
	<div class="general-content group <?php if ($cat != NULL) {echo $cat.'-content';} ?>">
		<div class="content-section store-home">

			<h1 class="entry-title with-btn"><?php the_title(); ?></h1>
			<a href = "/shop" class="all-products">View All Products</a>
			<?php get_template_part( 'content', 'tabs' ); ?>
			<hr />
<?php
if( get_field('row') ):
	$i = 0;
	while( has_sub_field("row") ): ?>
				<div class="store-home-group">
<?php
		if(get_row_layout() == "specific_products"): // layout: Specific Product
			$product_one = get_sub_field('product_1');
			$product_two = get_sub_field('product_2');
			$product_three = get_sub_field('product_3');
			$codeAction = '[products ids="' . $product_one->ID . ',' . $product_two->ID . ',' .$product_three->ID . '"]';
?>
					<header class="store-category-header group">
						<h5 class="store-subheading"><?php the_sub_field('row_title'); ?></h5>
						<a href = "<?php the_sub_field('view_link_url'); ?>">View All &raquo;</a>
					</header>
					<div class="group">
						<?php echo do_shortcode($codeAction); ?>
					</div>
		<?php endif; $i++; ?>
				</div><!--store-home-group-->
<?php endwhile; ?><!--end tab pane loop-->

<?php endif; ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- content-section -->
		<?php get_sidebar('shop'); ?>
	</div><!-- .general-content -->


<?php get_footer(); ?>
