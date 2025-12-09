<?php
/**
 * Stylish Brand Shop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Stylish Brand Shop
 */


if ( ! function_exists( 'stylish_brand_shop_support' ) ) :
	function stylish_brand_shop_support() {

		load_theme_textdomain( 'stylish-brand-shop', get_template_directory() . '/languages' );
		
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-background', apply_filters( 'stylish_brand_shop_custom_background', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
		
		add_theme_support( 'wp-block-styles' );

		add_editor_style( 'style.css' );

		define('STYLISH_BRAND_SHOP_BUY_NOW',__('https://www.themescarts.com/products/solar-wordpress-theme/','stylish-brand-shop'));
		define('STYLISH_BRAND_SHOP_FOOTER_BUY_NOW',__('https://www.themescarts.com/products/stylish-brand-shop/','stylish-brand-shop'));

	}
endif;
add_action( 'after_setup_theme', 'stylish_brand_shop_support' );

if ( ! function_exists( 'stylish_brand_shop_setup' ) ) :
	function stylish_brand_shop_setup() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 192,
				'width'       => 192,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
		add_theme_support( 'block-nav-menus' );
		add_theme_support( 'experimental-link-color' );
		register_nav_menus(
			array(
				'primary' => __( 'Primary Navigation', 'stylish-brand-shop' ),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'stylish_brand_shop_setup' );






/**
 * Enqueue scripts and styles.
 */
function stylish_brand_shop_scripts() {
	$min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	$theme_version = wp_get_theme()->get( 'Version' );

	$deps = array( 'dashicons' );
	global $wp_styles;
	if ( in_array( 'wc-blocks-vendors-style', $wp_styles->queue ) ) {
		$deps[] = 'wc-blocks-vendors-style';
	}

	// Enqueue for frontend
	wp_enqueue_script( 'stylish-brand-shop-theme-script', get_theme_file_uri( '/js/theme.js' ), array( 'jquery' ), true );

	wp_enqueue_style( 'stylish-brand-shop-style', get_stylesheet_uri(), $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );

	wp_enqueue_style( 'animatecss', get_template_directory_uri() . '/css/animate.css');
	wp_enqueue_style( 'owl.carousel-css', get_template_directory_uri() . '/css/owl.carousel.css', array(),'2.3.4');

	wp_enqueue_script( 'wow-script', get_template_directory_uri() . '/js/wow.js', array('jquery'));

	wp_enqueue_script( 'owl.carousel-js', get_template_directory_uri() . '/js/owl.carousel.js', 
		array('jquery'), '2.3.4', TRUE );

	wp_enqueue_script('stylish-brand-shop-main-script', get_template_directory_uri() . '/js/script.js', array('jquery'), STYLISH_BRAND_SHOP_VERSION, true);

		//font-awesome
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome/css/all.css', array(), '5.15.3' );

}

add_action( 'wp_enqueue_scripts', 'stylish_brand_shop_scripts' );

/**
 * Enqueue admin scripts and styles.
 */
function stylish_brand_shop_admin_scripts() {
	$min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	$theme_version = wp_get_theme()->get( 'Version' );

	$deps = array();

	$screen = get_current_screen();
	if ( is_admin() && $screen && !$screen->is_block_editor() ) {
		wp_enqueue_style( 'stylish-brand-shop-admin-style', get_stylesheet_directory_uri() . '/css/admin-style.css', $deps, date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );
	}

	wp_enqueue_style(
		'stylish-brand-shop-admin-css',
		get_template_directory_uri() . '/notice-getstart/theme-info.css',
		[],
		wp_get_theme()->get( 'Version' )
	);

	// Enqueue JS
	wp_enqueue_script(
		'stylish-brand-shop-admin-js',
		get_template_directory_uri() . '/notice-getstart/theme-info.js',
		[],
		wp_get_theme()->get( 'Version' ),
		true // Load in footer
	);

}
add_action( 'admin_enqueue_scripts', 'stylish_brand_shop_admin_scripts' );

function stylish_brand_shop_block_editor_styles() {
	wp_enqueue_style( 'stylish-brand-shop-block-editor-style', get_stylesheet_directory_uri() . '/css/admin-style.css', array(), date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ) );
}
add_action( 'enqueue_block_assets', 'stylish_brand_shop_block_editor_styles' );

/**
 * Load core file.
 */
require_once get_template_directory() . '/core/init.php';

/**
 * TGM
 */
require_once get_template_directory() . '/core/tgm/tgm.php';


/** 
 * Customizer
 */
require get_template_directory() . '/core/section-pro/customizer.php';


/**
 * Current theme path.
 * Current theme url.
 * Current theme version.
 * Current theme name.
 * Current theme option name.
 */
define( 'STYLISH_BRAND_SHOP_PATH', trailingslashit( get_template_directory() ) );
define( 'STYLISH_BRAND_SHOP_URL', trailingslashit( get_template_directory_uri() ) );
define( 'STYLISH_BRAND_SHOP_VERSION', '1.0.0' );
define( 'STYLISH_BRAND_SHOP_THEME_NAME', 'stylish-brand-shop' );
define( 'STYLISH_BRAND_SHOP_OPTION_NAME', 'stylish-brand-shop' );

/**
 * The core theme class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require STYLISH_BRAND_SHOP_PATH . 'notice-getstart/main.php';


/**
 * Begins execution of the theme.
 *
 * @since    1.0.0
 */
function stylish_brand_shop_run() {
	new Stylish_Brand_Shop();
}
stylish_brand_shop_run();





