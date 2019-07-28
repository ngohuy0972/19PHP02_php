<h2>Add Users</h2>
<form action="index.php?action=add_user" method="POST" enctype="multipart/form-data">
	<p>Username
		<input type="text" name="username">
	</p>
	<p>Password
		<input type="password" name="password">
	</p>
	<p>Avatar
		<input type="file" name="avatar">
	</p>
	<input type="submit" name="add_user">
</form>