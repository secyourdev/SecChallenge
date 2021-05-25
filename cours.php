<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">

    <title>Cours</title>
  </head>
  <body>
    <?php
      session_start();
      require_once('nav.php');
    ?>
      <section class="cours-disponibles">
        <h2 class="cours">Cours disponibles</h2>
        <div class="container">
          <div class="row">
                <form action = "verif-form.php" method="get">
                  <div class="form-group">
                    <input class="form-control" name="terme" value="" placeholder="Rechercher un ou plusieurs cours">
                    <input type="submit" class="btn btn-search" value="Rechercher" name="search">
                </div>
              </form>
            </div>
        </div>
        <div class="card-group">
        <div class="card" style="width: 18rem;">
        <img src="https://mma.prnewswire.com/media/776689/New_Docker_logo_Logo.jpg?p=publish" class="card-img-top" alt="">
        <div class="card-body">
        <h5 class="card-title">Docker</h5>
         <p class="card-text">Principe, avantages et comment installer un Docker</p>
    <a href="docker.php" class="btn btn-primary">Accéder au cours</a>
  </div>
</div>
        <div class="card" style="width: 18rem;">
                <img src="https://mma.prnewswire.com/media/776689/New_Docker_logo_Logo.jpg?p=publish" class="card-img-top" alt="">
                <div class="card-body">
                <h5 class="card-title">Vulnérabilité</h5>
                 <p class="card-text">Liste de vulnérabilités, explications et comment les supprimer</p>
            <a href="docker.php" class="btn btn-primary">Accéder au cours</a>
          </div>
  </div>
  <div class="card" style="width: 18rem;">
                <img src="https://mma.prnewswire.com/media/776689/New_Docker_logo_Logo.jpg?p=publish" class="card-img-top" alt="">
                <div class="card-body">
                <h5 class="card-title">Docker</h5>
                 <p class="card-text">Principe, avantages et comment installer un Docker</p>
            <a href="docker.php" class="btn btn-primary">Accéder au cours</a>
          </div>
  </div>
</div>
<div class="card-group">
        <div class="card" style="width: 18rem;">
        <img src="https://mma.prnewswire.com/media/776689/New_Docker_logo_Logo.jpg?p=publish" class="card-img-top" alt="">
        <div class="card-body">
        <h5 class="card-title">Docker</h5>
         <p class="card-text">Principe, avantages et comment installer un Docker</p>
    <a href="docker.php" class="btn btn-primary">Accéder au cours</a>
  </div>
</div>
        <div class="card" style="width: 18rem;">
                <img src="https://mma.prnewswire.com/media/776689/New_Docker_logo_Logo.jpg?p=publish" class="card-img-top" alt="">
                <div class="card-body">
                <h5 class="card-title">Docker</h5>
                 <p class="card-text">Principe, avantages et comment installer un Docker</p>
            <a href="docker.php" class="btn btn-primary">Accéder au cours</a>
          </div>
  </div>
  <div class="card" style="width: 18rem;">
                <img src="https://mma.prnewswire.com/media/776689/New_Docker_logo_Logo.jpg?p=publish" class="card-img-top" alt="">
                <div class="card-body">
                <h5 class="card-title">Docker</h5>
                 <p class="card-text">Principe, avantages et comment installer un Docker</p>
            <a href="docker.php" class="btn btn-primary">Accéder au cours</a>
          </div>
  </div>
</div>
      </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  </body>
  </html>



