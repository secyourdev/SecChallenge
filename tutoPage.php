<?php
	session_start();
    require_once('nav2.php');
    include("bdd/acces_BDD.php");
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<link href="style.css" rel="stylesheet">

<!-- Modernizer for Portfolio -->
<script src="js/modernizer.js"></script>

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="host_version">


    <!-- LOADER 
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	 END LOADER -->

    <div class="all-title-box">
        <div class="container text-center">
            <h1>Tutoriels</h1>
        </div>
    </div>

    <div id="overviews" class="section wb">
        <div class="container">
            <hr class="invis">
            <div class="row">
            <?php
                    $q=$BDD->prepare('SELECT * FROM tutoriel');         
                    $q->execute(array());
					$compteur = 0;
                    foreach ($q as $ligne){
						?>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-item">
                        <div class="image-blog">
                            <a href="tuto.php?tuto=<?php echo $ligne['IdTutoriel']; ?>"><img src=<?php echo $ligne['Image']; ?> alt="" class="img-fluid">
                        </div>
                        <div class="blog-title">
                            <h2><a href="tuto.php?tuto=<?php echo $ligne['IdTutoriel'] ;?>" title=""><?php echo $ligne['Titre']; ?></a></h2>
                        </div>
                        <div class="blog-desc">
                            <p><?php echo $ligne['Description']; ?> </p>
                        </div>
                        <div class="blog-button">
                            <a class="hover-btn-new orange" href="tuto.php?tuto=<?php echo $ligne['IdTutoriel']; ?>"><span>En savoir plus<span></a>
                        </div>
                    </div>
                </div><!-- end col -->
                <?php 
                    }
                ?>
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

            </div><!-- end clearfix -->
        </div><!-- end col -->

        </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">
                    <p class="footer-company-name">All Rights Reserved. &copy; 2021 <a href="#">CyberSecuriTeach</a>
                    </p>
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