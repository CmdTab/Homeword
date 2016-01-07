<?php
/**
 * Single product short description
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post;

//if ( ! $post->post_excerpt ) return;
?>
<div itemprop="description">
	<?php if(get_field('english_option')) : ?>
		<div class="regular-tabs group">
			<ul class="nav nav-tabs regular-tab-nav">
				<li class="active"><a href = "#spanish" data-toggle="tab">Spanish</a></li>
				<li><a href = "#english" data-toggle="tab">English</a></li>
			</ul>
			<div class="tab-content regular-tab-content">
				<div class="tab-pane active" id="spanish">
					<?php echo apply_filters( 'woocommerce_short_description', $post->post_content ) ?>
				</div>
				<div class="tab-pane" id="english">
					<?php the_field('english_translation'); ?>
				</div>
			</div>
		</div>
	<?php else: ?>
	<?php echo apply_filters( 'woocommerce_short_description', $post->post_content ) ?>
	<?php endif; ?>
</div>