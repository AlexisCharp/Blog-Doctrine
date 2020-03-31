<?php
require 'bootstrap.php';
session_start();

if(!isset($_SESSION["usr"])){
    $repositoryUser = $entityManager->getRepository('Utilisateur');
    $existingEmail = $repositoryUser->findBy(array('email' => $_POST["email"]));
    $existingUsername = $repositoryUser->findBy(array('username' => $_POST["username"]));
    $existingEmail = $existingEmail[0];
    $existingUsername = $existingUsername[0];
    if(empty($existingEmail) && empty($existingUsername)){
        if(!empty($_POST['username']) && !empty($_POST['passwd']) && !empty($_POST['email']) && !empty($_POST['firstname']) && !empty($_POST['lastname'])){
            $utilisateur = new Utilisateur();
            $utilisateur->setUsername($_POST['username']);
            $utilisateur->setPasswd(password_hash($_POST['passwd'], PASSWORD_DEFAULT));
            $utilisateur->setEmail($_POST['email']);
            $utilisateur->setFirstname($_POST['firstname']);
            $utilisateur->setLastname($_POST['lastname']);
            $utilisateur->setStatus(2);
            // $utilisateur->setPhoto('');
    
            $entityManager->persist($utilisateur);
            $entityManager->flush();
    
            header('Location: connect.php');
        } else {
            header('Location: signUp.php?error=neGrugePas');
        }
    } else {
        header('Location: signUp.php?error=existedeja');
    }
} else {
    header('Location: index.php');
}

?>