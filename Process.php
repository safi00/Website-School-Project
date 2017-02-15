<?php
		//Set values, for in Login.php file
		$username = $_POST["username"];
		$password = $_POST["password"];

		// to prevent mysql injections
		$username = stripcslashes($username);
		$password = stripcslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);

		// connect to the server and select database
		mysql_connect("localhost", "root", "");
		mysql_select_db("login");

		//Query the database for user
		$result = mysql_query("select * from users where username = '$username' and password = '$password'")
									or die("failed to query database ".mysql_error());
		$row = mysql_fetch_array($result);
		if ($row['username'] == $username && $row['password'] == $password ){
			echo "login succes!!! Welcome " .$row['username'];
		} else {
		  echo "failed to login!";
}
