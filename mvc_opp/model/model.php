<?php 
include 'config/database.php';
/**
 * 
 */
class Model extends ConnectDB
{


	//start model products
	function addProducts($title, $description,$image, $price){
		$sql ="INSERT INTO products(title, description, image, price) VALUES('$title','$description', '$image', '$price')";
		return mysqli_query($this->connect(), $sql);
	}
	function getListProducts(){
		$sql = "SELECT * FROM products";
		return mysqli_query($this->connect(),$sql);
	}

	function deleteProducts($id){
		$sql ="DELETE FROM products WHERE id = $id";
		return mysqli_query($this->connect(),$sql);
	}
	function getProductsById($id){
		$sql = "SELECT * FROM products WHERE id= $id";
		return mysqli_query($this->connect(), $sql);
	}
	function editProducts($id, $title, $description, $price) {
		$sql = "UPDATE products SET title='$title', description='$description', price='$price' WHERE id = $id";
		return mysqli_query($this->connect(),$sql);
	}
	//end model products





	//start model user
	function addUser($username, $password, $avatar)
	{
		# code...

		$sql = "INSERT INTO users(username, password, avatar) VALUES ('$username', '$password', '$avatar')";
		return mysqli_query($this->connect(),$sql);
	}
	function getListUser(){
		$sql = "SELECT * FROM user";
		return mysqli_query($this->connect(),$sql);
	}
	function deleteUser($id)
	{
		$sql = "DELETE FROM users WHERE id = $id";
		return mysqli_query($this->connect(),$sql);
	}
	function getUserById($id){
		$sql = "SELECT * FROM users WHERE id =$id";
		return mysqli_query($this->connect(),$sql);
	}
	function editUser($id,$username, $password, $avatar){
		$sql = "UPDATE users SET username ='$username', password ='$password', avatar ='$avatar' WHERE id =$id";
		return mysqli_query($this->connect(),$sql);
	}
	//end model user




}
 ?>