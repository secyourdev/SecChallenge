<?php
    include("bdd/acces_BDD.php");
	session_start();
    $id = $_GET["challenge"]
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
										<input class="form-control" id="exampleInputPassword1" placeholder="Email"
											type="email">
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
										<input class="form-control" id="password" placeholder="Password"
											type="password">
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

	<!-- LOADER
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	 END LOADER -->

	<!-- Start header -->
	<?php
		require_once('nav2.php');
	?>

	<div class="all-title-box">
		<div class="container text-center">
			<h1>Challenges<span class="m_1"></span></h1>
		</div>
	</div>

	<div id="overviews" class="section wb">
		<div class="container">
			<div class="row">
				<!-- <div class="col-lg-9 blog-post-single"> -->
				<div class="blog-item">
					<!--	<div class="image-blog">-->

					<img src="images/challenge1.jpg" alt="" class="img-fluid">
				</div>
				<div class="post-content">
					<div class="post-date">

						<div class="blog-title">

							<div id="overviews" class="section wb">
								<div class="container">
									<?php
										$q=$BDD->prepare('SELECT Emplacement FROM challenge WHERE IdChallenge = ?');
										$q->execute(array($id));	
										$result=$q->fetch();							
										$myfile = fopen($result['Emplacement'], "r") or die("Challenge introuvable");
 										echo fread($myfile,filesize($result['Emplacement']));
 										fclose($myfile);

									?>

								</div><!-- end messagebox -->
							</div><!-- end col -->

						</div>
		
                       
                    </div><!-- end media -->
					<!--</div> end col -->

				</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end section -->

		<section class="section lb page-section">

			<div class="section-title row text-center">
				<div class="col-md-8 offset-md-2">

					<!--<p class="lead">BARRE DE RECHERCHE</p>-->
					<section class="cours-disponibles">
						<div class="container">

							<div class="col-md-8 offset-md-2">

								<div class="row">
									<?php

  if(isset($_POST['valider'])){

    if(!empty($_POST['answer'])){

      $answer = htmlspecialchars($_POST['answer']);

      $q=$BDD->prepare('SELECT Reponse FROM challenge WHERE IdChallenge = ?');
      $q->execute(array($id));

      if($q->rowCount() > 0){
        $result=$q->fetch();
        if($result['Reponse']==$answer){
            $nvscore='5';
      	  $mail=$_SESSION['mail'];
          $req=$BDD -> prepare('UPDATE utilisateur SET challenge1=:nvscore WHERE mail=:nmail');
          $req->execute(array('nvscore'=>$nvscore,'nmail'=>$mail));
          $result=$req->fetch();?>

                        <div class="rep">
                            <h1>La réponse est juste. Score 5/5</h1>
                        </div>
	<?php
      }else{
    ?>
                        <div class="rep">
                            <h1>La réponse est fausse, réessayez.</h1>
                        </div>
	<?php
      }
    }

     
    }
  }
?>
									<form method="post">
										<div class="form-group">
											<input class="form-control" type="text" name="answer" placeholder="Réponse"
												value="<?php if (isset($answer)) echo $answer; ?>" required="required">
										</div>
										<input type="submit" name="valider" value="Valider la réponse">
								</div>

								</form>

							</div>
						</div>
				</div>
		</section>
		</div><!-- end media -->
		</div><!-- end col -->


		</div><!-- end row -->
		</div><!-- end container -->
		</div><!-- end section -->

		<section class="section lb page-section">

			</div><!-- end title -->
			</div>


			</div>
			</div>
			</form>
			</div>
			</div>

			</div><!-- end col -->

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

						<div class="col-lg-4 col-md-4 col-xs-12">
							<div class="widget clearfix">
								<div class="widget-title">
									<h3></h3>
								</div>

						
							</div><!-- end clearfix -->
						</div><!-- end col -->

					</div><!-- end row -->
				</div><!-- end container -->
			</footer><!-- end footer -->

			<div class="copyrights">
				<div class="container">
					<div class="footer-distributed">
						<div class="footer-center">
							<p class="footer-company-name">All Rights Reserved. &copy; 2021 <a
									href="#">CyberSecuriTeach</a> </p>
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