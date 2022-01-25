<?php 
if(!defined('ABSPATH')) exit; // Exit if accessed directly.
add_action('admin_init', function(){

	add_meta_box( '_vswpmetabox', 'VSWP Custom Metabox', 'vswp_custom_metabox', ['post','page']);
});
function vswp_custom_metabox($post){

	$_mymetabox = get_post_meta($post->ID,'_mymetabox',true) ? get_post_meta($post->ID,'_mymetabox',true) : '';
	$_myselectbox = get_post_meta($post->ID,'_selectbox',true) ? get_post_meta($post->ID,'_selectbox',true) : '';

	?>
	
	<input type="text" id="" class="" name="_mymetabox" value="<?php echo $_mymetabox; ?>">
	<select name="_selectbox" id="">
		<option value="1" <?php echo $_myselectbox == 1 ? 'selected' : '' ?> >HTML</option>
		<option value="2" <?php echo $_myselectbox == 2 ? 'selected' : '' ?> >CSS</option>
		<option value="3" <?php echo $_myselectbox == 3 ? 'selected' : '' ?> >JavaScript</option>
		<option value="4" <?php echo $_myselectbox == 4 ? 'selected' : '' ?> >MySql</option>
		<option value="5" <?php echo $_myselectbox == 5 ? 'selected' : '' ?> >PHP</option>
	</select>
	
	<?php
}

add_action('save_post','vswp_save_post');

function vswp_save_post($post_id){

	if (array_key_exists('_mymetabox', $_POST) && array_key_exists('_selectbox',$_POST)) {
		update_post_meta($post_id,'_mymetabox',$_POST['_mymetabox']);
		update_post_meta($post_id,'_selectbox',$_POST['_selectbox']);
	}
}




















?>