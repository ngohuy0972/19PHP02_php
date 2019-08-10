
<h1>List User</h1>

<table>
	<tr>
		<td>ID</td>
		<td>Username</td>
		<td>Actions</td>
	</tr>
	<?php 
		while($user = $listUser->fetch_assoc()) {
			// var_dump($listUser);
			// exit();
			$id = $user['id'];
	}
	?>
	<tr>
		<td><?php echo $user['id'] ?></td>
		<td><?php echo $user['username'] ?></td>
		<td><a href="admin.php?controller=users&action=edit_user">Edit</a> |	<a href="admin.php?controller=users&action=delete_user">Delete</a></td>
	</tr>

</table>