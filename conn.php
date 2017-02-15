<?php
	define('DB_SERVER', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'go');

	class DB_CON {
		Private $conn;
		
		function __construct() {
			$this->conn = mysqli_connect (DB_SERVER,DB_USER,DB_PASS,DB_NAME) or die ('localhost Connection Failed'.mysqli_connect_error());
		}
		public function setUser ($fullname,$username,$password) {
			$res = mysqli_query($this->conn,"INSERT INTO users(fullname,username,password) VALUES('$fullname','$username','$password')");
			return $res;
		}
		public function getUser ($username) {
			$res = mysqli_query($this->conn,"SELECT * FROM users Where username ='$username'");
			return $res;
		}
	}
?>
