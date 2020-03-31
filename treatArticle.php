<?php

require 'bootstrap.php';
session_start();

if(isset($_POST["title"]) && isset($_POST["content"])){
    if(isset($_SESSION["usr"]) && $_SESSION["usr"]->getStatus() == 1){
        $article = new Article();

        $usr = $entityManager->getRepository('Utilisateur')->find($_SESSION['usr']->getId());
        $date = new DateTime();

        $article->setUtilisateur($usr);
        $article->setTitle($_POST['title']);
        $article->setText($_POST['content']);
        $article->setDatepost($date);

        $entityManager->persist($article);
        $entityManager->flush();
        header('Location: index.php');
    } else {
        header('Location: index.php');
    }
} else {
    header('Location: index.php');
}

?>