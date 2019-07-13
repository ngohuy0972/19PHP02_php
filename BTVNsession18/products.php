<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Products</title>
	<link rel="stylesheet" type="text/css" href="css/products.css">
</head>
<body>
	<?php 
		// Kết nối database 
		require_once 'config/connect.php';
		// Khởi tạo giá trị mặc định cho các biến
		$category_id = $title = $description = $image = $price = '';
		// Khởi tạo báo lỗi nếu có lỗi
		$errCategoryId = $errTitle = $errDescription = $errImage = $errPrice = '';
		$checkSubmit = true;
		//hàm isset dung de kiem tra mot bien da khoi tao trong bo nho hay chua
		//neu ton tai thi tra ve TRUE, nguoc lai tra ve FALSE
		if(isset($_POST['submit'])) {
			$category_id = $_POST['CategoryID'];
			$title = $_POST['Title'];
			$description = $_POST['Description'];
			$image = $_POST['Image'];
			$price = $_POST['Price'];

			if ($category_id == ''){
				$errCategoryId = 'Please input CategoryID';
				$checkSubmit = false;
			}
			if ($title == ''){
				$errTitle = 'Please input Title';
				$checkSubmit = false;
			}
			if ($description == ''){
				$errDescription = 'Please input Description';
				$checkSubmit = false;
			}
			if ($image == ''){
				$errImage = 'Please choose Image';
				$checkSubmit = false;
			}
			if ($price == ''){
				$errPrice = 'Please input Price';
				$checkSubmit = false;
			}
			if ($checkSubmit) {
				$sql = "INSERT INTO products(category_id, title, description, image, price) VALUES ('$category_id', '$title', '$description', '$image', $price)";
				mysqli_query($connect, $sql);
				//  var_dump($connect);
				//  var_dump($sql);
				// 	exit ;
				header("Location: config/list_products.php");
			}
		}
	 ?>
	 <div class="container">
	 	<div class="products_table">
	 		<h1>BẢNG NHẬP THÔNG TIN SẢN PHẨM</h1>
	 		<form action="#" method="post">
				<p class="form_name">Category ID :
					<input class="category_id" type="text" name="CategoryID" value="<?php echo $category_id?>">
				</p>
				<p class="error"><?php echo $errCategoryId; ?></p>	
				<p class="form_name"> Title :
					<input class="title" type="text" name="Title" value="<?php echo $title?>">
				</p>
				<p class="error"><?php echo $errTitle; ?></p>	
				<p class="form_name">Mô tả :
					<input class="description" type="text" name="Description" value="<?php echo $description?>">
				</p>
				<p class="error"><?php echo $errDescription;?></p>
				<p class="form_name">Hình ảnh :
					<input class="image" type="file" name="Image" value="<?php echo $image?>">
				</p>
				<p class="error"><?php echo $errImage;?></p>
				<p class="form_name">Giá cả :
					<input class="price" type="text" name="Price" value="<?php echo $price?>">
				</p>
				<p class="error"><?php echo $errPrice; ?></p>
				<input class="submit" type="submit" name="submit" value="Submit">
			</form>
	 	</div>
	 </div>
</body>
</html>