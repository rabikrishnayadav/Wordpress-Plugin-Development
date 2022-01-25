<?php 
if(!defined('ABSPATH')) exit; // Exit if accessed directly.
$info = wp_remote_retrieve_body(wp_remote_get('https://api.github.com/users/imranrbx'));
$user = json_decode($info);
?>
<table class="widefat fixed striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Image</th>
			<th>Name</th>
			<th>Company</th>
			<th>Location</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo $user->id; ?></td>
			<td><img src="<?php echo $user->avatar_url; ?>" width="100%"></td>
			<td><?php echo $user->name; ?></td>
			<td><?php echo $user->company; ?></td>
			<td><?php echo $user->location; ?></td>
		</tr>
	</tbody>
</table>
