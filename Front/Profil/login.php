<?php

session_start();

if(isset($_POST['login']))
{
    $pseudoconnect = htmlspecialchars ($_POST['pseudoconnect']);
    $passwordconnect = sha1($_POST['passwordconnect']);

    if(!empty($pseudoconnect) AND !empty($passwordconnect))
    {
        $requser = $connexion->prepare("SELECT * FROM users WHERE pseudo = ? AND mot_de_passe = ?");
        $requser->execute(array($pseudoconnect, $passwordconnect));
        $userexist = $requser->rowCount();
        if($userexist == 1)
        {
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['pseudo'] = $userinfo['pseudo'];
            header("Location: index.php?id=".$_SESSION['id']);
        }
        else
        {
            $erreur = "Pseudo ou mot de passe incorrect.";
        }
    }
    else
    {
        $erreur = "Tous les champs doivent être complétés.";
    }
}

?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>


<div class="container register-form">

    <div class="form mt-5">
        <h1>Connexion</h1>
    </div>

    <form method="POST" action="">

        <div class="form-content mt-5">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Pseudo *" id="pseudoconnect" name="pseudoconnect" />
                </div>
              
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password *" id="passwordconnect" name="passwordconnect"/>
                </div>                
            </div>
        </div>

        <input type="submit" name="login" value="Connexion" class="btn btn-dark">

    </form>

    <br>
    <br> -->
    <?php
        if(isset($erreur))
        {
            echo $erreur;
           
        }
    ?>
<!-- 
</div>


</body>
</html> -->