<?php 
	require_once "connect.php";
	$id = $_GET['id'];
	$sql ="DELETE FROM newstable WHERE id = $id";
	
	mysqli_query($connect,$sql);
	header("Location: list_user.php")
 ?>