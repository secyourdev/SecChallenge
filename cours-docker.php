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
			<h1>Cours<span class="m_1"></span></h1>
		</div>
	</div>
	
    <!<div id="overviews" class="section wb"> 
        <div class="container">
            <div class="row"> 
               <!-- <div class="col-lg-9 blog-post-single"> -->
                    <div class="blog-item">
					<!--	<div class="image-blog">-->
							<img src="images/docker1.png" alt="" class="img-fluid">
						</div>
						<div class="post-content">
							<div class="post-date">
							
							<div class="blog-title">
								
								

	 <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4></h4>
                        <h2><b>DOCKER</b></h2>

                        <p>Docker a été créée en 2013 par l’entreprise Dotcloud.
						
</p>

                        <p>“Docker est un logiciel libre permettant de lancer des applications dans des conteneurs logiciels.”  <b>Wikipedia</b>
</p>

                        <p><b>Qu’est ce qu’un conteneur ?</b>
 </p>

                        <p>Un conteneur Linux est un <b>processus</b> ou un ensemble de processus isolés du reste du système, tout en étant <b>légers</b>.
Le conteneur permet une isolation des processus et une isolation vis-à-vis du système d’exploitation. C’est ce qu’on appelle la virtualisation légère.
Donc on pourra faire tourner une application quel que soit le système d’exploitation.
Dans ce conteneur, on peut installer différentes applications et les librairies nécessaires pour faire fonctionner ces applications.
</p>

                        <p><b>Machine virtuelle vs Conteneur</b> </p>
<img src="images/docker2.png">
                        <p> Le conteneur met en avant une virtualisation <b>légère</b> tandis que lorsqu’on utilise une  machine virtuelle on parle de virtualisation <b>lourde</b>.
Pour la machine virtuelle, on a la machine physique reliée à un système d’exploitation qui va créer d’autres machines virtuelles avec leurs systèmes d’exploitations.
une machine virtuelle est totalement <b>isolée</b> du système hôte ,les ressources attribuées à une machine virtuelle lui sont totalement réservées, il y a la possibilité d’installer <b>différents OS</b>
Une machine virtuelle utilise donc beaucoup de ressources (cpu ram)
Avec les conteneurs, la structure est simplifiée car les applications vont pouvoir fonctionner directement avec le système d’exploitation hôte. On ne virtualise plus à partir du matériel physique mais le système hôte en réutilisant son noyau.
Les conteneurs exploitent des ressources beaucoup moins importantes en termes de ram et cpu auprès de l'hôte qu’une machine virtuelle.
</p>

                        <p><b>Avantages du conteneur</b>
</p>

<p><b>Léger</b> car il est plus efficace en terme de gestion des ressources et utilise beaucoup moins de ram et cpu.

</p>

<p><b>Rapide</b> car  ils peuvent démarrer beaucoup plus rapidement et plus fréquemment qu'une machine virtuelle sur nos serveurs hôtes, et ainsi réduire encore un peu les frais de l'infrastructure.


</p>

<p><b>Portable</b>  car contrairement à une machine virtuelle qui demande une installation et une gestion lourde des ressources, un des points forts des conteneurs est sa faculté à pouvoir partager un conteneur à une autre personne qui aura juste à le faire fonctionner de son côté.


</p>

<p>Si je travaille sur un projet avec des personnes ayant des systèmes d’exploitations différents, l’utilisation de conteneur va permettre d’avoir un environnement commun.


</p>

<p><b>IMAGE DOCKER</b> 
<img src="images/docker3.png">
</p>

<p>Lorsqu’on utilise Docker,  on crée une application qu’on a empaquetée dans une image conteneur. Une image est une représentation de l’application de leur configuration et de leurs dépendances.

</p>

<p>Pour exécuter l’application une image de l’application est créée, créant ainsi un conteneur à exécuter sur l’hôte Docker. Les images sont stockées dans un registre, comparable à une bibliothèque d’images.


</p>

<p>On peut donc assimiler un registre comme une bibliothèque où l’on stocke les images. C’est dans ces registres que l’on extrait les images pour créer des conteneurs afin de mettre en marche une application.

</p>

<p>Une registre est un aussi un logiciel qui permet de partager des images à d'autres personnes.
Il s’agit du  registre Docker Hub qui est le service de partage d’applications puisque ce service permet d’aller récupérer les images et les faire tourner sur notre système.
</p>
<p><b>CREATION D'IMAGES</b> 
<img src="images/docker4.png">
<p>Pour créer notre image, nous devons créer un fichier <b>Dockerfile</b>. Dans ce fichier Dockerfile, vous trouverez l'ensemble de la recette décrivant l'image Docker dont vous avez besoin pour votre projet.
</p>

<p>Chaque instruction que nous allons donner dans notre Dockerfile va créer une nouvelle <b>couche</b> correspondant à chaque étape de la construction de l'image.
</p>

<p>Cependant, nous cherchons à limiter le nombre de couches pour que l’application soit légère et performante.

</p>

<p>Il est aussi nécessaire de créer un fichier .dockerignore qui va permettre de ne pas copier et télécharger des fichiers indésirables dans notre conteneur.
</p>

