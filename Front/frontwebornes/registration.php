<?php

/* require '../script-folder/connectdb.php'; */

/**
 * Allows connection to the database and creation of a user account
 */

/* if(isset($_POST['registration'])) */
/* { */       
    /**
     * Converts special characters to HTML entities
     * and secure user data
     */
    
    /* $pseudo = htmlspecialchars($_POST['pseudo']);
    $mail = htmlspecialchars($_POST['mail']);
    $password = sha1($_POST['password']);
    $password2 = sha1($_POST['password2']); */

    /**
     * Validate user input
     */

    /* if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['password']) AND !empty($_POST['password2']))
    {
        $pseudolength = strlen($pseudo);
        if($pseudolength <= 255)
        {
            if($password == $password2)
            {
                $insertusers = $connexion->prepare("INSERT INTO users (pseudo,email, mot_de_passe) VALUES (?, ?, ?)");
                $insertusers->execute(array($pseudo, $mail, $password));
                $erreur = "Votre compte a bien été crée. <a href=\"login.php\">Me connecter</a>";
                
            }
            else
            { */
                /**
                * Validate that the password must be equal
                */
          /*       $erreur = "Mot de passe différent. Recommencez.";
            }
        }
        else
        { */
            /**
            * Length of the nickname
            */
            /* $erreur = "Votre pseudo ne doit pas dépasser 255 caractères.";
        }
    }
    else
    { */
        /**
        * Make sure all fields are filled
        */
      /*   $erreur = "Tous les champs doivent être complétés.";
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

 */

?>

<?php
//Doctype HTML
    include("template/doctype.php");   
?>

<?php
//header
    include("template/header.php"); 
?>

<main>
      <!-- Registration Form -->

<div class="container register-form mt-3">

    <div class="form  text-center">
    <h2 class="text-center"><span class="badge badge-success">Inscription</span></h2>
        
    </div>

    <form method="POST" action="" enctype="multipart/form-data">

        <div class="form-content mt-5 ">

        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control border border-info bg-light" placeholder="Pseudo *" id="pseudo" name="pseudo" />
                </div>
                <div class="form-group">
                    <input type="email" class="form-control border border-info bg-light" placeholder="Email *" id="mail" name="mail" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control border border-info bg-light" placeholder="Password *" id="password" name="password"/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control border border-info bg-light" placeholder="Confirm Password *" id="password2" name="password2"/>
                </div>
                <div>
                    <h5><label class="badge badge-success">Avatar: </label></h5>
                    <input type="file" name="avatar" >
                </div>
                <br>
                
            </div>
        </div>

<div class="d-flex justify-content-center">
        <input type="submit" name="registration" value="Enregistrer" class="btn btn-success">
</div>

    </form>
    <br>
    <br>

</div>


</main>
<?php
//footer
    require_once("template/footer.php");   
?>