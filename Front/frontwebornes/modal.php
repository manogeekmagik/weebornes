<?php
//Doctype HTML
    include("template/doctype.php");   
?>

<?php
//header
    include("template/header2.php");   
?>

<?php
require_once "../../script-csv/connectdb.php"
?>

<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Connexion</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="pseudo" id="defaultForm-pseudo" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Pseudo</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="defaultForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Mot de passe</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-success">Se connecter</button>
      </div>
    </div>
  </div>
</div>

<div class="text-center">
  <a href="" class="btn btn-default btn-warning mb-4" data-toggle="modal" data-target="#modalLoginForm">Page de connexion</a>
</div>

<?php
//footer
    require_once("template/footer.php");   
?>