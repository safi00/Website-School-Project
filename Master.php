<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- css -->
		<link rel="stylesheet" type="text/css" href="style.css">
		<title><?php echo $page_title; ?></title>
		<link rel="shortcut icon" type="image/x-icon" href="IMG/Logo.png"/>
		<style>
		li a, .dropbtn {
		    display: inline-block;
		    color: grey;
		    text-align: left;
		    padding: 14px 16px;
		    text-decoration: none;
		}
		li.dropdown {
		    display: inline-block;
		}

		.dropdown-content {
		    display: none;
		    position: absolute;
		    background-color: #4c4a4a;
		    min-width: 120px;
		    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		    z-index: 1;
		}

		.dropdown-content a {
		    color: #4c4a4a;
		    padding: 12px 16px;
		    text-decoration: none;
		    display: block
		}

		.dropdown-content a:hover {background-color: #4c4a4a}

		.dropdown:hover .dropdown-content {
		    display: block;
		}
		</style>
    <div id="header">
      <h1> <a href="index.php"><img src="logo.png" alt="Logo" style="width:30px;height:30px;"></a>ARLO Photoshop</h1>
        <ul>
            <li><a href="index.php">Home</a></li>
						<li class="dropdown">
    					<a href="javascript:void(0)" class="dropbtn">store</a>
    					<div class="dropdown-content">
      				<a href="cameras.php">Product info</a>
      				<a href="photoshoot.php">Photoshoot info</a>
							<a href="<?php echo (isset($_SESSION['name']) ? 'store.php' : 'login.php'); ?>">Store</a>
							<a href="<?php echo (isset($_SESSION['name']) ? 'view_cart.php' : 'login.php'); ?>">Check-OUT</a>
						</li>
            <li><a href="AboutUS.php">About</a></li>
            <li><a href="<?php echo (isset($_SESSION['name']) ? 'edit.php' : 'login.php');?>"><?php echo (isset($_SESSION['name']) ? $_SESSION['name'] : 'Log in'); ?></a></li>
            <li><a href="Logout.php"> Log Out</a></li>
        </ul>
				<?php echo $masterhead; ?>
    </div>
		<!-- <link rel="shortcut icon" type="image/x-icon" href="IMG\Logo.png"/> -->
	</head>
	<body>

<?php echo $mastermain; ?>
  </body>
  <footer>
    <div id="footer">
			<p><?php echo (isset($_SESSION['name']) ? $_SESSION['name'] : 'guest'); ?>    ---
		<?php echo (isset($_SESSION['name']) ? "<a href=\"edit.php\">Edit Profile</a>" : "<a href=\"login.php\">Login to view</a>");?>  ---
		<a href="Contact.php">Contact US!</a></p>  ---
			<!-- //ternary operator
		  condition ? ifTrue : ifFalse -->
  </footer>
  </html>
