<?php
	session_start();
	include("bdd/acces_BDD.php");
    if (isset($_SESSION['id'])){
	$id = $_GET["presentation"]; 

	$q=$BDD->prepare('SELECT LienImage, LienPresentation FROM presentation WHERE Id = ?');
	$q->execute(array($id));	
	$result=$q->fetch();
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
	<!-- End header -->

	<div class="all-title-box">
		<div class="container text-center">
			<h1>Présentation<span class="m_1"></span></h1>
		</div>
	</div>

	<div id="overviews" class="section wb">
		<div class="container">
		<div class="row">

			<div class="blog-item">

				<img src="<?php echo $result['LienImage'] ?>" alt="" class="img-fluid images_cours">

				<div class="post-content">

					<div class="row align-items-center">
						<div class="message-box">

			<?php				
				$myfile = fopen($result['LienPresentation'], "r") or die("Cours introuvable");
			 	echo fread($myfile,filesize($result['LienPresentation']));
				fclose($myfile);

			?>
			                </div>
						</div>
					</div>
				</div>
			</div>


		</div><!-- end title -->
	</div>



	<?php
        require_once('footer.php');
    ?>

	<!-- ALL JS FILES -->
	<script src="js/all.js"></script>
	<!-- ALL PLUGINS -->
	<script src="js/custom.js"></script>

</body>

</html>

<?php }
else{
	header('Location: index.php');
}