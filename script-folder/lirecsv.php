<?php
try {
    $filename = 'bdd-bornes.csv'; // ici j'appele le fichier excel 
    
    // creation variable du tableau
    $excel_array = []; 
    
    // Open the file for reading
    if (($h = fopen("{$filename}", "r")) !== FALSE) 
    {
        // Each line in the file is converted into an individual array that we call $data
        // The items of the array are comma separated
        while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
        {
        // Each individual array is being pushed into the nested array
        $excel_array[] = $data;		
        }

        // Close the file
        fclose($h);
    }
    
    // Display the code in a readable format
    echo "<pre>";
    //var_dump($excel_array);
    
    echo "</pre>";
    
    }
    
    catch(PDOException $e){
            echo 'Echec de la connexion : '.$e->getMessage();
    
    }
?>