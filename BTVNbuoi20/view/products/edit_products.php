<link rel="stylesheet" href="webroot/css/style_img.css">
<h1>EDIT PRODUCTS</h1>
<form action="index.php?action=edit_product&id=<?php echo $id; ?>" method="POST" enctype = "multipart/form-data" accept-charset="utf-8">
	<p>Username
		<input type="text" name="name_product" value="<?php echo $oldProducts['name_product']; ?>">
	</p>
	<p>Description
		<input type="text" name="description" value="<?php echo $oldProducts['description']; ?>">
	</p>
	<p>Image
		<input type="file" name="image">
		<img src="uploads/products/<?php echo $oldProducts['image']; ?>">
	</p>
	<p>Price
		<input type="number" name="price" value="<?php echo $oldProducts['price']; ?>">
	</p>
	<input type="submit" name="edit_products" value="Edit Products">
</form>