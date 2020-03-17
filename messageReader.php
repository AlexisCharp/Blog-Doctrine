<?php

require 'bootstrap.php';
$messageRepository = $entityManager->getRepository('Message');
$message = $messageRepository->find(5);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo($message->getUtilisateur()->getLogin(). " a écrit : " . $message->getText()) ?></p>
</body>
</html>