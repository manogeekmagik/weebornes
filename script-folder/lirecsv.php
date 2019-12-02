<?php
try {
    $filename = '../data/bdd-bornes.csv'; // ici j'appele le fichier excel 
    
    // creation variable du tableau
    $excel_array = []; 
    
    // Open the file for reading
    if (($handle = fopen("{$filename}" , 'r')) !== FALSE) 
    {
        // Each line in the file is converted into an individual array that we call $data
        // The items of the array are comma separated
        while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) 
        {
        // Each individual array is being pushed into the nested array
        $excel_array[] = $data;	
        /* var_dump($excel_array); */
        }

        // Close the file
        fclose($handle);
    }
    
    }
    
    catch(PDOException $error){
        echo 'Echec de la connexion : '.$error->getMessage();
    }

?>