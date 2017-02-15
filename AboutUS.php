<?php

ob_start();

?>


<style>
.container {
    position: relative;
}

.center {
    position: absolute;
    left: 0;
    top: 50%;
    width: 100%;
    text-align: center;
    font-size: 18px;
}

img {
    width: 100%;
    height: auto;
    opacity: 0.3;
}
</style>
        <div id="main">

        	<div class="main_top">
            	<h1>AboutUS</h1>
            </div>

           	<div class="main_body">
                <p><b>Welcome to ALRO.</b></p>
                <p>The owners of ALRO are Bertubelo Alvaro  and Anabella Rodriguez.
                   ALRO is a place were you can  buy a lot of items such as camaras, printers, photosessions.</p>

                <p>In 2012 we open our doors in herenstraat in punda Curacao. Sins than our business has been doing very well. We as owner of ALRO are very happy to make the best desisio of our life to open this business and make our dreams to be true.</p>

                <p>With this website we want to change a little bit and go digital to expand our customers serices and to develop online shopping and local delivery and worldwide product shipments.</p>

                <div class="container">
                  <img src="IMG/motto.png" alt="Logo" style="">

                  <div class="center"></div>
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
