<?php
require 'bootstrap.php';
session_start();
if(!isset($_SESSION["usr"]) || $_SESSION["usr"]->getStatus() != 1){
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloggy - Write an article</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/articleCreation.css">
</head>
<body>
    <?php require 'navbar.php'; ?>
    <div class="container">
        <h1>Write an article</h1>
        <form method="POST" action="treatArticle.php">
            <label for="title">Articles's title:</label>
            <input type="text" name="title" id="title" require>
            <label for="content">Article's content:</label>
            <textarea name="content" id="content" require></textarea>
            <input type="submit" value="Send">
        </form>
    </div>
    
</body>
</html>