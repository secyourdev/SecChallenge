<?php
  session_start();
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


	<!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->

	<?php require_once('nav2.php') ?>


	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel"
		data-pause="hover" data-interval="false">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('images/fond5.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									<div class="big-tagline">
										<h2><strong>CyberSecuriTeach </strong> </h2>
										<p class="lead">La plateforme Web qui va te permettre d'en apprendre plus sur la
											cybersécurité </p>
										<?php
											  if(isset($_SESSION['pseudo'])){
            ?>
										<a class="hover-btn-new"><span>Bienvenue sur le site, vous êtes connecté
												!</span></a>
										<?php
            							}else{
            						?>
										<a href="inscription.php" class="hover-btn-new"><span>Inscription</span></a>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<a href="connexion.php" class="hover-btn-new"><span>Connexion</span></a>
										<?php
										}
									?>
									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/fond6.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-left">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight">DES COURS<strong></strong></h2>
										<p class="lead" data-animation="animated fadeInLeft"></p>

									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/fond7.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><strong>DES CHALLENGES</strong> </h2>
										<p class="lead" data-animation="animated fadeInLeft">Fichier secret/Exploitation
											de failles/Stéganographie...</p>

									</div>
								</div>
							</div><!-- end row -->
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<div id="overviews" class="section wb">
		<div class="container">
			<div class="section-title row text-center">
				<div class="col-md-8 offset-md-2">
					<h3>Presentation</h3>
					<p class="lead"></p>
				</div>
			</div><!-- end title -->

			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
					<div class="message-box">
						<h4></h4>
						<h2>CyberSecuriTeach</h2>
						<p>Dans un monde toujours plus digital, la cybersécurité prend une place de plus en plus
							importante et il devient nécessaire de ne pas simplement être consommateur. Un des enjeux de
							ce monde numérique est donc le développement d’une conscience numérique.

						</p>

						<p>Pour avancer dans ce sens, CyberSecuriTeach est une plateforme Web permettant d’en savoir
							plus sur le fonctionnement d’une cyber attaque à partir de challenges,cours et tutoriels
							divers et variés. </p>


					</div><!-- end messagebox -->
				</div><!-- end col -->

				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
					<div class="post-media wow fadeIn">
						<img src="images/logo2.jpg" alt="" class="img-fluid img-rounded">
					</div><!-- end media -->
				</div><!-- end col -->
			</div>
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
					<div class="post-media wow fadeIn">

					</div><!-- end media -->
				</div><!-- end col -->

				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
					<div class="message-box">


					</div><!-- end messagebox -->
				</div><!-- end col -->

			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->

	<section class="section lb page-section">

		</div><!-- end title -->

		<div class="section cl">
			<div class="container">
				<div class="row text-left stat-wrap">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i
								class="flaticon-study"></i></span>
						<p class="stat_count">
							<?php
								$q=$BDD->prepare('SELECT COUNT(Id) FROM cours');
								$q->execute(array());
								$nbCours=$q->fetch();
								echo $nbCours["COUNT(Id)"];
							?>
						</p>
						<h3>Cours</h3>
					</div><!-- end col -->

					<div class="col-md-4 col-sm-4 col-xs-12">
						<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i
								class="flaticon-online"></i></span>
						<p class="stat_count">
						<?php
								$q=$BDD->prepare('SELECT COUNT(IdTutoriel) FROM tutoriel');
								$q->execute(array());
								$nbCours=$q->fetch();
								echo $nbCours["COUNT(IdTutoriel)"];
							?>
						</p>
						<h3>Tutoriels</h3>
					</div><!-- end col -->

					<div class="col-md-4 col-sm-4 col-xs-12">
						<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i
								class="flaticon-achievement"></i></span>
						<p class="stat_count">
						<?php
								$q=$BDD->prepare('SELECT COUNT(IdChallenge) FROM challenge');
								$q->execute(array());
								$nbCours=$q->fetch();
								echo $nbCours["COUNT(IdChallenge)"];
							?>
						</p>
						<h3>Challenges</h3>
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end section -->
	</section>



	<?php
        require_once('footer.php');
    ?>




	<!-- ALL JS FILES -->
	<script src="js/all.js"></script>
	<!-- ALL PLUGINS -->
	<script src="js/custom.js"></script>
	<script src="js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
</body>

</html>