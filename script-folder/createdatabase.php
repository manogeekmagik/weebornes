<?php
$servername = "localhost";
$username = "dmhma";
$password = "webornes5";
$dbname = "webornes";

// Create database +connexion
try {
    $connexion = new PDO("mysql:host=$servername;$dbname", $username,$password); 
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 1f9e8c92394bc2f8b73a62df1372b1ed3979e0c2
=======

    
>>>>>>> 47f42b5a331386f7677ac509aca8da8d0d38c52f
    $connexion->exec("CREATE DATABASE IF NOT EXISTS webornes CHARACTER SET utf8mb4 COLLATE utf8mb4_bin");
    

    echo 'Base de données crée'; 
    }
    catch(PDOException $e){
        echo 'Echec de la connexion : '.$e->getMessage();
    }