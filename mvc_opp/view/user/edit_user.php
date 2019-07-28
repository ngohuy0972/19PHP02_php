<link rel="stylesheet" href="webroot/css/style.css">

<h2>Edit user</h2>
<form action="index.php?action=edit_user&id=<?php echo $id?>" method="POST" enctype ="multipart/form-data">
	<p>Username
		<input type="text" name="username" value="<?php echo $oldUser['username']?>">
	</p>
	<p>Avatar
		<input type="file" name="avatar" value="">
		<img src="uploads/user/<?php echo $oldUser['avatar'];?>" alt="">
	</p>
	<input type="submit" name="edit_user" value="Edit_user">
</form>