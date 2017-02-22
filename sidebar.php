<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Home Word
 */
?>
	<aside class="sidebar-section">
		<?php if ( get_post_type( get_the_ID() ) == 'jims-blog' ) {
				wp_nav_menu( array( 'theme_location' => 'jimsblog', 'menu_class' => 'sidebar-nav', 'container' => false) );
			} else { ?>
				<?php
					if (isset($_GET['cat'])) {
						if ($_GET['cat'] === 'families') {
							wp_nav_menu( array( 'theme_location' => 'families', 'menu_class' => 'sidebar-nav', 'container' => false) );
						} elseif ($_GET['cat'] === 'church') {
							wp_nav_menu( array( 'theme_location' => 'church', 'menu_class' => 'sidebar-nav', 'container' => false) );
						}
					} else {
						wp_nav_menu( array( 'theme_location' => 'about', 'menu_class' => 'sidebar-nav', 'container' => false) );
					}
				?>
		<?php } ?>
		<!--<ul class="sidebar-nav">
			<li class="current-menu-item">
				<a href = "#">Families Overview</a>
			</li>
			<li>
				<a href = "#">Articles & Media</a>
			</li>
			<li>
				<a href = "#">Culture Blog</a>
			</li>
			<li>
				<a href = "#">Devotionals</a>
			</li>
			<li>
				<a href = "#">Upcoming Events</a>
			</li>
		</ul>-->
		<div class="sidebar-content group">
			<?php if ( get_post_type( get_the_ID() ) == 'jims-blog' ) { ?>
				<?php dynamic_sidebar('Jims Widgets'); ?>
			<?php } else { ?>
				<?php
					if (isset($_GET['cat'])) {
						if ($_GET['cat'] === 'families') {
							dynamic_sidebar('Family Widgets');
						} elseif ($_GET['cat'] === 'church') {
							dynamic_sidebar('Church Widgets');
						}
					} else {
						dynamic_sidebar('About Widgets');
					}
				?>
			<?php } ?>
		</div>



	</aside>
