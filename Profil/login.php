<?php

require_once '../../script-csv/connectdb.php';


if(isset($_POST['login']))
{
   
    $pseudoConnect=htmlentities(trim($_POST['pseudoConnect']));
    $passwordConnect=htmlentities(trim($_POST['passwordConnect']));
    $password2Connect=htmlentities(trim($_POST['password2Connect']));
    
        if ($pseudoConnect&&$passwordConnect&&$password2Connect)
    
       {
            if($passwordConnect==$password2Connect)
    
            {
                
             $passwordConnect=md5($passwordConnect);
            
             $reg=$connexion("SELECT * FROM users WHERE username='$username'");
             $rows=mysql_num_rows($reg);
    
                   if ($rows==0)
    
                   {
    
             $query=mysql_query("INSERT INTO users VALUES('','$username','$password')"); 
             die("Inscription terminée<a href='login.php'>Connectez</a>vous.");
             
                 }else echo "Pseudo déja pris. Choisissez un autre Pseudo";
    
            } else echo "Les deux password doivent être indentiques";
    
        }else echo "Vous devez remplir tous les champs du formulaire";
    
}
    
    
    ?>

    

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

                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password2 *" id="passwordconnect2" name="passwordconnect2"/>
                </div>               
            </div>
        </div>

        <input type="submit" name="login" value="Connexion" class="btn btn-dark">

    </form>

    <br>
    <br> 
    <?php
        if(isset($erreur))
        {
            echo $erreur;
           
        }
    ?>

</div>


</body>
</html>