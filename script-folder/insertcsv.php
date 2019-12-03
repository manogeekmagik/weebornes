<?php
try {
    require('../script-folder/connectdb.php');
    require('../script-folder/lirecsv.php');
    
    $request = $connexion->prepare("INSERT INTO company(nom) VALUES (:nom)");   
    $request->bindParam(':nom', $nom);
    /* $request->bindParam(':prenom', $prenom);
    $request->bindParam(':num', $phone); */

    foreach ($excel_array as $line){
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