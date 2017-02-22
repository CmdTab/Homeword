<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.9
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="product-price">

	<?php
	if ( $product->product_type !== 'grouped' ) :
		$currentPrice = $product->get_price();
		$sale = get_post_meta( get_the_ID(), '_sale_price', true);
		if ($sale === $currentPrice) :
			echo '<div class="sale price">$' . $currentPrice . "</div>";
		else :
			echo '<div class="price">$' . $currentPrice . "</div>";
		endif;
		if ($sale === $currentPrice) :
	?>
		<span class="list-price">List Price: <?php echo $product->get_price_html(); ?></span>
	<?php endif; endif;?>

	<!-- <p class="price"><?php // echo $product->get_price_html(); ?></p> -->

	<meta itemprop="price" content="<?php echo esc_attr( $product->get_display_price() ); ?>" />
	<meta itemprop="priceCurrency" content="<?php echo esc_attr( get_woocommerce_currency() ); ?>" />
	<link itemprop="availability" href="http://schema.org/<?php echo $product->is_in_stock() ? 'InStock' : 'OutOfStock'; ?>" />

</div>
