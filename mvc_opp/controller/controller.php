<?php 
	include 'model/model.php';
	class Controller {
		function handleRequest(){
			$action =isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'home':
						# code...
					echo "<p> Đây là home </p>";
				break;

				case 'news':
						# code...
					echo "<p> Đây là news </p>";
				break;


				//start controller products

				case 'products':
						# code...
					$model = new Model();
					$listProducts = $model -> getListProducts();
					//đang ở trang list user;
					include 'view/products/list_products.php';
				break;

				case 'add_products':
					# code...
					if (isset($_POST['add_products'])) {
						# code...
						$title = $_POST['title'];
						$description = $_POST['description'];
						$price = $_POST['price'];
						$image = "default.png";
						if ($_FILES['image']['error']==0) {
							# code...
							$image = $_FILES['image']['name'];
							move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/products/'.$image);
						}
						$model = new Model();
						if ($model ->addProducts($title, $description, $image, $price)===TRUE) {
							# code...
							header("Location:index.php?action=products");
						}
					}
					include 'view/products/add_products.php';
				break;
				case 'delete_products':
					# code...
					$id = $_GET['id'];
					$model = new Model();
					if ($model -> deleteProducts($id)===TRUE) {
						# code...
						header("Location:index.php?action=products");
					}
				break;
				case 'edit_products':
					# code...
				$id = $_GET['id'];
				$model = new Model();
				$editProducts = $model->getProductsById($id);
				$oldProducts = $editProducts ->fetch_assoc();
				if (isset($_POST['edit_products'])) {
					# code...
					$title = $_POST['title'];
					$description = $_POST['description'];
					$price = $_POST['price'];
					$model = new Model();

					if ($model ->editProducts($id, $title, $description, $price)===TRUE) {
						# code...
						header("Location:index.php?action=products");
					}
				}
				include 'view/products/edit_products.php';
					break;

				//end controller products


				//start controller user
				case 'user':
						# code...
					$model = new Model();
					$listUser = $model->getListUser();
					//đang ở trang list user;
					include 'view/user/list_user.php';
				break;

				case 'add_user':
						# code...
					if (isset($_POST['add_user'])) {
						# code...
						$username = $_POST['username'];
						$password = $_POST['password'];
						$avatar = 'default.png';
						if ($_FILES['avatar']['error']==0) {
							$avatar = $_FILES['avatar']['name'];
							move_uploaded_file($_FILES['avatar']['tmp_name'], 'uploads/user/'.$avatar);
							}
						$model = new Model();
						if ($model -> addUser($username,$password, $avatar)===TRUE) {
							# code...
						header("Location: index.php?action=user");
						}	
					}
					include 'view/user/add_user.php';
				break;

				case 'delete_user':
						# code...
					$id = $_GET['id'];
					$model = new Model();
					if ($model -> deleteUser($id) === TRUE) {
						# code...
						header("Location: index.php?action=user");
					}
				break;

				case 'edit_user':
							# code...
					$id = $_GET['id'];
					$model = new Model();
					$editUser = $model->getUserById($id);
					$oldUser = $editUser ->fetch_assoc();
					if (isset($_POST['edit_user'])) {
							# code...
						$username = $_POST['username'];
						$password = $_POST['password'];
						$avatar = $oldUser['avatar'];
						if ($_FILES['avatar']['error']==0) {
							$avatar = $_FILES['avatar']['name'];
							move_uploaded_file($_FILES['avatar']['tmp_name'], 'uploads/user/'.$avatar);
						}
						$model = new Model();
						if ($model ->editUser($id, $username, $password, $avatar) ===TRUE) {
								# code...
							header("Location: index.php?action=user");
						}
					}
					include 'view/user/edit_user.php';
				break;

				//end controller user
				default:
						# code...
				break;
			}
		}
	}
	?>
