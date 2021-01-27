<?php
/**
 * Plugin Name:       Quotes Decorator
 * Description:       A simple plugin that helps you create beautiful quotes in the text of your posts and pages.
 * Version:           0.1
 * Author:            Mikhail Visloguzov
 * Author URI:        https://www.upwork.com/freelancers/~014323195168650e6a
 * License:           GNU
 */

// Constants for the installation of file paths
define( 'PLUGIN_DIR', plugin_dir_path( __FILE__) );
define( 'PLUGIN_URL', plugin_dir_url( __FILE__ ) );

add_action( 'init', 'qd_shortcodes_init' );

require_once( PLUGIN_DIR . 'includes/functions.php' );

