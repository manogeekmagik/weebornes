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

<div class="d-flex flex-wrap justify-content-center mt-3 mb-5">
<h4 >Bienvenue sur webornes, trouver votre borne !</h4>
</div>
<!-- Input search ville/city -->
<div class="d-flex justify-content-center mb-2">
<input class="form-control w-25 text-center border border-info col-xs-12 col-sm-6 col-md-4 col-lg-4" type="search" placeholder="Votre ville..." aria-label="Search">


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

<div class="text-center"><h5><a href=><img src="img/localisermoi.png" alt="logo localisation"></a></h5></div>

<!-- Insert OpenStreet Map  -->
<div class="d-flex justify-content-center">
<div  class="rounded border border-info" id="mapid" style="width: 740px; height: 650px"></div>
</div>
<!-- Div  description borne -->


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
  </div>
</div>
          

<h4 class="text-center">Espace commentaire a faire plus tard + boutton itineraire (option)</h4>    
          
      
<h4 class="text-center">Espace commentaire a faire plus tard + boutton itineraire (option)</h4>  





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
</script>


<?php
//footer
    include("template/footer.php");   
?>