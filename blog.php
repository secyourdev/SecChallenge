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
			<h1>Tutoriels<span class="m_1"></span></h1>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <!--<p class="lead">BARRE DE RECHERCHE</p> -->

                    <section class="cours-disponibles">
                    <div class="container">
                    	

  
    </section>
                </div>
            </div><!-- end title -->

            <hr class="invis"> 

            <div class="row"> 
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
						<div class="image-blog">
							<a href="tuto-ssh.php"><img src="images/ssh.png" alt="" class="img-fluid">
						</div>
						<!--<div class="meta-info-blog">
							<span><i class="fa fa-calendar"></i> <a href="#">May 11, 2015</a> </span>
                            <span><i class="fa fa-tag"></i>  <a href="#">News</a> </span>
                            <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
						</div>-->
						<div class="blog-title">
							<h2><a href="tuto-ssh.php" title="">Comment pénétrer dans un serveur ?</a></h2>
						</div>
						<div class="blog-desc">
							<p>Voici un tutoriel afin de pouvoir accéder à un serveur à l'aide du Bruteforce </p>
						</div>
						<div class="blog-button">
							<a class="hover-btn-new orange" href="tuto-ssh.php"><span>En savoir plus<span></a>
						</div>
					</div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
						<div class="image-blog">
							<a href="tuto-vs.php"><img src="images/tuto2.png" alt="" class="img-fluid">
						</div>
						<!--<div class="meta-info-blog">
							<span><i class="fa fa-calendar"></i> <a href="#">May 11, 2015</a> </span>
                            <span><i class="fa fa-tag"></i>  <a href="#">News</a> </span>
                            <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
						</div>-->
						<div class="blog-title">
							<h2><a href="tuto-vs.php" title="">Comment avoir accès à l'ordinateur d'un autre ?</a></h2>
						</div>
						<div class="blog-desc">
							<p>Voici un tutoriel afin d'avoir accès au PC d'un autre en exploitant la faille Vsftpd</p>
						</div>
						<div class="blog-button">
							<a class="hover-btn-new orange" href="tuto-vs.php"><span>En savoir plus</span></a>
						</div>
					</div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
						<div class="image-blog">
							<a href="tuto-unreal.php"><img src="images/tuto2.png" alt="" class="img-fluid">
						</div>
						<!--<div class="meta-info-blog">
							<span><i class="fa fa-calendar"></i> <a href="#">May 11, 2015</a> </span>
                            <span><i class="fa fa-tag"></i>  <a href="#">News</a> </span>
                            <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
						</div>-->
						<div class="blog-title">
							<h2><a href="tuto-unreal.php" title="">Comment avoir accès à l'ordinateur d'un autre ?</a></h2>
						</div>
						<div class="blog-desc">
							<p>Voici un tutoriel afin d'avoir accès au PC d'un autre en exploitant la faille Unreal</p>
						</div>
						<div class="blog-button">
							<a class="hover-btn-new orange" href="tuto-unreal.php"><span>En savoir plus</span></a>
						</div>
					</div>
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="hr3"> 

            <div class="row"> 
                <div class="col-lg-4 col-md-6 col-12">
                   <div class="blog-item">
						<div class="image-blog">
							<a href="tuto-samba.php"><img src="images/tuto2.png" alt="" class="img-fluid">
						</div>
						<!--<div class="meta-info-blog">
							<span><i class="fa fa-calendar"></i> <a href="#">May 11, 2015</a> </span>
                            <span><i class="fa fa-tag"></i>  <a href="#">News</a> </span>
                            <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
						</div>-->
						<div class="blog-title">
							<h2><a href="tuto-samba.php" title="">Comment avoir accès à l'ordinateur d'un autre ?</a></h2>
						</div>
						<div class="blog-desc">
							<p>Voici un tutoriel afin d'avoir accès au PC d'un autre en exploitant la faille Samba</p>
						</div>
						<div class="blog-button">
							<a class="hover-btn-new orange" href="tuto-samba.php"><span>En savoir plus</span></a>
						</div>
					</div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
						<div class="image-blog">
							<a href="tuto-post.php"><img src="images/tuto2.png" alt="" class="img-fluid">
						</div>
						<!--<div class="meta-info-blog">
							<span><i class="fa fa-calendar"></i> <a href="#">May 11, 2015</a> </span>
                            <span><i class="fa fa-tag"></i>  <a href="#">News</a> </span>
                            <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
						</div>-->
						<div class="blog-title">
							<h2><a href="tuto-post.php" title="">Comment avoir accès à l'ordinateur d'un autre ?</a></h2>
						</div>
						<div class="blog-desc">
							<p>Voici un tutoriel afin d'avoir accès au PC d'un autre en exploitant la faille PostgreSQL</p>
						</div>
						<div class="blog-button">
							<a class="hover-btn-new orange" href="tuto-post.php"><span>En savoir plus</span></a>
						</div>
					</div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
						<div class="image-blog">
							<a href="tuto-steg.php"><img src="images/tutosteg.jpg" alt="" class="img-fluid">
						</div>
						<!--<div class="meta-info-blog">
							<span><i class="fa fa-calendar"></i> <a href="#">May 11, 2015</a> </span>
                            <span><i class="fa fa-tag"></i>  <a href="#">News</a> </span>
                            <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
						</div> -->
						<div class="blog-title">
							<h2><a href="tuto-steg.php" title="">Comment cacher un message secret dans une image ?</a></h2>
						</div>
						<div class="blog-desc">
							<p>Voici un tutoriel afin de s'initier à la stéganographie sur une image</p>
						</div>
						<div class="blog-button">
							<a class="hover-btn-new orange" href="tuto-steg.php"><span>En savoir plus</span></a>
						</div>
					</div>
                </div><!-- end col -->

                  <hr class="hr3"> 

            <div class="row"> 
                <div class="col-lg-4 col-md-6 col-12">
                   <div class="blog-item">
						<div class="image-blog">
							<a href="tuto-apache.php"><img src="images/tuto2.png" alt="" class="img-fluid">
						</div>
						<!--<div class="meta-info-blog">
							<span><i class="fa fa-calendar"></i> <a href="#">May 11, 2015</a> </span>
                            <span><i class="fa fa-tag"></i>  <a href="#">News</a> </span>
                            <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
						</div>-->
						<div class="blog-title">
							<h2><a href="tuto-apache.php" title="">Comment avoir accès à l'ordinateur d'un autre ?</a></h2>
						</div>
						<div class="blog-desc">
							<p>Voici un tutoriel afin d'avoir accès au PC d'un autre en exploitant la faille Apache Tomcat</p>
						</div>
						<div class="blog-button">
							<a class="hover-btn-new orange" href="tuto-apache.php"><span>En savoir plus</span></a>
						</div>
					</div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

      

   <!-- <div class="parallax section dbcolor">
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