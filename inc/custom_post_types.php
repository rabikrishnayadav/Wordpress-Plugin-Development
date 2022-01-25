<?php 

add_action('init','vswp_news_post');

function vswp_news_post(){

	register_post_type('news', array(
		'label' => "Global News",
		'labels'=> array(
			'add_new' => 'Add New Global News',
			),
		'public'=> true,
		'description' => 'This is a Custom Post Type for News',
		'supports'=> ['title','editor','comments','custom-fields','thumbnail'],
	));
}
add_filter('template_include','vswp_news_template');
function vswp_news_template($template){
	
	global $post;

	if (is_single() AND $post->post_type == 'news') {
		
		$template = plugin_dir_path(__FILE__).'../templates/vswp_news.php';
	}
	return $template;
}
?>