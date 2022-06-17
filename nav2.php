<?php
  include('bdd/acces_BDD.php');

?>
<!-- Start header -->
<header class="top-navbar">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php">
				<img src="images/logo3.jpeg" alt="" />
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host"
				aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
			</button>
			<div class="collapse navbar-collapse" id="navbars-host">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
					<?php
              			if(isset($_SESSION['pseudo'])){
            		?>
					<li class="nav-item dropdown">
					<a class="nav-link " href="coursPage.php?categorie=tous" data-bs-toggle="dropdown"> Cours  </a>
						<ul class="dropdown-menu menuDeroulant">
								<?php
									$cat=$BDD->prepare('SELECT DISTINCT(Categorie) FROM cours WHERE Categorie IS NOT NULL');
									$cat->execute(array());
									foreach($cat as $ligne){
										?>
										<li><a class="dropdown-item menuDeroulantItem" href="coursPage.php?categorie=<?php echo $ligne['Categorie']; ?>"> <?php echo $ligne['Categorie']; ?></a></li>
										<?php
									}
									?>
							</ul>
					</li>
					<li class="nav-item dropdown">
					<a class="nav-link " href="tutoPage.php?categorie=tous" data-bs-toggle="dropdown"> Tutoriels  </a>
						<ul class="dropdown-menu menuDeroulant">
								<?php
									$cat=$BDD->prepare('SELECT DISTINCT(Categorie) FROM tutoriel WHERE Categorie IS NOT NULL');
									$cat->execute(array());
									foreach($cat as $ligne){
										?>
										<li><a class="dropdown-item menuDeroulantItem" href="tutoPage.php?categorie=<?php echo $ligne['Categorie']; ?>"> <?php echo $ligne['Categorie']; ?></a></li>
										<?php
									}
									?>
							</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link " href="pricing.php?categorie=tous" data-bs-toggle="dropdown"> Challenges  </a>
							<ul class="dropdown-menu menuDeroulant">
								<?php
									$cat=$BDD->prepare('SELECT DISTINCT(Categorie) FROM challenge WHERE Categorie IS NOT NULL');
									$cat->execute(array());
									foreach($cat as $ligne){
										?>
										<li><a class="dropdown-item menuDeroulantItem" href="pricing.php?categorie=<?php echo $ligne['Categorie']; ?>"> <?php echo $ligne['Categorie']; ?></a></li>
										<?php
									}
									?>
							</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link " href="presentationPage.php?categorie=tous" data-bs-toggle="dropdown"> Présentations  </a>
							<ul class="dropdown-menu menuDeroulant">
								<?php
									$cat=$BDD->prepare('SELECT DISTINCT(Categorie) FROM presentation WHERE Categorie IS NOT NULL');
									$cat->execute(array());
									foreach($cat as $ligne){
										?>
										<li><a class="dropdown-item menuDeroulantItem" href="presentationPage.php?categorie=<?php echo $ligne['Categorie']; ?>"> <?php echo $ligne['Categorie']; ?></a></li>
										<?php
									}
									?>
							</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="cyberprevention.php">Cyber Prevention</a></li>
					<li class="nav-item"><a class="nav-link" href="compte.php">Mon Compte</a></li>
					<li class="nav-item"><a class="nav-link" href="contact2.php">Contactez-nous</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a class="hover-btn-new log orange" href="deconnexion.php"><span>Deconnexion</span></a></li>
				</ul>
				<?php 
                    }
                    else
                    {
                    ?>
				<ul class="nav navbar-nav navbar-right">
					<li><a class="hover-btn-new log orange" href="connexion.php"><span>Connexion</span></a></li>
				</ul>
				<?php
                	}
                	?>

			</div>
		</div>


	</nav>
</header>
<!-- End header -->