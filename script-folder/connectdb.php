<?php 

$servername = "localhost";
$username = "dmhma";
$password = "webornes5";
$dbname = "webornes"; 

// Create connexion
try {
    $connexion = new PDO("mysql:host=$servername;dbname=webornes", $username,$password); 
    $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /* echo "Connexion à la base de donnée"; */
    
    }
    catch(PDOException $e){
        echo 'Echec de la connexion : '.$e->getMessage();
    }
?>