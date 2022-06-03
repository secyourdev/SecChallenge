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

    <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet"> 



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
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">

                    <!--<p class="lead">BARRE DE RECHERCHE</p>-->
                    <section class="cours-disponibles">
                    <div class="container">
                    	

          <div class="row">
              <form action = "verif-form.php" method="get">
                <div class="form-group">
                    <input class="form-control" name="terme" value="" placeholder="Rechercher un ou plusieurs cours">
                    <input type="submit" class="btn btn-search" value="Rechercher" name="search">
                </div>
              </form>
          </div>
        </div>
    </section>
                </div>
            </div><!-- end title -->

            <hr class="invis"> 

            <div class="row"> 
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<a href="cours-docker.php"><img src="images/docker.png" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="cours-docker.php" title="">Docker</a></h2>
							</div>
							<div class="course-desc">
								<p>Docker est l'element essentiel afin de pouvoir profiter de nos tutoriels et challenges </p>
							</div>
							
						</div>
						<div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-book" aria-hidden="true"></i>Cours</li>
								
							</ul>
						</div>
					</div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<a href="cours-meta.php"><img src="images/metasploit.jpg" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="cours-meta.php" title="">Metasploitable2</a></h2>
							</div>
							<div class="blog-desc">
								<p>Voici une introduction à Metasploitable : interêt et installation 

								</p>
							</div>
							
						</div>
						<div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-book" aria-hidden="true"></i> Cours</li>
								
							</ul>
						</div>
					</div>
                </div><!-- end col -->	
				
				<div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<a href="cours-brute.php"><img src="images/brute.png" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="cours-brute.php">Bruteforce</a></h2>
							</div>
							<div class="course-desc">
								<p>Vous trouverez ici une introduction sur la notion de Bruteforce</p>
							</div>
							
						</div>
						<div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-book" aria-hidden="true"></i> Cours</li>
								
							</ul>
						</div>
					</div>
                </div><!-- end col -->
            </div><!-- end row -->			
			
			<hr class="hr3"> 
			
            <div class="row"> 
				<div class="col-lg-4 col-md-6 col-12">
                   <div class="course-item">
						<div class="image-blog">
							<a href="cours-steg.php"><img src="images/stegano.png" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="cours-steg.php" title="">Stéganographie</a></h2>
							</div>
							<div class="course-desc">
								<p>Voici une introduction à la Stéganographie</p>
							</div>
							
						</div>
						<div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-book" aria-hidden="true"></i> Cours</li>
								
							</ul>
						</div>
					</div>
                </div><!-- end col -->

                 <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<a href="cours-piratage.php"><img src="images/pirate.jpg" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="cours-piratage.php" title="">Le piratage informatique</a></h2>
							</div>
							<div class="blog-desc">
								<p>Piratage informatique: Méthodes utilisées et solutions 

								</p>
							</div>
							
						</div>
						<div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-book" aria-hidden="true"></i> Cours</li>
								
							</ul>
						</div>
					</div>
                </div><!-- end col -->	

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<a href="cours-crypto.php"><img src="images/crypto1.png" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="cours-crypto.php" title="">La cryptologie</a></h2>
							</div>
							<div class="blog-desc">
								<p>Cours pour introduire la notion de cryptologie

								</p>
							</div>
							
						</div>
						<div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-book" aria-hidden="true"></i> Cours</li>
								
							</ul>
						</div>
					</div>
                </div><!-- end col -->	

                <hr class="hr3"> 
			
            <div class="row"> 
				<div class="col-lg-4 col-md-6 col-12">
                   <div class="course-item">
						<div class="image-blog">
							<a href="cours-sql.php"><img src="images/sql1.jpg" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="cours-sql.php" title="">Injection SQL</a></h2>
							</div>
							<div class="course-desc">
								<p>Qu'est-ce qu'une injection SQL?, Comment cela fonctionne ?, Comment s'en protéger ?...</p>
								<p></p>
							</div>
							
						</div>
						<div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-book" aria-hidden="true"></i> Cours</li>
								
							</ul>
						</div>
					</div>
                </div><!-- end col -->

                 <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<a href="cours-adware.php"><img src="images/adware1.png" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="cours-adware.php" title="">Adware</a></h2>
							</div>
							<div class="blog-desc">
								<p>Des publicités personalisées apparaissent sur votre ecran. Lisez ce cours pour en savoir plus.

								</p>
							</div>
							
						</div>
						<div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-book" aria-hidden="true"></i> Cours</li>
								
							</ul>
						</div>
					</div>
                </div><!-- end col -->	
				
              <!--  <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="images/blog_5.jpg" alt="" class="img-fluid">
						</div>		
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Finance</a></h2>
							</div>
							<div class="course-desc">
								<p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
							</div>
							<div class="course-rating">
								4.5
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star-half"></i>								
							</div>
						</div>
						<div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
								<li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
							</ul>
						</div>
					</div>
                </div><!-- end col -->

             <!--   <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="images/blog_6.jpg" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Fashion Designing</a></h2>
							</div>
							<div class="course-desc">
								<p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
							</div>	
							<div class="course-rating">
								4.5
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star"></i>	
								<i class="fa fa-star-half"></i>								
							</div>
						</div>
						<div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
								<li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
							</ul>
						</div>
					</div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

  <!--  <div class="parallax section dbcolor">
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
							<li><a href="cyberprevention.php">Cyber Prevention</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
               <!-- <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
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