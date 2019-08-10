<?php 
	include'config/database.php';
	class BackendModel extends ConnectDB {
		
		/**
		 * USERS
		 */
		function getListUser() {
			# code...
			$sql = "SELECT * FROM user";
			return mysqli_query($this->connect(),$sql);
		}

		function getUserById($id) {
			$sql = "SELECT FROM user WHERE id = '$id'";
			return mysqli_query($this->connect(),$sql);
		}

		function addUser($username,$password) {
			$sql = "INSERT INTO user(username, password) VALUES ('$username', '$password')";
			return mysqli_query($this->connect(),$sql);
		}

		function editUser($id, $username, $password) {
			$sql = "UPDATE user SET username = '$username', password = '$password' WHERE id = '$id')";
			return mysqli_query($this->connect(),$sql);
		}

		function deleteUser($id) {
			$sql = "DELETE FROM user WHERE  id = '$id'";
			return mysqli_query($this->connect(),$sql);
		}


			/**
		 	* PRODUCTS
		 	*/
		function getListProducts() {
			# code...
			$sql = "SELECT * FROM product";
			return mysqli_query($this->connect(),$sql);
		}

		function getProductsById($id) {
			$sql = "SELECT FROM product WHERE id = '$id'";
			return mysqli_query($this->connect(),$sql);
		}

		function addProducts($name_product,$description,$image,$price) {
			$sql = "INSERT INTO product (name_product, description, image, price) VALUES ('$name_product', '$description', '$image', '$price')";
			return mysqli_query($this->connect(),$sql);
		}

		function editProducts($id, $name_product, $description, $image, $price) {
			$sql = "UPDATE product SET name_product = '$name_product', description = '$description', image = '$image', price = '$price ' WHERE id = '$id')";
			return mysqli_query($this->connect(),$sql);
		}

		function deleteProducts($id) {
			$sql = "DELETE FROM product WHERE  id = '$id'";
			return mysqli_query($this->connect(),$sql);
		}		
	}
 ?>