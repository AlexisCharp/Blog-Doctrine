<?php
require 'bootstrap.php';
session_start();
unset($_SESSION["from"]);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloggy - Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php require 'navbar.php'; ?>
    <div class="containerGlobal">
        <div class="title">
            <h1>Welcome on Bloggy !</h1>
        </div>
        <div class="container">
            <div class="lastArticles">
                <h2>Last articles</h2>
                <div class="articlesSection">
                    <?php
                    $articlesRepository = $entityManager->getRepository('Article');
                    $articles = $articlesRepository->findBy(array(), array('datepost'=>'DESC'));
                    for($i=0;$i<4;$i++){
                        echo("<a class='article' href='./article.php?id={$articles[$i]->getId()}'><p>{$articles[$i]->getTitle()}</p></a>");
                    }
                    ?>
                </div>
                <a class="linkAll" href="allArticles.php">All the articles ></a>
            </div>
            <div class="blogMenu">
                
            </div>
        </div>
    </div>
</body>
</html>