<?php
/**
* Plugin Name: Woobizz List 
* Plugin URI: https://woobizz.com
* Description: Woocommerce List Customiser
* Author: Woobizz
* Author URI: https://woobizz.com
* Version: 1.0.2
* Text Domain: woobizz-list
* Domain Path: /lang/
*/
//Prevent direct acces
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
//Load translation
add_action( 'plugins_loaded', 'woobizz_list_load_textdomain' );
function woobizz_list_load_textdomain() {
  load_plugin_textdomain( 'woobizz-list', false, basename( dirname( __FILE__ ) ) . '/lang' ); 
}
//Check if WooCommerce is active
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	//echo "woocommerce is active";
    // Add the prefix Name
	define('WOOBIZZLIST', 'woobizzlist');
	// Include the Whitelabel plugin
	include('admin/list-admin-page.php' );
	// Include the $options array 
	include( 'admin/list-options.php' );
	// Include all sections php files
	foreach ( glob( plugin_dir_path( __FILE__ ) . "/admin/sections/*.php" ) as $file ) {
		include_once $file;
	}
	// Add options and menus
	$options_page = new WoobizzListOptions( 'WooBizz List', 'woobizz-list', WOOBIZZLIST, 'woobizz', null, 'read', null, true, false, true, $options );
}else{
	//Show message on admin
	//echo "woocommerce is not active";
	add_action( 'admin_notices', 'woobizz_list_admin_notice' );
	
}
//Woobizz List Notice
function woobizz_list_admin_notice() {
    ?>
    <div class="notice notice-error is-dismissible">
        <p><?php _e( 'Woobizz list needs woocommerce to work properly, please install and activate woocommerce or disable this plugin.', 'woobizz-list' ); ?></p>
    </div>
    <?php
}
