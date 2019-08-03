<h1>Form Register</h1>
<form action="login.php" method="POST">
	<p>Username
		<input type="text" name="Username">
	</p>
	<p>Password
		<input type="password" name="Password">
	</p>
	<input type="submit" value="Login">
	<script type="text/javascript" src="validateForm.js"></script>
</form>
<?php 

	session_start();	

	$username = 'admin';
	$password = '123456';
	

	$_SESSION['Login']['username'] = $username;
	$_SESSION['Login']['password'] = $password;

?>