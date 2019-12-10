<?php
//Doctype HTML
    include("template/doctype.php");   
?>

<?php
//header
    include("template/header.php");   
?>

<div class="container mt-5">
    <form>
        <div class="comment border border-info rounded bg-light">

            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Commentaires</th>
                    <th scope="col">Pseudo:</th>
                    <th scope="col">Date:</th>
                    <th scope="col">Borne:</th>
                    <th scope="col">Supprimer:</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td scope="row">Insert BDD</td>
                    <td>Insert BDD</td>
                    <td>Insert BDD</td>
                    <td>Insert BDD</td>
                    <td><input type="checkbox" id="dewey" name="drone" value="dewey"></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                    <td scope="row">Insert BDD</td>
                    <td>Insert BDD</td>
                    <td>Insert BDD</td>
                    <td>Insert BDD</td>
                    <td><input type="checkbox" id="dewey" name="drone" value="dewey"></td>
                    </tr>
                </tbody>
                
            </table>
        </div>
    </div>
    <div class="form-group text-center mt-2">
        <button type="button" class="btn btn-success">Supprimer</button>
    </div>
</form>

<?php
//footer
    require_once("template/footer.php");   
?>