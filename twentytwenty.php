<?php
/**
 * TwentyTwenty
 *
 * Allows you to show before-and-after images in your blog, with an interactive slider. Uses TwentyTwenty by Zurb.
 *
 * @package   TwentyTwenty
 * @author    Corey Martin <coreym@gmail.com>
 * @license   GPL-2.0+
 * @link      http://wordpress.org/plugins
 * @copyright 2013 Corey Martin
 *
 * @wordpress-plugin
 * Plugin Name:       TwentyTwenty
 * Plugin URI:        http://wordpress.org/plugins
 * Description:       Allows you to show before-and-after images in your blog, with an interactive slider. Uses TwentyTwenty by Zurb.
 * Version:           1.0
 * Author:            Corey Martin
 * Author URI:        
 * Text Domain:       twentytwenty
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: 
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

require_once( plugin_dir_path( __FILE__ ) . 'public/class-twentytwenty.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 */
register_activation_hook( __FILE__, array( 'TwentyTwenty', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'TwentyTwenty', 'deactivate' ) );

add_action( 'plugins_loaded', array( 'TwentyTwenty', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
 * TODO:
 *
 * - replace `class-plugin-admin.php` with the name of the plugin's admin file
 * - replace Plugin_Name_Admin with the name of the class defined in
 *   `class-plugin-name-admin.php`
 *
 * If you want to include Ajax within the dashboard, change the following
 * conditional to:
 *
 * if ( is_admin() ) {
 *   ...
 * }
 *
 * The code below is intended to to give the lightest footprint possible.
 */
if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-twentytwenty-admin.php' );
	add_action( 'plugins_loaded', array( 'TwentyTwenty_Admin', 'get_instance' ) );

}
