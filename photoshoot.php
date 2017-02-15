<?php
session_start();

ob_start();

?>

<style>
.lol {
    position: left;
    display: inline-block;
}

.lol-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 700px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
}

.lol:hover .lol-content {
    display: block;
}
.right {
    position: absolute;
    right: 185px;
    width: 80px;
    border: 0px solid #4c4a4a;
    padding: 10px;
}
.img {
    display: block;
    margin: auto;
    width: 40%;
}
.center {
    height: 200px;
    position: relative;
    border: 3px solid green;
}

.center p {
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}
</style>

<div id="main">

  <div class="main_top">
			<h1><B>Welcome to ARLO Camera shop & accessories !</b></h1>
	</div>
	<div class="main_body">
    <p>Hover your mouse on the products name for it's description</p></br>
      <div class="lol">
        <div class="ismg">
          <img src="shop/basicshoot.jpg" alt="basicshoot.jpg" style="width:97.5%"></br>
        </div>
        <span><b><u>ALRO basic shoot</br></br></u></b></span>
          <div class="lol-content">
            <p><b><u>ALRO basic shoot</b></u></br>
                     5 photos</br>
                  <b>You can choose between:</b></br>
                     Print photo or usb(or both)</br>
                     Plain or added background</br>
              <u><b> Price: Fl 65.-- </b></u></br>
            </p>
          </div>
  </br></div>
    <section>
      <div class="lol">
        <div class="ismg">
          <img src="shop/familyshoot.jpg" alt="familyshoot.jpg" style="width:97.5%"></br>
        </div>
        <span><b><u>ALRO family shoot</br></br></u></b></span>
          <div class="lol-content">
            <p><b><u>ALRO family shoot</b></u></br>
                     8 photos</br>
                  <b>You can choose between:</b></br>
                     Print photo or usb(or both)</br>
                     Plain or added background</br>
              <u><b> Price: Fl 120.-- </b></u></br>
              <b> + get a free 7 inch digital photo frame. </b>
            </p>
          </div>
  </br></div>
</section>
<section>
  <div class="lol">
    <div class="ismg">
      <img src="shop/weddingshoot.jpg" alt="weddingshoot.jpg" style="width:97.5%"></br>
    </div>
    <span><b><u>ALRO wedding shoot </br></br></u></b></span>
      <div class="lol-content">
        <p><b><u>ALRO wedding shoot</b></u></br>
                 250 photo</br>
                 You will get print photo & usb</br>
              <b>Get a free 7 inch digital photo frame</b></br>
          <b><u> Price:Fl 550,--</b></u></br>
        </p>
      </div>
</br></div>
</section>
<section>
  <div class="lol">
    <div class="ismg">
      <img src="shop/babyshoot.jpg" alt="babyshoot.jpg" style="width:97.5%"></br>
    </div>
    <span><b><u>ALRO baby shoot </br></br></u></b></span>
      <div class="lol-content">
        <p><b><u>ALRO new born shoot (till 1 year old)</u></b></br>
                15 photo</br>
                You will get print photo & usb</br>
                Plain or added background(or both) + costum</br>
          <b><u>Price: 150 fl</u></b></br>
            <b> Getr a free 7 inch digital photo frame</b></br>

          </div>
  </br></div>
</section>
<section>
  <div class="lol">
    <div class="ismg">
      <img src="shop/kidsshoot.jpg" alt="kidsshoot.jpg" style="width:97.5%"></br>
    </div>
    <span><b><u>ALRO kids shoot </br></br></u></b></span>
      <div class="lol-content">
        <p><b><u>ALRO kids shoot (2+ year old)</u></b></br>
                 15 photo</br>
                 You will get print photo & usb</br>
                 Plain or added background(or both)</br>
          <b><u> Price: Fl 150 </u></b></br>
            <b>  Getr a free 7 inch digital photo frame</b>

          </div>
  </br></div>
</section>
  </div>
</br></br>
</div>
      <div class="main_bottom"></div>
</div>

<?php
$page_title = 'Info';
$thisPage='Info';

$mastermain= ob_get_contents();
ob_end_clean();

$masterlink ="";
$masterhead ="";

Include("master.php");

?>
