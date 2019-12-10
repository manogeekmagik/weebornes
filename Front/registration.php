

<?php
//Doctype HTML
    include("template/doctype.php");   

//header
    include("template/header2.php"); 

/**Connection to the database */
require_once '../../script-csv/connectdb.php';

 /** Integration of the registration script */    
require_once '../../Profil/register.php';

?>
 
<?php
/*Connection to the database */
require_once '../../script-csv/connectdb.php';
?>
<?php
 /* Integration of the registration script*/
require_once '../../Profil/register.php';
?>

<main>
      <!-- Registration Form -->

<div class="container register-form mt-3">

    <div class="form  text-center">
    <h2 class="text-center"><span class="badge badge-success">Inscription</span></h2>
        
    </div>

    <form method="POST" action="" enctype="multipart/form-data">

        <div class="form-content mt-5 ">

        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control border border-info bg-light" placeholder="Pseudo *" id="pseudo" name="pseudo" />
                </div>
                <div class="form-group">
                    <input type="email" class="form-control border border-info bg-light" placeholder="Email *" id="mail" name="mail" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control border border-info bg-light" placeholder="Password *" id="password" name="password"/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control border border-info bg-light" placeholder="Confirm Password *" id="password2" name="password2"/>
                </div>
                <div>
                    <h5><label class="badge badge-success">Avatar: </label></h5>
                    <input type="file" name="avatar" >
                </div>
                <br>
                
            </div>
        </div>

        <div class="d-flex justify-content-center">
                <input type="submit" name="registration" value="Enregistrer" class="btn btn-success">
        </div>

    </form>
    <br>
    <br>

    <?php
        if(isset($erreur))
        {
            echo $erreur;
        }
    ?>
    
</div>


</main>
<?php
//footer
    include("template/footer.php");   
?>