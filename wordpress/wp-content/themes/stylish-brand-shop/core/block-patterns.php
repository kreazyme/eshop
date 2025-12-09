<?php
/**
 * Stylish Brand Shop: Block Patterns
 *
 * @since Stylish Brand Shop 1.0
 */

function stylish_brand_shop_register_block_patterns() {

	$patterns = array();

	$block_pattern_categories = array(
		'stylish-brand-shop' => array( 'label' => __( 'Stylish Brand Shop', 'stylish-brand-shop' ) )
	);
	$block_pattern_categories = apply_filters( 'stylish_brand_shop_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'stylish_brand_shop_register_block_patterns', 9 );