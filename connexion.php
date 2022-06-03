<?php
include("bdd/acces_BDD.php");

  session_start();
  if(isset($_POST['connexion'])){
    extract($_POST);
    if(!empty($_POST['mail']) AND !empty($_POST['password'])){
      $mail = htmlspecialchars($_POST['mail']);
      $password=$_POST['password'];
      $password=hash('sha256',$password);

      $q=$BDD->prepare('SELECT * FROM utilisateur WHERE mail = ? AND password = ?');
      $q->execute(array($mail,$password));

      if($q->rowCount() > 0){
          $_SESSION['mail']=$mail;
          $_SESSION['password']=$password;
          $result=$q->fetch();
          $_SESSION['id']=$result['id'];
          $_SESSION['pseudo']=$result['pseudo'];
          $_SESSION['name']=$result['name'];
          header('Location: compte.php');
          exit;

      }else{
        echo 'Le mail ou le mot de passe ne correspond pas. ';
        echo '<a href="inscription.php"></a>';
      }
    }
  }
?>
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet" >

    <title>Connexion</title>
  </head>


  <body>
    <?php
      require_once('nav.php');
    ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-2 col-lg-3"></div>
        <div class="col-sm-12 col-md-8 col-lg-6">
          
            <div class="cadre-inscription">
              <h1>Connexion</h1>
            
            <form method="post">
                  <div class="form-group">
                    <input class="form-control" type="text" name="mail" placeholder="Mail" value="<?php if (isset($mail)) echo $mail; ?>" required="required">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Mot de passe" value="<?php if (isset($password)) echo $password; ?>" required="required">
                  </div>
                <input type="submit" name="connexion" value="Se connecter">
            </form>
            
            </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  </body>


</html>