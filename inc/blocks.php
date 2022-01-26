<?php 

class vswpBlocks{

	public function __construct(){

		add_action('init', array($this, 'vswp_custom_block_01'));
	}

	public function vswp_custom_block_01(){

		wp_register_script('vswp-script-blocks', plugin_dir_url(__FILE__)."../assets/js/blocks.js", array('wp-blocks','wp-element'));

		wp_register_style('vswp-admin-style', plugin_dir_url(__FILE__)."../assets/css/editor.css");

		wp_register_style('vswp-front-style', plugin_dir_url(__FILE__)."../assets/css/blocks.css");

		$name = "vswp-plugin-dev/vswp-block01";
		$args = array(
			'style' => 'vswp-front-style',
			'editor_style' => 'vswp-admin-style',
			'editor_script' => 'vswp-script-blocks'
		);
		register_block_type($name, $args);
	}
} new vswpBlocks;