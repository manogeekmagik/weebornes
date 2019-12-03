<?php
session_start();

require '../script-folder/connectdb.php';

if(isset($_SESSION['id']))
{
    $requser = $connexion->prepare("SELECT * FROM users WHERE id = ? ");
    $requser->execute(array($_SESSION['id']));
    $user = $requser->fetch();

    if(isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $user['pseudo'] )
    {
        $newpseudo = htmlspecialchars($_POST['newpseudo']);
        $insertpseudo = $connexion->prepare("UPDATE users SET pseudo = ? WHERE id = ?");
        $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
        header('Location: moncompte.php?id='.$_SESSION['id']);
    }
    if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['mail'] )
    {
        $newmail = htmlspecialchars($_POST['newmail']);
        $insertmail = $connexion->prepare("UPDATE users SET email = ? WHERE id = ?");
        $insertmail->execute(array($newmail, $_SESSION['id']));
        header('Location: moncompte.php?id='.$_SESSION['id']);
    }
    if(isset($_POST['newpassword1']) AND !empty($_POST['newpassword1']) AND isset($_POST['newpassword2']) AND !empty($_POST['newpassword2']))
    {
        $mdp1 = sha1($_POST['newpassword1']);
        $mdp2 = sha1($_POST['newpassword2']);
        if($mdp1 == $mdp2) 
        {
        $insertmdp = $connexion->prepare("UPDATE users SET mot_de_passe = ? WHERE id = ?");
        $insertmdp->execute(array($mdp1, $_SESSION['id']));
        header('Location: moncompte.php?id='.$_SESSION['id']);
        }
        else
        {
            $msg = "Vos 2 mots de passe ne sont pas identiques.";
        }
    }

?>

<!DOCTYPE html>
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
        <h1>Modification du profil</h1>
    </div>

    <form method="POST" action="">

        <div class="form-content mt-5">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Pseudo : </label>
                    <input type="text" name="newpseudo" placeholder="Pseudo" id="newpseudo"  value="<?php echo $user['pseudo']; ?>" class="form-control" /><br>
                    <label>Adresse mail : </label>
                    <input type="mail" name="newmail" placeholder="Mail" id="newmail" value="<?php echo $user['email']; ?>" class="form-control" /><br>
                    <label>Nouveau mot de passe : </label>
                    <input type="password" name="newpassword1" placeholder="Entrer votre nouveau mot de passe" id="password1"  class="form-control"/><br>
                    <label>Confirmer votre mot de passe : </label>
                    <input type="password" name="newpassword2" placeholder="Confirmer le mot de passe" id="password2"  class="form-control"/><br>
                    <label>Modifier votre avatar : </label>
                    <input type="img" name="newavatar" placeholder="avatar" id="newavatar"  class="form-control"/><br>
                    
                </div>
            </div>
        </div>

        <input type="submit" name="login" value="Modification" class="btn btn-dark">

    </form>



</body>
</html>
<?php
}
else
{
    header("Location: login.php");
}

?>