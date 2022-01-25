<?php
/**

*Plugin Name: VSWP Dev Plugin
*Plugin Uri: https://vidsik.com.np
*Author: Rabi Kr Yadav
*Author Uri: https://rabikrishnayadav.com.np
*Description: With This plugin i am going to learn how to make wordpress plugin
* Tags: vswp, vidsik, vsplugin
*Version: 1.0.0
*Lisence: GPL V2

*/

if(!defined('ABSPATH')) exit; // Exit if accessed directly.

// function for add shortcode
include plugin_dir_path(__FILE__).'assets/inc/shortcodes.php';

// add custom css,js file for front end

add_action('wp_enqueue_scripts','vswp_enqueue_scripts');

function vswp_enqueue_scripts(){

	wp_enqueue_style('vswp_plugin_css', plugin_dir_url(__FILE__).'assets/css/style.css'); // for add css file

	wp_enqueue_script('vswp_plugin_js', plugin_dir_url(__FILE__).'assets/js/custom.js',array(),'1.0.0',true); // for add jss file
}


// add top-level Menu or Sub-Menu om Menu Bar

add_action('admin_menu','vswp_plugin_menu');

function vswp_plugin_menu(){

	add_menu_page('VSWP Option','VSWP Option','manage_options','vswp-options','vswp_options_func', $icon_url = '', $position = null);

	add_submenu_page('vswp-options','VSWP Layout','VSWP Layout','manage_options','vswp-settings','vswp_layout_func');

	add_submenu_page('vswp-options','VSWP Setting','VSWP Setting','manage_options','vswp-layout','vswp_settings_func');
}

function vswp_options_func(){

	echo "<h1 style='text-align:center'>VSWP Options Menu</h1>";
}
function vswp_layout_func(){

	echo "<h1 style='text-align:center'>VSWP Layout Menu</h1>";
}
function vswp_settings_func(){

	echo "<h1 style='text-align:center'>VSWP Settings Menu</h1>";
}