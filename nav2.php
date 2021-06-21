

<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php">
					<img src="images/logo3.jpeg" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.php">Accueil</a></li>
						<?php
              if(isset($_SESSION['pseudo'])){
            ?>
						<li class="nav-item dropdown">
							<a class="nav-link" href="course-grid-3.php">Cours </a>
							<!--<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="course-grid-2.html">Cours 1 </a>
								<a class="dropdown-item" href="course-grid-3.html">Cours 2 </a>
								<a class="dropdown-item" href="course-grid-4.html">Cours 3 </a>
							</div>
							-->
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="blog.php">Tutoriels </a>
						</li>
						<li class="nav-item"><a class="nav-link" href="pricing.php">Challenges</a></li>
						<li class="nav-item"><a class="nav-link" href="">Cyber Prevention</a></li>
						<li class="nav-item"><a class="nav-link" href="compte.php">Mon Compte</a></li>
						<li class="nav-item"><a class="nav-link" href="">Contactez-nous</a></li>
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
                        <li><a class="hover-btn-new log orange" href="connexion.php" data-toggle="modal" data-target="#login"><span>Connexion</span></a></li>
                    </ul>

                    <!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Se Connecter/S'inscrire</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li><a href="connexion.php">Connexion</a></li>
					<li><a href="inscription.php">Inscription</a></li>
				</ul>
				<!-- Tab panes -->
				<!--<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email1" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="exampleInputPassword1" placeholder="Email" type="email">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
										Submit
									</button>
									<a class="for-pwd" href="javascript:;">Forgot your password?</a>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Registration">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" placeholder="Nom" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" placeholder="Prenom" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" placeholder="Pseudo" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email" placeholder="Email" type="email">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="password" placeholder="Mot de passe" type="password">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="password" placeholder="Confirmer le mot de passe" type="password">
								</div>
							</div>
							
							<div class="row">							
								<div class="col-sm-10">
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Enregister &amp; Continuer
									</button>
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Annuler</button>
								</div>
							</div>-->
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>


                    <?php
                	}
                	?>

				</div>
			</div>
		

		</nav>
	</header>
	<!-- End header -->
