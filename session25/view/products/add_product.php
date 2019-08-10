<h1>Add Product</h1>
<form action="index.php?controller=backend&action=edit_product" method="POST">
	<p>Name Product
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
	<input type="submit" name="addProduct" value="Add Product">
</form>