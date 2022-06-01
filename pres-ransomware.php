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
			<h1>Présentations : Le ransomware (rançonlogiciels)<span class="m_1"></span></h1>
		</div>
	</div>
		<!-- Basic -->
		<div class="container pt-5 align-items-center">
		<div class="row align-items-center ">
			<div class="col-8 offset-2">
	
				<h2 class="mb-3">1. Qu'est ce que c'est ?</h2>
				<p >
					Le ransomware (rançonlogiciel en français) est comme indiqué un logiciel malveillant
                    visant à chiffrer vos donner pour vous les rendre moyennant une rançon. Cependant, la payer ne 
                    garantit pas la récupération de ces dites données.
                    </br>
                    Ces logiciels peuvent se cacher dans des messages douteux contenant des pièces jointes,
                    des liens vous invitant à les couvrir, dans des clés USB.
                    </br>
				</p>    
				
				<h2 class="mb-3">2. Comment s'en protéger ?</h2>
				<p >
                    Pour s'en protéger, il y a 5 règles d'or : 
                    <ul>
                        <li><b>Effectuer des sauvegardes régulières de vos données</b></li>
                        C'est le meilleur moyen de contrer un hacker souhaitant récupérer vos données.
                        Mettez cette sauvegarde sur un disque dur extérieure à votre PC, en dehors de votre réseau
                        et testez la avant de la ranger ! 
                        </br>
                        </br> 
                        <li><b>N'ouvrez pas les messages dont la provenance est douteuse</b></li>
                        Le hacker peut déjà avoir récupérer des données sur vos amis, vos collaborateurs et peut créer des 
                        e-mails personnalisés similaires à ceux de vos contacts, donc vérifiez toujours les e-mails. 
                        Si vous avez un seul doute, n'hesitez pas à contacter vous-même votre interlocteur.
                        </br>
                        </br> 
                        <li><b>Vérifier les extensions douteuses.</b></li> 
                        Vous connaissez tous les extensions telles que .pdf, .doc, .mp4, .xlsx etc.. 
                        Mais faites attention, beaucoup d'extensions ne sont pas à ouvrir comme : 
                        </br>
                        <center>.pif, .com, .bat, .exe, .vbs, .lnk ...</center>
                        Certaines de ces extensions peuvent contenir des ransomware et donc vous portez défaut
                        après. Je vous conseille aussi de télécharger vos logiciels sur les sites officiels et bien vérifier
                        qu'il s'agit du site officiel.
                        </br>
                        </br>
                        <li><b>Mettez à jour vos logiciels</b></li>
                        Pensez à mettre à jour vos logiciels ! C'est très important car si une faille apparaît sur un logiciel,
                        elle sera corrigée par une mise à jour, donc si vous ne mettez pas régulièrement à jour vos logiciels,
                        vous risquez de vous exposez à des failles de sécurité sur vos logiciels.
                        </br>
                        Les logiciels, les systèmes d'exploitation qui ne sont plus mis à jour donnent aux attaquant un 
                        moyen d'accès plus facile à vos systèmes et sont donc à éviter.
                        </br>
                        </br>
                        <li><b>Utilisez un compte "utilisateur"</b></li>
                        En faisant cela à la place d'un compte "administrateur", si vous vous faites hacker, le hacker aura plus 
                        de difficultés car il aura moins de privilèges. En effet, certaines actions requièrent l'autorisation administrateur
                        pour pouvoir s'excécuter.
                        </br>
                    </ul>
                    </br>
				</p>   

				<h2 class="mb-3">3. Que faire si on en est victime ?</h2>
				<p >
                    <ul>
                        <li>Débranchez la machine d'internet ou du réseau</li>
                        Débranchez le câble Ethernet de votre ordinateur, ou bien désactivez la connexion Wi-Fi.
                        </br>
                        </br>
                        <li>En entreprise, alertez le service informatique</li>
                        Ils pourront intervenir rapidement et prendre les mesures nécessaire.
                        </br>
                        </br>
                        <li>Ne payez pas la rançon</li>
                        Vous n'êtes pas certain de récupérer vos données, et cela alimenterait le système mafieux.
                        </br>
                        </br>
                        <li>Conservez ou faites conserver les preuves par un professionnel</li>
                        Conservez le message piégé, les fichiers, des copies physiques des postes ou serveurs tocuhés,
                        et tous les fichiers qui pourront servir à signaler cette attaque aux autorités.
                        </br>
                        </br>
                        <li>Déposez plainte</li>
                        <b>Allez rapidement dans le commissariat le plus proche et déposez plainte.
                           
                        </br>
                        </br>
                    </ul>
                    Si vous êtes un particulier, vous pouvez être accompagné par une assiocation de France Victimes au <b>116 006</b> 
                    (numéro gratuit).
				</p> 

				<h2 class="mb-3">4. Vidéo explicative</h2>
                <p>
                <iframe width="560" height="315" src="videos/ransomware.mp4" title="YouTube video player" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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