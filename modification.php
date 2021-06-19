<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <link href="style2.css" rel="stylesheet" >

     <!-- Site Icons -->
    <link rel="shortcut icon" href="images/Capture.jpg" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <title>Projet</title>
  </head>
  <body>
    <?php
      session_start();
    ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-2 col-lg-3"></div>
        <div class="col-sm-12 col-md-8 col-lg-6">
          
            <div class="cadre-inscription">
              <h1>Modification des informations</h1>
            <form method="post">
                  <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="Nom" value="<?php if (isset($name)) echo $name; ?>" required="required">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" name="firstname" placeholder="Prénom" value="<?php if (isset($firstname)) echo $firstname; ?>" required="required">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" name="pseudo" placeholder="Pseudo" value="<?php if (isset($pseudo)) echo $pseudo; ?>" required="required">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Mot de passe" value="<?php if (isset($password)) echo $password; ?>" required="required">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="password" name="confirmpassword" placeholder="Confirmer mot de passe"required="required">
                  </div>
                  <?php
                  $BDD= new PDO('mysql:host=localhost;dbname=dbsite;charset=utf8','root','root');
  if(!empty($_POST)){
    extract($_POST);
    $valid= true;

    if (isset($_POST['inscription'])){
      $name = (String) trim($name);
      $firstname=(String) trim($firstname);
      $pseudo=(String) trim($pseudo);
      $password=(String) trim($password);
      $confirmpassword=(String) trim($confirmpassword);
      $mail=$_SESSION['mail'];  
      if(empty($name)){
        $valid = false;
      }
      if(empty($firstname)){
        $valid = false;
      }
      if(empty($pseudo)){
        $valid = false;
      }
      if(empty($password)){
        $valid = false;
      }
      if($password==$confirmpassword){
        if($valid){
        $req = $BDD -> prepare('UPDATE utilisateur SET name= :nvname,firstname=:nvfirstname,pseudo=:nvpseudo,password=:nvpassword WHERE mail=:nmail');
        $req->execute(array('nvname'=>$name,'nvfirstname'=>$firstname,'nvpseudo'=>$pseudo,'nvpassword'=>$password, 'nmail'=>$mail));

        header('Location: deconnexion.php');
        exit;
      }
    }else{
      echo "les mdp sont différents";
    }
    }
  }
?>
                <input type="submit" name="inscription" value="Changer les informations">
            </form>
            </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  </body>
</html>