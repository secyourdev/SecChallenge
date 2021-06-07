<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet" >

    <title>Mon Projet!</title>
  </head>
  <body>
    <?php
      require_once('nav.php')
    ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-2 col-lg-3"></div>
        <div class="col-sm-12 col-md-8 col-lg-6">
          
            <div class="cadre-inscription">
              <h1>Inscription</h1>
            <form method="post">
                  <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="Nom">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" name="firstname" placeholder="Prénom">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" name="pseudo" placeholder="Pseudo">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" name="mail" placeholder="Mail">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Mot de passe">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Confirmer mot de passe">
                  </div>
                <input type="submit" name="inscription" value="S'inscrire">
            </form>
            </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  </body>
</html>