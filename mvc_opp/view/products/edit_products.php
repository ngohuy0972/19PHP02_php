<h2>Edit Products</h2>
<form action="index.php?action=edit_products&id=<?php echo $id?>" method="POST"	>
	<p>Title
		<input type="text" name="title" value="<?php echo $oldProducts['title']?>">
	</p>
	<p>Description
		<input type="text" name="description" value="<?php echo $oldProducts['description']?>">
	</p>
	<p>Price
		<input type="number" name="price" value="<?php echo $oldProducts['price']?>">
	</p>
	<input type="submit" name="edit_products" value="Edit_products">
</form>