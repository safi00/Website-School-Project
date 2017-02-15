<?php
	session_start();
	require_once 'conn.php';
	$DB_SQL = new DB_CON();


	ob_start();

	if( isset($_POST['btn-login']) ) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $error_msg = "";
    $pass_control = "";

      if ($username ==""){
      $error_msg .= "<b> fill username! </b> <br/>";
      }
      if ($password ==""){
      $error_msg .= "<b> fill password </b> <br/>";
      }


      if ($error_msg !=""){
        echo $error_msg;
      }else{
				//returns mysqli_result object which implements "Traversable" which allows
				//for the use of foreach
			$results = $DB_SQL->getUser($username);
			if($results->num_rows == 0){
            $error_msg = "wrong username or password";
            echo $error_msg;


			}else{
            foreach ($results as $result) {
							$_SESSION['name'] = $result['fullname'];
              $pass_control = $result['password'];
            }
            if($pass_control == md5($password)){
              header('location:index.php');
            } else {
              $error_msg = "wrong username or password";
              echo $error_msg;
            }
          }
        }
      }

?>

<div id="main">

	<div class="main_top">
			<h1>Login</h1>
		</div>

		<div class="main_body">

				<p>sign in.</br>
				(remember you can't acces some pages without logging in. E.X: the shop or the cart)</p>

        <form method="post" >
        <input type="text" id="username" name="username" placeholder="Enter username" maxlength="15"  /> </br>
        <input type="password" id="pass" name="password" placeholder="Enter Password" maxlength="15"  />
        <button id="btn-login" name="btn-login"> Login </button>
        </form>
        <a href="register.php">Sign Up Here...</a>
      </div>

		<div class="main_bottom"></div>

</div>

  <?php
  $page_title = 'login';
  $thisPage='login';

  $mastermain= ob_get_contents();
  ob_end_clean();

  $masterlink ="";
  $masterhead ="";

  Include("master.php");

  ?>
