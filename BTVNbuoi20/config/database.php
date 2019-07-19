<?php 

	class connect {
		private $server = 'localhost';
		private $username = 'root';
		private $password = '';
		private $database = '19php02_btvn_mvc_session20';

		protected function connect_database() {
			$connect = mysqli_connect($this->server, $this->username, $this->password, $this->database);

			//check connect
			if (mysqli_connect_errno()) {
				echo "Failed to connect my SQL".mysqli_connect_error();
			}
			return $connect;
		}
	}	
 ?>