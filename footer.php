<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-xs-12">
						<div class="widget clearfix">
							<div class="widget-title">
								<h3>CyberSecuriTeach</h3>
							</div>
							<div class="footer-right">
								<ul class="footer-links-soi">
									<!--<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest"></i></a></li>-->
									<li><a href="https://github.com/secyourdev/SecChallenge/tree/2021_E3_GR2"><i class="fa fa-github"></i></a></li>
									
								</ul><!-- end links -->
							</div>
						</div><!-- end clearfix -->
					</div><!-- end col -->

					<div class="col-lg-4 col-md-4 col-xs-12">
						<div class="widget clearfix">
							<div class="widget-title">
								<h3>Liens</h3>
							</div>
							<ul class="footer-links">
								<li><a href="index.php">Accueil</a></li>
								<?php
              					if(isset($_SESSION['pseudo'])){
            					?>
								<li><a href="coursPage.php?categorie=Tous">Cours</a></li>
								<li><a href="tutoPage.php?categorie=Tous">Tutoriels</a></li>
								<li><a href="challengePage.php?categorie=Tous">Challenges</a></li>
								<li><a href="presentationPage.php?categorie=Tous">Présentations</a></li>
								<li><a href="compte.php">Mon Compte</a></li>
								<?php
								}
								?>
								<li><a href="cyberprevention.php">Cyber Prevention</a></li>
							</ul><!-- end links -->
						</div><!-- end clearfix -->
					</div><!-- end col -->



				</div><!-- end row -->
			</div><!-- end container -->
			<div class="copyrights">
				<div class="container">
					<div class="footer-distributed">
						<div class="footer-center">
							<p class="footer-company-name">All Rights Reserved. &copy; 2021 <a
									href="#">CyberSecuriTeach</a>
						</div>
					</div>
				</div><!-- end container -->
			</div><!-- end copyrights -->
			<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

		</footer><!-- end footer -->