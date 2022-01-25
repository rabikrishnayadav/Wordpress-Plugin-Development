<?php 

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



?>