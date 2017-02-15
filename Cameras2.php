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
.left {
    position: absolute;
    left: 185px;
    width: 80px;
    border: 2.5px solid #4c4a4a;
    padding: 10px;
}
</style>

<div id="main">

  <div class="main_top">
			<h1><B>ARLO Camera & accessories info-page2</b></h1>
	</div>
	<div class="main_body">
    <p>Hover your mouse on the products name for it's description</p></br>
    <img src="shop/Kodak Dock.jpg" alt="Kodak Dock.jpg" style="width:40%"></br>
      <div class="lol">
        <span><b><u>Kodak Dock & Wi-Fi 4x6” Photo Printer </br> with Advanced Patent Dye Sublimation Printing Technology & Photo Preservation Overcoat Layer - Compatible with Android & iOS</br></u></b></span>
          <div class="lol-content">
        <p><b><u>Price:	Fl 139.99</br>
                Product Description:</b></u></br></br>
            <B> ⦁	What You Get ⦁</b></br>
            <B> ⦁	1 KODAK Photo Printer Dock</b></br>
            <B> ⦁	1 iOS adapter</b></br>
            <B> ⦁	1 power adapter</b></br>
            <B> ⦁	Manual</b></br>
            <B> ⦁	10 Photo Cartridge & Paper Pack</b></br>
            <B> ⦁	A charging dock that prints on the pin!</b></br>
            <B>   ⦁	Specs ⦁	</b></br>
            <B> ⦁	Photo 4” x 6”</b></br>
            <B> ⦁	Unit measures 165.8 x 100 x 68.5mm</b></br>
            <B> ⦁	Weighs in at 760g</b></br>
            <B> ⦁	Main connection: 5-pin micro USB</b></br>
            <B> ⦁	Input: USB host</b></br>
            <B> ⦁	Supporting file: JPEG</b></br>
            <B> ⦁	Printing method: Dye sublimation thermal transfer</b></br>
            <B> ⦁	Gradation: 256 Gradations/16.7 million colors</b></br>
            <B> ⦁	App available via Google Play & App Store</b></br>
            <B> ⦁	Compatible Ink Cartridges: PHC-40, 80, 120</b></br>

            </p>
          </div>
        </br></div>
        <section>
          <img src="shop/Epson 50.jpg" alt="paper" style="width:30%">
          <img src="shop/Epson 100.jpg" alt="paper2" style="width:30%"></br>
            <div class="lol">
              <span><b><u>Epson Value Photo Paper Glossy, Letter "4x6", (50 / 100) Sheets</br></br></u></b></span>
              <div class="lol-content">
                <p><u>Price:	Fl 13.99 / Fl 19.99</br>
                  Product Description:</b></u></br>
                  Epson's Value Photo Paper is available in Letter and 4x6 sizes.</br>
                  It works with all inkjet and Super tank printers.</br>
                  It's ideal for home, school and business projects.</br>
                  Epson's Value Photo Paper is backed by Epson's Paper Satisfaction Guarantee.</br>
                  It is our most affordable photo paper.</br>
                </p>
              </div>
            </br></div>
          </section>
          <section>
            <img src="shop/HP Advanced Photo Paper.jpg" alt="HP Advanced Photo Paper" style="width:30%"></br>
            <div class="lol">
              <span><b><u>HP Advanced Photo Paper, Glossy (100 Sheets, 4 x 6 Inches, borderless)</u></b></span>
              <div class="lol-content">
                <p><b><u>Price: Fl 10.99</br>
                     Product Description:</b></u></br>
                     100 Sheets of 4 x 6 Inch HP Advanced Photo Paper</br>
                     Get vivid, instant-dry glossy photos on any inkjet printer with HP Q6638A Advanced Photo Paper.</br>
                     This convenient, high-quality paper dries instantly for easy handling without smudging, so your photos are ready to share right out of the printer.</br>
                     And it provides you with brilliant colors and deep blacks that stand up against the test of time,</br>
                     especially when you choose to display your photos behind glass or store in albums.</br></br>
                   </p>
              </div>
        </br></div>
      </section>
    <div class="Left">
      <form action="Cameras.php">
        </br></br><button id="btn-Prev" name="btn-Prev"> Prev Page </button>
      </form>
    </div>
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
