<?php
try {
    require('../script-folder/connectdb.php');
    
    $request = $connexion->prepare("INSERT INTO terminal(Nom) VALUES (:nom)");   
    $request->bindParam(':nom', $nom);
    /* $request->bindParam(':prenom', $prenom);
    $request->bindParam(':num', $phone); */

    foreach ($data as $line){
    $nom = $line[0];
    /* $prenom = $line[1];
    $phone = $line[2]; */
    $request->execute();
    }
    echo 'vous avez inséré votre CSV';

} catch (PDOException $error) {
    die($error);
    echo 'Insert échoué';
}

?>