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
add_action('init','vswp_init');
function vswp_init(){
	add_shortcode('test','vswp_shortcode');
}
function vswp_shortcode($atts){
	$atts = shortcode_atts(array(
		'message' => 'Hello from ShortCode',
		), $atts, 'test'
	);
	return $atts['message'];
}

// function for change the style of title

add_filter('the_title','vswp_the_title');

function vswp_the_title($title){
	return "<strong>{$title}</strong>";
}