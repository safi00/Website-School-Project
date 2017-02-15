<?php
  define('DB_SERVER', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', '');
  define('DB_NAME', 'go');

  class DB_SQLL {
    private $conn;

    function __construct(){
      $this->conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or die ('localhost Connection Failed'.mysqli_connect_error());
    }
    public function setUser($username, $fullname, $email, $address, $password){
      $result = mysqli_query($this->conn,"INSERT INTO users(username, fullname, email, address, password) VALUES('$username', '$fullname', '$email', '$address', '$password')");
      return $result;
    }
    public function setUser($username, $fullname, $email, $address, $password){
      $result = mysqli_query($this->conn,"INSERT INTO users(username, fullname, email, address, password) VALUES('$username', '$fullname', '$email', '$address', '$password')");
      return $result;
    }
    public function seeUser($username){
      $result = mysqli_query($this->conn,"SELECT * FROM users Where username ='$username'");
      return $result;
    }
}
?>
