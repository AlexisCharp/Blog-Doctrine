<?php

require 'bootstrap.php';
session_start();

if(isset($_GET['from']) && isset($_POST["commentTextarea"])){
    if(isset($_SESSION["usr"])){
        $comment = new Commentary();

        $usr = $entityManager->getRepository('Utilisateur')->find($_SESSION['usr']->getId());
        $article = $entityManager->getRepository('Article')->find($_GET["from"]);
        $date = new DateTime();

        $comment->setUtilisateur($usr);
        $comment->setArticle($article);
        $comment->setText($_POST['commentTextarea']);
        $comment->setDatepost($date);

        $entityManager->persist($comment);
        $entityManager->flush();
        header('Location: article.php?id='.$_GET['from']);
    } else {
        header('Location: index.php');
    }
} else {
    header('Location: index.php');
}

?>