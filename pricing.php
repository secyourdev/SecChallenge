<?php
    session_start();
    include('bdd/acces_BDD.php');
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
			<h1>Challenges<span class="m_1"></span></h1>
		</div>
	</div>
	
    <div id="pricing-box" class="section wb">
        <div class="container">

			<div class="row">
                <?php
                    $q=$BDD->prepare('SELECT * FROM challenge');
                    
                    $q->execute(array());
                    $compteur = 0;
                    foreach ($q as $ligne){
                        $compteur++;
                    ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="pricingTable">
                                <div class="pricingTable-header">
                                    <span class="heading">
                                        <h3>Challenge <?php echo $compteur ?></h3>
                                    </span>
                                    <span class="price-value"><b><?php echo $ligne['NomChallenge'] ?></b><span class="month">
                                </div>

                                <div class="pricingContent">
                                    <i class="fa fa-briefcase"></i>
                                    <ul>
                                        <?php
                                        if ($ligne['Competence1'] != NULL){ ?>
                                            <li><?php echo $ligne['Competence1'] ?></li>
                                        <?php }
                                        if ($ligne['Competence2'] != NULL){ ?>
                                            <li><?php echo $ligne['Competence2'] ?></li>
                                        <?php } 
                                        if ($ligne['Competence3'] != NULL){ ?>
                                            <li><?php echo $ligne['Competence3'] ?></li>
                                        <?php } ?>
                                    </ul>
                                </div><!-- /  CONTENT BOX-->

                                <div class="pricingTable-sign-up">
                                <a class="hover-btn-new orange" href="challenge.php?challenge=<?php echo $ligne['IdChallenge'] ?>"><span>Accéder au challenge</span></a>
                                    <!--<a href="challenge1.php" class="hover-btn-new orange"><span>Accéder au challenge</span></a>-->
                                </div><!-- BUTTON BOX-->
                            </div>
                        </div>
                
                <?php
                    }
                ?>
            </div>

		</div>
    </div>
    
    
    
    <!-- end section -->


  


	<footer class="footer">
		<div class="row row_footer">

			<div class="col-lg-6 col-md-6 col-xs-12">
				<div class="widget clearfix">
					<div class="widget-title">
						<h3>CyberSecuriTeach</h3>
					</div>
				</div><!-- end clearfix -->
			</div><!-- end col -->

			<div class="col-lg-6 col-md-6 col-xs-12">
				<div class="widget clearfix">
					<div class="widget-title">
						<h3>Liens</h3>
					</div>
					<ul class="footer-links">
						<li><a href="index.php">Accueil</a></li>
						<li><a href="cours.php">Cours</a></li>
						<li><a href="blog.php">Tutoriels</a></li>
						<li><a href="pricing.php">Challenges</a></li>
						<li><a href="cyberprevention.php">Cyber Prevention</a></li>
					</ul><!-- end links -->
				</div><!-- end clearfix -->
			</div><!-- end col -->
						
		</div><!-- end row -->

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

	</footer><!-- end footer -->
		
    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>