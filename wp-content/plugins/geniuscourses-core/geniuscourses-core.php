<?php 
/*
Plugin Name: Geniuscourses Core
Plugin URI: https://geniuscourses.com/
Description: 
Version: 1.0.0
Author: Onyshchenko Tetiana
License: GPLv2 or later
Text Domain: geniuscourses-core
*/

if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

require plugin_dir_path( __FILE__ ) . '/inc/widget-about.php';
require plugin_dir_path( __FILE__ ) . '/inc/metaboxes.php';
require plugin_dir_path( __FILE__ ) . '/inc/acf.php';
require plugin_dir_path( __FILE__ ) . '/inc/custom_post_type.php';