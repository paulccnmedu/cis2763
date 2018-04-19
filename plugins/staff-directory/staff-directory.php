<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              paulc2763.sb.cis
 * @since             1.0.0
 * @package           2763_Staff_Directory
 *
 * @wordpress-plugin
 * Plugin Name:       2763 Staff Directory
 * Plugin URI:        example.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Paul Clark
 * Author URI:        paulc2763.sb.cis
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       2763-staff-directory
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-staff-directory-activator.php
 */
function activate_staff_directory() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-staff-directory-activator.php';
	Staff_Directory_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-staff-directory-deactivator.php
 */
function deactivate_staff_directory() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-staff-directory-deactivator.php';
	Staff_Directory_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_staff_directory' );
register_deactivation_hook( __FILE__, 'deactivate_staff_directory' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-staff-directory.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_staff_directory() {

	$plugin = new Staff_Directory();
	$plugin->run();

}
run_staff_directory();
/*
//following test works 
//https://codex.wordpress.org/AJAX_in_Plugins
//// ajax test /////
*/
add_action('wp_ajax_staff_directory_ajax_sort','ajax_test');
function ajax_test() {
	die('ajax_test');
}

/*
add_action( 'admin_footer', 'my_action_javascript' ); // Write our JS below here

function my_action_javascript() { ?>
	<script type="text/javascript" >
	jQuery(document).ready(function($) {

		var data = {
			'action': 'my_action',
			'whatever': 1234
		};

		// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
		jQuery.post(ajaxurl, data, function(response) {
			alert('Got this from the server: ' + response);
		});
	});
	</script> <?php
}
*/