<?php
/**
 * Cart Page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce;

wc_print_notices();

do_action( 'woocommerce_before_cart' ); ?>

<form action="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>" method="post">

<?php do_action( 'woocommerce_before_cart_table' ); ?>

<ul class="shop_table cart">
	<li class="group cart-header">
		<div class="cart-name"><?php _e( 'Product', 'woocommerce' ); ?></div>
		<div class="cart-price"><?php _e( 'Price', 'woocommerce' ); ?></div>
		<div class="cart-quantity group"><?php _e( 'Quantity', 'woocommerce' ); ?></div>
		<div class="cart-subtotal"><?php _e( 'Total', 'woocommerce' ); ?></div>
		<?php do_action( 'woocommerce_before_cart_contents' ); ?>
	</li>
		<?php
		foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
			$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
			$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

			if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
				?>
					<li class = "group <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

						<!-- Product Name -->
						<div class="cart-name">
							<!-- The thumbnail -->
							<?php
								$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

								if ( ! $_product->is_visible() )
									echo $thumbnail;
								else
									printf( '<a href="%s" class="cart-thumb">%s</a>', $_product->get_permalink(), $thumbnail );
							?>
							<?php
								if ( ! $_product->is_visible() )
									echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key );
								else
									echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s" class="cart-title">%s</a>', $_product->get_permalink(), $_product->get_title() ), $cart_item, $cart_item_key );

								// Meta data
								echo WC()->cart->get_item_data( $cart_item );

	               				// Backorder notification
	               				if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) )
	               					echo '<p class="backorder_notification">' . __( 'Available on backorder', 'woocommerce' ) . '</p>';
							?>
							<!-- Remove from cart link -->
							<?php
							echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf( '<a href="%s" class="remove" title="%s">&times; Remove</a>', esc_url( WC()->cart->get_remove_url( $cart_item_key ) ), __( 'Remove this item', 'woocommerce' ) ), $cart_item_key );
						?>
						</div>

						<!-- Product price -->
						<div class="cart-price">
							<?php
								echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
							?>
						</div>

						<!-- Quantity inputs -->
						<div class="cart-quantity">
							<?php
								/* Original Product Quantity
								if ( $_product->is_sold_individually() ) {
									$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
								} else {

									$step	= apply_filters( 'woocommerce_quantity_input_step', '1', $_product );
									$min 	= apply_filters( 'woocommerce_quantity_input_min', '', $_product );
									$max 	= apply_filters( 'woocommerce_quantity_input_max', $_product->backorders_allowed() ? '' : $_product->get_stock_quantity(), $_product );

									$product_quantity = sprintf( '<div class="quantity group"><input type="text" name="cart[%s][qty]" step="%s" min="%s" max="%s" value="%s" size="4" title="' . _x( 'Qty', 'Product quantity input tooltip', 'woocommerce' ) . '" class="input-text qty text" maxlength="12" /></div>', $cart_item_key, $step, $min, $max, esc_attr( $values['quantity'] ) );
								}

								echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key );
								*/
								if ( $_product->is_sold_individually() ) {
									$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
								} else {
									$product_quantity = woocommerce_quantity_input( array(
										'input_name'  => "cart[{$cart_item_key}][qty]",
										'input_value' => $cart_item['quantity'],
										'max_value'   => $_product->backorders_allowed() ? '' : $_product->get_stock_quantity(),
									), $_product, false );
								}

								echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key );
							?>
						</div>

						<!-- Product subtotal -->
						<div class="cart-subtotal">
							<?php
								echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );
							?>
						</div>

					</li>
					<?php
			}
		}

		do_action( 'woocommerce_cart_contents' );
		?>

			<li class="group cart-actions">

				<?php if ( WC()->cart->coupons_enabled() ) { ?>
					<div class="cart-coupon">

						<label for="coupon_code" class="assistive-text"><?php _e( 'Coupon', 'woocommerce' ); ?>:</label> <input name="coupon_code" class="input-text" id="coupon_code" value="" type="text"/> <input type="submit" class="button cart-apply" name="apply_coupon" value="<?php _e( 'Apply Coupon', 'woocommerce' ); ?>" />

						<?php do_action('woocommerce_cart_coupon'); ?>

					</div>
				<?php } ?>

				<div class="cart-buttons">
					<input type="submit" class="button cart-update" name="update_cart" value="<?php _e( 'Update Cart', 'woocommerce' ); ?>" /> <input type="submit" class="checkout-button button alt" name="proceed" value="<?php _e( 'Checkout &rarr;', 'woocommerce' ); ?>" />

					<?php do_action('woocommerce_proceed_to_checkout'); ?>

					<?php wp_nonce_field( 'woocommerce-cart' ); ?>
				</div>
			</li>

		<?php do_action( 'woocommerce_after_cart_contents' ); ?>
	</ul>

<?php do_action( 'woocommerce_after_cart_table' ); ?>

</form>

<div class="cart-collaterals group">

	<?php do_action( 'woocommerce_cart_collaterals' ); ?>
	<div class="half first">
		<?php woocommerce_cart_totals(); ?>
	</div>
	<div class="half">
		<?php woocommerce_shipping_calculator(); ?>
	</div>

</div>

<?php do_action( 'woocommerce_after_cart' ); ?>