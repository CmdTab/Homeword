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
	<header id="masthead" class="site-header" role="banner">
		<div class="med-wrap intent-wrap group">
			<a class="kta-banner" href="<?php echo esc_url( home_url( '/' ) ); ?>intentional" rel="home"><img src ="<?php bloginfo('template_directory'); ?>/_i/kta-banner-color.png"></a>

			<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>intentional" rel="home"><img src ="<?php bloginfo('template_directory'); ?>/_i/intentional-logo.png"></a>

			<a href = "#" id="toggle-nav">
				Menu
			</a>
			<nav id="intentional-nav">
				<?php wp_nav_menu( array( 'theme_location' => 'intentional', 'container' => false) ); ?>
				<?php global $woocommerce; ?>
				<a class="intent-cart" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>">
					<?php if($woocommerce->cart->cart_contents_count > 0): ?>
					<span class="cart-count">
						<?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?>
					</span>
					<?php endif; ?>
				</a>
			</nav>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
