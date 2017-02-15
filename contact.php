<?php

ob_start();

?>


<style>
.container {
    position: absolute;
}

.center {
    position: absolute;
    left: 45%;
    top: 50%;
    width: 60%;
    text-align: center;
    font-size: 18px;
}

img {
    width: 60%;
    height: 50%;
    opacity: 0.5;
}
</style>
        <div id="main">

        	<div class="main_top">
            	<h1>AboutUS</h1>
            </div>

           	<div class="main_body">
                <p><b>Welcome to ALRO.</b></p>
                <p> Wij zijn hier om alle vragen die u heeft voor ons te beantwoorden. Steek je hand uit naar ons en we zullen zo snel als we kunnen reageren.</br>
                    Zelfs als er iets is wat je altijd al wilde ervaren of kopen en deze  niet te vinden is op ALRO,</br>
                    laat het ons weten en we beloven we zullen ons best doen om het voor u te vinden en een antwoord der over aan uw sturen.</br>

              <p><b>ALRO</b></p></br>
                <p><b> Adres:</b>	Herenstraat #23,Punda</p></br>
	              <p> <p><b>Tel:</b>		465-8585/ 868-0102</br></p>
	               <p><b>Email:</b>	info@alrocur.com</br></br></br></br></p>


                <p> <u><b>Openingstijden  :</B></u></br></br></p>

                 <p><b>Maandag	: 9:00 am – 2pm t/m 6 pm</br></p>
                <p> Dinsdag	: 9:00 am – 2pm t/m 6 pm</br></p>
                 <p>Woensdag	: 9:00 am – 2pm t/m 6 pm</br></p>
                 <p>Donderdag	: 9:00 am – 2pm t/m 6 pm</br></p>
                <p> Vrijdag	: 9:00 am – 2pm t/m 6 pm</br></p>
                <p> Zaterdag	: 9:00 am – 2pm t/m 6 pm </br></p>
                <p> Zondag	: 9:00 am – 2pm t/m 6 pm.</b></p></br>


                  <div class="center">
                    <div class="container">
                      <img src="homeIMG/contact.jpg" alt="Logo" style="">
                  </div>
                </div>

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
