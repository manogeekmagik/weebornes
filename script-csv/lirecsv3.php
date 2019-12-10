<?php

// ouverture du 2eme fichier csv 
try {
    $filename = 'fichier-des-bornes-electriques-.csv'; 
    
    
    $excel_array = []; 
    
    
    if (($h = fopen("{$filename}", "r")) !== FALSE)   
        
    {
      
      while (($data = fgetcsv($h, 1000, ";")) !== FALSE) 
      {
    
       $excel_array[]=$data;
      }
      fclose($h);
    }
    
    //var_dump($excel_array);
    }
    
    catch(PDOException $e){
     echo 'Echec de la connexion : '.$e->getMessage();
    
    }
  



try { 

require 'connectdb.php';
echo "je suis connecté";

$request6 = $connexion->prepare("INSERT INTO street(nom,city_id) VALUES (:nom,:city_id)");
$request6->bindParam(':nom',$rue);
$request6->bindParam(':city_id',$city_id);

$request7 = $connexion->prepare("SELECT id FROM city WHERE nom=:city_name");
$request7->bindParam(':city_name',$city_name);

foreach($excel_array as $line){

      $city_name=$line[8];
      /* var_dump($city_name); */
      $request7->execute();
      /* var_dump($exec); */
      $data = $request7->fetchAll(PDO::FETCH_ASSOC);
      var_dump($data);

      $city_id= $data[0]['id'];
      $rue=$line[1];
     /*  var_dump($rue); */
      $request6->execute();
  }

} 
catch (PDOException $e){
die ("erreur de creation : ". $e);
}

?>