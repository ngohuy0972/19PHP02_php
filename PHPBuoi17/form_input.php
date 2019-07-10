<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nhập Dữ Liệu</title>
	<style type="text/css">
		.error {
			color: red;
		}
	</style>
</head>
<body>
	<?php 
		// Kết nối database 
		require_once 'connect.php';
		// Khởi tạo giá trị mặc định cho các biến
		$title = $description = $image = $created_time = '';
		// Khởi tạo báo lỗi nếu có lỗi
		$errTitle = $errDescription = $errImage = $errCreated = '';
		$checkSubmit = true;
		//hàm isset dung de kiem tra mot bien da khoi tao trong bo nho hay chua
		//neu ton tai thi tra ve TRUE, nguoc lai tra ve FALSE
		if(isset($_POST['submit'])) {
			$title = $_POST['title'];
			$description = $_POST['description'];
			$image = $_POST['image'];
			$created_time = $_POST['createdTime'];

			if ($title == ''){
				$errTitle = 'Please input title';
				$checkSubmit = false;
			}
			if ($description == ''){
				$errDescription = 'Please input description';
				$checkSubmit = false;
			}
			if ($image == ''){
				$errImage = 'Please choose image';
				$checkSubmit = false;
			}
			if ($created_time == ''){
				$errCreated = 'Please input time';
				$checkSubmit = false;
			}
			if ($checkSubmit) {
				$sql = "INSERT INTO newstable(title, description, image, Created) VALUES ('$title', '$description', '$image', '$created_time')";
				mysqli_query($connect, $sql);
				// var_dump($connect);
				// var_dump($sql);
				//exit ;
				header("Location: list_user.php");
			}
		}
	 ?>
	<form action="#" method="post">
		<p>Tiêu đề :
			<input type="text" name="title" value="<?php echo $title?>">
		</p>
		<p class="error"><?php echo $errTitle; ?></p>	
		<p>Mô tả :
			<input type="text" name="description" value="<?php echo $description?>">
		</p>
		<p class="error"><?php echo $errDescription;?></p>
		<p>Hình ảnh :
			<input type="file" name="image" value="<?php echo $image?>">
		</p>
		<p class="error"><?php echo $errImage;?></p>
		<p>Ngày tạo :
			<input type="date" name="createdTime" value="<?php echo $created_time?>">
		</p>
		<p class="error"><?php echo $errCreated; ?></p>
		<input class="submit" type="submit" name="submit" value="Submit">
	</form>
</body>
</html>