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

    /**
     * Validate user input
     */

    if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['password']) AND !empty($_POST['password2']))
    {
        $pseudolength = strlen($pseudo);
        if($pseudolength <= 255)
        {
            if($password == $password2)
            {
                $insertusers = $connexion->prepare("INSERT INTO users (pseudo,email, mot_de_passe) VALUES (?, ?, ?)");
                $insertusers->execute(array($pseudo, $mail, $password));
                $erreur = 'Votre compte a bien été crée. <a href="modal.php">Me connecter</a>';
                
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

    if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name']))
    {
        $tailleMax = 2097152;
        $extensionValides = array('jpg','jpeg','gif','png');
        if($_FILES['avatar']['size'] <= $tailleMax)
        {
            $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.' ),1));
            if(in_array($extensionUpload, $extensionValides))
            {
                $chemin = "weebornes/avatars/" .$_SESSION['id']. "." . $extensionUpload;
                $resultat = move_uploaded_file($_FILES ['avatar']['tmp_name'],$chemin);
                if($resultat)
                {
                    $upDateAvatar = $connexion->prepare('UPDATE users SET avatar = :avatar WHERE id = :id');
                    $upDateAvatar->execute(array(
                        'avatar' => $_SESSION['id']. "." . $extensionUpload,
                        'id'=> $_SESSION['id']

                    ));
                }
                else
                {
                    $msg = "Erreur de téléchargement.";
                }
            }
            else
            {
                $msg = "Votre photo de profil doit être au format JPG, JPEG, GIF et PNG.";
            }
        }
        else
        {
            $msg = "Votre photo de profil ne doit pas dépasser 2MO.";
        }
    }

}



?>

