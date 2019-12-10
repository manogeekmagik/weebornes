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

<main>

<div class="d-flex flex-wrap justify-content-center mt-1 mb-3">
<h4 >Bienvenue sur webornes, trouver votre borne !</h4>
</div>
<!-- Input search ville/city -->
<div class="d-flex justify-content-center mb-2">
<input class="form-control w-25 text-center border border-info col-xs-12 col-sm-6 col-md-4 col-lg-4" id="recherche" autocomplete="off" type="text" placeholder="Votre ville..." aria-label="Search">


<button type="button" class="btn btn-info " data-toggle="modal" data-target="#exampleModal3">
  Type de prise
</button>

<!-- Modal  take type/type de prise-->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModal3Label">Choisir le type de prise</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <select class="mdb-select md-form">
        <option value="" disabled selected>Type de prise</option>
                <?php
                $typedeprise = $connexion->prepare("SELECT * FROM outlet");
                $executeIsOk = $typedeprise->execute();
                
                    while ($prise = $typedeprise->fetch()){

                    echo '<option value="'.$prise["company_id"].'" >'.$prise["nom"].'</option>';
                    }
                    ?>
            </select>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- Select condition d'accès -->

    <select class="dropdown rounded bg-info text-white">
        <option value="" disabled selected>Conditions d'accès</option>
                <?php
                $condition = $connexion->prepare("SELECT * FROM access");
                $executeIsOk = $condition->execute();
                
                    while ($cond = $condition->fetch()){

                    echo '<option value="'.$cond["access_id"].'" >'.$cond["nom"].'</option>';
                    }
                    ?>
            </select>
</div>
<!-- Localiser moi  -->
<div class="text-center"><h5><a href=><img src="img/localisermoi.png" alt="logo localisation" style="width:40px; height: 40px"></a></h5></div>

<!-- Insert OpenStreet Map  -->
<div class="d-flex justify-content-center">
<div  class="rounded border border-info" id="mapid" style="width:600px; height: 400px"></div>
</div>

<!-- bouton apparaitre disparaitre -->
<button id="Bouton">Disparaite</button>

<!-- Div  description borne -->
<div id="infoborne">
  <div class="d-flex justify-content-center mt-2">
    <div class="bg-light w-75 border border-info rounded">
      <div class="row">


            <div class=" col-xs-12 col-sm-6 col-md-4 col-lg-4">
              <div class="card-body text-center"><h5><span class="soustitre badge badge-info">Positionnement</span><h5></div>      
                  <div class="card-body">
                    <ul class="list-group">
                      <li class="list-group-item">Localisation :</li>
                      <li class="list-group-item">Adresse :</li>
                      <li class="list-group-item">Ville :</li>
                      <li class="list-group-item">Distance :</li>
                    </ul> 
                  </div>
              </div>

              <div class=" col-xs-12 col-sm-6 col-md-4 col-lg-4">
              <div class="card-body text-center"><h5><span class="soustitre badge badge-info">Caractéristique</span><h5></div>
                  <div class="card-body">
                    <ul class="list-group">
                      <li class="list-group-item">Puissance délivré :</li>
                      <li class="list-group-item">Type de prise :</li>
                      <li class="list-group-item">Condition d'accès :</li>
                    </ul> 
                  </div>
              </div>

              <div class=" col-xs-12 col-sm-6 col-md-4 col-lg-4">
              <div class="card-body text-center"><h5><span class="soustitre badge badge-info">Accéssibilité</span><h5></div>
                  <div class="card-body">
                    <ul class="list-group">
                      <li class="list-group-item">Enseigne :</li>
                      <li class="list-group-item">Ouvert/Fermé :</li>
                    </ul> 
                  </div>
              </div>
        </div>

        <h2 class="text-center"><span class="badge badge-info mb-4">Les commentaires</span></h2>

         <div class="comment border border-info rounded bg-light mb-2">

<table class="table">
    <thead>
        <tr>
        <th scope="col"></th>
        <th scope="col">Date:</th>
        <th scope="col">Pseudo</th>
        <th scope="col">Commentaire:</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row"></th>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        </tr>
    </tbody>
</table>
</div>

<div class="d-flex justify-content-center mb-4 mt-4">
<button class="btn btn-outline-info" id="Bouton1">Ajouter un commentaire (si user connecté)</button>
</div>

<div id="divcommentaire">
          <form method="POST" action="">
          <div class="d-flex justify-content-center">
            <label class="soustitre badge badge-info" for="email">Votre commentaire</label>
          </div>
          <div class="d-flex justify-content-center mb-4">
            <textarea type="message" class="form-control border border-info bg-light mt-1 w-75"  placeholder="Votre commentaire..." name="message" required></textarea>
          </div> 
          <div class="d-flex justify-content-center mb-4">
          <button class="btn btn-outline-info" id="btnvalidercomment"type="submit">Envoyer votre commentaire</button>
          </div>
          </form>
        </div>
    </div>
  </div>
</div>         





  


</main>
<script>
// Script OpenStreet Map  

var mymap = L.map('mapid').setView([46.603354, 1.8883335], 13);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    accessToken: 'pk.eyJ1IjoiYXJpYm91bGUiLCJhIjoiY2szazNqNHJxMGNzaDNocXNyeGpza3M3dCJ9.N2r2d_DdlqJ-DBfRgPq0Vw'
}).addTo(mymap);

var marker = L.marker([46.603354, 1.8883335]).addTo(mymap);
marker.bindPopup("<b>Hello world!</b><br>I am a popup.");
var marker = L.marker([47.0817266, 2.4145031]).addTo(mymap);
marker.bindPopup("<b>Hello world!</b><br>Icoucouc loic c moi.");

 /*Fait disparaitre/apparaitre la div infoborne + apparaitre commentaire */

 
document.querySelector("#Bouton").onclick = function() {
document.querySelector("#infoborne").style.display="block";
}  
document.querySelector("#Bouton1").onclick = function() {
document.querySelector("#divcommentaire").style.display="block";
}
</script>


<?php
//footer
    include("template/footer.php");   
?>