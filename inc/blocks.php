<?php 

class vswpBlocks{

	public function __construct(){

		add_action('init', array($this, 'vswp_custom_block_01'));
	}

	public function vswp_custom_block_01(){

		wp_register_script('vswp-script-blocks', plugin_dir_url(__FILE__)."../assets/js/blocks.js", array('wp-blocks','wp-element'));

		$name = "vswp-plugin-dev/vswp-block01";
		$args = array('editor_script' => 'vswp-script-blocks');
		register_block_type($name, $args);
	}
} new vswpBlocks;