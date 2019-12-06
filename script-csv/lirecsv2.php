<?php
// ouverture 3eme fichier csv 
try {
  $filename = 'cities.csv'; 
  
  
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

  $request4 = $connexion->prepare("INSERT INTO city(nom,departments_id) VALUES (:nom,:departments_id)");
  $request4->bindParam(':nom',$villes);
  $request4->bindParam(':departments_id',$departments_id);

  $request5 = $connexion->prepare("SELECT id FROM departments WHERE id=:departments_name");
  $request5->bindParam(':departments_name',$departments_name);

  foreach($excel_array as $line){

        $departments_name=$line[1];
        var_dump($departments_name);
        $exec = $request5->execute();
        var_dump($exec);
        $data = $request5->fetchAll(PDO::FETCH_ASSOC);
        var_dump($data[0]['id']);

        $departments_id= $data[0]['id'];
        $villes=$line[4];
        $request4->execute();
    }

} 
  catch (PDOException $e){
  die ("erreur de creation : ". $e);
}

?>
