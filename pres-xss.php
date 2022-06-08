<?php
	session_start();
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

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
									<input class="form-control" id="exampleInputPassword1" placeholder="Email" type="email">
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
									<input class="form-control" id="password" placeholder="Password" type="password">
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
			<h1>Présentations : Une attaque XSS<span class="m_1"></span></h1>
		</div>
	</div>
		<!-- Basic -->
		<div class="container pt-5 align-items-center">
		<div class="row align-items-center ">
			<div class="col-8 offset-2">
	
				<h2 class="mb-3">1. Qu'est ce que c'est ?</h2>
				<p >
                Les attaques XSS consistent à insérer un code malveillant dans des sites Web par ailleurs fiables. 
                </br>
                Une attaque XSS se produit quand des cybercriminels injectent un script malveillant dans le contenu du site Web ciblé,
                qui est ensuite inclus dans le contenu dynamique reçu par le navigateur de la victime. 
                </br>
                Il est impossible pour le navigateur de différencier les balises valides de celles du hacker
                et il se contente donc de les exécuter.
					</br>
                    </br>
                    Elle peut être initiée par des pirates qui interceptent les e-mails, l'historique de votre navigation sur Internet 
                    et les réseaux sociaux pour cibler vos données sécurisées et commettre des actes criminels. 
                    </br>
                    Contrairement au phishing qui nécessite que vous baissiez votre garde involontairement et que vous
                    ouvriez votre ligne de défense, une attaque passive dite de l'homme du milieu se fait sans que vous en ayez conscience.
                    </br>
                    </br>
                    Le but des hackers est de se faire passer pour quelqu'un a qui vous devez communiquer vos informations
                    pour payer une facture, régler quelque chose, et de ce fait récupérer vos données bancaires, vos mots de passes,
                    vos comptes. Au final, il va essayer de voler le plus d'informations personnelles et professionnelles à votre égard
                    dans le but de les revendre ou de les utiliser contre votre gré.
				</p>    
				</br>
				<h2 class="mb-3">2. Impact d’un XSS</h2>
				<p >
                En exploitant les failles XSS, un attaquant peut effectuer des actions malveillantes comme :
                </br>
                <ul>
                        <li>Rediriger les utilisateurs vers un site Web malveillant. </li>
                        </br>
                        <li>Enregistrer les frappes de l’utilisateur sur le clavier.</li>
                        </br>
                        <li>Accéder à l’historique de navigation de l’utilisateur et au contenu des presse-papiers.</li>
                        </br>
                        <li>Exécuter des attaques basées sur un navigateur Web (comme planter le navigateur).</li>
                        </br>
                        <li>Obtenir les informations sur les cookies d’un utilisateur qui est connecté à un site Web.</li>
                        </br>
                        <li>Voler le jeton de session de connexion, 
                        permettant à l'attaquant d'interagir avec l'application comme la victime, sans avoir à connaître son mot de passe.</li>
                        </br>
                        <li>Forcer l'utilisateur à envoyer des requêtes à un serveur, contrôlées par l'attaquant.</li>
                        </br>
                        <li>Modifier le contenu de la page.</li>
                        </br>
                        <li>Piéger la victime pour qu’elle divulgue son mot de passe pour accéder à l’application ou d’autres applications.</li>
                        </br>
                        <li>Infecter la victime avec d'autres codes malveillants en utilisant une vulnérabilité du navigateur Web lui-même, 
                            voire prendre le contrôle de l'ordinateur de la victime.</li>
                        </br>
                    </ul>
				</p>   

				<h2 class="mb-3">3. Prévention contre le XSS </h2>
                <h3 class="mb-3">3.1 Pour éviter d'en être victime </h3>
				<p >
                    <ul>
                        <li><b>Désactiver les scripts</b> sur les pages où ils ne sont pas nécessaires ou les désactiver complètement.</li>
                        </br>
                        <li><b>Éviter de cliquer sur des liens provenant d'emails</b> ou de posts sur un forum suspect, 
                            qui pourraient rediriger vers des pages corrompues.</li>
                        </br>
                        <li>Accéder à des sites Web en tapant directement l’URL dans votre navigateur, 
                            au lieu de passer par la source ou le lien d’un tiers.</li>
                        </br>
                        <li>Maintenir vos logiciels à jour pour bénéficier des derniers correctifs de bugs et de sécurité. 
                            <b>Mettre à jour régulièrement ses logiciels</b> peut réduire considérablement les failles qui rendent 
                            un site ou une application vulnérable aux attaques XSS.</li>
                        </br>
                        <li><b>Passer en revue les applications</b> pour déterminer celles qui sont nécessaires et celles qui sont rarement utilisées. 
                            <b>En vous débarrassant des applications que vous n'utilisez pas</b>, vous réduisez le nombre de vulnérabilités potentielles.</li>
                        </br>
                        <li><b>Utilisez un antivirus de haute qualité comme Kaspersky Total Security</b>, 
                            qui fonctionne 24h sur 24 pour protéger vos appareils et vos données.
                            Il <b>bloque les menaces courantes et complexes</b> telles que les virus,
                            les malwares, les ransomwares, les logiciels espions et toutes les dernières techniques de piratage.</li>
                        </br>
                    </ul>
                    
                <h3 class="mb-3">3.2 Pour les développeurs de site Web </h3>
                    <ul>
                        <li>Veiller à ce que toutes les pages de votre site Web acceptant
                             les entrées utilisateur <b>filtrent les entrées de code, comme le HTML et le JavaScript.</b></li>
                        </br>
                        <li><b>Rechercher les vulnérabilités des applications Web</b> et appliquer les correctifs nécessaires.</li>
                        </br>
                        <li><b>Mettre à jour le logiciel de votre site Web</b> et de votre serveur, 
                            pour éviter toute exploitation future des vulnérabilités susceptibles d'être visées par une attaque XSS.</li>
                        </br>
                    </ul>
				</p> 
			</div> <!-- end of col -->
		</div> <!-- end of row -->
    </div>
        <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>CyberSecuriTeach</h3>
                        </div>
                        <p> </p>
                        <div class="footer-right">
							<ul class="footer-links-soi">
								
							</ul><!-- end links -->
						</div>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Liens</h3>
                        </div>
                        <ul class="footer-links">
                          <li><a href="index.php">Accueil</a></li>
                            <li><a href="course-grid-3.php">Cours</a></li>
                            <li><a href="blog.php">Tutoriels</a></li>
							<li><a href="pricing.php">Challenges</a></li>
							<li><a href="cyberprevention.php">Cyber Prevention</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
        </div><!-- end container -->
    </footer><!-- end footer --> 

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2021 <a href="#">CyberSecuriTeach</a> </p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>