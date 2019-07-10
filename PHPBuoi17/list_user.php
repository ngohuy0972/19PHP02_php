<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List User</title>
	<style type="text/css">
		body {
			font-size: 25px;
		}
	</style>
</head>
<body>

	<?php 
		require_once 'connect.php';
		$sql = "SELECT * FROM newstable";
		$listUser = mysqli_query($connect, $sql)
	 ?>
	 <table>
			<tr>
				<td>Title</td>
				<td>Description</td>
				<td>Image</td>
				<td>Created Time</td>
			</tr>
		<?php
			while ($user = $listUser -> fetch_assoc()) {
			$id = $user['id'];
		?>
		<tr>
			<td><?php echo $user['Title']?></td>
			<td><?php echo $user['Description']?></td>
			<td><?php echo $user['Image']?></td>
			<td><?php echo $user['Created']?></td>
			<td>
				<a href="edit_user.php?id=<?php echo $id?>">Edit</a> | <a href="delete_user.php?id=<?php echo $id?>">Delete</a>
			</td>
		</tr>
		<?php
		}
	?>
	</table>
	<a href="form_input.php">Add user</a>
</body>
</html>