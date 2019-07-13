<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BẢNG SẢN PHẨM</title>
	<link rel="stylesheet" type="text/css" href="../css/list_products.css">
</head>
<body>
	<?php
	 	require_once "connect.php";
	 	$sql = "SELECT * FROM products";
	 	$listProducts = mysqli_query($connect,$sql);
	?>
	<table>	
		<thead>
			<tr>
				<th>BẢNG SẢN PHẨM</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>ID</td>
				<td>Category</td>
				<td>Title</td>
				<td>Description</td>
				<td>Image</td>
				<td>Price</td>
				<td>Created</td>
				<td>Actions</td>
			</tr>
		</tbody>
		<?php 
			while($products = $listProducts -> fetch_assoc()) {
			$id = $products['id'];
		 ?>
		 <tr>
		 	<td><?php echo $products['id'] ?></td>
		 	<td><?php echo $products['category_id'] ?></td>
		 	<td><?php echo $products['title'] ?></td>
		 	<td><?php echo $products['description'] ?></td>
		 	<td><img src="../uploads/<?php echo $products['image']?>"></td>
		 	<td><?php echo $products['price'] ?></td>
		 	<td><?php echo $products['created'] ?></td>
		 	<td>
		 		<a href="edit_products.php ?id=<?php echo $id; ?>">Edit</a>   |   <a href="delete_products.php?id=<?php echo $id; ?>">Delete</a>
		 	</td>
		 </tr>
		 <?php 
			}
		  ?>
	</table>
	<a href="../products.php">Add Products</a>
</body>
</html>