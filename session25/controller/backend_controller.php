<?php 
	include 'model/backend_model.php';
  include 'libs/function.php';

	class BackendController {
	  function handleRequest() {
	  	echo "Chào Mừng Đến Với Trang Manage";
	  	//khoi tao model dung chung
	  	$backendModel = new BackendModel();
	  	//khoi tao thu vien chung
	  	$libs = new LibCommon();
	  	$controller = isset($_GET['controller'])?$_GET['controller']:'backend';
			$action = isset($_GET['action'])?$_GET['action']:'home';

			switch ($controller) {
				case 'backend':
					# code...
					$this->handleBackend($action, $backendModel, $libs);
					break;
				case 'users':
					# code...
					$this->handleUser($action, $backendModel, $libs);
					break;
				case 'products':
						# code...
					$this->handleProduct($action, $backendModel, $libs);	
						break;		
				default:
					# code...
					break;
			}
	  }

	  function handleBackend($action, $backendModel, $libs) {
	  	//$libs = redirectPage('admin.php');
	  }

	  function handleUser($action, $backendModel, $libs) {
	  	switch ($action) {
	  		case 'user':
	  			# code...
	  			$listUser = $backendModel->getListUser();
	  			include'view/users/list_user.php';
	  			break;
	  		case 'edit_user':
	  			$id = $_GET['id'];
	  			var_dump($id);
	  			exit();
	  			$editUser = $backendModel->getUserById();
	  			$oldUser = $editUser->fetch_assoc();
	  			if (isset($_GET['editUser'])) {
	  				# code...
	  				$username = $_POST['username'];
	  				$password = $_POST['password'];
	  				if ($backendModel->editUser($id, $username, $password) === TRUE ) {
	  					# code...
	  					$libs->redirectPage('admin.php?controller=users&action=user');
	  				}
	  			}
	  			include'view/users/edit_user.php';
	  			break;
	  		case 'delete_user':
	  				# code...
	  			$id = $_GET['id'];
	  			if ($backendModel->deleteUser($id) === TRUE ) {
	  				# code...
	  				$libs->redirectPage('admin.php?controller=users&action=user');
	  			}
	  			break;	
	  		default: 
	  			# code...
	  			break;
	  	}
	  }

	  function handleProduct($action, $backendModel, $libs) {

	  	switch ($action) {
				case 'product':
					$listProducts = $backendModel->getListProducts();		

					include 'view/products/list_product.php';
					break;
				case 'add_product':
					if(isset($_POST['addProduct'])) {
						$name_product = $_POST['name_product'];
						$description = $_POST['description'];
						$price = $_POST['price'];
						$image = "default.png";
						// var_dump($image);
						// exit;
						if($_FILES['image']['error'] == 0) {
							$image = $_FILES['image']['name'];
							move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/products/'.$image);
						}
						
							if ($backendModel->addProducts($name_product,$description,$image,$price) === TRUE) {
								$libs->redirectPage('admin.php?controller=products&action=product');
							}
   					}	
   					include 'view/products/add_product.php';
						break;	
				case 'edit_product':
					$id = $_GET['id'];
					$editProducts = $backendModel->getProductsById($id);
					$oldProducts = $editProducts->fetch_assoc();
					if (isset($_POST['editProduct'])) {
						$name_product = $_POST['name_product'];
						$description = $_POST['description'];
						$price = $_POST['price'];
						$image = $oldProducts['image'];
						if($_FILES['image']['error'] == 0) {
							$image = $_FILES['image']['name'];
							move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/products/'.$image);
						}

						if($backendModel->editProducts($id,$name_product,$description,$image,$price) === TRUE) {
							$libs->redirectPage('admin.php?controller=products&action=product');
						}
					}
					include 'view/products/edit_product.php';
					break;
				case 'delete_product':
					$id = $_GET['id'];
					if($backendModel->deleteProducts($id) === TRUE) {
						$libs->redirectPage('admin.php?controller=products&action=product');
					}
					break;
				default:
					break;
			}
	  }

	}
?>