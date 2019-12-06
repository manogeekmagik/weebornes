
<?php
//Doctype HTML
    include("template/doctype.php");
?>

<?php
//Haut de page/Header
    include("template/header.php");
?>

<?php

$servername = "localhost";
$username = "dmhma";
$password = "webornes5";
$dbname = "webornes"; 

// Create connexion
try {
    $connexion = new PDO("mysql:host=$servername;dbname=webornes", $username,$password); 
    $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    
    
    }
    catch(PDOException $e){
        echo 'Echec de la connexion : '.$e->getMessage();
    }


$pdostat = $connexion->prepare('INSERT INTO msg VALUE (NULL,:nom, :prenom, :email, :msg)');

$pdostat->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$pdostat->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
$pdostat->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
$pdostat->bindValue(':msg', $_POST['message'], PDO::PARAM_STR);

$insertOk = $pdostat->execute();


if($insertOk){
    $message = 'Votre message a bien été envoyé,';
}

else{
    $message = "Echec de l'envoi du message";

}

$retour = mail('dimitri.bonnet18@gmail.com', 'Envoi depuis la page Contact webornes', $_POST['message'], 'From : webmaster@monsite.fr');
    
?>

<main>

<div class="d-flex flex-wrap justify-content-center">
    <h2><span class="mt-3 badge badge-success">NOUS CONTACTER</span><h2>
</div>

<div class="text-center mt-4">
<h5><?php echo $message?></h5>
<h5>Nous vous répondrons rapidement.</h5>

<h4><a class="badge badge-info text-white mt-5" href="index.php">RETOUR A LA NAVIGATION</a></h4>
</div>

</main>

<?php
//Bas de page/Footer
include("template/footer.php");
?>


