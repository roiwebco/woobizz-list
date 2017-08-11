<?php
/**
 * Plugin Name: Woobizz List
 * Plugin URI: https://woobizz.com
 * Description: Woocommerce Storefront List Customiser
 * Author: Woobizz
 * Author URI: https://woobizz.com
 * Version: 1.0.0
 * Text Domain: woobizz-list
 * Domain Path: /languages/
 */
 /** The prefix Name*/
define('WOOBIZZLIST', 'woobizzlist');

/** Include the Whitelabel plugin */
include('admin/list-admin-page.php' );
	
/** Include the $options array */
include( 'admin/list-options.php' );

/** Include all sections php files */
foreach ( glob( plugin_dir_path( __FILE__ ) . "/admin/sections/*.php" ) as $file ) {
    include_once $file;
}
/** Create the Options Page */
$options_page = new WoobizzListOptions( 'WooBizz List', 'woobizz-list', WOOBIZZLIST, 'admin.php', null, 'read', null, true, false, true, $options );
function woobizz_list_submenu(){
	//add_submenu_page($parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function);
	add_submenu_page( 'woobizz', '', 'Woobizz List','manage_options', 'woobizz-list');
}
add_action( 'admin_menu', 'woobizz_list_submenu',40);