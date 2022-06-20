<?php
    include("bdd/acces_BDD.php");
	session_start();
	if (isset($_SESSION['id'])){
    $id = $_GET["challenge"]
	
?>

<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Site Metas -->
<title>CyberSecuriTeach</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/Capture.jpg" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">



<!-- Modernizer for Portfolio -->
<script src="js/modernizer.js"></script>


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

	<div class="all-title-box">
		<div class="container text-center">
			<h1>Challenges<span class="m_1"></span></h1>
		</div>
	</div>

	<div id="overviews" class="section wb">
		<div class="container">
			<div class="row">
				<!-- <div class="col-lg-9 blog-post-single"> -->
				<div class="blog-item">
					<!--	<div class="image-blog">-->

					<img src="images/challenge1.jpg" alt="" class="img-fluid">
				</div>
				<div class="post-content">
					<div class="post-date">

						<div class="blog-title">

							<div id="overviews" class="section wb">
								<div class="container">
									<?php
										$q=$BDD->prepare('SELECT Emplacement FROM challenge WHERE IdChallenge = ?');
										$q->execute(array($id));	
										$result=$q->fetch();							
										$myfile = fopen($result['Emplacement'], "r") or die("Challenge introuvable");
 										echo fread($myfile,filesize($result['Emplacement']));
 										fclose($myfile);

									?>

								</div><!-- end messagebox -->
							</div><!-- end col -->

						</div>


					</div><!-- end media -->
					<!--</div> end col -->

				</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end section -->

		<section class="section lb page-section">

			<div class="section-title row text-center">
				<div class="col-md-8 offset-md-2">

					<!--<p class="lead">BARRE DE RECHERCHE</p>-->

					<?php

										if(isset($_POST['valider'])){

											if(!empty($_POST['answer'])){

											$answer = htmlspecialchars($_POST['answer']);

											$q=$BDD->prepare('SELECT Reponse FROM challenge WHERE IdChallenge = ?');
											$q->execute(array($id));

											if($q->rowCount() > 0){
												$result=$q->fetch();
												$nvscore=0;
												if($result['Reponse']==$answer){
													
													$nvscore='5';
												$utilisateur=$_SESSION['id'];
												$req=$BDD -> prepare('UPDATE rela_challenge_utilisateur SET Score=? WHERE IdChallenge = ? AND IdUtilisateur = ?');
												$req->execute(array($nvscore,$id,$utilisateur));
												$result=$req->fetch();?>

					<div class="rep">
						<h1>La réponse est juste. Score 5/5</h1>
					</div>
					<?php
											}else{
											?>
					<div class="rep">
						<h1>La réponse est fausse, réessayez.</h1>
					</div>
					<?php
      										}
    										}

     
    										}
  										}
										?>
					<form method="post">
						<div class="form-group">
							<input class="form-control" type="text" name="answer" placeholder="Réponse"
								value="<?php if (isset($answer)) echo $answer; ?>" required="required">
						</div>
						<input type="submit" name="valider" value="Valider la réponse">
					</form>

				</div>
			</div>
		</section>
	</div><!-- end media -->


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