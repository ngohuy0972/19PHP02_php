<?php 
	include 'model/model.php';
	class Controller {

		function handleRequest() {
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'home':
					$model = new Model();
					$model->Home();
					break;
				case 'contact':
					$model = new Model();
					$model->Contact();
					break;
					/*
						USER
					*/
				case 'user':
					$model = new Model();
					$listUser = $model->getListUser();

					include 'view/user/list_user.php';	
					break;
				case 'add_user':
					
					if (isset($_POST['add_user'])) {
						$username = $_POST['username'];
						$password = $_POST['password'];
						$model = new Model();
						if ($model->addUser($username, $password) === TRUE) {
							header("Location: index.php?action=user");
						}	
					}
					include 'view/user/add_user.php';
					break;
				case 'delete_user':
					$id = $_GET['id'];
					$model = new Model();
					if ($model->deleteUser($id) === TRUE) {
						header("Location: index.php?action=user");
					}	
					break;
				case 'edit_user':
					$id = $_GET['id'];
					$model = new Model();
					$editUser = $model->getUserById($id);
					$editUser = $editUser->fetch_assoc();
					if(isset($_POST['edit_user'])) {
						$username = $_POST['username'];
						$model = new Model();
						if($model->editUser($id,$username) === TRUE) {
							header('Location : index.php?action=user');
						}
					}
					include 'view/user/list_user.php';
					break;	
					/*
						PORDUCTS
					*/
				case 'product':
					$model = new Model();
					$listProducts = $model->getListProducts();		

					include 'view/products/list_products.php';
					break;
				case 'add_product':
					if(isset($_POST['add_products'])) {
						$name_product = $_POST['name_product'];
						$description = $_POST['description'];
						$image = $_POST['image'];
						$price = $_POST['price'];
						$model = new Model();
						if ($model->addProducts($name_product,$description,$image,$price) === TRUE) {
							header('Location: index.php?action=product');
						}
   					}	
   					include 'view/products/add_products.php';
					break;	
				case 'edit_product':
					$id = $_GET['id'];
					$model = new Model();
					$editProducts = $model->getProductById();
					$editProducts = $listProducts->fetch_assoc();
					if(isset($_POST['edit_product'])) {
						$name_product = $_POST['name_product'];
						$description = $_POST['description'];
						$price = $_POST['price'];
						$model = new Model();
						if($model->editProducts($name_product,$description,$image,$price) === TRUE) {
							header('Location: index.php?action=product');
						}
					}	
					include 'view/products/list_products.php';
					break;	
				case 'delete_product':
					$id = $_GET['id'];
					$model = new Model();
					if($model->deleteProducts($id) === TRUE ) {
						header('Location: index.php?action=product');
					}
					include 'view/products/list_products.php';
					break;	
				default:
					break;
			}
		}
	}
 ?>