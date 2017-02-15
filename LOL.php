<?php
	ob_start(); //start buffer
	if (isset($_POST["btn1"])){
		//echo " e ta pasa ora mi primi boton"
		$username = $_POST["username"];
		$password = $_POST["password"];
		$error_msg = "Error?";

		if ($uname == "") {
			$error_msg = "fill your usename!";
		}
		if ($pass == "") {
			$error_msg = "fill your password!";
		}
		if ($error_msg !=""){
			echo $error_msg;
		} else {
			echo " Go to niggerpage" // this should redirect to main page
		}
	}
	?>
	<!-- Page content to be display in masterpage --->
	<form method="post" >
	<input type="text" id="username" name="username" />
	<input type="password" id="password" name="password" />
	<input type="submit" name="name" value="Submit">
	<p> if you don't have an account? <li><a href="Register.html">Register Here</a></li> </p>
	</form
	<?php
	
