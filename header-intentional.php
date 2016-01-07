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
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="med-wrap group">
			
			<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src ="<?php bloginfo('template_directory'); ?>/_i/intentional-logo.png"></a>
			<a href = "#" id="toggle-nav">
				Menu
			</a>
			<nav id="intentional-nav">
				<?php wp_nav_menu( array( 'theme_location' => 'intentional', 'container' => false) ); ?>
				<?php global $woocommerce; ?>
				<a class="intent-cart" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>">
					<?php if($woocommerce->cart->cart_contents_count > 0): ?>
					<span class="cart-count">
						<?php echo sprintf(_n('%d item', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?>
					</span>
					<?php endif; ?>
				</a>
			</nav>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
