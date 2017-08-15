<?php
/**
* Plugin Name: Woobizz List 
* Plugin URI: https://woobizz.com
* Description: Woocommerce List Customiser
* Author: Woobizz
* Author URI: https://woobizz.com
* Version: 1.0.1
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
// The prefix Name
define('WOOBIZZLIST', 'woobizzlist');
// Include the Whitelabel plugin
include('admin/list-admin-page.php' );
// Include the $options array 
include( 'admin/list-options.php' );
// Include all sections php files
foreach ( glob( plugin_dir_path( __FILE__ ) . "/admin/sections/*.php" ) as $file ) {
    include_once $file;
}
// ADD OPTIONS AND SUBMENU
$options_page = new WoobizzListOptions( 'WooBizz List', 'woobizz-list', WOOBIZZLIST, 'woobizz', null, 'read', null, true, false, true, $options );