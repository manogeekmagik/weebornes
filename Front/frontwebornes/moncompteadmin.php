<?php
//Doctype HTML
    include("template/doctype.php");   
?>

<?php
//header
    include("template/header.php");   
?>
<?php
require_once "../../script-csv/connectdb.php"
?>

<main>


    <h2 class="text-center"><span class= "mt-3 badge badge-success">Mon compte</span></h2>
    <h4>LES DIFFERENTS TYPE DE COMPTE</h4>
    <a href="moncompteborner.php"><button type="button" class="btn btn-success border border-dark">compte borner</button></a>
    <a href="moncomptemoderateur.php"><button type="button" class="btn btn-success border border-dark">compte modo</button></a>
    <a href="moncompteutilisateur.php"><button type="button" class="btn btn-success border border-dark">compte user</button></a>
<!-- Mon profil -->
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
                                    Insert BDD
                                    </h5>
                        </div>
                    </div>
                    <div class="col-md-2">
                    <a href="editprofile.php"><button type="button" href="editprofil.php" class="btn btn-success border border-white">Modifier mon profil</button></a>
                    
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
                                                <p>Insert BDD</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email :</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Insert BDD</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Ma fonction :</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Insert BDD</p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>

<!-- Mes commentaires -->

    <h5 class="text-center"><span class= "mt-2 badge badge-success">Mes commentaires</span></h5>

    <div class="comment border border-info rounded bg-light">

    <table class="table">
        <thead>
            <tr>
            <th scope="col"></th>
            <th scope="col">Date:</th>
            <th scope="col">Borne:</th>
            <th scope="col">Commentaire:</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row"></th>
            <td>Insert BDD</td>
            <td>Insert BDD</td>
            <td>Insert BDD</td>
            </tr>
        </tbody>
    </table>
    </div>

    <h5 class="text-center"><span class= " mt-2 badge badge-success">Les nouvelle(s) borne(s)</span></h5>

<div class="d-flex justify-content-center mt-2">
  <div class="bg-light w-75 border border-info rounded">
    <div class="row">

          <div class=" col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="card-body text-center"><h5><span class="soustitre badge badge-success">Positionnement</span><h5></div>      
                <div class="card-body">
                  <ul class="list-group">
                    <li class="list-group-item">Localisation : Insert BDD</li>
                    <li class="list-group-item">Adresse : Insert BDD</li>
                    <li class="list-group-item">Ville : Insert BDD</li>
                    <li class="list-group-item">Distance : Insert BDD</li>
                  </ul> 
                </div>
            </div>

            <div class=" col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="card-body text-center"><h5><span class="soustitre badge badge-success">Caractéristique</span><h5></div>
                <div class="card-body">
                  <ul class="list-group">
                    <li class="list-group-item">Puissance délivré : Insert BDD</li>
                    <li class="list-group-item">Type de prise : Insert BDD</li>
                    <li class="list-group-item">Condition d'accès : Insert BDD</li>
                  </ul> 
                </div>
            </div>

            <div class=" col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="card-body text-center"><h5><span class="soustitre badge badge-success">Accéssibilité</span><h5></div>
                <div class="card-body">
                  <ul class="list-group">
                    <li class="list-group-item">Enseigne : Insert BDD</li>
                    <li class="list-group-item">Ouvert/Fermé : Insert BDD</li>
                  </ul> 
                </div>
            </div> 

      </div>
            <div class="d-flex justify-content-center mb-2">
                <div class="btn-group border border-white w-50" role="group">
                    <button type="button" class="btn btn-success">Valider</button>
                    <button type="button" class="btn btn-danger">Refuser</button>
                </div>
            </div>
  </div>
</div>

<div class="d-flex justify-content-center mt-2">
  <div class="bg-light w-75 border border-info rounded">
    <div class="row">

          <div class=" col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="card-body text-center"><h5><span class="soustitre badge badge-success">Positionnement</span><h5></div>      
                <div class="card-body">
                  <ul class="list-group">
                    <li class="list-group-item">Localisation : Insert BDD</li>
                    <li class="list-group-item">Adresse : Insert BDD</li>
                    <li class="list-group-item">Ville : Insert BDD</li>
                    <li class="list-group-item">Distance : Insert BDD</li>
                  </ul> 
                </div>
            </div>

            <div class=" col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="card-body text-center"><h5><span class="soustitre badge badge-success">Caractéristique</span><h5></div>
                <div class="card-body">
                  <ul class="list-group">
                    <li class="list-group-item">Puissance délivré : Insert BDD</li>
                    <li class="list-group-item">Type de prise : Insert BDD</li>
                    <li class="list-group-item">Condition d'accès : Insert BDD</li>
                  </ul> 
                </div>
            </div>

            <div class=" col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="card-body text-center"><h5><span class="soustitre badge badge-success">Accéssibilité</span><h5></div>
                <div class="card-body">
                  <ul class="list-group">
                    <li class="list-group-item">Enseigne : Insert BDD</li>
                    <li class="list-group-item">Ouvert/Fermé : Insert BDD</li>
                  </ul> 
                </div>
            </div> 

      </div>
            <div class="d-flex justify-content-center mb-2">
                <div class="btn-group border border-white w-50" role="group">
                    <button type="button" class="btn btn-success">Valider</button>
                    <button type="button" class="btn btn-danger">Refuser</button>
                </div>
            </div>
  </div>
</div>



<h5 class="text-center"><span class= "badge badge-success">Gestion des utilisateurs</span></h5>


<div class="comment border border-info rounded bg-light">

<table class="table">
    <thead>
        <tr>
        <th scope="col"></th>
        <th scope="col">Pseudo</th>
        <th scope="col">Email</th>
        <th scope="col">fonction</th>
        <th scope="col">Changer la fonction</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row"></th>
        <td>Insert BDD</td>
        <td>Insert BDD</td>
        <td>Insert BDD</td>
        <td>
            <select class="custom-select border border-info bg-light"  required>
                <option value="">--Les fonctions--</option>
                <?php
                $roles = $connexion->prepare("SELECT * FROM roles");
                $executeIsOk = $roles->execute();
                
                    while ($ro = $roles->fetch()){

                    echo '<option value="'.$ro["roles_id"].'" >'.$ro["nom_du_role"].'</option>';
                    }
                    ?>
            </select>

            <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-success">Valider</button>
            </div>
        </td>
        </tr>

        <tr>
        <th scope="row"></th>
        <td>Insert BDD</td>
        <td>Insert BDD</td>
        <td>Insert BDD</td>
        <td>
        
            <select class="custom-select border border-info bg-light"  required>
                <option value="">--Les fonctions--</option>
                <?php
                $roles = $connexion->prepare("SELECT * FROM roles");
                $executeIsOk = $roles->execute();
                
                    while ($ro = $roles->fetch()){

                    echo '<option value="'.$ro["roles_id"].'" >'.$ro["nom_du_role"].'</option>';
                    }
                    ?>
            </select>
            
            <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-success">Valider</button>
            </div>
        </td>
        </tr>
    </tbody>
</table>
</div>


<h5 class="text-center"><span class= "mt-2 badge badge-success">Gestion des commentaires</span></h5>
<div class="d-flex justify-content-center">
<a href="deletecomment.php"><button type="button"class="btn btn-info border border-dark">Gerer les commentaires</button></a>
</div>

</main>




<?php
//footer
    require_once("template/footer.php");   
?>