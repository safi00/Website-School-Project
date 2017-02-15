<?php
session_start();

ob_start();

?>


<div id="main">
	<div class="main_top">
			<h1>Welcome to ARLO Camera shop & accessories !</h1>
		</div>

		<div class="main_body">
			<p>Welcome <b><?php echo (isset($_SESSION['name']) ? $_SESSION['name'] : 'guest'); ?> </b>, to ARLO.</br>
				One the best online Camera & camera accessories shop.</br>
				We take pride in making sure our costumers feel satisfied when doing business with us.</br>
				wether you are a guest or a loyal user, here out costumers are <b>KING!</b></br>
				<b>Make yourself at home, Browse our website</b>
				<section>
  <img class="mySlides" src="homeIMG/slide1.jpg"
  style="width:90%">
  <img class="mySlides" src="homeIMG/slide2.jpg"
  style="width:90%">
  <img class="mySlides" src="homeIMG/slide3.jpg"
  style="width:90%">
    <img class="mySlides" src="homeIMG/slide4.jpg"
  style="width:90%">
</section></br></br></br></br></br>
<p>Hey <b><?php echo (isset($_SESSION['name']) ? $_SESSION['name'] : 'guest'); ?> </b>,</br></br>
this is a raffle that's up and coming soon.</br></p>
<div id="plsno">
<a href="contact.php"><img src="homeIMG/raffle.jpg" alt="Raffle" style="width:100%"></a>
</div>
<p>Where you could win a bunch of different <b>BIG</B> prices</br>
like:</br>
<b>Really nice discounts,</b></br>
<b>temporary tax-free purchases,</b></br>
<b>Bundles,</b></br>
<b>AND MORE!!!</b></br></br></br>
join by <b>making <a href="contact.php"> contact with us</a> and asking about the raffle.</b></p>
</section>

<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
}
</script>
</div>

		<div class="main_bottom"></div>

</div>

<?php
$page_title = 'Home';
$thisPage='Home';

$mastermain= ob_get_contents();
ob_end_clean();

$masterlink ="";
$masterhead ="";

Include("master.php");

?>
