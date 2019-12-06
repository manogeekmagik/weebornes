<?php
//Doctype HTML
    include("template/doctype.php");   
?>

<?php
//header
    include("template/header.php");   
?>
<h2 class="text-center"><span class= "mt-3 badge badge-success">Nous contacter</span></h2>

    <div class="d-flex justify-content-end mr-5">
        <a class="mr-2" href="https://www.facebook.com/" target="_blank"><img src="img/logofacebook.png" alt="logo facebook" height="22" width="22"></a>
        <a class="mr-2" href="https://www.pinterest.fr/" target="_blank"><img src="img/logoprint.png" alt="logo Printerest" height="22" width="22"></a>
        <a class="mr-2" href="https://twitter.com/" target="_blank"><img src="img/logotwitter.png" alt="logo twitter" height="22" width="22"></a>
    </div>


<div class="container mt-3"> 
  <form class="form-horizontal" action="messagecontact.php" method="POST">


      <div class="form-group text-center">
          <label class="control-label col-sm-2 badge badge-pill badge-success text-white" for="nom">Nom:</label>        
            <input type="nom" class="form-control border border-info bg-light mt-1" id="nom" placeholder="Nom" name="nom" required>
      </div>

      <div class="form-group text-center">
        <label class="control-label col-sm-2 badge badge-pill badge-success text-white" for="prenom">Prénom:</label>  
        <input type="prenom" class="form-control border border-info bg-light mt-1" id="prenom" placeholder="Prénom" name="prenom" required>
      </div>

      <div class="form-group text-center">
        <label class="control-label col-sm-2 badge badge-pill badge-success text-white" for="email">Email:</label>
        <input type="email" class="form-control border border-info bg-light mt-1" id="email" placeholder="Email" name="email" required>
      </div>

      <div class="form-group text-center">
        <label class="control-label col-sm-2 badge badge-pill badge-success text-white" for="email">Message</label>
        <textarea type="message" class="form-control border border-info bg-light mt-1" id="message" placeholder="Votre message ici" name="message" required></textarea>
      </div>

      <div class="d-flex flex-wrap justify-content-center">
        <button type="submit" name="envoyer" class="btn btn-info ">ENVOYER</button>
      </div>

  </form>
</div>


<?php
//footer
    require_once("template/footer.php");   
?>