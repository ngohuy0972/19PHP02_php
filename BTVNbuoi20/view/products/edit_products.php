<h1>EDIT PRODUCTS</h1>
<form action="index.php?action=edit_product&id=<?php echo $id ?>" method="POST">
	<p>Name Products
		<input type="text" name="name_product" value="<?php echo $oldProducts['name_product'] ?>">
	</p>
	<p>Description
		<input type="text" name="description" value="<?php echo $oldProducts['description'] ?>">
	</p>
	<p>Price
		<input type="text" name="price" value="<?php echo $oldProducts['price'] ?>">
	</p>
	<input type="submit" name="edit_products" value="Edit Product">
</form>