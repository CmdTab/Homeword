<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Home Word
 */
/*session_start();
$_SESSION['cat'] = $_GET['cat'];*/
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
<script type="text/javascript" src="//use.typekit.net/gco3kee.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/ie.css" />
	<script src="<?php bloginfo('template_directory'); ?>/_js/html5shiv.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="full-section mijireh-header">
			<div class="wrap group">
				<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src ="<?php bloginfo('template_directory'); ?>/_i/homeword-logo.png"></a>
			</div>
		</div>
	</header><!-- #masthead -->
	<div class="modal newsletter-modal">
		<h2>Subscribe to our Newsletters</h2>
		<p>Stay in touch with HomeWord to hear about upcoming events, special offers, and more!</p>
		<?php
			if(site_url() == 'http://local-homeword.com') {
				mc4wp_form(5574);
			} elseif (site_url() == 'http://stg.homeword.com') {
				mc4wp_form(7589);
			}
		 ?>
		<a href="#" class="close-overlay">Close</a>
	</div>
	<div class="modal-overlay"></div>
	<div id="content" class="site-content wrap">
