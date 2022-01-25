<?php 

add_action('init','vswp_news_post');

function vswp_news_post(){

	register_post_type('news', array(
		'label' => "Global News",
		'labels'=> array(
		'name'                     => _x( 'News', 'News post type general name' ),
		'singular_name'            => _x( 'News', 'News post type singular name' ),
		'add_new'                  => _x( 'Add New News', 'News Post' ),
		'add_new_item'             => __( 'Add New News' ),
		'edit_item'                => __( 'Edit News' ),
		'new_item'                 => __( 'New News' ),
		'view_item'                => __( 'View News' ),
		'view_items'               => __( 'View News' ),
		'search_items'             => __( 'Search News' ),
		'not_found'                => __( 'No News found.' ),
		'not_found_in_trash'       => __( 'No News found in Trash.' ),
		'parent_item_colon'        => null,
		'all_items'                => __( 'All News' ),
		'archives'                 => __( 'News Archives' ),
		'attributes'               => __( 'News Attributes' ),
		'insert_into_item'         => __( 'Insert into News' ),
		'uploaded_to_this_item'    => __( 'Uploaded to this News' ),
		'featured_image'           => _x( 'News Featured image', 'news' ),
		'set_featured_image'       => _x( 'Set News featured image', 'news' ),
		'remove_featured_image'    => _x( 'Remove News featured image', 'news' ),
		'use_featured_image'       => _x( 'Use as news featured image', 'news' ),
		'filter_items_list'        => __( 'Filter News list' ),
		'items_list_navigation'    => __( 'News list navigation' ),
		'items_list'               => __( 'News list' ),
		'item_published'           => __( 'News published.' ),
		'item_published_privately' => __( 'News published privately.' ),
		'item_reverted_to_draft'   => __( 'News reverted to draft.' ),
		'item_scheduled'           => __( 'News scheduled.' ),
		'item_updated'             => __( 'News updated.' ),
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