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
<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
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
		<symbol id="icon-plus" viewBox="0 0 32 32">
			<title>plus</title>
			<path class="path1" d="M15.968 27.861c-6.56 0-11.893-5.333-11.893-11.893s5.333-11.893 11.893-11.893 11.893 5.333 11.893 11.893c0 6.56-5.333 11.893-11.893 11.893zM15.968 0.683c-8.427 0-15.285 6.859-15.285 15.285s6.859 15.296 15.296 15.296 15.296-6.859 15.296-15.296c-0.011-8.427-6.88-15.285-15.307-15.285z"></path>
			<path class="path2" d="M17.664 7.477h-3.392v6.795h-6.795v3.392h6.795v6.795h3.392v-6.795h6.805v-3.392h-6.805z"></path>
		</symbol>
		<symbol id="icon-minus" viewBox="0 0 32 32">
			<title>minus</title>
			<path class="path1" d="M15.979 27.861c-6.496 0-11.787-5.291-11.787-11.787s5.291-11.787 11.787-11.787 11.787 5.291 11.787 11.787-5.291 11.787-11.787 11.787zM15.979 0.917c-8.352 0-15.157 6.805-15.157 15.157s6.805 15.157 15.157 15.157 15.147-6.805 15.147-15.157-6.795-15.157-15.147-15.157z"></path>
			<path class="path2" d="M14.293 14.389h-6.731v3.371h16.832v-3.371h-6.731z"></path>
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
