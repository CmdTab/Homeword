<?php
/**
 * Cart totals
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-totals.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.6
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div class="half first">
	<div class="cart_totals <?php if ( WC()->customer->has_calculated_shipping() ) echo 'calculated_shipping'; ?>">

		<?php do_action( 'woocommerce_before_cart_totals' ); ?>

		<h2><?php _e( 'Cart Totals', 'woocommerce' ); ?></h2>

		<ul class="cart-total-details">
			<li class="group">
				<div class="totals-label"><strong><?php _e( 'Subtotal', 'woocommerce' ); ?></strong></div>
				<div class="totals-amount"><strong><?php wc_cart_totals_subtotal_html(); ?></strong></div>
			</li>


			<?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
				<li class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
					<div class="totals-label">
						<?php wc_cart_totals_coupon_label( $coupon ); ?>
					</div>
					<div class="totals-amount">
						<?php wc_cart_totals_coupon_html( $coupon ); ?>
					</div>
				</li>
			<?php endforeach; ?>

			<?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>

				<?php do_action( 'woocommerce_cart_totals_before_shipping' ); ?>

				<?php //wc_cart_totals_shipping_html(); ?>

				<?php do_action( 'woocommerce_cart_totals_after_shipping' ); ?>

			<?php elseif ( WC()->cart->needs_shipping() && 'yes' === get_option( 'woocommerce_enable_shipping_calc' ) ) : ?>

				<li class="shipping group">
					<div class="totals-label"><?php _e( 'Shipping', 'woocommerce' ); ?></div>
					<div class="totals-amount"><?php woocommerce_shipping_calculator(); ?></div>
				</li>

			<?php endif; ?>

			<?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
				<li class="fee group">
					<div class="totals-label">><?php echo esc_html( $fee->name ); ?></div>
					<div class="totals-amount">><?php wc_cart_totals_fee_html( $fee ); ?></div>
				</li>
			<?php endforeach; ?>

			<?php if ( wc_tax_enabled() && 'excl' === WC()->cart->tax_display_cart ) :
				$taxable_address = WC()->customer->get_taxable_address();
				$estimated_text  = WC()->customer->is_customer_outside_base() && ! WC()->customer->has_calculated_shipping()
						? sprintf( ' <small>(' . __( 'estimated for %s', 'woocommerce' ) . ')</small>', WC()->countries->estimated_for_prefix( $taxable_address[0] ) . WC()->countries->countries[ $taxable_address[0] ] )
						: '';

				if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) : ?>

					<?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : ?>
						<li class="group tax-rate tax-rate-<?php echo sanitize_title( $code ); ?>">
							<div class="totals-label"><?php echo esc_html( $tax->label ) . $estimated_text; ?></div>
							<div class="totals-amount"><?php echo wp_kses_post( $tax->formatted_amount ); ?></div>
						</li>
					<?php endforeach; ?>
				<?php else : ?>
					<li class="group tax-total">
						<div class="totals-label"><?php echo esc_html( WC()->countries->tax_or_vat() ) . $estimated_text; ?></div>
						<div class="totals-amount"><?php wc_cart_totals_taxes_total_html(); ?></div>
					</li>
				<?php endif; ?>
			<?php endif; ?>

			<?php do_action( 'woocommerce_cart_totals_before_order_total' ); ?>

			<li class="group grand-total">
				<div class="totals-label">
					<strong><?php _e( 'Order Total', 'woocommerce' ); ?></strong>
				</div>
				<div class="totals-amount">
					<strong><?php wc_cart_totals_order_total_html(); ?></strong>
				</div>
			</li>

			<?php do_action( 'woocommerce_cart_totals_after_order_total' ); ?>

		</ul><!--cart-total-details-->

		<?php if ( WC()->cart->get_cart_tax() ) : ?>
			<p class="shipping-note"><small><?php

				$estimated_text = WC()->customer->is_customer_outside_base() && ! WC()->customer->has_calculated_shipping()
					? sprintf( ' ' . __( ' (taxes estimated for %s)', 'woocommerce' ), WC()->countries->estimated_for_prefix() . __( WC()->countries->countries[ WC()->countries->get_base_country() ], 'woocommerce' ) )
					: '';

				printf( __( 'Note: Shipping and taxes are estimated%s and will be updated during checkout based on your billing and shipping information.', 'woocommerce' ), $estimated_text );

			?></small></p>
		<?php endif; ?>

		<!-- <div class="wc-proceed-to-checkout">
			<?php // do_action( 'woocommerce_proceed_to_checkout' ); ?>
		</div> -->

		<?php do_action( 'woocommerce_after_cart_totals' ); ?>

	</div>
</div>
<div class="half">
</div>
