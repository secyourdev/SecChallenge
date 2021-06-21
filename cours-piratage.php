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
							<img src="images/pirate1.jpg" alt="" class="img-fluid">
						</div>
						<div class="post-content">
							<div class="post-date">
							
							<div class="blog-title">
								
								

	 <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4></h4>
                        <h2><b>LE PIRATAGE INFORMATIQUE</b></h2>
                        <p><U><b>I-Introduction</b></U>
						
</p>

                        <p>Le piratage informatique est la pratique qui consiste à modifier le matériel informatique et les logiciels pour réaliser un but en dehors de l’intention originale du créateur. Les personnes qui s’adonnent à cette pratique sont considérées comme des pirates informatiques.
Ce sont des programmeurs qui s'introduisent par effraction dans des systèmes informatiques afin de voler, de modifier ou de détruire des informations en tant que forme de cyber-terrorisme.

 </p>

                        <p><U><b>II- Les méthodes utilisées</b></U>
 </p>

                        <p><U>Pour y arriver plusieurs méthodes sont utilisées comme :</U>

</p>

                        <p><b>a-Le virus: </b>
</p>

                        <p>Le virus est est un programme qui se reproduit en s'insérant partiellement dans d'autres fichiers.Il existe plusieurs types de virus:
</p>

                        <p>-le virus furtif qui,comme son nom l’indique,se camoufle de façon à ne pas se faire détecter par les antivirus.



</p>

<p>-Le virus polymorphe qui quant à lui peut lors de sa réplication, modifie sa représentation, ce qui empêche un logiciel antivirus de l'identifier par sa signature.

</p>

<p>Il existe d'autres types de virus qui sont tout aussi dangereux comme le virus I LOVE YOU , le BLACK ENERGY , ou même le ransomware Wanna Cry (ou WannaCrypt) est un autre exemple de virus troublant. Celui-ci avait effectivement infecté plusieurs centaines de milliers d’ordinateurs en 2017 localisés dans chaque continent.
Cependant, tant que le virus n'a pas été exécuté, vous ne risquez rien. Mais, lorsqu'il est activé, il peut vous rendre la vie dure. Tandis que certains virus vont tout simplement se manifester par l'apparition d'un message sur votre ordinateur, d'autres vont être dangereux. Par exemple, ils pourront supprimer des données, formater un disque dur. La majorité des virus se propagent par courrier électronique en pièce-jointe.


</p>

<p><b>b- Les spywares </b>
</p>

<p>Un spyware ou logiciel espion est un logiciel malveillant qui s'installe dans un ordinateur ou autre appareil mobile, dans le but de collecter et transférer des informations sur l'environnement dans lequel il s'est installé, très souvent sans que l'utilisateur en ait connaissance. Ils ont comme spécialité la diffusion de données personnelles, qui sont ensuite utilisées par des entreprises de publicités. Par exemple, le spyware peut envoyer la liste des sites consultés ainsi que vos adresses mail, ce qui permet ensuite de cibler vos centres d'intérêts.


</p>

<p>La présence d'un grand nombre de spyware sur un ordinateur provoque une diminution des performances. En effet ces logiciels étant lancés dès le démarrage, ils nécessitent des ressources systèmes en mémoire et processeur..


</p>

<p><b>c- Le Cheval de troie </b>
</p>

<p>Ce programme , qui tire son nom du mythe du cheval de Troie , a l’air inoffensif mais lorsqu’il est exécuté a des conséquences désastreuses.En effet , après son exécution tout peut arriver même on peut même perdre carrément le contrôle de son ordinateur. Et pire encore lorsque le pirate installe un backdoor ou porte dérobée ça lui permet de prendre le contrôle de l’ordinateur à sa guise quand il veut et où il veut ça peut aussi lui permettre de vous espionner ou même de lancer des attaques avec votre propre machine et ainsi vous faire porter le chapeau sans que vous soyez même au courant.


</p>

<p>Récemment on note l’arrivée d’un nouveau type de cheval de troie qui se compose d’un programme client et d’un autre serveur.Ainsi le pirate envoie le serveur a sa victime et dès que celle-ci l'exécute le pirate , à l’aide du programme client, pourra contrôler l’ordinateur cible.Souvent ce genre de programme offre au pirate  plus de fonctionnalités que la victime elle même en a jamais possédé sur son ordinateur. 



</p>

<p><b>d- Le Phishing </b>
</p>

<p><b>Le phishing</b> est une pratique malveillante sur la Toile qui consiste à récupérer des informations personnelles sur un Internaute. Le terme est la contraction des mots anglais fishing pour pêche et phreaking pour le piratage de lignes téléphoniques


</p>

<p>La plupart du temps, les auteurs de phishing tentent de récupérer des coordonnées bancaires. Certains poussent le piratage d'informations beaucoup plus loin dans le but d'usurper l'identité d'une personne.



</p>




<p>Pour atteindre leur but , ils utilisent plusieurs méthodes.Ils peuvent créer un site d’achat en ligne comme Zara ou Sephora par exemple qui sera identique au vrai. Il suffit alors aux pirates  de vous faire arriver sur leur site. Ainsi, vous pensez être sur le bon site, et vous donnez vos informations bancaires. Ils auront ainsi toutes les informations nécessaires pour utiliser votre carte bancaire.


</p>

<p>Récemment on note l’arrivée d’un nouveau type de cheval de troie qui se compose d’un programme client et d’un autre serveur.Ainsi le pirate envoie le serveur a sa victime et dès que celle-ci l'exécute le pirate , à l’aide du programme client, pourra contrôler l’ordinateur cible.Souvent ce genre de programme offre au pirate  plus de fonctionnalités que la victime elle même en a jamais possédé sur son ordinateur. 



