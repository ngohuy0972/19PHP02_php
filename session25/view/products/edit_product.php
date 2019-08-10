<h1>Edit Product</h1>
<form action="index.php?controller=backend&action=edit_product" method="POST">
	<p>Name Product
		<input type="text" name="name_product" value="<?php echo $oldProduct['name_product']; ?>">		
	</p>
	<p>Description
		<input type="text" name="description" value="<?php echo $oldProduct['description']; ?>">		
	</p>
	<p>Image
		<input type="file" name="image">
		<img src="uploads/products/<?php echo $oldProduct['image']; ?>" alt="">		
	</p>
	<p>Price
		<input type="text" name="price" value="<?php echo $oldProduct['price']; ?>">		
	</p>
	<input type="submit" name="editProduct" value="Edit Product">
</form>