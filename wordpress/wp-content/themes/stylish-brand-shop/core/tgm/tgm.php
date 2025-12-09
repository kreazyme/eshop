<?php

require get_template_directory() . '/core/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function stylish_brand_shop_register_recommended_plugins() {
	$plugins = array(
		array(
		    'name'             => __( 'WooCommerce', 'stylish-brand-shop' ),
		    'slug'             => 'woocommerce',
		    'source'           => '',
		    'required'         => false,
		    'force_activation' => false,
		)
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'stylish_brand_shop_register_recommended_plugins' );