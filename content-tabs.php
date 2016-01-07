<?php
/**
 * The template used for displaying the regular tabs
 *
 * @package Home Word
 */
	/*****Start Regular Tabs *****/
	if( get_field('tab') ): ?>
					<div class="regular-tabs group">
						<ul class="nav nav-tabs regular-tab-nav">
							<a href = "#" class="tabs-toggle">
								<span aria-hidden="true" data-icon="&#x6f;"></span>
								<span class="assistive-text">Show Tabs</span>
							</a>
							<?php
								$i = 0;
								while( has_sub_field("tab") ):
									$tabName = get_sub_field("tab_name");
									$tabID = str_replace(' ', '', $tabName);
							?>
								<li <?php if($i == 0) {echo 'class="active"';} ?>>
									<a href="#<?php echo $tabID;?>" data-toggle="tab"><?php echo $tabName; ?></a>
								</li>
							<?php $i++; endwhile; ?>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content regular-tab-content">
<?php
	$i = 0;
	while( has_sub_field("tab") ):
		$tabName = get_sub_field("tab_name");
		$tabID = str_replace(' ', '', $tabName);
		if(get_row_layout() == "single_product"): // layout: Single Product

?>
							<div class='tab-pane <?php if($i == 0) {echo "active";} ?> single-pane' id="<?php echo $tabID;?>">
								<?php
									$post_object = get_sub_field('product');
									$post = $post_object;
									setup_postdata( $post );
								?>
								<a href = "<?php the_permalink(); ?>" class="single-image">
									<?php
										if ( has_post_thumbnail() ) {
											the_post_thumbnail();
										}
									?>
								</a>
								<div class="single-content">
									<a href = "<?php echo esc_url( home_url( '/' ) ); ?>/store" class="view-all">View Store &raquo;</a>
									<h2>
										<a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h2>
									<?php
										$author = get_post_meta( get_the_ID(), '_author_field', true );
										if(!empty($author)) :
									?>
										<h4>by <?php echo $author ?></h4>
									<?php endif; ?>
									<p><?php the_excerpt(); ?></p>
									<a href = "<?php the_permalink(); ?>" class="btn-gray">Details</a>
									<?php woocommerce_template_loop_add_to_cart(  ); ?>
								</div>
							</div>
<?php
		wp_reset_postdata();
		elseif(get_row_layout() == "three_column"): // layout: Three Column
			$product_one = get_sub_field('product_one');
			$product_two = get_sub_field('product_two');
			$product_three = get_sub_field('product_three');
			$codeAction = '[products ids="' . $product_one->ID . ',' . $product_two->ID . ',' .$product_three->ID . '"]';
?>
							<div class="tab-pane <?php if($i == 0) {echo "active";} ?> three-pane" id="<?php echo $tabID;?>">
								<?php echo do_shortcode($codeAction); ?>
							</div>
		<?php endif; $i++; ?>
<?php endwhile; ?><!--end tab pane loop-->
						</div><!--tab-content-->
					</div><!--reg-tabs-->
<?php endif; ?>