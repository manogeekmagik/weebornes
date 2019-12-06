<?php

$servername = "localhost";
$username = "dmhma";
$password = "webornes5";
$dbname = "webornes"; 

// Create connexion
try {
    $connexion = new PDO("mysql:host=$servername;dbname=webornes", $username,$password); 
    $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'je suis connecté';
    
    
    


 $req = $connexion->prepare("INSERT INTO roles (nom_du_role)
    VALUES
    ('Utilisateur'),
    ('Moderateur'),
    ('Admin'),
    ('Borner')");
    $req->execute();
    echo "insert dans roles ok ";
}

    catch(PDOException $e){
        echo 'Echec de la connexion : '.$e->getMessage();
    }
?>







   
  