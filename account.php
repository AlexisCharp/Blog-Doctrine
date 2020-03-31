<?php

require 'bootstrap.php';
session_start();
if(!isset($_SESSION["usr"])){
    header('Location: connect.php');
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloggy - My account</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/account.css">
</head>
<body>
    <?php require 'navbar.php' ?>
    <div class="container">
        <div class="accountBox">
            <h1>My account</h1>
            <div class="accountInfo">
                <img src="img/picture.jpg" alt="">
                <div>
                    <?php
                    echo("<p>Username:<br><span>". $_SESSION["usr"]->getUsername() ."</span></p>");
                    echo("<p>Email:<br><span>". $_SESSION["usr"]->getEmail() ."</span></p>");
                    echo("<p>Firstname:<br><span>". $_SESSION["usr"]->getFirstname() ."</span></p>");
                    echo("<p>Lastname:<br><span>". $_SESSION["usr"]->getLastname() ."</span></p>");
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>