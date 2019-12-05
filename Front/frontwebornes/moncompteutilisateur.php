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
        <td>Insert bdd</td>
        <td>Insert bdd</td>
        <td>Insert bdd</td>
        </tr>
    </tbody>
</table>
</div>
 
</main>




<?php
//footer
    require_once("template/footer.php");   
?>