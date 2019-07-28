<?php 
	include 'config/database.php';
	class Model extends connect{

		function Home() {
			echo "<br>";
			echo "This is Home Page";
		}

		function Contact() {
			echo "<br>";
			echo "Contact my phone number : 0856787657";
		}
			/*
				USER
			*/
		function getListUser() {
			$sql = "SELECT * FROM user";
			return mysqli_query($this->connect_database(),$sql);

		}

		function addUser($username,$password) {
			$sql  = "INSERT INTO user(username,password) VALUES ('$username', '$password')";
			return mysqli_query($this->connect_database(),$sql);
		}

		function deleteUser($id) {
			$sql = "DELETE FROM user WHERE id = $id";
			return mysqli_query($this->connect_database(),$sql);
		}

		function editUser($id,$username,$avatar) {
			$sql = "UPDATE user SET username = '$username', avatar = '$avatar' WHERE id = '$id";
			return mysqli_query($this->connect_database(),$sql);
		}

		function getUserById($id) {
			$sql = "SELECT * FROM user WHERE id = $id";
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
			$sql = "DELETE FROM products WHERE id = '$id";
			return mysqli_query($this->connect_database(),$sql);
		}

		function editProducts($name_product,$description,$price) {
			$sql = "UPDATE products SET name_product = '$name_product', description = '$description', price = '$price' ";
			return mysqli_query($this->connect_database(),$sql);
		}

		function getProductById($id) {
			$sql = "SELECT * FROM products WHERE id = $id";
			return mysqli_query($this->connect_database(),$sql); 
		}
	}
 ?>