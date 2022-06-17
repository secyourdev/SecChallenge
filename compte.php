<?php
  session_start();
  if (isset($_SESSION['id'])){
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

    <div class="container">
      <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
        <h2><b>Informations du compte</b></h2>
      </div>

      <div class="info-compte d-flex flex-row">
        <div class="p-2 col-lg-5 col-12 flex-column">
          <div class="col-4 div-rond align-item-center">
            <img class="classe-rond" src="images/icon.png">
          </div>
          <p class="col-4 align-item-center div-rond text-center profil"> <?php echo $pseudo; ?> </p>
        </div>
        <div class="p-2 col-lg-7 col-12 align-profil-text">
          <p class="profil">Nom : <?php echo $name; ?></p>
          <p class="profil">Prénom : <?php echo $firstname; ?></p>
          <p class="profil">Mail : <?php echo $mail; ?></p>
          <div class="blog-button2">
            <a class="hover-btn-new orange bouton-modifie-profil align-items-end" href="modification.php"><span>Modifier</span></a>
          </div>
        </div>
      </div>




      <div class="container">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
          <h2><b>Résultats des challenges</b></h2>
        </div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Challenges</th>
              <th scope="col">Nombre de points</th>
            </tr>
          </thead>
          <tbody>
            <?php 

        $q=$BDD->prepare('SELECT `challenge`.`IdChallenge`,`NomChallenge`, `Score`,`challenge`.`ScoreMax` FROM `challenge`
                          INNER JOIN `rela_challenge_utilisateur`
                          ON `rela_challenge_utilisateur`.`IdChallenge` = `challenge`.`IdChallenge`
                          INNER JOIN `utilisateur`
                          ON `utilisateur`.`Id` = `rela_challenge_utilisateur`.`IdUtilisateur`
                          WHERE `utilisateur`.`Id`= ?; ');
        $q->execute(array($id));
        $total=0;
        $compteur=0;
        foreach ($q as $ligne){
          $total = $total + $ligne['Score'];
          $compteur+=$ligne['ScoreMax'];
        ?>
            <tr>
              <td scope="row">Challenge <?php echo $ligne['IdChallenge'] ?> : <?php echo $ligne['NomChallenge'] ?> </td>
              <td><?php echo $ligne['Score'] ?>/<?php echo $ligne['ScoreMax'] ?></td>
            </tr>
            <?php } ?>
            <tr>
              <th scope="row">Total</th>
              <th><?php echo $total; ?>/<?php echo $compteur; ?></th>
          </tbody>
        </table>
      </div>



  </main>

  <?php
        require_once('footer.php');
    ?>


  <script src="js/all.js"></script>
  <!-- ALL PLUGINS -->
  <script src="js/custom.js"></script>

</body>

</html>

<?php }
else{
	header('Location: index.php');
}