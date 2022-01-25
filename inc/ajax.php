<?php 
if(!defined('ABSPATH')) exit; // Exit if accessed directly.
add_action('wp_ajax_my_ajax_action','vswp_ajax_action'); // for backend
add_action('wp_ajax_my_front_ajax_action','my_front_ajax_action'); // for loged in user
add_action('wp_ajax_nopriv_my_front_ajax_action','my_front_ajax_action'); // for not loged in user

function vswp_ajax_action(){

	if (isset($_POST['action']) && isset($_POST['option1'])) {
		update_option('vswp_option_1', sanitize_text_field($_POST['option1']));
		echo "Field Successfully Update.";
	}else{
		echo "Error Updating Field";
	}
	wp_die();
}

function my_front_ajax_action(){

	if (isset($_POST['action']) && isset($_POST['value'])) {
		echo absint($_POST['value']) + 10;
	}else{
		echo "Error Updating Field";
	}
	wp_die();
}