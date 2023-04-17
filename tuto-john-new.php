<?php
ob_start();
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
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
			<h1>Tutoriels : Utilisation de John The Ripper<span class="m_1"></span></h1>
		</div>
	</div>
		<!-- Basic -->
		<div class="container pt-5 align-items-center">
		<div class="row align-items-center ">
			<div class="col-8 offset-2">
	
				<h2 class="mb-3">1. Présentation</h2>
				<p >
                John est un logiciel libre de cassage de mot de passe, et est utilisé pour tester la sécurité d’un mot de passe.
                </br>
                Ce tool est écrit en C et en assembleur, et c’est l’un des logiciels de cassage de mots de passe les plus populaires 
                car il inclut l'auto détection des fonctions de hachage utilisées pour stocker les mots de passe.
				</br>
                John dispose donc de 4 modes d’actions : 
                    <ul> 
                        <li>Le mode simple</li>
                        <li>L’attaque par dictionnaire</li>
                        <li>Le mode incrémental</li>
                        <li>Le mode Markov</li>
                    </ul>
				</p>    
				
				<h2 class="mb-3">2. Les différents modes</h2>
				<p >
                    <h3>2.1 Le mode simple</h3>  
                    Dans le mode simple, John effectue quelques transformations sur le nom d’utilisateur, 
                    pour casser les mots de passe les plus faibles. Pour l’utilisateur admin, il testera :
                    “AdMin, Admin123, ADMIn123 etc. “.
                    </br>
                    Ce mode est le plus rapide à effectuer, un mot de passe qui serait cassé par cette méthode 
                    est considéré comme très mauvais.
					</br>
                    Voici un exemple simple : 
                    </br>
                    <kbd>john --single hash.txt</kbd>
                    </br>
                    Le single est le mode à utiliser, hash.txt est le fichier qui contient le hash à craquer.
                    </br> 
                    </br> 
                    <h3>2.2 Attaque par dictionnaire</h3>
                    Pour ce mode, John essaye tous les mots d’une liste donnée de mots de passe potentiels, 
                    en leur appliquant les mêmes transformations que dans le mode précédent.
                    </br>
                    Il est possible de spécifier sa propre liste de mots avec l’option ci-dessous :
                    
                    </br>
                    <kbd>--wordlist=wl.txt</kbd>
					</br>
                    Le wordlist est la liste de mots de passe que nous possédons. 
                    </br>
                    On peut afficher le mot de passe ainsi que spécifier le format avec les commandes suivantes : 
                    </br>
                    <kbd>--show : permet d’afficher le hash cracké</kbd>
                    </br> 
                    <kbd>--format=X : permet d’indiquer le format du hash</kbd>
                    </br>
                    </br>
                    Je vous propose donc d'essayer ce mode. Pour ce faire, vous allez avoir besoin d'un docker que vous pouvez
                    télécharger avec la commande ci-dessous : 
                    </br>
                    <kbd>docker pull thomasgchd/challenge-john:latest</kbd>
                    </br>
                    Vous aurez ensuite à run le docker, avec la commande ci-dessous : 
                    </br>
                    <kbd>docker run -it thomasgchd/challenge-john bash</kbd>
                    </br>
                    Puis, vous devrez utiliser john pour craquer le mot de passe de secret.zip et obtenir le flag : 
                    </br>
                    <kbd>john --wordlist=/home/rockyou.txt hash.txt secret.zip</kbd>
                    </br> 
                    Le mot de passe apparaît et vous n'avez plus qu'à récupérer le flag ! 
                    </br> 
                    </br> 
                    <h3>2.3 Le mode incrémental</h3>
                    Dans ce mode, John essaye toutes les combinaisons de caractères possibles jusqu’à trouver le mot de passe. 
                    Ce mode est infaillible mais tout dépend de la robustesse du mot de passe, qui va influencer le temps de calcul.
					</br>
                    <kbd>john --incremental hash.txt</kbd>
                    </br>
                    </br> 
                    <h3>2.4 Mode markov</h3>
                    Ce mode essaie un ensemble limité de permutations basé sur un fichier “stats”. 
                    Comparé au mode incrémental qui garantit de deviner toutes les combinaisons, 
                    le mode markov échange l’exhaustivité contre la rapidité. 
                    </br>
                    Il essaie de deviner les combinaisons qui sont très proches des mots de passe connus 
                    en supposant que les humains choisissent des mots de passe basés sur l’habitude ou des modèles identifiables.
                    </br>
                    <kbd>john --markov hash.txt</kbd>
                    </br>
                    </br> 
                    <h2 class="mb-3">3. Vidéo explicative</h2>
                <p>
                <iframe width="560" height="315" src="videos/john.mp4" title="YouTube video player" 
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

<?php 
ob_end_flush();
?>
