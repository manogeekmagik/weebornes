<?php
session_start();

require '../script-folder/connectdb.php';

if(isset($_GET['id']) AND $_GET['id'] > 0 )
{
    $getid = intval ($_GET['id']);
    $requser = $connexion->prepare('SELECT * FROM users WHERE id = ?');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();


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

    <div class="form mt-5 text-center">
        <h1>Mon compte</h1>
    </div>

    <div class="text-center">
        <br>
        <br>
        <p>Pseudo : <?php echo $userinfo ['pseudo']?> </p>
        <br>
        <p>Adresse Mail : <?php echo $userinfo ['email']?></p>
        <br>
        <p>Avatar:<?php echo $userinfo ['avatar']?> </p>
        <br>
        <p>Fonction : <?php echo $userinfo ['roles_id']?></p>
        <br>
        <?php
        if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']);
        {
        ?>
        <a href="modifprofil.php">Modifier mon profil</a>
        <br>
        <br>
        <a href="deconnexion.php">Se déconnecter</a>
        <?php  
        }
        ?>


    </div>
     
    
    </div>


</body>
</html>
<?php
}

?>