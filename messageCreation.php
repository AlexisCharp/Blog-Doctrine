<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création d'un message</title>
</head>
<body>
    <form action="">
        <input type="text">
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>

<?php
require "cli-config.php";
$message = "Bonjour c'est mon message";
$entityManager->persist($message);
$entityManager->flush();
?>