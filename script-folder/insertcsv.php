<?php
try {
    require('../script-folder/connectdb.php');
    
    $request = $dbh->prepare("INSERT INTO terminal(Nom, Prenom, Phone) VALUES (:nom, :prenom, :num)");   
    $request->bindParam(':nom', $nom);
    $request->bindParam(':prenom', $prenom);
    $request->bindParam(':num', $phone);

    foreach ($data as $line){
    $nom = $line[0];
    $prenom = $line[1];
    $phone = $line[2];
    $req->execute();
    }
    echo 'vous avez inséré votre CSV';

} catch (PDOException $error) {
    die($error);
    echo 'Insert échoué';
}

?>