<?php
	session_start();
	if (isset($_SESSION['id'])){
	include("bdd/acces_BDD.php");
	$id = $_GET["cours"]; 

	$q=$BDD->prepare('SELECT LienImage, EmplacementCours FROM cours WHERE Id = ?');
	$q->execute(array($id));	
	$result=$q->fetch();
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
	<title>
		<?php 
		$q=$BDD->prepare('SELECT Titre FROM cours WHERE Id=?');
		$q->execute(array($id));
		$res=$q->fetch();
		echo $res['Titre'];
	?>
	</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">

	<?php
		require_once('link.php');
?>


</head>

<body class="host_version">

	<!-- LOADER 
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	 END LOADER -->

	<!-- Start header -->
	<?php
		require_once('nav2.php');
	?>
	<!-- End header -->

	<div class="all-title-box">
		<div class="container text-center">
			<h1>Cours<span class="m_1"></span></h1>
		</div>
	</div>

	<div id="overviews" class="section wb">
		<div class="container">
			<div class="row">

				<div class="blog-item">

					<img src="<?php echo $result['LienImage'] ?>" alt="" class="img-fluid images_cours">

					<div class="post-content">

						<div class="row align-items-center">
							<div class="message-box">

								<?php				
				$myfile = fopen($result['EmplacementCours'], "r") or die("Cours introuvable");
			 	echo fread($myfile,filesize($result['EmplacementCours']));
				fclose($myfile);

			?>
							</div>
						</div>
					</div>
				</div>
			</div>


		</div><!-- end title -->
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