<?php
//Doctype HTML
    include("template/doctype.php");   
?>

<?php
//header
    include("template/header.php");   
?>

<main>

    <h2 class="text-center"><span class= "mt-5 badge badge-success">Mon compte</span></h2>

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
                                        Kshiti Ghelani
                                    </h5>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Modifier le profil"/>
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
                                                <label>Pseudo</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Kshiti123</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>kshitighelani@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Ma fonction</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Borner</p>
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
          <label class="control-label col-sm-2 badge badge-pill badge-success text-white" for="nom">Enseigne:</label>        
            <input type="nom" class="form-control border border-info bg-light mt-1" id="nom" placeholder="Enseigne" name="enseigne">
      </div>

      <div class="form-group text-center">
        <label class="control-label col-sm-2 badge badge-pill badge-success text-white" for="prenom">Puissance délivrée:</label>  
        <input type="prenom" class="form-control border border-info bg-light mt-1" id="prenom" placeholder="Puissance délivrée" name="puissance">
      </div>

      <div class="form-group text-center">
        <label class="control-label col-sm-2 badge badge-pill badge-success text-white" for="email">Type de prise:</label>
        <input type="email" class="form-control border border-info bg-light mt-1" id="email" placeholder="Type de prise" name="prise">
      </div>

      <div class="form-group text-center">
        <label class="control-label col-sm-2 badge badge-pill badge-success text-white" for="email">Accessibilité:</label>
        <input type="email" class="form-control border border-info bg-light mt-1" id="email" placeholder="Accessibilité" name="accessibilité">
      </div>

      <div class="form-group text-center">
        <label class="control-label col-sm-2 badge badge-pill badge-success text-white" for="email">Accessibilité:</label>
        <input type="email" class="form-control border border-info bg-light mt-1" id="email" placeholder="Accessibilité" name="accessibilité">
      </div>
      
      <div class="form-group text-center">
        <label class="control-label col-sm-2 badge badge-pill badge-success text-white" for="email">Accessibilité:</label>
        <input type="email" class="form-control border border-info bg-light mt-1" id="email" placeholder="Accessibilité" name="accessibilité">
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