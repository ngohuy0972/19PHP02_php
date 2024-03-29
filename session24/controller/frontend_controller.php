<?php 
	include 'model/frontend_model.php';
  include 'libs/function.php';
	class FrontendControler {

		function handleRequest(){
			// Khoi tao model dung chung
			$frontModel = new FrontendModel();
			// khoi tao Lib dung chung
			$libs = new LibCommon();

			$controller = isset($_GET['controller'])?$_GET['controller']:'front';
			$action = isset($_GET['action'])?$_GET['action']:'home';

			switch ($controller) {
				case 'front':
					$this->handleFront($action, $frontModel, $libs);
					break;
				case 'news':
					$this->handleNews($action, $frontModel, $libs);
					break;
				case 'products':
					$this->handleProduct($action, $frontModel, $libs);
					break;
				case 'users':
					$this->handleUsers($action, $frontModel, $libs);
					break;
				default:
					# code...
					break;
			}
		}

		function handleFront($action, $frontModel, $libs){

		}

		function handleProduct($action, $frontModel, $libs){
			
		}

		function handleUsers($action, $frontModel, $libs){
			switch ($action) {
				case 'login':
					# code...
					if (isset($_POST['login'])) {
						$username = $_POST['username'];
						$password = $_POST['password'];
						$checkLogin = $frontModel->login($username, $password);
						if($checkLogin->num_rows) {
							$_SESSION['username'] = $username;
							$libs->redirectPage('index.php?controller=front&action=home');
						}
					}
					include 'view/users/login.php';
					break;
				case 'register':
					# code...
					if (isset($_POST['register'])) {
						$username = $_POST['username'];
						$password = $_POST['password'];
						$image = 'default.png';
						if($_FILES['image']['error'] == 0) {
							$image = $_FILES['image']['name'];
							move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/users/'.$image);
						}
						if($frontModel->register($username, $password) === TRUE) {
							$libs->redirectPage('index.php?controller=front&action=home');
						}
					}
					include 'view/users/register.php';
					break;
				case 'logout':
					unset($_SESSION['username']);
					$libs->redirectPage('index.php?controller=front&action=home');
					break;
				default:
					# code...
					break;
			}
		}

		function handleNews($action, $frontModel, $libs){
			
		}

	}
?>