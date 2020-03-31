<?php

require 'bootstrap.php';
session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloggy - All the articles</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/allArticles.css">
</head>
<body>
    <?php require 'navbar.php'; ?>
    <div class="container">
        <a href=""></a>
        <?php
            $articles = $entityManager->getRepository('Article')->findBy(array(), array("datepost"=>"DESC"));
            foreach($articles as $article){
                echo('<a class="link" href="article.php?id=' . $article->getId() .'">'. $article->getTitle() .'</a>');
            }
        ?>
    </div>
</body>
</html>