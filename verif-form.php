<?php
	$bdd= new PDO('mysql:host=localhost;dbname=recherche;charset=utf8','root','root');

	if(isset($_GET["search"]) AND $_GET["search"]=="Rechercher"){
		$_GET["terme"]=htmlspecialchars($_GET["terme"]);
		$terme=$_GET["terme"];
		$terme=trim($terme);
		$terme=strip_tags($terme);
	if(isset($terme)){
		$terme=strtolower($terme);
		$select_terme=$bdd->prepare("SELECT titre, contenu FROM cours WHERE titre LIKE ? OR contenu LIKE?");
		$select_terme->execute(array("%".$terme."%","%".$terme."%"));
	}
	else{
		$message="Entrez la requête dans la barre de recherche";
	}
}
?>

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
    <h2 class="cours">Résultat de la recherche de cours</h2>
    <?php
      while($terme_trouve=$select_terme->fetch()){
    ?>
      	<div class="card" style="width: 18rem;">
        <img src="https://mma.prnewswire.com/media/776689/New_Docker_logo_Logo.jpg?p=publish" class="card-img-top" alt="">
        <div class="card-body">
    <?php 
    	echo '<h5 class="card-title">'.$terme_trouve['titre'].'</h5><p class="card-text">'.$terme_trouve['contenu'].'</p>';
    ?>
    	<a href="docker.php" class="btn btn-primary">Accéder au cours</a>
 		 </div>
		</div>
    <?php  
	}
	?>
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>