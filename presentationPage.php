<?php
  session_start();
  include('bdd/acces_BDD.php');
  if (isset($_SESSION['id'])){
  $categorie = $_GET["categorie"]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title><?php if($categorie=='Tous'){echo 'Présentations';} else{ ?> Présentations/<?php echo $categorie; } ?>
    </title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php
		require_once('link.php');
?>


</head>

<body class="host_version">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader-container">
            <div class="progress-br float shadow">
                <div class="progress__item"></div>
            </div>
        </div>
    </div>
    <!-- END LOADER -->



    <!-- Start header -->
    <?php
		require_once('nav2.php');
	?>
    <!-- End header -->



    <div class="all-title-box">
        <div class="container text-center">
            <h1>Présentations</h1>
        </div>
    </div>

    <div id="overviews" class="section wb">

        <div class="listeCategories">
            <a class='categorie <?php if ($categorie=='Tous'){?> selected <?php } ?>'
                href="presentationPage.php?categorie=Tous"> Tous </a>
            <?php
				$q=$BDD->prepare('SELECT DISTINCT(Categorie) FROM presentation WHERE Categorie IS NOT NULL');
				$q->execute(array());
				foreach($q as $ligne){
			?>
            <a class='categorie<?php if ($categorie==$ligne['Categorie']){?> selected <?php } ?>'
                href="presentationPage.php?categorie=<?php echo $ligne['Categorie'] ?>">
                <?php echo $ligne['Categorie']; ?> </a>
            <?php
				}
			?>
        </div>

        <div class="container">

            <hr class="invis">

            <div class="row">
                <?php
                    $q=$BDD->prepare('SELECT * FROM presentation');  
                       
                    $q->execute(array());
                    foreach ($q as $ligne){
						if ($categorie==$ligne['Categorie'] || $categorie=='Tous'){
						?>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
                        <div class="image-blog">
                            <a href="presentation.php?presentation=<?php echo $ligne['Id'] ?>">
                                <img src=<?php echo $ligne['LienImage'] ?> alt="" class="img-fluid">
                        </div>
                        <div class="course-br">
                            <div class="course-title">
                                <h2><a href="presentation.php?presentation=<?php echo $ligne['Id'] ?>"
                                        title=""><?php echo $ligne['Titre'] ?></a></h2>
                            </div>
                            <div class="course-desc">
                                <p><?php echo $ligne['Description'] ?> </p>
                            </div>

                        </div>

                    </div>
                </div><!-- end col -->
                <?php
				
			}
			}
                    ?>

            </div><!-- end clearfix -->
        </div><!-- end col -->

    </div><!-- end row -->
    </div><!-- end container -->
    </footer><!-- end footer -->

    <?php
        require_once('footer.php');
    ?>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>

</html>

<?php }
else{
	header('Location: index.php');
}
?>