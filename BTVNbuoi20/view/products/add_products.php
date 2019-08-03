<form action="index.php?action=add_product" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
	<p>Username
		<input type="text" name="name_product">
	</p>
	<p>Description
		<input type="text" name="description">
	</p>
	<p>Image
		<input type="file" name="image">
	</p>
	<p>Price
		<input type="text" name="price">
	</p>
	<input type="submit" name="add_products" value="Add Product">
</form>