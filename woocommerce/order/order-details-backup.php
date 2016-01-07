<?php
/**
 * Order details
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.3
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce;

$order = new WC_Order( $order_id );
?>
<h2><?php _e( 'Order Details', 'woocommerce' ); ?></h2>
<ul class="order-list thank-you">
	<li class="group order-header">
			<div class="order-label"><strong><?php _e( 'Product', 'woocommerce' ); ?></strong></div>
			<div class="order-amount"><strong><?php _e( 'Total', 'woocommerce' ); ?></strong></div>
	</li>

		<?php
		if (sizeof($order->get_items())>0) {

			foreach($order->get_items() as $item) {

				$_product = get_product( $item['variation_id'] ? $item['variation_id'] : $item['product_id'] );

				echo '
					<li class = "group ' . esc_attr( apply_filters( 'woocommerce_order_table_item_class', 'order_table_item', $item, $order ) ) . '">
						<div class="order-label">' .
							apply_filters( 'woocommerce_order_table_product_title', '<a href="' . get_permalink( $item['product_id'] ) . '">' . $item['name'] . '</a>', $item ) . ' ' .
							apply_filters( 'woocommerce_order_table_item_quantity', '<strong class="product-quantity">&times; ' . $item['qty'] . '</strong>', $item );

				$item_meta = new WC_Order_Item_Meta( $item['item_meta'] );
				$item_meta->display();

				if ( $_product && $_product->exists() && $_product->is_downloadable() && $order->is_download_permitted() ) {

					$download_file_urls = $order->get_downloadable_file_urls( $item['product_id'], $item['variation_id'], $item );

					$i     = 0;
					$links = array();

					foreach ( $download_file_urls as $file_url => $download_file_url ) {

						$filename = woocommerce_get_filename_from_url( $file_url );

						$links[] = '<small><a href="' . $download_file_url . '">' . sprintf( __( 'Download file%s', 'woocommerce' ), ( count( $download_file_urls ) > 1 ? ' ' . ( $i + 1 ) . ': ' : ': ' ) ) . $filename . '</a></small>';

						$i++;
					}

					echo implode( '<br/>', $links );
				}

				echo '</div><div class="order-amount">' . $order->get_formatted_line_subtotal( $item ) . '</div></li>';

				// Show any purchase notes
				if ($order->status=='completed' || $order->status=='processing') {
					if ($purchase_note = get_post_meta( $_product->id, '_purchase_note', true))
						echo '<li class="product-purchase-note">' . apply_filters('the_content', $purchase_note) . '</li>';
				}

			}
		}

		do_action( 'woocommerce_order_items_table', $order );
		?>
	<li class="group grand-total">
	<?php
		if ( $totals = $order->get_order_item_totals() ) foreach ( $totals as $total ) :
			?>
			<div class="order-label"><strong><?php echo $total['label']; ?></strong></div>
			<div class="order-amount"><strong><?php echo $total['value']; ?></strong></div>
			<?php
		endforeach;
	?>
	</li>
</ul>

<?php if ( get_option('woocommerce_allow_customers_to_reorder') == 'yes' && $order->status=='completed' ) : ?>
	<p class="order-again">
		<a href="<?php echo esc_url( $woocommerce->nonce_url( 'order_again', add_query_arg( 'order_again', $order->id, add_query_arg( 'order', $order->id, get_permalink( woocommerce_get_page_id( 'view_order' ) ) ) ) ) ); ?>" class="button"><?php _e( 'Order Again', 'woocommerce' ); ?></a>
	</p>
<?php endif; ?>

<?php do_action( 'woocommerce_order_details_after_order_table', $order ); ?>

<header>
	<h2><?php _e( 'Customer details', 'woocommerce' ); ?></h2>
</header>
<ul class="customer_details">
<?php
	if ($order->billing_email) echo '<li><strong>'.__( 'Email:', 'woocommerce' ).'</strong> '.$order->billing_email.'</li>';
	if ($order->billing_phone) echo '<li><strong>'.__( 'Telephone:', 'woocommerce' ).'</strong> '.$order->billing_phone.'</li>';
?>
</ul>

<?php if (get_option('woocommerce_ship_to_billing_address_only')=='no') : ?>

<div class="col2-set addresses group">

	<div class="half first">

<?php endif; ?>

		<header class="title">
			<h3><?php _e( 'Billing Address', 'woocommerce' ); ?></h3>
		</header>
		<address><p>
			<?php
				if (!$order->get_formatted_billing_address()) _e( 'N/A', 'woocommerce' ); else echo $order->get_formatted_billing_address();
			?>
		</p></address>

<?php if (get_option('woocommerce_ship_to_billing_address_only')=='no') : ?>

	</div><!-- /.col-1 -->

	<div class="half">

		<header class="title">
			<h3><?php _e( 'Shipping Address', 'woocommerce' ); ?></h3>
		</header>
		<address><p>
			<?php
				if (!$order->get_formatted_shipping_address()) _e( 'N/A', 'woocommerce' ); else echo $order->get_formatted_shipping_address();
			?>
		</p></address>

	</div><!-- /.col-2 -->

</div><!-- /.col2-set -->

<?php endif; ?>

<div class="clear"></div>
