<?php
	session_start();
    if (isset($_SESSION['id'])){
	include("bdd/acces_BDD.php");
	$id = $_GET["tuto"]; 
    
	$q=$BDD->prepare('SELECT Image, Emplacement FROM tutoriel WHERE IdTutoriel = ?');
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
<title>
<?php 
		$q=$BDD->prepare('SELECT Titre FROM tutoriel WHERE IdTutoriel=?');
		$q->execute(array($id));
		$res=$q->fetch();
		echo $res['Titre'];
	?>
</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<?php
		require_once('link.php');
?>


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
            <h1>Tutoriels<span class="m_1"></span></h1>
        </div>
    </div>

    <div id="overviews" class="section wb">
        <div class="container">
            <div class="row">

                <div class="blog-item">

                    <img src="<?php echo $result['Image'] ?>" alt="" class="img-fluid images_cours">

                    <div class="post-content">

                        <div class="row align-items-center">
                            <div class="message-box">

                                <?php	
                                    	
                                    $myfile = fopen($result['Emplacement'], "r") or die("Tutoriel introuvable");
                                    echo fread($myfile,filesize($result['Emplacement']));
                                    fclose($myfile);
                	

			                    ?>
                            </div>
                        </div>
                    </div>

                    <?php
                        
                    $q=$BDD->prepare('SELECT Reponse FROM tutoriel WHERE IdTutoriel = ?');
                    $q->execute(array($id));
                    $reponse = $q->fetch();
                    if($reponse['Reponse'] != NULL){

                        ?>
                    <div class="section-title row text-center">

                        <?php

                        if(isset($_POST['valider'])){
                        
                            if(!empty($_POST['answer'])){

                            $answer = htmlspecialchars($_POST['answer']);

                            
                            
                            if($q->rowCount() > 0){

                                if($reponse['Reponse']==$answer){

                                ?>
                        <div class="rep">
                            <h1>Bonne réponse</h1>
                        </div>
                        <?php
                                    }
                                    else{
                                ?>
                        <div class="rep">
                            <h1>Mauvaise réponse</h1>
                        </div>
                        <?php
                                    }
                                }
                            }
                        } ?>

                        <form method="post">
                            <div class="form-group">
                                <input class="form-control" type="text" name="answer" placeholder="Réponse"
                                    value="<?php if (isset($answer)) echo $answer; ?>" required="required"> </input>
                            </div>
                            <input type="submit" name="valider" value="Valider la réponse"></input>
                        </form>
                    </div>
                    <?php
                   }
              ?>

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