<?php

/**
 * Allows connection to the database and creation of a user account
 */

if(isset($_POST['registration']))
{       

/**
 * Converts special characters to HTML entities
 * and secure user data
 */

    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mail = htmlspecialchars($_POST['mail']);
    $password = sha1($_POST['password']);
    $password2 = sha1($_POST['password2']);
    $avatar = $_FILES['avatar']['name'];
    $role = '2';



    /**
     * Validate user input
     */

    if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['password']) AND !empty($_POST['password2']) AND !empty($_FILES['avatar']))
    {
    $pseudolength = strlen($pseudo);

    if($pseudolength <= 255)
    {          
    if($password == $password2)
    {
        $insertusers = $connexion->prepare("INSERT INTO users (pseudo,email, mot_de_passe,avatar, roles_id) VALUES (?, ?, ?, ?,?)");
        $insertusers->execute(array($pseudo, $mail, $password, $avatar,$role));
        $erreur = 'Votre compte a bien été crée. <a href="moncompteutilisateur.php">Me connecter</a>';   /**Modifier ici quand modal effectué */ 
    }
    else
    {
    /**
    * Validate that the password must be equal
    */
    $erreur = "Mot de passe différent. Recommencez.";
    }

    }
    else
    {
    /**
    * Length of the nickname
    */
    $erreur = "Votre pseudo ne doit pas dépasser 255 caractères.";
    }
    }
    else
    {
    /**
    * Make sure all fields are filled
    */
    $erreur = "Tous les champs doivent être complétés.";
    }
}




?>

