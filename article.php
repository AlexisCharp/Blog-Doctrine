<?php

require 'bootstrap.php';
if(isset($_GET['id'])){
    $articlesRepository = $entityManager->getRepository('Article');
    $article = $articlesRepository->findBy(array("id"=>$_GET["id"]));
    $article = $article[0];
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
        <h1><?php echo($article->getTitle()) ?></h1>
        <p><?php echo($article->getText()) ?></p>
    </div>
</body>
</html>