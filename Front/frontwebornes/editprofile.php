<?php
 include("template/doctype.php");   
 include("template/header.php"); 
 require_once '../../script-csv/connectdb.php';



?>


<div class="container">
<h2 class="text-center"><span class= "mt-3 badge badge-success">Modifier mon profil</span></h2>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/250" class="avatar img-circle" alt="avatar">
          <h6>Choississez une photo</h6>
          
          <input type="file" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <h3>Infos personnelles</h3>
        
        <form class="form-horizontal" method="POST" action="" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Pseudo:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="newpseudo" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="newmail" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Mot de passe:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="newpassword" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Confirmer le mot de passe:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="newpassword2" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-success" value="Enregistrer les changements">
              <span></span>
              <input type="reset" class="btn btn-danger" value="Annuler">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>




<?php
//footer
    include("template/footer.php");   
?>