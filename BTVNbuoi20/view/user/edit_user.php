<h1>EDIT USER</h1>
<form action="index.php?action=edit_user&id=<?php echo $id ?>" method="POST" enctype="multipart/form-data" accept-charset="utf-8"> 
	<p>Username
		<input type="text" name="username" value="<?php echo $oldUser['username'] ?>">
	</p>
	<p>Image
		<input type="file" name="avatar" value="<?php echo $oldUser['avatar'] ?>">
	</p>
	<input type="submit" name="edit_user" value="Edit User">
</form>