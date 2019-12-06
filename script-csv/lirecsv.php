<?php

try {
    $filename = 'depreg.csv'; // ici j'appele le fichier excel 
    
    // creation variable du tableau
    $excel_array = []; 
    
    
    // Open the file for reading
    if (($h = fopen("{$filename}", "r")) !== FALSE)   // r est un mode de lecture de fopen
        
    {
      // Each line in the file is converted into an individual array that we call $data
      // The items of the array are comma separated
      // 
      while (($data = fgetcsv($h, 1000, ";")) !== FALSE) 
      {
        // Each individual array is being pushed into the nested array
       $excel_array[]=$data;
      }
    
      // Close the file
      fclose($h);
    }
    
    // Display the code in a readable format
    //var_dump($excel_array); 
    }
    
    catch(PDOException $e){
            echo 'Echec de la connexion : '.$e->getMessage();
    
    }

/*  var_dump($excel_array);  */


 try { 

  require 'connectdb.php'; // je rappel ma connexion pour entrer dans ma BDD 
  echo "je suis connecté";

  $request = $connexion->prepare("INSERT INTO county (nom) SELECT :nom WHERE NOT EXISTS (SELECT nom FROM county WHERE nom =:nom)"); // ne pas oublier les : dans VALUES
  $request->bindParam(':nom',$county_id);

  foreach($excel_array as $line){
      $county_id=$line[2];
      
      $request->execute();
  }

} 
  catch (PDOException $e){
  die ("erreur de creation : ". $e);
}  

try { 

  require 'connectdb.php';
  echo "je suis connecté";

  $request2 = $connexion->prepare("INSERT INTO departments(Numero_departement,nom,county_id) VALUES (:numero_departement,:nom,:county_id)");
  $request2->bindParam(':numero_departement',$num);
  $request2->bindParam(':nom',$nom);
  $request2->bindParam(':county_id',$county_id);

  $request3 = $connexion->prepare("SELECT id FROM county WHERE nom=:county_name");
  $request3->bindParam(':county_name',$county_name);

  foreach($excel_array as $line){

        $county_name=$line[2];
        var_dump($county_name);
        $exec = $request3->execute();
        var_dump($exec);
        $data = $request3->fetchAll(PDO::FETCH_ASSOC);
        var_dump($data[0]['id']);

        $county_id = $data[0]['id'];
        $num=$line[0];
        $nom=$line[1];
        $request2->execute();
    }

} 
  catch (PDOException $e){
  die ("erreur de creation : ". $e);
}  

// ouverture 2eme fichier csv 
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

    require 'connectdb.php'; // je rappel ma connexion pour entrer dans ma BDD 
    echo "je suis connecté";
  
    $request = $connexion->prepare("INSERT INTO outlet (nom) SELECT :nom WHERE NOT EXISTS (SELECT nom FROM outlet WHERE nom =:nom)"); // ne pas oublier les : dans VALUES
    $request->bindParam(':nom',$prise);
  
    foreach($excel_array as $line){
        $prise=$line[4];
        
        $request->execute();
    }
  
  } 
    catch (PDOException $e){
    die ("erreur de creation : ". $e);
  } 

  
  try { 

    require 'connectdb.php'; // je rappel ma connexion pour entrer dans ma BDD 
    echo "je suis connecté";
  
    $request = $connexion->prepare("INSERT INTO powers (typepower) SELECT :typepower  WHERE NOT EXISTS (SELECT typepower FROM powers WHERE typepower =:typepower)"); // ne pas oublier les : dans VALUES
    $request->bindParam(':typepower',$power);
  
    foreach($excel_array as $line){
        $power=$line[3];
        
        $request->execute();
    }
  
  } 
    catch (PDOException $e){
    die ("erreur de creation : ". $e);
  } 

  try { 

    require 'connectdb.php'; // je rappel ma connexion pour entrer dans ma BDD 
    echo "je suis connecté";
  
    $request = $connexion->prepare("INSERT INTO company (nom) SELECT :nom  WHERE NOT EXISTS (SELECT nom FROM company WHERE nom =:nom)"); // ne pas oublier les : dans VALUES
    $request->bindParam(':nom',$company);
  
    foreach($excel_array as $line){
        $company=$line[0];
        
        $request->execute();
    }
  
  } 
    catch (PDOException $e){
    die ("erreur de creation : ". $e);
  }

  try { 

    require 'connectdb.php'; // je rappel ma connexion pour entrer dans ma BDD 
    echo "je suis connecté";
  
    $request = $connexion->prepare("INSERT INTO access (nom) SELECT :nom  WHERE NOT EXISTS (SELECT nom FROM access WHERE nom =:nom)"); // ne pas oublier les : dans VALUES
    $request->bindParam(':nom',$access);
  
    foreach($excel_array as $line){
      $access=$line[5];
        
        $request->execute();
    }
  
  } 
    catch (PDOException $e){
    die ("erreur de creation : ". $e);
  } 


 