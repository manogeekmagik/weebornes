<header>
<!-- Logo Webornes -->
<div class="header d-flex justify-content-center">
  <div>
    <img src="img/logoWeBorne.png" alt="logo webornes">
  </div>
</div>

<!-- Login -->
<div class="d-flex justify-content-end">

    <form class="form-horizontal formlogin" action="" method="POST">
      <div>
          <label for="username">Compte:</label>
          <input type="text" id="username" name="username" required>
      </div>

      <div>
          <label for="pass">Mot de passe:</label>
          <input type="password" id="pass" name="password"
                 required>
      </div>
      <button type="submit" class="btn btn-success border border-white">Déconnexion</button><h6>Doit apparaitre quand connecter</h6>
      <button type="submit" class="btn btn-success border border-white" href="login.php">Connexion</button>
      
      <a class="navbar-brand badge badge-success border border-white text-white" href="registration.php">Créer mon compte</a>
    </form>
</div>

    
<!-- Creation de compte -->
     

 <div class="d-flex justify-content-center bg-info">

<nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler navbar-toggler badge badge-light" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon "></span>
  </button>

  <a class=" navbar-brand nav-link mb-3" href="index.php"><img src="img/home.png" alt="logo HOME"></a>
  


  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
      <li class="nav-item">
      <h5 d-flex flex-wrap align-content-end><a class="navbar-brand badge badge-pill  badge-info text-white" href="Quisommesnous.php">Qui sommes nous ?</a></h5>
    </li>
      <li class="nav-item">
      <h5 class=""><a class="navbar-brand badge badge-pill  badge-info text-white" href="Contact.php">Nous contacter</a></h5>
      </li>
      <li class="nav-item">
      <h5><a class="navbar-brand badge badge-pill  badge-info text-white" href="moncompteutilisateur.php">Mon compte</a></h5>
      </li>
    </ul>
  </div>
</nav>
 

</header>
