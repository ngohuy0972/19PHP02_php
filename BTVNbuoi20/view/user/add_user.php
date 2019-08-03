<form action="index.php?action=add_user" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
	<p>Username
		<input type="text" name="username">
	</p>
	<p>Password
		<input type="password" name="password">
	</p>
	<p>Image
		<input type="file" name="avatar">
	</p>
	<input type="submit" name="add_user" value="Add User">
</form>