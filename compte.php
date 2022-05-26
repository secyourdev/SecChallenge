<?php
  session_start();

include('bdd/acces_BDD.php');
$id=$_SESSION['id'];
$q=$BDD->prepare('SELECT * FROM utilisateur WHERE id=?');
$q->execute(array($id));
$result=$q->fetch();
$pseudo=$result['pseudo'];
$mail=$result['mail'];
$name=$result['name'];
$firstname=$result['firstname'];
$challenge1=$result['challenge1'];
$challenge2=$result['challenge2'];
$challenge3=$result['challenge3'];

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

  <?php require_once('nav2.php') ?>

  <div class="all-title-box">
    <div class="container text-center">
      <h1>Mon compte</h1>
    </div>
  </div>

  <main>
    
    <div class="row align-items-center">
      <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
        <div class="message-box" style="margin-left:100px; margin-top:50px">
          <h4></h4>
          <h2><b>Informations du compte</b></h2>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row main-row p-2">
        <div class="col-lg-4 col-md-12 col-sm-12">
          <div class="challenge-title mb-3">
            <h6>Nom</h6>
          </div>
        </div>
        <div class="col-lg-8 col-md-12 col-sm-12">
          <div class="challenge-title mb-3">
            <h6><?php echo $name;  ?></h6>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="container">
      <div class="row main-row p-2">
        <div class="col-lg-4 col-md-12 col-sm-12">
          <div class="challenge-title mb-3">
            <h6>Prénom</h6>
          </div>
        </div>
        <div class="col-lg-8 col-md-12 col-sm-12">
          <div class="challenge-title mb-3">
            <h6><?php echo $firstname;  ?></h6>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="container">
      <div class="row main-row p-2">
        <div class="col-lg-4 col-md-12 col-sm-12">
          <div class="challenge-title mb-3">
            <h6>Pseudo</h6>
          </div>
        </div>
        <div class="col-lg-8 col-md-12 col-sm-12">
          <div class="challenge-title mb-3">
            <h6><?php echo $pseudo;  ?></h6>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="container">
      <div class="row main-row p-2">
        <div class="col-lg-4 col-md-12 col-sm-12">
          <div class="challenge-title mb-3">
            <h6>Mail</h6>
          </div>
        </div>
        <div class="col-lg-8 col-md-12 col-sm-12">
          <div class="challenge-title mb-3">
            <h6><?php echo $mail;  ?></h6>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="blog-button2">
      <a class="hover-btn-new orange" href="modification.php"><span>Modifier mes informations</span></a>
    </div>

    <div class="row align-items-center">
      <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
        <div class="message-box" style="margin-left:100px; margin-top:50px;">
          <h4></h4>
          <h2><b>Historique du compte</b></h2>
        </div>
      </div>
    </div>


    <section class="cours-disponibles">
      <h2 class="cours">Résultats des challenges</h2>
    </section>

    <div class="container">
      <div class="row main-row2 p-2">
        <div class="col-lg-4 col-md-12 col-sm-12">
          <div class="challenge-title mb-3">
            <h6>Challenges</h6>
          </div>
        </div>
        <div class="col-lg-8 col-md-12 col-sm-12">
          <div class="challenge-title mb-3">
            <h6>Points (/5)</h6>
          </div>
        </div>
      </div>
    </div>

    <?php 

$q=$BDD->prepare('SELECT `challenge`.`IdChallenge`,`NomChallenge`, `Score` FROM `challenge`
                  INNER JOIN `rela_challenge_utilisateur`
                  ON `rela_challenge_utilisateur`.`IdChallenge` = `challenge`.`IdChallenge`
                  INNER JOIN `utilisateur`
                  ON `utilisateur`.`Id` = `rela_challenge_utilisateur`.`IdUtilisateur`
                  WHERE `utilisateur`.`Id`= ?; ');
$q->execute(array($id));
foreach ($q as $ligne){

?>
    <div class="container">
      <div class="row main-row p-2">
        <div class="col-lg-4 col-md-12 col-sm-12">
          <div class="challenge-title mb-3">
            <h6>Challenge <?php echo $ligne['IdChallenge'] ?> : <?php echo $ligne['NomChallenge'] ?></h6>
          </div>
        </div>
        <div class="col-lg-8 col-md-12 col-sm-12">
          <div class="challenge-title mb-3">
            <h6><?php echo $ligne['Score'] ?></h6>
          </div>
        </div>
      </div>
    </div>

    <?php } ?>

    <div class="container">
      <div class="row main-row2 p-2">
        <div class="col-lg-4 col-md-12 col-sm-12">
          <div class="challenge-title mb-3">
            <h6>Total</h6>
          </div>
        </div>
        <div class="col-lg-8 col-md-12 col-sm-12">
          <div class="challenge-title mb-3">
            <h6><?php echo $challenge3+$challenge2+$challenge1; ?>/15</h6>
          </div>
        </div>
      </div>
    </div>

  </main>

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


  <script src="js/all.js"></script>
  <!-- ALL PLUGINS -->
  <script src="js/custom.js"></script>

</body>

</html>