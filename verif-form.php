<?php
	include("bdd/acces_BDD.php");

	if(isset($_GET["search"]) AND $_GET["search"]=="Rechercher"){
		$_GET["terme"]=htmlspecialchars($_GET["terme"]);
		$terme=$_GET["terme"];
		$terme=trim($terme);
		$terme=strip_tags($terme);
	if(isset($terme)){
		$terme=strtolower($terme);
		$terme=strtr($terme,'àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ','aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
		$select_terme=$BDD->prepare("SELECT lien,titre, contenu,cour FROM cours WHERE titre LIKE ? OR contenu LIKE?");
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet">

  <title>Cours</title>
</head>

<body>
  <?php
      session_start();
      require_once('nav2.php');
     ?>
  <div class="all-title-box">
    <div class="container text-center">
      <h1>Résultats de la recherche<span class="m_1"></span></h1>
    </div>
  </div>
  <?php
      while($terme_trouve=$select_terme->fetch()){
      	$image=$terme_trouve['lien'];

      $cour=$terme_trouve['cour'];
    ?>
  <div id="overviews" class="section wb">
    <div class="container">
      <hr class="invis">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12">
          <div class="course-item">
            <div class="image-blog">


              <?php
    	echo "<a href='".$cour."'><img src='" .$image. "' class='img-fluid' alt=''></a>";

    ?>
            </div>
            <div class="course-br">
              <div class="course-title">

                <?php 
    	echo "<h2><a href='".$cour."'>".$terme_trouve['titre']."</a></h2>";
    	?>
              </div>
              <div class="course-desc">
                <?php
    echo "<p>".$terme_trouve['contenu']."</p>";
   ?>
              </div>
            </div>
            <div class="course-meta-bot">
              <ul>
                <li><i class="fa fa-book" aria-hidden="true"></i>Cours</li>

              </ul>
            </div>
          </div>
        </div><!-- end col -->



      </div>
    </div>
  </div>

  <?php  
	}
	?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
  </script>





</body>

</html>