<p>Une fois que nous avons ces deux fichiers nous devons exécuter 2 instructions : 

</p>

<p>Dans un premier temps, la commande docker build <b>va créer un conteneur pour chaque instruction</b>, et le résultat sera sauvegardé dans une couche. Le résultat final étant un ensemble de layers qui construisent une image Docker complète.

</p>

<p>Enfin via la commande docker run on lance le conteneur et on associe un port à l’application. Ainsi, on accèdera à l’application à partir d’un url particulier en fonction du port choisi.

</p>

<p>Cependant, nous cherchons à limiter le nombre de couches pour que l’application soit légère et performante.

</p>

<p>Cependant, nous cherchons à limiter le nombre de couches pour que l’application soit légère et performante.

</p>

<p><b>TRANSFERT D'IMAGES</b></p>
<img src="images/docker5.png">

<p>Pour transférer des images, 2 solutions s’offrent à nous.

</p>

<p>Soit on opte pour le partage de notre fichier dockerfile. La personne devra donc créer l’image de son côté.

</p>

<p>Soit on partage notre image via le site Dockerhub en utilisant un registre. Docker Hub répertorie de nombreuses images. On crée notre image sur le dockerhub pour rendre accessible au public notre image.

</p>

<p>Pour cela, vous devez vous rendre sur le site https://hub.docker.com/ et vous connecter avec le compte que vous avez créé lors de l'installation de Docker.

</p>

<p>Puis, cliquez sur le lien Create Repository. Vous arrivez alors sur une page où vous devez saisir le nom de votre image, ainsi qu'une description.

</p>

<p>Nous avons créé une image Docker via la commande docker build. Nous allons maintenant la publier sur le Docker Hub. Pour cela, nous devons utiliser plusieurs commandes.


</p>

<p><b>docker tag</b> puis <b>docker push</b>

</p>

<p>Par conséquent, si nous pouvons publier notre image on peut donc en chercher. Il existe 2 types d’images : les officielles et les personnelles.
La commande docker search permet de chercher l’image que vous souhaitez. 


</p>

<p>Pour cela, vous devez vous rendre sur le site https://hub.docker.com/ et vous connecter avec le compte que vous avez créé lors de l'installation de Docker.

</p>

<p>Pour cela, vous devez vous rendre sur le site https://hub.docker.com/ et vous connecter avec le compte que vous avez créé lors de l'installation de Docker.

</p>

<p><b>DOCKER est un logiciel gratuit</b></p>

<p><b>DOCKER Compose</b></p>
<img src="images/docker6.png">

<p>Docker Compose est un outil écrit en Python qui permet de décrire, dans un fichier YAML, plusieurs conteneurs comme un ensemble de services interconnectés.
En effet, certaines applications ont besoin de plusieurs services ( base de données et système de fichier par exemple)
En une seule commande je peux donc démarrer l’ensemble des  conteneurs nécessaires au fonctionnement de l’application. Cet ensemble de conteneurs est appelé une Stack.
On parle par exemple de la stack LAMP dans la création de site web. LAMP est un acronyme pour linux apache mysql et php qui sont les services nécessaires au fonctionnement d’un site web.</p>

<p><b>Gestion stockage</b></p>

<p>Pour comprendre la gestion du stockage en docker, il faut définir 2 notions.
Nous avons les conteneurs <b>stateless</b> et <b>stateful</b>.
On parle de conteneur <b>stateful</b> notamment pour les bases de données car elle demande un stockage de données et donc elle stocke un état. Lorsque je redémarre mon application je dois retrouver mes données.
Tandis qu’un conteneur <b>stateless</b> ne stocke pas d'état.
Cependant sur docker, un conteneur est par définition stateless.Il perdra les données.
Il existe une solution pour stocker les données en local. On crée un volume pour stocker les données sur le disque hôte
Sur la capture d'écran, db_data est un volume créé par Docker directement, qui permet d'écrire les données sur le disque hôte sans spécifier l'emplacement exact.</p>




</div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                    	 <img src="images/" alt="" class="img-fluid img-rounded">
                        <img src="images/" alt="" class="img-fluid img-rounded">
                        
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

