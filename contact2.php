<?php
	session_start();
	if (isset($_SESSION['id'])){
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

	<!--<div class="all-title-box">
		<div class="container text-center">
			<h1>CyberPrevention<span class="m_1"></span></h1>
		</div>
	</div>-->
	<div id="testimonials" class="parallax section db parallax-off"
		style="background-image:url('images/parallax_04.jpg');">
		<div class="container">
			<div class="section-title text-center">
				<h3>CONTACTEZ-NOUS</h3>
				<p>Si vous avez la moindre question ou des suggestions afin d'améliorer le site, n'hesitez pas à nous
					contacter. </p>
			</div><!-- end title -->

			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="testi-carousel owl-carousel owl-theme">
						<div class="testimonial clearfix">
							<div class="testi-meta">
								<img src="images/.png" alt="" class="img-fluid">
								<h4>JACQUOT Nicolas </h4>
							</div>
							<div class="desc">
								<h3><i class=""></i> nicolas.jacquot@edu.esiee.fr</p>
							</div>
							<!-- end testi-meta -->
						</div>
						<!-- end testimonial -->

						<div class="testimonial clearfix">
							<div class="testi-meta">
								<img src="images/testi_.png" alt="" class="img-fluid">
								<h4>BACHA Elies </h4>
							</div>
							<div class="desc">
								<h3><i class=""></i> elies.bacha@edu.esiee.fr</p>
							</div>
							<!-- end testi-meta -->
						</div>
						<!-- end testimonial -->

						<div class="testimonial clearfix">
							<div class="testi-meta">
								<img src="images/testi_.png" alt="" class="img-fluid ">
								<h4>AUGUSTINE ALAN </h4>
							</div>
							<div class="desc">
								<h3><i class="fa fa-qu"></i> alan.augustine@edu.esiee.fr </p>
							</div>
							<!-- end testi-meta -->
						</div>
						<!-- end testimonial -->
						<div class="testimonial clearfix">
							<div class="testi-meta">
								<img src="images/testi_" alt="" class="img-fluid">
								<h4>BELAYACHI RHAYAN </h4>
							</div>
							<div class="desc">
								<h3><i class="fa fa-quo"></i> rhayan.belayachi@edu.esiee.fr</p>
							</div>
							<!-- end testi-meta -->
						</div>
						<!-- end testimonial -->

						<div class="testimonial clearfix">
							<div class="testi-meta">
								<img src="images/test.png" alt="" class="img-fluid">
								<h4>BARRY ABOUBACRY </h4>
							</div>
							<div class="desc">
								<h3><i class="fa fa"></i>aboubacry.barry@edu.esiee.fr</p>
							</div>
							<!-- end testi-meta -->
						</div>
						<!-- end testimonial -->


					</div>
					<!-- end testi-meta -->
				</div><!-- end testimonial -->
			</div><!-- end carousel -->
		</div><!-- end col -->
	</div><!-- end row -->
	</div><!-- end container -->
	</div><!-- end section -->
	<!<div id="overviews" class="section wb">
		<div class="container">
			<div class="row">


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
		
		<section class="section lb page-section">

			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
					<div class="post-media wow fadeIn">

					</div><!-- end media -->
				</div><!-- end col -->

				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
					<div class="message-box">
					</div><!-- end messagebox -->
				</div><!-- end col -->
			</div><!-- end row -->>
		</section><!-- end section -->


		
</body>
<?php
        require_once('footer.php');
    ?>


<!-- ALL JS FILES -->
<script src="js/all.js"></script>
		<!-- ALL PLUGINS -->
		<script src="js/custom.js"></script>

</html>

<?php }
else{
	header('Location: index.php');
}