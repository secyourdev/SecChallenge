<?php
  session_start();
  $BDD= new PDO('mysql:host=localhost;dbname=dbsite;charset=utf8','root','root');
?>

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
    <?php
      if(isset($_SESSION['pseudo'])){
    ?>
    <h1 class="text1">Bienvenue sur notre site !<h1>

    <input type="button" class="btn btn-ac" value="Accédez aux cours" onclick="location.href='cours.php';">
    <input type="button" class="btn btn-ac" value="Complétez nos challenges" onclick="location.href='challenge.php';">
    <?php
      }else{
    ?>
    <h1 class="text1"> Bonjour, vous n'êtes pas encore connectés.</h1>
    <input type="button" class="btn btn-ac" value="Connectez-vous" onclick="location.href='connexion.php';">
    <input type="button" class="btn btn-ac" value="Inscrivez-vous" onclick="location.href='inscription.php';">
    <?php
      }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  </body>
</html>