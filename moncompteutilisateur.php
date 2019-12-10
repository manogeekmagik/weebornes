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
                                                <p>Utilisateur</p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>


 
    <h5 class="text-center"><span class= "mt-5 badge badge-success">Mes commentaires</span></h5>

    <div class="mt-5 comment">

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
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            </tr>
            <tr>
            <th scope="row"></th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            </tr>
            <tr>
            <th scope="row"></th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            </tr>
        </tbody>
    </table>
    </div>
</main>




<?php
//footer
    require_once("template/footer.php");   
?>