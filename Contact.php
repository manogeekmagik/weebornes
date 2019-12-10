<?php
//Doctype HTML
  include("template/doctype.php");   
?>

<?php
//header
  include("template/header.php");   
?>


<div class="container mt-5"> 
  <form class="form-horizontal" action="" method="POST">


      <div class="form-group text-center">
          <label class="control-label col-sm-2 badge badge-pill badge-success text-white" for="nom">Nom:</label>        
            <input type="nom" class="form-control border border-info bg-light mt-1" id="nom" placeholder="Nom" name="nom">
      </div>

      <div class="form-group text-center">
        <label class="control-label col-sm-2 badge badge-pill badge-success text-white" for="prenom">Prénom:</label>  
        <input type="prenom" class="form-control border border-info bg-light mt-1" id="prenom" placeholder="Prénom" name="prenom">
      </div>

      <div class="form-group text-center">
        <label class="control-label col-sm-2 badge badge-pill badge-success text-white" for="email">Email:</label>
        <input type="email" class="form-control border border-info bg-light mt-1" id="email" placeholder="Email" name="email">
      </div>

      <div class="form-group text-center">
        <label class="control-label col-sm-2 badge badge-pill badge-success text-white" for="email">Message</label>
        <textarea type="message" class="form-control border border-info bg-light mt-1" id="message" placeholder="Votre message ici" name="message"></textarea>
      </div>

      <div class="d-flex flex-wrap justify-content-center">
        <button type="submit" name="envoyer" class="btn btn-info ">ENVOYER</button>
      </div>

  </form>
</div>

<?php

try {
  // connexion à la base de donnée.
  require_once("script-folder/connectdb.php");
  
  // création de la table form

  $request = "CREATE TABLE IF NOT EXISTS form(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR (255),
    prenom VARCHAR (255),
    email VARCHAR (255),
    texte VARCHAR (500)
)";
  $connexion->exec($request);


} catch (PDOException $error) {
  die($error);
}

// Récupération & Insertion des données du formulaire contact dans la base de données
if(isset($_POST['envoyer']))
{
  $nom = htmlentities($connexion->quote($_POST['nom']));
  $prenom = htmlentities($connexion->quote($_POST['prenom']));
  $email = htmlentities($connexion->quote($_POST['email']));
  $texte = htmlentities($connexion->quote($_POST['message']));

  $request = $connexion->query("INSERT INTO form VALUE( $nom $prenom $email $texte)");

}
else {
  echo "Vous n'avez pas envoyé votre message";
}
 
?>


<?php
//footer
  require_once("template/footer.php");   
?>