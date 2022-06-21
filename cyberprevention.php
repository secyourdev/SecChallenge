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
	<title>Cyberprévention</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">

	<?php
		require_once('link.php');
?>


</head>

<body class="host_version">

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header tit-up">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Customer Login</h4>
				</div>
				<div class="modal-body customer-box">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs">
						<li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
						<li><a href="#Registration" data-toggle="tab">Registration</a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="Login">
							<form role="form" class="form-horizontal">
								<div class="form-group">
									<div class="col-sm-12">
										<input class="form-control" id="email1" placeholder="Name" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input class="form-control" id="exampleInputPassword1" placeholder="Email"
											type="email">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-10">
										<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
											Submit
										</button>
										<a class="for-pwd" href="javascript:;">Forgot your password?</a>
									</div>
								</div>
							</form>
						</div>
						<div class="tab-pane" id="Registration">
							<form role="form" class="form-horizontal">
								<div class="form-group">
									<div class="col-sm-12">
										<input class="form-control" placeholder="Name" type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input class="form-control" id="email" placeholder="Email" type="email">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input class="form-control" id="mobile" placeholder="Mobile" type="email">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input class="form-control" id="password" placeholder="Password"
											type="password">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-10">
										<button type="button" class="btn btn-light btn-radius btn-brd grd1">
											Save &amp; Continue
										</button>
										<button type="button" class="btn btn-light btn-radius btn-brd grd1">
											Cancel</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

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
			<h1>CyberPrevention<span class="m_1"></span></h1>
		</div>
	</div>

	<div id="overviews" class="section wb">
		<div class="container">
			<div class="row">
				<div class="blog-item">
					<img src="images/prev.jpg" alt="" class="img-fluid">
				</div>
				<div class="post-content">
					<div class="post-date">
						<div class="blog-title">
							<div class="row align-items-center">
								<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
									<div class="message-box">
										<h2><b>
												Comment choisir un bon mot de passe lorsque vous créez un compte sur
												Internet ?
											</b></h2>

										<p>
											- Utiliser un mot de passe différent pour chaque accès
											<br><br>

											<b>- Ne choisissez pas un mot de passe banal</b><br><br>

											- Lorsque vous choisissez votre mot de passe, évitez donc toutes les
											informations qui vous concernent et qui sont facilement accessibles (sur
											vos réseaux sociaux par exemple)<br><br>
											- Changez les mots de passe par défaut des services que vous utilisez
											<br><br>

											- Choisissez un mot de passe particulièrement complexe pour votre
											boîte de messagerie
											<br><br>

											<b>UN OUTIL POUR CHOISIR UN MOT DE PASSE SECURISE</b><br><br>

											- Nous vous recommandons fortement d’utiliser l’outil KeePass, seul
											gestionnaire français gratuit qui soit certifié par <b>l’ANSSI(
												Agence nationale de la sécurité des systèmes d'information)</b>
										</p>

										<a href="https://www.cybermalveillance.gouv.fr/cybermenaces"
											class="hover-btn-new orange"><span>En savoir plus</span></a>
									</div><!-- end messagebox -->
								</div><!-- end col -->

								<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
									<div class="post-media wow fadeIn">
										<img src="images/PREV2.png" alt="" class="img-fluid img-rounded">
									</div><!-- end media -->
								</div><!-- end col -->
							</div>
							<div class="row align-items-center">
								<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
									<div class="post-media wow fadeIn">
										<img src="images/PREV3.jpg" alt="" class="img-fluid img-rounded">
									</div><!-- end media -->
								</div><!-- end col -->

								<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
									<div class="message-box">
										<h2><b>LES VIRUS INFORMATIQUES</b> </h2>
										<p>Utilisez un antivirus et mettez-le à jour régulièrement. <br><br>

											Mettez régulièrement à jour votre appareil,
											votre système d’exploitation ainsi que les logiciels et applications
											installés. <br><br>

											N’installez pas de logiciels, programmes, applications ou équipements «
											piratés »
											ou dont l’origine ou la réputation sont douteuses. <br><br>

											N’ouvrez pas les messages suspects, leurs pièces jointes et ne cliquez
											pas sur les liens
											provenant de chaînes de messages, d’expéditeurs inconnus ou d’un
											expéditeur connu mais dont le contenu est inhabituel ou vide. <br><br>

											<a href="https://www.cybermalveillance.gouv.fr/tous-nos-contenus/fiches-reflexes/virus-informatiques"
												class="hover-btn-new orange"><span>En savoir plus</span></a>
									</div><!-- end messagebox -->
								</div><!-- end col -->
								<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
									<div class="message-box">
										<h2><b>Le piratage de compte</b> </h2>
										<p>
											Lorsque le site ou le service le permettent, activez la double
											authentification
											pour augmenter le niveau de sécurité. <br><br>

											Ne communiquez jamais d’informations sensibles
											(mots de passe) par messagerie, par téléphone ou sur Internet. <br><br>

											Évitez de vous connecter à un ordinateur ou à un réseau Wi-Fi publics.
											Non maîtrisés, ils peuvent être contrôlés par un pirate. <br><br>

											Déconnectez-vous systématiquement de votre compte après utilisation
											pour éviter que quelqu’un puisse y accéder après vous.
										</p>

										<a href="https://www.cybermalveillance.gouv.fr/tous-nos-contenus/fiches-reflexes/piratage-de-compte"
											class="hover-btn-new orange"><span>En savoir plus</span></a>
									</div><!-- end messagebox -->
								</div><!-- end col -->
							</div><!-- end container -->
						</div><!-- end section -->
					</div>
				</div>
			</div>
		</div><!-- end row -->
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