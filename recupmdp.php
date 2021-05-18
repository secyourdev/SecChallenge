<?php
              $BDD= new PDO('mysql:host=localhost;dbname=dbsite;charset=utf8','root','root');
              if(isset($_GET['token']) && $_GET['token']!=''){
                $q=$BDD->prepare('SELECT mail FROM utilisateur WHERE token= ?');
                $q->execute([$_GET['token']]);
                $mail = $q->fetchcolumn();

                if($mail){
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

                  <title>Récupération mot de passe</title>
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
                              <h1>Nouveau mot de passe</h1>
                            <form method="post">
                            <div class="form-group">
                            <input class="form-control" type="text" name="newpassword" placeholder="Nouveau Mot de passe"required="required">
                            </div>
                            <input type="submit" name="newpassword" value="Confirmer">
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </body>
                </html>
                }
                
              }

<?php
  if(isset($_POST('newpassword'))){
    $password=$_POST('newpassword');
    $sql="UPDATE utilisateur SET password=?, token=NULL WHERE mail=?";
    $q=$BDD->prepare($sql);
    $q->execute([$password,$mail]);
    echo "Mot de passe modifié";
  }
?>



      