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
// Récupération & Insertion des données du formulaire contact dans la base de données


if(isset($_POST['envoyer']))
{

}
else {
  echo "Vous n'avez pas envoyé votre message";
}

?>


<?php
//footer
  require_once("template/footer.php");   
?>