</p>

                  <p><U><b>III- Les Techniques d’attaque</b></U>
 </p>

                        <p><U>Il existe évidemment beaucoup types d’attaques mais voici quelques exemples: </U>

</p>

                        <p><b>a-Déni de Service  </b>
</p>

                        <p>Une attaque par déni de service (en anglais Denial of Service, DoS) est une attaque qui a pour but de mettre hors jeu le système qui est visé. Ainsi, la victime se voit dans l'incapacité d'accéder à son réseau. Ce type d'attaque peut aussi bien être utilisé contre un serveur d'entreprise qu'un particulier relié à internet. Tous les systèmes d'exploitations sont également touchés : Windows, Linux, Unix, …

</p>

                        <p><b>b- Le Reniflage </b>



</p>

<p>Le reniflage (en anglais Sniffing) est une technique qui consiste à analyser le trafic réseau. Lorsque deux ordinateurs communiquent entre eux, il y a un échange d'informations (trafic). Mais, il est toujours possible qu'une personne malveillante récupère ce trafic. Elle peut alors l'analyser et y trouver des informations sensibles.


</p>
<p><b>c- Le crackage </b>
<p>Le crackage des mots de passe consiste à deviner le mot de passe de la victime. Malheureusement, beaucoup d'utilisateurs mal avertis de cette technique mettent des mots de passe évidents comme leur propre prénom ou ceux de leurs enfants. Ainsi, si un pirate, qui a espionné sa victime auparavant, teste quelques mots de passe comme le prénom des enfants de la victime, il aura accès à l'ordinateur. D'où l'utilité de mettre des bons mots de passe. Mais même les mots de passe les plus robustes peuvent être trouvés à l'aide de logiciels spécifiques appelés craqueurs (John the ripper, L0phtCrack pour Windows).



</p>



<p>Les crackeurs de mots de passe s'appliquent souvent à un fichier contenant le nom des utilisateurs ainsi que leur mot de passe encrypté. Ces fichiers sont nécessaires pour permettre l'authentification sur un système. L'encryptage des mots de passe s'effectue à l'aide d'une fonction de hachage. Les fonctions de hachage sont des fonctions univoques, c'est-à-dire qu'il est impossible de les inverser pour décrypter un mot de passe encrypté.


</p>

<p>Une autre particularité importante des fonctions de hachage est que deux mots de passe différents auront forcément un hachage différent. Ainsi, il est impossible de décrypter un mot de passe encrypté. En revanche, il est possible d'encrypter un mot au moyen de cette fonction et de comparer le résultat avec le mot de passe encrypté. S'il y a correspondance, on a deviné le mot de passe. Mais, il est fastidieux d'encrypter des milliers de mots pour trouver les mots de passe. C'est là qu'intervient l'utilité d'un craqueur.



</p>

 <p><U><b>IV- Les solutions </b></U></p>

                        <p>Nul n’est à l'abri d’un piratage informatique c’est pourquoi il est primordial de savoir se protéger.
                        </p>
<p><U>Parmi les méthodes préventives on a: </U>

</p>

                        <p><b>a- Les mises à jour </b>
</p>

                        <p>Les mises à jour régulières sont impératives, celles-ci contiennent les dernières sécurités du marché, adaptées aux nouveaux virus informatiques. Alors, même si l’installation peut prendre un peu de temps, lancez vous… ce seront dix minutes de perdues mais beaucoup de piratages et hacks qui seront évités ! Les dernières mises à jour vous permettent de bénéficier des dernières avancées de la sécurité de l'informatique et de lutter contre une nouvelle génération de virus et de malware, à la pointe du piratage informatique.


</p>

                        <p><b>b- La méfiance </b>



</p>

<p>Des logiciels existent pour hacker en toute discrétion votre ordinateur grâce aux clés USB. Introduite dans votre ordinateur, celles-ci récupèrent en toute impunité vos données. Un moyen discret et efficace de piratage qui permet d'attaquer votre sécurité réseau sans attaquer frontalement la sécurité réseau ou la vulnérabilité de votre ingénierie informatique… Bref, soyez vigilant et n’acceptez pas les clés USB provenant d’inconnus.



</p>
<p><b>c- Les Mots de Passes</b>
<p>Contrairement à l’habitude de certaines personnes, il faut éviter de choisir des mots de passe comme la date de naissance. De nos jours les mots de passe les plus utilisés sont encore et toujours « Password » ( mot de passe en anglais) et « 123456 ». Facile et tentant en conséquence de tenter de pénétrer votre boite mail en essayant les mots de passe les plus courants ! Prenez vos précautions, et dotez vous d’un mot de passe complexe (avec au moins une majuscule, un chiffre et un tiret), toujours différent selon vos différentes boîtes mails. Il faut aussi changer régulièrement son mot de passe.




</p>

<p><b>d- Antivirus</b>
<p>Methode la plus courante et la plus sure.Au fondement de la sécurité informatique, il y a un solide anti-virus. Dès l’achat de votre ordinateur, veillez à opter pour une solution qui sécurisera de façon efficace votre ordinateur. Celle-ci vous permettra de disposer des pare-feu suffisants, d'opter pour une bonne sécurité réseaux et de disposer d'une maintenance informatique suffisante pour faire face à un ver informatique ou une éventuelle détection intrusive.






</p>





</div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                    	 <img src="images/stegano3.jpg" alt="" class="img-fluid img-rounded">
                        
                        
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