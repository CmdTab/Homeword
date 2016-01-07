<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Home Word
 */
?>
	<aside class="sidebar-section store-sidebar">
		<?php get_product_search_form(); ?>
		<h3>Categories</h3>
		<ul>
		<?php
			wp_list_categories(array('taxonomy' => 'product_cat', 'title_li' => ''));
		?>
		</ul>
		<h3>Format</h3>
		<?php wp_nav_menu( array( 'theme_location' => 'format', 'menu_class' => 'cust-service', 'container' => false) ); ?>
		<h3>Author</h3>
		<ul>
		<?php wp_nav_menu( array( 'theme_location' => 'author', 'menu_class' => 'cust-service', 'container' => false) ); ?>
		</ul>
		<h3>Customer Service</h3>
		<?php wp_nav_menu( array( 'theme_location' => 'cust', 'menu_class' => 'cust-service', 'container' => false) ); ?>
		<div class="sidebar-content">

		</div>
	</aside>