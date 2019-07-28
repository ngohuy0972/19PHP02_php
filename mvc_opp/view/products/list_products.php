<link rel="stylesheet" href="webroot/css/style.css">
<style>
/*	table, tr, td {
	border: 1px solid black;
}*/
#products {
  border-collapse: collapse;
  width: 100%;
}

#products td, #products th {
  border: 2px solid green;
  padding: 8px;
  text-align: center;
  font-size: 20px;
}

#products tr:nth-child(even){
	background-color: #f2f2f2;
}

#products tr:hover {
	background-color: #ddd;
}

#products th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
<h2 style="text-align: center;">List Products</h2>
<a href="index.php?action=add_products">Add Products</a>
<table id="products">
	<tr>
		<td>No</td>
		<td>Id</td>
		<td>Title</td>
		<td>Description</td>
		<td>Image</td>
		<td>Price</td>
		<td>Created</td>
		<td>Action</td>
	</tr>
	<?php 
	 $no = 1;
		while ($products = $listProducts->fetch_assoc()) 
		{
			# code...
			$id = $products['id'];
	 ?>
	 <tr>
	 	<td><?php echo $no;?></td>
	 	<td><?php echo $products['id']?></td>
	 	<td><?php echo $products['title']?></td>
	 	<td><?php echo $products['description']?></td>
	 	<td><img src="uploads/products/<?php echo $products['image'];?>" alt=""></td>
	 	<td><?php echo $products['price']?></td>
	 	<td><?php echo $products['created']?></td>
	 	<td>
	 		<a href="index.php?action=edit_products&id=<?php echo $id;?>">Edit</a> | <a href="index.php?action=delete_products&id=<?php echo $id;?>">Delete</a>
	 	</td>
	 </tr>
	 <?php 
	 	$no++;
	 	}

	  ?>
</table>