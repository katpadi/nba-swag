<?php
/**
 * NBA Swag
 *
 * Show your favorite team's schedule and record on your site.
 *
 * @package   Nba_Swag
 * @author    Kat Padi <hello@katpadi.ph>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2014 Kat Padilla
 *
 * @wordpress-plugin
 * Plugin Name:       NBA Swag
 * Plugin URI:        http://example.com
 * Description:       Show your favorite team's schedule and record on your site.
 * Version:           1.0.0
 * Author:            Kat Padilla
 * Author URI:        http://katpadi.ph
 * Text Domain:       nba-swag-locale
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/<owner>/<repo>
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

require_once( plugin_dir_path( __FILE__ ) . 'public/class-nba-swag.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 */
register_activation_hook( __FILE__, array( 'Nba_Swag', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Nba_Swag', 'deactivate' ) );

add_action( 'plugins_loaded', array( 'Nba_Swag', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
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

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-nba-swag-admin.php' );
	add_action( 'plugins_loaded', array( 'Nba_Swag_Admin', 'get_instance' ) );

}
