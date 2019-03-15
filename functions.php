/*Place this code in functions.php file in your wordpress wp-content directory*/

function woocommerce_after_shop_loop_item_title_short_description() {
	global $product;
	if ( ! $product->get_short_description() ) return;
	?>
	<div itemprop="description">
		<?php echo apply_filters( 'woocommerce_short_description', $product->get_short_description() ) ?>
	</div>
	<?php
}
add_action('woocommerce_after_shop_loop_item_title', 'woocommerce_after_shop_loop_item_title_short_description', 5);
