<h2>Add products</h2>
<form action="index.php?action=add_products" method="POST" enctype="multipart/form-data">
	<p>Title
		<input type="text" name="title">
	</p>
	<p>Description
		<input type="text" name="description">
	</p>
	<p>Image
		<input type="file" name="image">
	</p>
	<p>Price
		<input type="number" name="price">
	</p>
	<input type="submit" name="add_products">
</form>