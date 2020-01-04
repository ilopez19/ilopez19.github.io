<?php
//start session if it has not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$count = 0; //cart items

//retrieve cart content
if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];

    if ($cart) {
        $count = array_sum($cart);
    }
}

//set shoppingcart image either way whether it is full or not

$shoppingcart_img = (!$count) ? "shopping.png" : "shopping.png";

//set variables
$login = $name = $role = "";

if(isset($_SESSION['login']) AND isset($_SESSION['name']) AND isset($_SESSION['role'])){

    $login = $_SESSION['login'];
    $name = $_SESSION['name'];
    $role = $_SESSION['role'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <title> Global Jams </title>
    <link type="text/css" rel="stylesheet" href="css/website.css"/>
    <link type="text/js" href="slideshow.js"/>

    <!--    below is the script for the icons in the footer-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<div id="wrapper">
    <div id="flex-container">
        <div id="title">
            <div class="left">
                <a href="index.php"><img src="img/logo.png" width="390px" height="160px"></a>
            </div>
            <div id="right">
            <?php
            if(empty($login)){
                echo" <div id='hello'><br></div>";
            }else{
                echo" <div id='hello'><span style='color: #327aed; text-align: right;'> Welcome $login! </span></div>";
            }
            ?>
            <div id="navbar">

                <div><b> <a href="index.php">Home</a> </b></div>
                <div><b> <a href="inventory.php">Inventory</a> </b></div>
                <div><b> <a href="aboutus.php"> About Us </a> </b></div>
                <div><b> <a href="search.php">Search </a> </b></div>

                <?php
                if($role == 1){
                    echo "<a>  </a>";
                }
                if(empty($login)){
                    echo "<div><b><a href='loginform.php'> Login </a></b></div>";
                }else{
                    echo "<div><b><a href='logout.php'> Logout </a></b></div>";
                }
                ?>
                <div>

                    <a href="showcart.php">

                        <!--this is what allows the count of the number next to the cart to show up
                        and above this img tag is the href that leads to the cart for the user-->

                        <img src="img/<?=$shoppingcart_img ?>" width="40px" >
                        <br>

                        <?= $count ?> Item(s)

                    </a>
                </div>
            </div>
            </div>
        </div>