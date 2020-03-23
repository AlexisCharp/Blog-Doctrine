<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloggy - Sign Up</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/signUp.css">
</head>
<body>
    <?php require 'navbar.php' ?>
    <div class="container">
        <div>
            <form class='connectBox' method="POST" action="treatSignUp.php">
                <h1>Sign Up</h1>
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
                <label for="username">Username :</label>
                <input type="text" id="username" name="username" required>
                <label for="firstname">Firstname :</label>
                <input type="text" id="firstname" name="firstname" required>
                <label for="lastname">Lastname :</label>
                <input type="text" id="lastname" name="lastname" required>
                <label for="password">Password :</label>
                <input type="password" id="password" name="passwd" required>
                <input type="submit" value="Sign up">
            </form>
        </div>
    </div>
</body>
</html>