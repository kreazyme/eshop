<?php // phpcs:ignore Class file names should be based on the class name with "class-" prepended.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme Menu Page.
 *
 * @link       https://www.acmeit.org/
 * @since      1.0.0
 *
 * @package    Stylish_Brand_Shop
 * @subpackage Stylish_Brand_Shop/Stylish_Brand_Shop_Info
 */

/**
 * Class used to add theme menu page and content on it.
 *
 * @package    Stylish_Brand_Shop
 * @subpackage Stylish_Brand_Shop/Stylish_Brand_Shop_Info
 * @author     Abu Turab <Abu Turab@gmail.com>
 */
class Stylish_Brand_Shop_Info {

	/**
	 * Current added Menu hook_suffix
	 *
	 * @since    1.0.0
	 * @access   public
	 * @var      string    $hook_suffix    Store current added Menu hook_suffix.
	 */
	private $hook_suffix;

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
	 *
	 * @access public
	 * @return void
	 */
	public function run() {
		add_action( 'admin_menu', array( $this, 'add_theme_menu' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_resources' ) );
	}

	/**
	 * Add Theme Page Menu page.
	 *
	 * @access public
	 *
	 * @since    1.0.0
	 */
	public function add_theme_menu() {
		$this->hook_suffix[] = add_theme_page( esc_html__( 'Stylish Brand Shop Info', 'stylish-brand-shop' ), esc_html__( 'Stylish Brand Shop Info', 'stylish-brand-shop' ), 'edit_theme_options', STYLISH_BRAND_SHOP_THEME_NAME, array( $this, 'info_screen' ) );
	}

	/**
	 * Register the CSS/JavaScript Resources for the admin menu.
	 *
	 * @access public
	 * Use Condition to Load it Only When it is Necessary
	 *
	 * @param string $hook_suffix   The current admin page.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_resources( $hook_suffix ) {
		if ( ! is_array( $this->hook_suffix ) || ! in_array( $hook_suffix, $this->hook_suffix, true ) ) {
			return;
		}

		$unique_id = STYLISH_BRAND_SHOP_THEME_NAME . '-info';

		$version    = STYLISH_BRAND_SHOP_VERSION;

		/* Localize */
		$localize = apply_filters(
			'stylish_brand_shop_info_localize',
			array(
				'version'  => $version,
				'nonce'    => wp_create_nonce( 'wp_rest' ),
				'rest_url' => get_rest_url(),
			)
		);

		wp_set_script_translations( $unique_id, STYLISH_BRAND_SHOP_THEME_NAME );
		wp_localize_script( $unique_id, 'TrendyFashionOutfitsLocalize', $localize );
	}

	/**
	 * Add menu page.
	 *
	 * @see templates/theme-info.php
	 *
	 * @access public
	 *
	 * @since    1.0.0
	 */
	public function info_screen() {
		require_once 'page-theme-info.php';
	}
}

/**
 * Return instance of Stylish_Brand_Shop_Info class
 *
 * @since 1.0.0
 *
 * @return Stylish_Brand_Shop_Info
 */
function stylish_brand_shop_info() { //phpcs:ignore
	return Stylish_Brand_Shop_Info::instance();
}
stylish_brand_shop_info()->run();