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
			<h1>Cours : La vulnérabilité Log4Shell<span class="m_1"></span></h1>
		</div>
	</div>
		<!-- Basic -->
		<div class="container pt-5 align-items-center">
		<div class="row align-items-center ">
			<div class="col-8 offset-2">
            <h2 class="mb-3">1. Qu'est-ce que c'est ?</h2>
            <p>

            Cette vulnérabilité est la plus grave depuis les 20 dernières années en termes de failles de sécurité. 
            Elle met en péril des centaines de millions d’appareils et de logiciels reposant sur Log4j. Ce logiciel est 
            un outil exécuté en arrière-plan de vos appareils et vos applications du quotidien. Cette bibliothèque est 
            développée par l’Apache Software Foundation, et constitue un framework clé de Java-logging. 
            Vous connaissez sûrement Amazon Web Services, le Cloud de Microsoft Azure ou encore Oracle, IBM, Cisco ?
             Tous ces logiciels reposent sur le Log4j. 
            </br>
            </br>
            Face à la gravité de la situation, la CISA (Certified Information Systems Auditor) a organisé une visioconférence
            où la directrice de la CISA en personne a annoncé l’ampleur de cette vulnérabilité.
            Elle affirme que cela est la plus grave faille de cybersécurité qu’elle ait vue en 20 ans de carrière.
            </br>
            </br>
            Cette vulnérabilité peut aussi causer de graves problèmes aux entreprises. 
            En effet, elle pourrait compromettre le système complet d’une entreprise ainsi que sa base de données.
            </br>
            </br>
            On note même que les cyberattaques basées sur la faille Log4J pourraient être classées parmi les Killwares 
            (Logiciels malveillants tueurs) à cause des possibilités infinies de cette faille.
            </br>
            </br>
            L’un des géant de la cybersécurité, Mandiant, affirme que le gouvernement chinois à déjà commencé à exploiter 
            cette vulnérabilité.
            </br>
            </br>
            <h2 class="mb-3">2. Comment s’en protéger ?</h2>
            <p>
            Le principal conseil donné par la CISA pour se protéger est tout d’abord d’identifier les appareils connectés 
            à internet et reposants sur Log4J. Ils doivent être mis à jour de toute urgence, ou recevoir les patchs déployés 
            par les vendeurs.
            </br>
            Selon le CERT-FR (Computer Emergency Response Team French) la version 2.17.0 doit être utilisée pour java8,
            et la 2.12.3 pour java7. 
            Il est aussi vivement conseillé d’installer une application de firewall et de la configurer pour se focaliser sur Log4J.
            </br>
            </br>
            Afin d’aider à identifier les logiciels vulnérables, NCSC (National Cyber Security Centrum) des Pays-Bas 
            a mis en place <a href='https://github.com/NCSC-NL/log4shell/tree/main/software'><U>une liste complète sur GitHub.</U></a>
            </p>
            <h2 class="mb-3">3. Sources</h2>
            <p>
            <a href='https://www.lebigdata.fr/log4shell-tout-savoir'>
            <U><a href='https://www.lebigdata.fr/log4shell-tout-savoir'>https://www.lebigdata.fr/log4shell-tout-savoir</U></a>
            </br>
            </br>
            <U><a href='https://www.cert.ssi.gouv.fr/alerte/CERTFR-2021-ALE-022/'>https://www.cert.ssi.gouv.fr/alerte/CERTFR-2021-ALE-022/</U></a>
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