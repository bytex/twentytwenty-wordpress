<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @package   TwentyTwenty
 * @author    Corey Martin <coreym@gmail.com>
 * @license   GPL-2.0+
 * @link      http://wordpress.org/plugins
 * @copyright 2013 Corey Martin
 */

// If uninstall not called from WordPress, then exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// TODO: Define uninstall functionality here