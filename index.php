<?php
/**
 * WooCommerce Multistore Reset Screen
 *
 * @author  	M Yakub Mizan
 * @copyright	2020 M Yakub Mizan
 *
 * @wordpress-plugin
 * Plugin Name: WooCommerce Multistore Reset Screen
 * Description: The network admin screen can be a bit slow. If you have set the screen to show too many products at once, it may hang. This script help you reset. 
 * Author: M Yakub Mizan
 * Author URI: https://yakub.xyz/
 * Version: 1.0.0
 * Requires at least: 5.3.0
 * Tested up to: 5.4
 *
 * WC requires at least: 3.6.0
 * WC tested up to: 4.0.1
 *
 **/

class WOOMULTI_RESET_SCREEN {
	public function __construct() {
		add_action('admin_init', array($this, 'init'), 1, 0);
	}

	function init() {
		add_filter('get_user_option_per_page', 			array($this, 'set_per_page'), 10, 3);
		add_filter('get_user_option_orders_per_page',   array($this, 'set_per_page'), 10, 3);
		add_filter('get_user_option_products_per_page', array($this, 'set_per_page'), 10, 3);
		
		// $order_id_object = WP_SCREEN::get('toplevel_page_woonet-woocommerce-network');
		// // echo "<pre>";
		// var_dump( $order_id_object->set_option('per_page', 100) );
		// // print_r( $order_id_object );
		// die;
	}

	public function set_per_page($result, $option, $user) {
		return 10; 
	}
}


new WOOMULTI_RESET_SCREEN();