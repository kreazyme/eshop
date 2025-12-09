<?php
/**
 * @package Stylish Brand Shop
 */

function stylish_brand_shop_customizer_add_defaults( $default_options) {
	$defaults = array(
		'stylish_brand_shop_excerpt_length'    => 30,
	);
	$updated_defaults = wp_parse_args( $defaults, $default_options );

	return $updated_defaults;
}
add_filter( 'stylish_brand_shop_customizer_defaults', 'stylish_brand_shop_customizer_add_defaults' );

function stylish_brand_shop_gtm( $option ) {
	$defaults = apply_filters( 'stylish_brand_shop_customizer_defaults', true );

	return isset( $defaults[ $option ] ) ? get_theme_mod( $option, $defaults[ $option ] ) : get_theme_mod( $option );
}

if ( ! function_exists( 'stylish_brand_shop_excerpt_length' ) ) :
	function stylish_brand_shop_excerpt_length( $length ) {
		if ( is_admin() ) {
			return $length;
		}

		$length	= stylish_brand_shop_gtm( 'stylish_brand_shop_excerpt_length' );

		return absint( $length );
	} 
endif;
add_filter( 'excerpt_length', 'stylish_brand_shop_excerpt_length', 999 );