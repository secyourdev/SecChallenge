<?php
ob_start();
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
    if (isset($_SESSION['id'])){
    include("bdd/acces_BDD.php");
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
    <title><?php if($categorie=='Tous'){echo 'Tutoriels';} else{ ?> Tutoriels/<?php echo $categorie; } ?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php
		require_once('link.php');
?>


</head>

<body class="host_version">

    <?php
    require_once('nav2.php');
    ?>
    <!-- LOADER 
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	 END LOADER -->

    <div class="all-title-box">
        <div class="container text-center">
            <h1>Tutoriels</h1>
        </div>
    </div>

    <div id="overviews" class="section wb">
        <div class="listeCategories">
            <a class='categorie <?php if ($categorie=='Tous'){?> selected <?php } ?>'
                href="tutoPage.php?categorie=Tous"> Tous </a>
            <?php
				$q=$BDD->prepare('SELECT DISTINCT(Categorie) FROM tutoriel WHERE Categorie IS NOT NULL');
				$q->execute(array());

				foreach($q as $ligne){
			?>
            <a class='categorie<?php if ($categorie==$ligne['Categorie']){?> selected <?php } ?>'
                href="tutoPage.php?categorie=<?php echo $ligne['Categorie'] ?>"> <?php echo $ligne['Categorie']; ?> </a>
            <?php
				}
			?>
        </div>
        <div class="container">

            <div class="row">
                <?php
                    $q=$BDD->prepare('SELECT * FROM tutoriel');         
                    $q->execute(array());
					$compteur = 0;
                    foreach ($q as $ligne){
                        if ($categorie==$ligne['Categorie'] || $categorie=='Tous'){
						?>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
                        <div class="image-blog">
                            <a href="tuto.php?tuto=<?php echo $ligne['IdTutoriel']; ?>"><img
                                    src=<?php echo $ligne['Image']; ?> alt="" class="img-fluid">
                        </div>
                        <div class="blog-title">
                            <h2><a href="tuto.php?tuto=<?php echo $ligne['IdTutoriel'] ;?>"
                                    title=""><?php echo $ligne['Titre']; ?></a></h2>
                        </div>
                        <div class="blog-desc">
                            <p><?php echo $ligne['Description']; ?> </p>
                        </div>
                        <div class="blog-button">
                            <a class="hover-btn-new orange"
                                href="tuto.php?tuto=<?php echo $ligne['IdTutoriel']; ?>"><span>En savoir plus<span></a>
                        </div>
                    </div>
                </div><!-- end col -->
                <?php 
                        }
                    }
                ?>
            </div><!-- end container -->
        </div><!-- end section -->
    </div>

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

<?php 
ob_end_flush();
?>
