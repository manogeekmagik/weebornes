<?php
$servername = "localhost";
$username = "dmhma";
$password = "webornes5";
$dbname = "webornes";

// Create database +connexion
try {
    $connexion = new PDO("mysql:host=$servername;$dbname", $username,$password); 
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $connexion->exec("CREATE DATABASE IF NOT EXISTS webornes CHARACTER SET utf8mb4 COLLATE utf8mb4_bin");

<<<<<<< HEAD
    /* echo 'Base de données crée'; */ 
=======
    echo 'Base de données crée'; 
>>>>>>> cd9fec3a3e8967bd1dfa31e3f768987d38608fe7
    }
    catch(PDOException $e){
    echo 'Echec de la connexion : '.$e->getMessage();
}