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
require 'bootstrap.php';
//Regarder le problème de chemin qui oblige la déclaration des classes dans le bootstrap (autoload non-fonctionnel)
//Sûrement un souci lors de l'installation de Doctrine snif
$message = new Message();
$rep = $entityManager->getRepository('Utilisateur');
$user = $rep->find(1);

$text = "Bonjour c'est mon premier message";
$message->setText($text);
$message->setUtilisateur($user);

$entityManager->persist($message);
$entityManager->flush();
echo ($message->getId());
?>