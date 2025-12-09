<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Stylish_Brand_Shop_Notice {

	/**
	 * Empty Constructor
	 */
	private function __construct() {}

	/**
	 * Gets an instance of this object.
	 * Prevents duplicate instances which avoid artefacts and improves performance.
	 *
	 * @static
	 * @access public
	 * @since 1.0.0
	 * @return object
	 */
	public static function instance() {
		// Store the instance locally to avoid private static replication.
		static $instance = null;

		// Only run these methods if they haven't been ran previously.
		if ( null === $instance ) {
			$instance = new self();
		}

		// Always return the instance.
		return $instance;
	}

	/**
	 * Initialize the class.
	 * Add notice, add theme installation time and remove theme options data from databse if theme is switched to another.
	 *
	 * @access public
	 * @return void
	 */
	public function run() {

		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_resources' ) );

	}

	/**
	 * Register the CSS/JavaScript Resources for the admin area.
	 *
	 * @access public
	 *
	 * @since    1.0.0
	 */
	public function enqueue_resources() {

		$unique_id = STYLISH_BRAND_SHOP_THEME_NAME . '-notice';

		$version    = STYLISH_BRAND_SHOP_VERSION;

		/* Localize */
		$localize = apply_filters(
			'stylish_brand_shop_notice_localize',
			array(
				'version'             => $version,
				'nonce'               => wp_create_nonce( 'wp_rest' ),
				'rest_url'            => get_rest_url(),
				'theme_info_url'      => esc_url( menu_page_url( STYLISH_BRAND_SHOP_THEME_NAME, false ) ),
			)
		);

		wp_set_script_translations( $unique_id, STYLISH_BRAND_SHOP_THEME_NAME );
		wp_localize_script( $unique_id, 'TrendyFashionOutfitsLocalize', $localize );
	}

}

/**
 * Return instance of  Stylish_Brand_Shop_Notice class
 *
 * @since 1.0.0
 *
 * @return Stylish_Brand_Shop_Notice
 */
function stylish_brand_shop_notice() { //phpcs:ignore
	return Stylish_Brand_Shop_Notice::instance();
}
stylish_brand_shop_notice()->run();