<?php
/**
 * Order details
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$order = wc_get_order( $order_id );
?>
<h2><?php _e( 'Order Details', 'woocommerce' ); ?></h2>
<ul class="order-list thank-you">
	<li class="group order-header">
		<div class="order-label product-name"><?php _e( 'Product', 'woocommerce' ); ?></div>
		<div class="order-amount product-total"><?php _e( 'Total', 'woocommerce' ); ?></div>
	</li>
	<?php
	if ( sizeof( $order->get_items() ) > 0 ) {

		foreach( $order->get_items() as $item ) {
			$_product     = apply_filters( 'woocommerce_order_item_product', $order->get_product_from_item( $item ), $item );
			$item_meta    = new WC_Order_Item_Meta( $item['item_meta'], $_product );

			?>
			<li class="group <?php echo esc_attr( apply_filters( 'woocommerce_order_item_class', 'order_item', $item, $order ) ); ?>">
				<div class="order-label product-name">
					<?php
						if ( $_product && ! $_product->is_visible() )
							echo apply_filters( 'woocommerce_order_item_name', $item['name'], $item );
						else
							echo apply_filters( 'woocommerce_order_item_name', sprintf( '<a href="%s">%s</a>', get_permalink( $item['product_id'] ), $item['name'] ), $item );

						echo apply_filters( 'woocommerce_order_item_quantity_html', ' <strong class="product-quantity">' . sprintf( '&times; %s', $item['qty'] ) . '</strong>', $item );

						$item_meta->display();

						if ( $_product && $_product->exists() && $_product->is_downloadable() && $order->is_download_permitted() ) {

							$download_files = $order->get_item_downloads( $item );
							$i              = 0;
							$links          = array();

							foreach ( $download_files as $download_id => $file ) {
								$i++;

								$links[] = '<small><a href="' . esc_url( $file['download_url'] ) . '">' . sprintf( __( 'Download file%s', 'woocommerce' ), ( count( $download_files ) > 1 ? ' ' . $i . ': ' : ': ' ) ) . esc_html( $file['name'] ) . '</a></small>';
							}

							echo '<br/>' . implode( '<br/>', $links );
						}
					?>
				</div>
				<div class="order-amount product-total">
					<?php echo $order->get_formatted_line_subtotal( $item ); ?>
				</div>
			</li>
			<?php

				if ( $order->has_status( array( 'completed', 'processing' ) ) && ( $purchase_note = get_post_meta( $_product->id, '_purchase_note', true ) ) ) {
					?>
				<li class="group product-purchase-note">
					<div><?php echo wpautop( do_shortcode( wp_kses_post( $purchase_note ) ) ); ?></div>
				</li>
				<?php
			}
		}
	}

	do_action( 'woocommerce_order_items_table', $order );
	?>
	<?php
		if ( $totals = $order->get_order_item_totals() ) foreach ( $totals as $total ) :
			?>
			<li class="group grand-total divider">
				<div class="order-label"><strong><?php echo $total['label']; ?></strong></div>
				<div class="order-amount"><strong><?php echo $total['value']; ?></strong></div>
			</li>
			<?php
		endforeach;
	?>
</ul>

<?php do_action( 'woocommerce_order_details_after_order_table', $order ); ?>

<header>
	<h2><?php _e( 'Customer details', 'woocommerce' ); ?></h2>
</header>
<ul class="customer_details">
<?php
	if ( $order->billing_email ) echo '<li><strong>' . __( 'Email:', 'woocommerce' ) . '</strong> ' . $order->billing_email . '</li>';
	if ( $order->billing_phone ) echo '<li><strong>' . __( 'Telephone:', 'woocommerce' ) . '</strong> ' . $order->billing_phone . '</li>';

	// Additional customer details hook
	do_action( 'woocommerce_order_details_after_customer_details', $order );
?>
</ul>

<?php if ( ! wc_ship_to_billing_address_only() && $order->needs_shipping_address() && get_option( 'woocommerce_calc_shipping' ) !== 'no' ) : ?>

<div class="col2-set addresses group">

	<div class="half first">

<?php endif; ?>

		<header class="title">
			<h3><?php _e( 'Billing Address', 'woocommerce' ); ?></h3>
		</header>
		<address><p>
			<?php
				if ( ! $order->get_formatted_billing_address() ) _e( 'N/A', 'woocommerce' ); else echo $order->get_formatted_billing_address();
			?>
		</p></address>

<?php if ( ! wc_ship_to_billing_address_only() && $order->needs_shipping_address() && get_option( 'woocommerce_calc_shipping' ) !== 'no' ) : ?>

	</div><!-- /.col-1 -->

	<div class="half">

		<header class="title">
			<h3><?php _e( 'Shipping Address', 'woocommerce' ); ?></h3>
		</header>
		<address><p>
			<?php
				if ( ! $order->get_formatted_shipping_address() ) _e( 'N/A', 'woocommerce' ); else echo $order->get_formatted_shipping_address();
			?>
		</p></address>

	</div><!-- /.col-2 -->

</div><!-- /.col2-set -->

<?php endif; ?>

