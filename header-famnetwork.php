<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Home Word
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon"
      type="image/png"
      href="<?php bloginfo('template_directory'); ?>/_i/favicon.png">
<?php wp_head(); ?>
<link href='https://fonts.googleapis.com/css?family=Raleway:300|Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,400italic' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
	<script src="<?php bloginfo('template_directory'); ?>/_js/html5shiv.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<svg style="position: absolute; width: 0; height: 0;" width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
	<defs>
		<symbol id="icon-redo2" viewBox="0 0 1024 1024">
			<title>redo2</title>
			<path class="path1" d="M576 248.372v-248.372l384 384-384 384v-253.824c-446.75-10.482-427.588 303.792-313.86 509.824-280.712-303.414-221.1-789.57 313.86-775.628z"></path>
		</symbol>
	</defs>
</svg>

<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header fam-header" role="banner">
		<div class="famnetwork-nav-container group">
			<a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>fam-network" rel="home">
				<img src ="<?php bloginfo('template_directory'); ?>/_i/fam-network-logo.png">
			</a>

			<a href = "#" id="toggle-nav">
				Menu
			</a>
			<nav id="famnetwork-nav">
				<?php wp_nav_menu( array( 'theme_location' => 'famnetwork', 'container' => false) ); ?>
				<?php global $woocommerce; ?>
				<a class="fam-cart" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>">
					<?php if($woocommerce->cart->cart_contents_count > 0): ?>
					<span class="cart-count">
						<?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?>
					</span>
					<?php endif; ?>
				</a>
			</nav>
		</div>
		<div class="fam-tagline">
			<h1>Don't do family ministry alone</h1>
			<h4>join our network today and receive training, support and resources</h4>
			<a href="#" class="clear-btn">Join Now</a>
			<a href="#" class="white-btn">Learn More</a>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
