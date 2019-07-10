<!DOCTYPE html>
<html>
<head>
	<title>List news</title>
	<style type="text/css">
		img {
			width: 100px;
		}
	</style>
</head>
<body>
<?php	
	require_once 'config/connect.php';
	$sql = "SELECT * FROM news";
	$listNews = mysqli_query($connect, $sql);
?>
	<h1>List news</h1>
	<table>
		<tr>
			<td>Title</td>
			<td>Description</td>
			<td>Image</td>
			<td>Created</td>
			<td>Updated</td>
			<td>Action</td>
		</tr>
	<?php
		while ($news = $listNews->fetch_assoc()) {
			$id = $news['id'];
	?>
		<tr>
			<td><?php echo $news['title']?></td>
			<td><?php echo $news['description']?></td>
			<td><img src="uploads/<?php echo $news['image']?>"></td>
			<td><?php echo $news['created']?></td>
			<td><?php echo $news['updated']?></td>
			<td>
				<a href="edit_news.php?id=<?php echo $id;?>">Edit</a> | <a href="delete_news.php?id=<?php echo $id;?>">Delete</a>
			</td>
		</tr>
	<?php
		}
	?>
	</table>
	<a href="add_news.php">Add news</a>
	</body>
</html>