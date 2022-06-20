<?php
	session_start();
	if (isset($_SESSION['id'])){
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
	<meta name="description" content="Contactez les réalisateurs de ce site pour n'importe quelle question">
	<meta name="author" content="">

	<?php
		require_once('link.php');
?>

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

	<div id="testimonials" class="parallax section db parallax-off" style="background-image:url('images/contact.png');">
		<div class="container">
			<div class="section-title text-center">
				<h3>CONTACTEZ-NOUS</h3>
				<p>Si vous avez la moindre question ou des suggestions afin d'améliorer le site, n'hésitez pas à nous
					contacter. </p>
			</div><!-- end title -->

			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="testi-carousel owl-carousel owl-theme">
						<?php
							$contact = array(
								'names' => array('ÉVEILLÉ Adrien','KIEFFER Axel','KESSY Clarence','GROETZ Alexandre'),
								'mail' => array('adrien.eveille@edu.esiee.fr','axel.kieffer2@edu.esiee.fr', 'clarence.kessy3@edu.esiee.fr', 'alexandre.groetz@edu.esiee.fr')
							);
							$num = count($contact['names']);
							
							for($i = 0; $i<$num; $i++){
								
								?>
						<div class="testimonial clearfix">
							<div class="testi-meta">
								<img src="images/.png" alt="" class="img-fluid">
								<h4><?php echo $contact['names'][$i]; ?></h4>
							</div>
							<div class="desc">
								<h3><?php echo $contact['mail'][$i]; ?></h3>
							</div>
							<!-- end testi-meta -->
						</div>
						<!-- end testimonial -->
						<?php

							}
							
						?>
					</div>
					<!-- end testi-meta -->
				</div><!-- end testimonial -->
			</div><!-- end carousel -->
		</div><!-- end col -->
	</div><!-- end row -->

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