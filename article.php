<?php

require 'bootstrap.php';
session_start();

if(isset($_GET['id'])){
    $articlesRepository = $entityManager->getRepository('Article');
    $article = $articlesRepository->findBy(array("id"=>$_GET["id"]));
    $article = $article[0];
    unset($_SESSION['from']);
} else {
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloggy - <?php echo($article->getTitle()) ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/article.css">
</head>
<body>
    <?php require 'navbar.php'; ?>
    <div class="container">
        <div class="containerArticle">
            <h1><?php echo($article->getTitle()); ?></h1>
            <p><?php echo($article->getText()); ?></p>
        </div>
        <div class="commentariesContainer">
            <?php
                $commentaries = $entityManager->getRepository('Commentary')->findBy(array('article'=>$article));
                $users = $entityManager->getRepository('Utilisateur');
                foreach($commentaries as $row){
                    echo('<div class="commentaries"><p class="username">'. $row->getUtilisateur()->getUsername() . ' - ' . $row->getDatepost()->format('d/m/Y à H:i') .'</p><p class="commentary">'. $row->getText() .'</p></div>');
                }
            ?>
            <hr>
            <?php
            if(isset($_SESSION["usr"])){
                echo("<form method='POST' action='commentCreation.php?from=". $_GET["id"] ."'><label for='commentTextarea'>Comment as " . $_SESSION["usr"]->getUsername() . "</label> <textarea name='commentTextarea' id='commentTextarea'></textarea><input type='submit' value='Send'></form>");
            } else {
                echo("<a class='signInNeeded' href='connect.php?from=" . $_GET["id"] . "'>You need to sign in to comment</a>");
            }
            ?>
        </div>
       
    </div>
</body>
</html>