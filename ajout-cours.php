<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet" >

    <title>Projet</title>
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
              <h1>Ajout d'un cours</h1>
            <form method="post">
                  <div class="form-group">
                    <input class="form-control" type="text" name="lien" placeholder="Lien de la photo" value="<?php if (isset($lien)) echo $lien; ?>" required="required">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" name="titre" placeholder="Titre du cours" value="<?php if (isset($titre)) echo $titre; ?>" required="required">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" name="contenu" placeholder="Contenu du cours" value="<?php if (isset($contenu)) echo $contenu; ?>" required="required">
                  </div>
                  <?php
                  $BDD= new PDO('mysql:host=localhost;dbname=recherche;charset=utf8','root','root');
  if(!empty($_POST)){
    extract($_POST);
    $valid= true;

    if (isset($_POST['ajout-du-cours'])){
      $titre = (String) trim($titre);
      $contenu=(String) trim($contenu);
      $lien=(String) trim($lien);

      if(empty($titre)){
        $valid = false;
      }
      if(empty($contenu)){
        $valid = false;
      }
      if(empty($lien)){
        $valid = false;
      }
      if($valid){
        $req = $BDD -> prepare("INSERT INTO cours (lien,titre,contenu) VALUES(?,?,?)");
        $req->execute(array($lien,$titre,$contenu));
        echo 'le cours a été ajouté';
      }
    }
  }
?>
                <input type="submit" name="ajout-du-cours" value="Ajouter le cours">
            </form>
            </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  </body>
</html>