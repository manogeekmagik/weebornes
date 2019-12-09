<?php
//Doctype HTML
    include("template/doctype.php");   

//header
    include("template/header.php"); 

/**Connection to the database */
require_once '../../script-csv/connectdb.php';

 /** Integration of the registration script */    
require_once '../../Profil/register.php';

?>

<main>
      <!-- Registration Form -->

<div class="container register-form mt-3">

    <div class="form  text-center">
    <h2 class="text-center"><span class="badge badge-success">Inscription</span></h2>
        
    </div>

    <form method="POST" action="" enctype="multipart/form-data" autocomplete="off">

        <div class="form-content mt-5 ">

        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control border border-info bg-light" placeholder="Pseudo *" name="pseudo" required />
                </div>
                <div class="form-group">
                    <input type="email" class="form-control border border-info bg-light" placeholder="Email *" name="mail" required/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control border border-info bg-light" placeholder="Password *"  name="password" autocomplete ="new-password" required/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control border border-info bg-light" placeholder="Confirm Password *"  name="password2" autocomplete ="new-password" required/>
                </div>
                <div>
                    <h4><label class="badge badge-success">Choisir un avatar: </label></h4>
                    <input type="file" name="avatar" reuiqred >
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

    <div class="text-center">
    <?php
        if(isset($erreur))
        {
            echo '<font color="red">' . $erreur."";
        }
    ?>
    </div>

</div>


</main>
<?php
//footer
    include("template/footer.php");   
?>