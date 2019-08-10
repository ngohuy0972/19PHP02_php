
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
		// var_dump($products);
		// exit();
		$id = $products['id'];
?>
		<tr>
			<td><?php echo $products['id'] ?></td>
			<td><?php echo $products['name_product'] ?></td>
			<td><?php echo $products['description'] ?></td>
			<td><img src="uploads/products/<?php echo $products['image']; ?>"></td>
			<td><?php echo $products['price'] ?></td>
			<td><?php echo $products['created'] ?></td>
			<td><a href="admin.php?controller=products&action=edit_product">Edit</a>	|	<a href="admin.php?controller=products&action=delete_product">Delete</a></td>
		</tr>
<?php 
	}
 ?>
	</tbody>
</table>
<a href="admin.php?controller=products&action=add_product">Add Products</a>	