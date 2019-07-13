<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chỉnh sửa sản phẩm</title>
	<link rel="stylesheet" type="text/css" href="css/list_products.css">
</head>
<body>
	<?php
		require_once 'connect.php';
		//Get products cũ ra
		$id = $_GET['id'];
		//var_dump($id);
		$sql = "SELECT * FROM products WHERE id =$id";
		$editProducts = mysqli_query($connect,$sql);
		$oldProducts = $editProducts -> fetch_assoc();
		$updated = Date('Y-m-d h:i:s');
		if(isset($_POST['edit_products'])) {
			$category_id = $_POST['CategoryID'];
			$title = $_POST['Title'];
			$description = $_POST['Description'];
			$image = $oldProducts['image'];
			$price = $_POST['Price'];
			if ($_FILES['Image']['error'] == 0) {
			$image = $_FILES['Image']['name'];
			move_uploaded_file($_FILES['Image']['tmp_name'], '../uploads/'.$image);
		}
		$sql = "UPDATE products SET category_id = '$category_id', title = '$title', description = '$description', image = '$image' , price = $price WHERE id = '$id'";
		var_dump($sql);	
		mysqli_query($connect,$sql);
		header('Location : list_products.php');
 		}
	 ?>
	 <div class="container">
	 	<div class="products_table">
	 		<h1>BẢNG CHỈNH SỬA THÔNG TIN SẢN PHẨM</h1>
	 		<form action="#" method="post">
	 			<p class="form_name">Category ID :
					<input class="category_id" type="text" name="CategoryID" value="<?php echo $oldProducts['category_id']?>">
				</p>
				<p class="form_name"> Title :
					<input class="title" type="text" name="Title" value="<?php echo $oldProducts['title']?>">
				</p>
				<p class="form_name">Mô tả :
					<input class="description" type="text" name="Description" value="<?php echo $oldProducts['description']?>">
				</p>
				<p class="form_name">Hình ảnh :
					<input class="image" type="file" name="Image">
					<img src=" ../uploads/<?php echo $oldProducts['image']?>">
				</p>
				<p class="form_name">Giá cả :
					<input class="price" type="text" name="Price" value="<?php echo $oldProducts['price']?>">
				</p>
				<input class="submit" type="submit" name="submit" value="Submit">
			</form>
	 	</div>
	 </div>
</body>
</html>