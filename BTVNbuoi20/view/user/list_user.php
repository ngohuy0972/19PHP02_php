<link rel="stylesheet" type="text/css" href="css/list_display.css">
<table>
	<thead>
		<tr>
			<th>List User</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>ID</td>
			<td>Username</td>
			<td>Avatar</td>
			<td>Actions</td>
		</tr>
<?php 
	while($user = $listUser->fetch_assoc()){
		$id = $user['id'];
 ?>
		<tr>
			<td><?php echo $user['id'] ?></td>
			<td><?php echo $user['username'] ?></td>
			<td><img src="uploads/<?php echo $user['image'] ?>"></td>
			<td><a href="index.php?action=edit_user&id=<?php echo $id; ?>">Edit</a>	|	<a href="index.php?action=delete_user&id=<?php echo $id; ?>">Delete</a></td>
		</tr>
	</tbody>
<?php 
	}
 ?>	
</table>	
<a href="index.php?action=add_user">Add User</a>	