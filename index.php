<?php
#parset("PHP File Header.php")

include 'www/header.php';
?>

    <div class="row2" >
        <h2 class="title2"> Home </h2>
        <hr>
        <br>

        <div class="column2">
            <h3 class="title2" > Our Mission</h3>
            <div class="mission">
                <p> Our mission as a group of four is to bring to light the information that the world has yet to see at no cost.
                    We want this work to not only be accessible to all, but also we believe this website can be a huge step forward for a bigger data site
                    with years of albums and history.
                </p>
            </div>

        </div>

        <div class="column4">
            <h3 class="title2"> What do we do ? </h3>
            <div class="mission">
                <h3> Our website offers you the ability to search by country and music genre the top albums of 2019 from 20 counties from across the world . The genres range from
                    hip-hop/rap, alternative rock, and ranchera music. If you have an account on our website you are able to find lyrics for selected song from each album. You are also able to
                    hear song samples from the top songs on each album. Below you will be able to create an account, and have some fun, fun, fun.
                </h3>
            </div>


        </div>

        <div class="column3">
            <h3 class="title2"> Some Countries We Feature</h3>
            <p> Some of the countries that are found on our website are listed below </p>

            <div class="galley">
                <div class="clipped-border" id="tooltip" >
                    <img src="img/Egypt2.png" id="clipped">
                    <h3> Egypt </h3>
                </div>
                <div class="clipped-border">
                    <img src="img/brazil.png" id="clipped">
                    <h3> Brazil </h3>
                </div>
                <div class="clipped-border">
                    <img src="img/france1.png" id="clipped">
                    <h3> France </h3>
                </div>
                <div class="clipped-border">
                    <img src="img/japan.jpg" id="clipped">
                    <h3> Japan </h3>
                </div>
            </div>

        </div>
    </div>

<?php

require_once('www/footer.php');
?>