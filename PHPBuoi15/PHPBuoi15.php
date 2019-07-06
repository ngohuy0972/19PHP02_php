<!DOCTYPE html>
<html>
<head>
	<title>Form - Session 15</title>
	<style type="text/css">
		.error {color: red;}
	</style>
</head>
<body>
	<?php 
	$errUserName = $errAddress = $errCustomerType = $errStartDate = $errEndDate = $errStartNumber= $errEndNumber = $errGender =  '';
	$username = $address = $gender = $start_date = $end_date = $start_number = $end_number = $customer_type = '';
	if (isset($_POST['username'])) {
		$username = $_POST['username'];
		$address = $_POST['address'];
		$customer_type     = $_POST['customer_type'];
		$gender   = isset($_POST['gender'])?$_POST['gender']:'';
		if ($username == '') {
			$errUserName = 'Please input your username';
		}
		if ($address == '') {
			$errAddress = 'Please input your address';
		}
		if ($customer_type == '') {
			$errCustomerType = 'Please choose your city';
		}
		if ($gender == '') {
			$errGender = 'Please choose your gender';
		}
	}
?>
	<h1>Register form</h1>
	<form action="#" method="POST" enctype="multipart/form-data">
		<p>Username
			<input type="text" name="username" value="<?php echo $username;?>">
		</p>
		<p class="error"><?php echo $errUserName;?></p>
		<p>Address
			<input type="text" name="address" value="<?php echo $address;?>">
		</p>
		<p class="error"> <?php echo $errAddress;?></p>
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
			<select name="customer_type">
				<option value="">Please choose city</option>
				<option value="1" <?php echo ($customer_type == '1')?'selected':''?>>Sử dụng dân dụng</option>
				<option value="2" <?php echo ($customer_type == '2')?'selected':''?>>Kinh doanh</option>
				<option value="3" <?php echo ($customer_type == '3')?'selected':''?>>Sản Xuất</option>
			</select>
		</p>
		<p class="error"> <?php echo $errCustomerType;?></p>
		<p>Start Date
			<input type="date" name="startDate" value=" <?php echo $start_date ?> ">
		</p>
		<p class="error" <?php echo $errStartDate ?>></p>
		<p>End Date
			<input type="date" name="endDate" value=" <?php echo $end_date ?> ">
		</p>
		<p class="error" <?php echo $errEndDate ?>></p>
		<p>Start Number
			<input type="text" name="startNumber" value=" <?php echo $start_number ?> ">
		</p>
		<p class="error" <?php echo $errStartNumber ?>></p>
		<p>End Number
			<input type="text" name="endNumber" value=" <?php echo $end_number ?> ">
		</p>
		<p class="error" <?php echo $errEndNumber ?>></p>
	</form>

</body>
</html>