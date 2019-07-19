<link rel="stylesheet" type="text/css" href="css/list_display.css">
<table>
	<thead>
		<tr>
			<th>List Products</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>ID</td>
			<td>Name Products</td>
			<td>Description</td>
			<td>Image</td>
			<td>Price</td>
			<td>Created</td>
			<td>Actions</td>
		</tr>
<?php 
	while($products = $listProducts->fetch_assoc()){
		$id = $_GET['id'];
?>
		<tr>
			<td><?php echo $products['id'] ?></td>
			<td><?php echo $products['name_product'] ?></td>
			<td><?php echo $products['description'] ?></td>
			<td><img src="uploads/<?php echo $products['image']; ?>"></td>
			<td><?php echo $products['price'] ?></td>
			<td><?php echo $products['created'] ?></td>
			<td><a href="index.php?action=edit_product&id=<?php echo $id; ?>">Edit</a>	|	<a href="index.php?action=delete_product&id=<?php echo $id; ?>">Delete</a></td>
		</tr>
<?php 
	}
 ?>
	</tbody>
</table>
<a href="index.php?action=add_product">Add Products</a>	