<link rel="stylesheet" href="webroot/css/style.css">
<h2>List user</h2>
<a href="index.php?action=add_user">Add user</a>
<table>
	<tr>
		<td>Id</td>
		<td>Username</td>
		<td>Avatar</td>
		<td>Action</td>
	</tr>
	<?php 
	var_dump($listUser);
	exit;
		while ($user = $listUser->fetch_assoc()) {
			# code...
			$id = $user['id'];
	 ?>
	 <tr>
	 	<td><?php echo $user['id']?></td>
	 	<td><?php echo $user['username']?></td>
	 	<td><img src="uploads/user/<?php echo $user['avatar'] ?>" alt=""></td>
	 	<td>
	 		<a href="index.php?action=edit_user&id=<?php echo $id;?>">Edit</a> | <a href="index.php?action=delete_user&id=<?php echo $id;?>">Delete</a>
	 	</td>
	 </tr>
	 <?php 
		}	
	  ?>
</table>