<!--<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
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
					</div>
					
					<!--<div class="blog-author">
						<div class="author-bio">
							<h3 class="author_name"><a href="#">Tom Jobs</a></h3>
							<h5>CEO at <a href="#">SmartEDU</a></h5>
							<p class="author_det">
								Lorem ipsum dolor sit amet, consectetur adip, sed do eiusmod tempor incididunt  ut aut reiciendise voluptat maiores alias consequaturs aut perferendis doloribus omnis saperet docendi nec, eos ea alii molestiae aliquand.
							</p>
						</div>
						<div class="author-desc">
							<img src="images/author.jpg" alt="about author">
							<ul class="author-social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-skype"></i></a></li>
							</ul>
						</div>
					</div>

		<div id="fh5co-about">
		<div class="container">


				<!--<span>Tutoriel</span>
				<h2>Comment penetrer dans un serveur ?</h2>
				<p>Voici un tutoriel afin de pouvoir accéder à un serveur à l'aide du Bruteforce</p>
				<p>Dans ce tutoriel, nous allons pénétrer dans un serveur par du bruteforce. Pour cela nous allons utiliser Patator.
								Dans un premier temps, nous devons connaître l'adresse ip de la victime ainsi sur la machine victime, nous allons utiliser la commande ifconfig</p>
				<p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat cauctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per Mauris in erat justo.</p>
			</div>
			
				<img class="img-responsive" src="images/ssh1.jpg" alt="Free HTML5 Bootstrap Template">

				<p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat cauctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per Mauris in erat justo.</p>
				<p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed.</p>
				<p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat cauctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per Mauris in erat justo.</p>

				<img class="img-responsive" src="images/ssh2.jpg" alt="Free HTML5 Bootstrap Template">
			</div>
		</div>
	</div>
					
				<!--	<!<div class="blog-comments">
						<h4></h4>
						<div id="comment-blog">
							<ul class="comment-list">
								<li class="comment">
									<div class="avatar"><img alt="" src="images/" class="avatar"></div>
									<div class="comment-container">
										<h5 class="comment-author"><a href="#"> </a></h5>
										<div class="comment-meta">
											<a href="#" class="comment-date link-style1"></a>
											<a class="comment-reply-link link-style3" href="#respond"></a>
										</div>
										<div class="comment-body">
											<p></p>
										</div>
									</div>
								</li>
								<li class="comment">
									<div class="avatar"><img alt="" src="images/" class="avatar"></div>
									<div class="comment-container">
										<h5 class="comment-author"><a href="#"> </a></h5>
										<div class="comment-meta">
											<a href="#" class="comment-date link-style1"></a>
											<a class="comment-reply-link link-style3" href="#respond"></a>
										</div>
										<div class="comment-body">
											<p></p>
										</div>
									</div>
									<ul class="children">
										<li class="comment">
											<div class="avatar"><img alt="" src="images/" class="avatar"></div>
											<div class="comment-container">
												<h5 class="comment-author"><a href="#"></a></h5>
												<div class="comment-meta"><a href="#" class="comment-date link-style1"></a><a class="comment-reply-link link-style3" href="#respond"></a></div>
												<div class="comment-body">
													<p></p>
												</div>
											</div>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<div class="comments-form">
						<h4></h4>
						<!-- <div class="comment-form-main">
							<form action="#">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<input class="form-control" name="commenter-name" placeholder="Name" id="commenter-name" type="text">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<input class="form-control" name="commenter-email" placeholder="Email" id="commenter-email" type="text">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<input class="form-control" name="commenter-url" placeholder="Website URL" id="commenter-url" type="text">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="commenter-message" placeholder="Message" id="commenter-message" cols="30" rows="2"></textarea>
										</div>
									</div>
									<div class="col-md-12 post-btn">
						-->
									</div>
								</div>
							</form>
						</div>
					</div>
					
                </div><!-- end col -->
			<!--	<div class="col-lg-3 col-12 right-single">
					<div class="widget-search">
						<div class="site-search-area">
							<form method="get" id="site-searchform" action="#">
								<div>
									<input class="input-text form-control" name="search-k" id="search-k" placeholder="Search keywords..." type="text">
									<input id="searchsubmit" value="Search" type="submit">
								</div>
							</form>
						</div>
					</div>
					<div class="widget-categories">
						<h3 class="widget-title">Categories</h3>
						<ul>
							<li><a href="#">Political Science</a></li>
							<li><a href="#">Business Leaders Guide</a></li>
							<li><a href="#">Become a Product Manage</a></li>
							<li><a href="#">Language Education</a></li>
							<li><a href="#">Micro Biology</a></li>
							<li><a href="#">Social Media Management</a></li>
						</ul>
					</div>
					<div class="widget-tags">
						<h3 class="widget-title">Search Tags</h3>
						<ul class="tags">
							<li><a href="#"><b>business</b></a></li>
							<li><a href="#"><b>jquery</b></a></li>
							<li><a href="#">corporate</a></li>
							<li><a href="#">portfolio</a></li>
							<li><a href="#">css3</a></li>
							<li><a href="#"><b>theme</b></a></li>
							<li><a href="#"><b>html5</b></a></li>
							<li><a href="#"><b>mysql</b></a></li>
							<li><a href="#">multipurpose</a></li>
							<li><a href="#">responsive</a></li>
							<li><a href="#">premium</a></li>
							<li><a href="#">javascript</a></li>
							<li><a href="#"><b>Best jQuery</b></a></li>
						</ul>
					</div>
				</div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <!--<div class="parallax section dbcolor">
        <div class="container">
            <div class="row logos">
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_01.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_02.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_03.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_04.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_05.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_06.png" alt="" class="img-repsonsive"></a>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

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
							<li><a href="#">Cyber Prevention</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3></h3>
                        </div>

                   <!--     <ul class="footer-links">
                            <li><a href="mailto:#">info@yoursite.com</a></li>
                            <li><a href="#">www.yoursite.com</a></li>
                            <li>PO Box 16122 Collins Street West Victoria 8007 Australia</li>
                            <li>+61 3 8376 6284</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
            </div><!-- end row -->
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