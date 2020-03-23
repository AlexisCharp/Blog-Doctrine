<?php
require 'bootstrap.php';
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloggy - Accueil</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php require 'navbar.php'; ?>
    <div class="containerGlobal">
        <div class="title">
            <h1>Bienvenue sur Bloggy !</h1>
        </div>
        <div class="container">
            <div class="lastArticles">
                <h2>Les derniers articles</h2>
                <div class="articlesSection">
                    <?php
                    $articlesRepository = $entityManager->getRepository('Article');
                    $articles = $articlesRepository->findAll();
                    for($i=0;$i<4;$i++){
                        echo("<a class='article' href='./article.php?id={$articles[$i]->getId()}'><p>{$articles[$i]->getTitle()}</p></a>");
                    }
                    ?>
                </div>
            </div>
            <div class="blogMenu">
                
            </div>
        </div>
    </div>
</body>
</html>