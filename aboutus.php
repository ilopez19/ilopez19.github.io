<?php
#parset("PHP File Header.php")

include 'www/header.php';
?>

<div class="row" >
    <h2 class="title2">About Us </h2>
    <hr>
    <br>

    <div class="column1">
        <h3> James Myers </h3>
        <img class="profile"  src="img/James.jpg">
        <h4 class="title2">Email: jammyer@iu.edu </h4>
        <p>James is a hard-working and driven person working
           his way through college in pursuit of a better life.
           In the future, with his degree, he hopes to sit at a
           desk all day long and make a lot of money. He would
           like to use that money to start a foundation for kids in need.
           In his free time, he likes to draw, ride motorcycles, and play video games.
    </div>


    <div class="column">
        <h3> Isabel Lopez </h3>
        <img class= profile src="img/izzy.jpg" >
        <h4 class="title2">Email: lopezi@iu.edu </h4>
        <p>Isabel is a Sophmore at SOIC studying informatics
           with a specialization in Applied Data Science.
           In her free time, she likes playing online games
           and meeting new people. She currently has 3 jobs
           and a fun fact is that she will be going to Sweden in March!
        </p>

    </div>
    <div class="column1">
        <h3> Zach Gregory </h3>
        <img id= zach src="img/zach.jpg" >
        <h4 class="title2">Email: zdgregor@iu.edu
        </h4>
        <p>Zach is currently an IUPUI Informatics major
           student. He wants to pursue a career in application
           software / business management. In his free time, he
           enjoys spending time with friends as well as
           playing video games with friends.
        </p>

    </div>
    <div class="column">
        <h3> Julie Tadrous </h3>
        <img class= profile src="img/Julie.jpg" >
        <h4 class="title2">Email:  jtadrous@iu.edu </h4>
        <p>Julie is currently a student at IUPUI studying Informatics.
           She hopes to go into a career in web design and development
           in the future. In her free time, she enjoys reading,
           painting, and listening to music.
        </p>

    </div>
</div>

<?php

require_once('www/footer.php');
?>

