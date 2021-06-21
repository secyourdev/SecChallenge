 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
         <a class="navbar-brand" href="index.php"> 
            <img src="https://ffp4g1ylyit3jdyti1hqcvtb-wpengine.netdna-ssl.com/wp-content/uploads/2016/09/Cybersecurity.png" alt="" width="50" height="40">
          </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <?php
              if(isset($_SESSION['pseudo'])){
            ?>
            <li class="nav-item">
                <form class="nav-item">
                   <a class="nav-link" href="cours.php">Cours</a>
                </form>
            </li>
            <li class="nav-item">
                <form class="nav-item">
                   <a class="nav-link" href="challenge.php">Challenge</a>
                </form>
            </li>
          </ul>
          <ul class="navbar-nav ml-md-auto">
            <li class="nav-item">
               <a class="nav-link" href="deconnexion.php">Déconnexion</a>
            </li>
          </ul>
            <?php 
              }else{
            ?>
          <ul class="navbar-nav ml-md-auto">
            <li class="nav-item">
               <a class="nav-link" href="connexion.php">Se connecter</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="inscription.php">S'inscrire</a>
            </li>
            <?php
              }
            ?>
          </ul>
        </div>
      </nav>


