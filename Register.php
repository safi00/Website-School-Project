<?php
session_start();
require_once 'sql.php';
$DBsql = new DB_SQLL();
ob_start();

if( isset($_POST['btn-Register']) ) {

  $username = $_POST['uname'];
  $password = $_POST['pass'];
  $repass = $_POST['repass'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $fullname = $_POST['fullname'];
  $error_msg = "";
  $pass_control = "";

  if ($username ==""){
  $error_msg .= "fill username! <br/>";
  }
  if ($password ==""){
  $error_msg .= "fill password <br/>";
  }
  if ($email ==""){
  $error_msg .= "fill email <br/>";
  }
  if ($address ==""){
  $error_msg .= "fill address <br/>";
  }
  if ($fullname ==""){
  $error_msg .= "fill address <br/>";
  }
  if ($repass ==""){
  $error_msg .= "fill the confirmation pass <br/>";
  }
  if ($repass != $password){
  $error_msg .= "pass not the same<br/>";
  }
  if ($error_msg !=""){
    echo $error_msg;
  } else {
      if($DBsql->setUser($username, $fullname, $email, $address, md5($password))){
          $error_msg .= "user was saved</br>";
          echo $error_msg;
      }else{
        $error_msg .= "user was not saved</br>";
        echo $error_msg;
    }
  }
}

?>
<style>

</style>
<div id="main">

	<div class="main_top">
			<h1>Register</h1>
		</div>

		<div class="main_body">

				<p><b>sign up.</b></p>

        <form method="post">
<p>
          <tr>
            <th>username</th>
            <th><input type="text" id="uname" name="uname" placeholder="Enter username" maxlength="15"  /></th></br>
          </tr>
          <tr>
            <th>Full Name</th>
            <th><input type="text" id="fullname" name="fullname" placeholder="Enter Full name" maxlength="50"  /></th></br>
          </tr>
          <tr>
            <th>address</th>
            <th><input type="text" id="address" name="address" placeholder="Kaya Skalchi57" maxlength="100"  /></th></br>
          </tr>
          <tr>
            <th>email</th>
            <th><input type="text" id="email" name="email" placeholder="....@hotmail.com" maxlength="100"  /></th></br>
          </tr>
          <tr>
            <th>Password</th>
            <th><input type="password" id="pass" name="pass" placeholder="Enter Password" maxlength="15"  /></th></br>
          </tr>
          <tr>
            <th>Re-Password</th>
            <th><input type="password" id="repass" name="repass" placeholder="Enter Password AGAIN!" maxlength="15"  /></th></br>
          </tr>
          <tr>
            <tdcolspan='2'><button id="btn-Register" name="btn-Register"> Register </button></td></br>
          </tr>
          <a href="Login.php">Sign in Here...</a>
        </P>
        </form>
      </div>

		<div class="main_bottom"></div>

</div>


<?php
$page_title = 'Register';
$thisPage='Register';

$mastermain= ob_get_contents();
ob_end_clean();

$masterlink ="";
$masterhead ="";

Include("master.php");

?>
