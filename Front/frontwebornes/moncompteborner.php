<?php
//Doctype HTML
    include("template/doctype.php");   
?>

<?php
//header
    include("template/header.php");   
?>

<main>

    <h2 class="text-center"><span class= "mt-3 badge badge-success">Mon compte</span></h2>

    <h5 class="text-center mt-3"><span class= "badge badge-success">Mon profil</span></h5>

    <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
<!--                             <div class="file btn btn-lg btn-primary">
                                Modifier sa photo
                                <input type="file" name="file"/>
                            </div>
 -->                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                    Insert bdd
                                    </h5>
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Pseudo :</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Insert bdd</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email :</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Insert bdd</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Ma fonction :</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Insert bdd</p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>

        <div class="container mt-5">
        
  <form class="form-horizontal" action="" method="POST">
      <div class="form-group text-center">
          <label class="control-label col-sm-2 badge badge-pill badge-success text-white" for="Enseigne">Enseigne :</label>        
            <input type="text" class="form-control border border-info bg-light mt-1" id="Enseigne" placeholder="Enseigne" name="enseigne" required>
      </div>

      <div class="form-group text-center">
        <label class="control-label col-sm-2 badge badge-pill badge-success text-white" for="Puissancedelivree">Puissance délivrée :</label>  
        <input type="text" class="form-control border border-info bg-light mt-1" id="Puissancedélivrée" placeholder="Puissance délivrée" name="puissance" required>
      </div>

      <div class="form-group text-center">
        <label class="control-label col-sm-2 badge badge-pill badge-success text-white" for="Typedeprise">Type de prise :</label>
        <input type="text" class="form-control border border-info bg-light mt-1" id="Typedeprise" placeholder="Type de prise" name="prise" required>
      </div>

      <div class="form-group text-center">
        <label class="control-label col-sm-2 badge badge-pill badge-success text-white" for="Rue">Rue :</label>
        <input type="text" class="form-control border border-info bg-light mt-1" id="Rue" placeholder="Rue" name="rue" required>
      </div>

      <div class="form-group text-center">
        <label class="control-label col-sm-2 badge badge-pill badge-success text-white" for="Region">Région :</label>
        <input type="text" class="form-control border border-info bg-light mt-1" id="Region" placeholder="Region" name="Region" required>
      </div>
      
      <div class="form-group text-center">
        <label class="control-label col-sm-2 badge badge-pill badge-success text-white" for="Departement">Département :</label>
        <input type="text" class="form-control border border-info bg-light mt-1" id="Departement" placeholder="Département" name="departement" required>
      </div>

      <div class="form-group text-center">
        <label class="control-label col-sm-2 badge badge-pill badge-success text-white" for="Commune">Commune :</label>
        <input type="text" class="form-control border border-info bg-light mt-1" id="Commune" placeholder="Commune" name="commune" required>
      </div>

    <div class="form-group text-center">
        <label class="control-label col-sm-2 badge badge-pill badge-success text-white " for="Conditions d'accès">Conditions d'accès :</label>
        <select class="custom-select border border-info bg-light"  required>
            <option value="">--Conditions d'accès--</option>
            <option value="1">Gratuit</option>
            <option value="2">Payant</option>
        </select>
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