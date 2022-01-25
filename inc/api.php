<?php 
if(!defined('ABSPATH')) exit; // Exit if accessed directly.

$post_info = wp_remote_retrieve_body(wp_remote_post('https://jsonplaceholder.typeicode.com/posts',[

		'body' => [

			'title' => 'This is Dummy Post Title',
			'body'  => 'This is a body for Dummy post',
			'userId'=> 10
		],
	])
);
	
$posts = wp_remote_retrieve_body(wp_remote_get('https://jsonplaceholder.typeicode.com/posts'));
$posts = json_decode($post_info);

?>

<table class="widefat fixed striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>userId</th>
			<th>Title</th>
			<th>Body</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($posts as $info_data): ?>
		<tr>
			<td><?php echo $info_data->id; ?></td>
			<td><?php echo $info_data->userId; ?></td>
			<td><?php echo $info_data->title; ?></td>
			<td><?php echo $info_data->body; ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
