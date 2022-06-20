<?php
include("bdd/acces_BDD.php");
?>
<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

  <link href="style2.css" rel="stylesheet">

  <!-- Site Icons -->
  <link rel="shortcut icon" href="images/Capture.jpg" type="image/x-icon" />
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

  <title>Inscription</title>
</head>

<body>
  <?php
      require_once('nav.php')
    ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-2 col-lg-3"></div>
      <div class="col-sm-12 col-md-8 col-lg-6">

        <div class="cadre-inscription">
          <h1>Inscription</h1>
          <form method="post">
            <div class="form-group">
              <input class="form-control" type="text" name="name" placeholder="Nom"
                value="<?php if (isset($name)) echo $name; ?>" required="required">
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="firstname" placeholder="Prénom"
                value="<?php if (isset($firstname)) echo $firstname; ?>" required="required">
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="pseudo" placeholder="Pseudo"
                value="<?php if (isset($pseudo)) echo $pseudo; ?>" required="required">
            </div>
            <div class="form-group">
              <input class="form-control" type="email" name="mail" placeholder="Mail"
                value="<?php if (isset($mail)) echo $mail; ?>" required="required">
            </div>
            <div class="form-group">
              <input class="form-control" type="password" name="password" placeholder="Mot de passe"
                value="<?php if (isset($password)) echo $password; ?>" required="required">
            </div>
            <div class="form-group">
              <input class="form-control" type="password" name="confirmpassword" placeholder="Confirmer mot de passe"
                required="required">
            </div>
            <?php
              if(!empty($_POST)){
                extract($_POST);
                $valid= true;

                if (isset($_POST['inscription'])){
                  $name = (String) trim($name);
                  $firstname=(String) trim($firstname);
                  $pseudo=(String) trim($pseudo);
                  $mail=(String) trim($mail);
                  $password=(String) trim($password);
                  $confirmpassword=(String) trim($confirmpassword);

                  if(empty($name)){
                    $valid = false;
                  }
                  if(empty($firstname)){
                    $valid = false;
                  }
                  if(empty($pseudo)){
                    $valid = false;
                  }
                  if(empty($mail)){
                    $valid = false;
                  }
                  if(empty($password)){
                    $valid = false;
                  }
                  if($password==$confirmpassword){
                    if($valid){
                      $password=hash('sha256',$password);
                      
                    
                    $req = $BDD -> prepare("INSERT INTO utilisateur (name,firstname,pseudo,mail,password,admin) VALUES(?,?,?,?,?,?)");
                    $req->execute(array($name,$firstname,$pseudo,$mail,$password,0));
                
                    $chall = $BDD -> prepare("SELECT * FROM challenge");
                    $chall->execute(array());

                    $id = $BDD -> prepare('SELECT MAX(id) FROM utilisateur');
                    $id->execute(array());
                    $maxid = $id->fetch();
                    foreach ($chall as $ligne){
                      
                      $req = $BDD -> prepare("INSERT INTO rela_challenge_utilisateur (IdChallenge,IdUtilisateur,Score) VALUES(?,?,?)");
                      
                      $req->execute(array($ligne['IdChallenge'],$maxid['MAX(id)'], 0));
                      
                    }
                    echo "<script> location.href='connexion.php'; </script>";
                    exit;
                  }
                }else{
                  echo "les mdp sont différents";
                }
                }
              }
            ?>
            <input type="submit" name="inscription" value="S'inscrire">
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
  </script>
</body>

</html>