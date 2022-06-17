<?php
    session_start();
    if (isset($_SESSION['id'])){
    include('bdd/acces_BDD.php');
    $categorie = $_GET["categorie"]
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
    <script  src="js/modernizer.js"></script>

	

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>



<body class="host_version"> 

	<!--
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

		<div class ="listeCategories">
        <a class ='categorie <?php if ($categorie=='tous'){?> selected <?php } ?>' href="pricing.php?categorie=tous"> Tous </a>
			<?php
				$q=$BDD->prepare('SELECT DISTINCT(Categorie) FROM challenge WHERE Categorie IS NOT NULL');
				$q->execute(array());
				foreach($q as $ligne){
			?>
            
					<a class ='categorie<?php if ($categorie==$ligne['Categorie']){?> selected <?php } ?>' href="pricing.php?categorie=<?php echo $ligne['Categorie'] ?>"> <?php echo $ligne['Categorie']; ?> </a>
			<?php
				}
			?>
		</div>
	
        <div class="container">

			<div class="row">
                <?php
                    $q=$BDD->prepare('SELECT * FROM challenge');
                    $compteur=0;
                    $q->execute(array());
                    
                    foreach ($q as $ligne){
                        if ($categorie==$ligne['Categorie'] || $categorie=='tous'){
                            $compteur++;
                    ?>
                        <div class="col-md-4 col-sm-6 block separation">
                            <div class="pricingTable">
                                <div class="pricingTable-header">
                                    <span class="heading">
                                        <h3>Challenge <?php echo $ligne['IdChallenge']; ?></h3>
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
                    }
                ?>
            </div>

		</div>
    </div>
    
    
    
    <!-- end section -->


  
    <?php
        require_once('footer.php');
    ?>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

    <!--  -->
    <script type="text/javascript" src="js/envoie.js"></script>
</body>
</html>

<?php }
else{
	header('Location: index.php');
}