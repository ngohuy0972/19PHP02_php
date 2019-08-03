<?php 
	include 'config/database.php';
	class Model extends connect{

		function Home() {
			echo '<br>';
			echo "This is Home page";
		}

		function Check_Login($username,$password) {
			$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
			return mysqli_query($this->connect_database(),$sql);
		}

		function Logout() {
			$sql = "DELETE FROM user WHERE username = '$username' AND password = '$password' ";
		}

			/*
				USER
			*/
		function getListUser() {
			$sql = "SELECT * FROM user";
			return mysqli_query($this->connect_database(),$sql);

		}

		function addUser($username,$password,$avatar) {
			$sql  = "INSERT INTO user(username,password,avatar) VALUES ('$username', '$password', '$avatar')";
			return mysqli_query($this->connect_database(),$sql);
		}

		function deleteUser($id) {
			$sql = "DELETE FROM user WHERE id = '$id'";
			return mysqli_query($this->connect_database(),$sql);
		}

		function editUser($id,$username,$avatar) {
			$sql = "UPDATE user SET username = '$username', avatar = '$avatar' WHERE id = '$id'";
			return mysqli_query($this->connect_database(),$sql);
		}

		function getUserById($id) {
			$sql = "SELECT * FROM user WHERE id = '$id'";
			return mysqli_query($this->connect_database(),$sql); 
		}
			/*
				PRODUCTS
			*/
		function getListProducts() {
			$sql = "SELECT * FROM products";
			return mysqli_query($this->connect_database(),$sql);
		}

		function addProducts($name_product,$description,$image,$price) {
			$sql = "INSERT INTO products(name_product, description, image, price) VALUES ('$name_product', '$description', '$image', '$price')";
			return mysqli_query($this->connect_database(),$sql);
		}

		function deleteProducts($id) {
			$sql = "DELETE FROM products WHERE id = '$id'";
			return mysqli_query($this->connect_database(),$sql);
		}

		function editProducts($id,$name_product,$description,$image,$price) {
			$sql = "UPDATE products SET name_product = '$name_product', description = '$description', image = '$image', price = '$price' WHERE id = '$id'";
			return mysqli_query($this->connect_database(),$sql);
		}

		function getProductById($id) {
			$sql = "SELECT * FROM products WHERE id = '$id'";
			return mysqli_query($this->connect_database(),$sql); 
		}
	}
 ?>