<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Home Word
 */
?>
<?php
	if( have_rows('sidebar_widget') ):
?>
	<aside class="sidebar-section">
	<?php
		while ( have_rows('sidebar_widget') ) : the_row();
	?>

		<?php
			if( get_row_layout() == 'linked_list' ):
				if( have_rows('linked_list_item') ):
		?>
			<ul class="sidebar-nav">
				<?php while ( have_rows('linked_list_item') ) : the_row(); ?>
				<li>
					<a href = "<?php the_sub_field('link_url'); ?>"><?php the_sub_field('link_text'); ?></a>
				</li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>
		<?php elseif( get_row_layout() == 'product' ): ?>
		<div class="sidebar-content group">
			<?php
				$sideProduct = get_sub_field('selected_product');
				$productCode = '[product id="' . $sideProduct->ID . '"]';
				echo do_shortcode($productCode);
			?>
		</div>
		<?php elseif( get_row_layout() == 'basic' ): ?>
		<div class="sidebar-content group">
			<?php the_sub_field('wysiwyg'); ?>
		</div>
		<?php endif; ?>
	<?php endwhile; ?>
	</aside>
<?php endif; ?>