<!DOCTYPE html>
<html>
<head>
	<title>Form - Session 14</title>
	<style type="text/css">
		.error {color: red;}
	</style>
</head>
<body>
	<?php 
	$errUserName = $errEmail = $errPassword = $errCity = $errGender =  '';
	$username = $email = $password = $gender = $city = '';
	if (isset($_POST['username'])) {
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$city     = $_POST['city'];
		$gender   = isset($_POST['gender'])?$_POST['gender']:'';
		if ($username == '') {
			$errUserName = 'Please input your username';
		}
		if ($email == '') {
			$errEmail = 'Please input your email';
		}
		if ($password == '') {
			$errPassword = 'Please input your password';
		}
		if ($city == '') {
			$errCity = 'Please choose your city';
		}
		if ($gender == '') {
			$errGender = 'Please choose your gender';
		}
		//console.log();
		if ($_FILES['avatar']['error'] == 0) {
			$avatar = $_FILES['avatar']['name'];
			move_uploaded_file($_FILES['avatar']['tmp_name'], 'uploads/'.$avatar);
		}
	}
?>
	<h1>Register form</h1>
	<form action="#" method="POST" enctype="multipart/form-data">
		<p>Username
			<input type="text" name="username" value="<?php echo $username;?>">
		</p>
		<p class="error"><?php echo $errUserName;?></p>
		<p>Email
			<input type="text" name="email" value="<?php echo $email;?>">
		</p>
		<p class="error"> <?php echo $errEmail;?></p>
		<p>Password
			<input type="password" name="password" value="<?php echo $password;?>">
		</p>
		<p class="error"> <?php echo $errPassword;?></p>
		<p>Gender
			<input type="radio" name="gender" value="male" 
			<?php echo ($gender == 'male')?'checked':''?>
			> Male
			<input type="radio" name="gender"  value="female"
			<?php echo ($gender == 'female')?'checked':''?>
			> Female
		</p>
		<p class="error"> <?php echo $errGender;?></p>
		<p>City
			<select name="city">
				<option value="">Please choose city</option>
				<option value="1" <?php echo ($city == '1')?'selected':''?>>Quang Tri</option>
				<option value="2" <?php echo ($city == '2')?'selected':''?>>Hue</option>
				<option value="3" <?php echo ($city == '3')?'selected':''?>>Da Nang</option>
				<option value="4" <?php echo ($city == '4')?'selected':''?>>Quang Nam</option>
			</select>
		</p>
		<p class="error"> <?php echo $errCity;?></p>
		<p>Avatar
			<input type="file" name="avatar">
		</p>
		<p><input type="submit" name="register"></p>
	</form>

</body>
</html>