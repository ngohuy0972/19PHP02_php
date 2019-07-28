<?php 
	class ConnectDB {
		private $server ='localhost';
		private $username ='root';
		private $password ='';
		private $database ='19php02_mvc_oop_basic';
		protected function connect (){
			$connect = mysqli_connect($this->server, $this->username, $this->password, $this->database);
			//change character set to utf8
			mysqli_set_charset($connect, "utf8");
			// check connect
			if (mysqli_connect_error()) {
				# code...
				echo "Failed to connect MySQL".mysqli_connect_error();
			}
			
			return $connect;
		}
	}
 ?>