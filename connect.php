<?php
require('bootstrap.php');
// echo(password_hash('toto', PASSWORD_DEFAULT));
session_start();

if(isset($_SESSION["user"])){
    header('Location: index.php');
} else if(isset($_POST["email"]) && isset($_POST["passwd"])) {
    // $query = "SELECT * FROM utilisateurs WHERE login='{$_POST["login"]}'";
    // $stmt = $db->query($query);
    $repositoryUser = $entityManager->getRepository('Utilisateur');
    $user = $repositoryUser->findBy(array('email' => $_POST["email"]));
    $user = $user[0];
        if(empty($user)){
            header('Location: connect.php?error=login');
        } else {
            if(!password_verify($_POST['passwd'], $user->getPasswd())){
                header('Location: connect.php?error=mdp');
            } else {
                $_SESSION["user"] = $user;
                header('Location: index.php');
            }
        }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloggy - Sign in</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/connect.css">
</head>
<body>
    <div class='container'>
            <a class="backHome" href="index.php">< Get back to homepage</a>
            <form class='connectBox' method="POST" action="connect.php">
                <h1>Sign in</h1>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="passwd" required>
                <input type="submit" value="Connection">
            </form>
            <a class="signUp" href="signUp.php">Create an account ></a>
    </div>
</body>
</html>