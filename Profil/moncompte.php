<?php
/* session_start();  */

/* require '../script-folder/connectdb.php'; */

if(isset($_GET['id']) AND $_GET['id'] > 0 )
{
    $getid = intval ($_GET['id']);
    $requser = $connexion->prepare('SELECT * FROM users WHERE id = ?');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();

    


?>



<?php
}

?>