<?php
// (A) THIS IS A PROTECTED DUMMY PAGE
require "3-protect.php";

// (B) HTML AS USUAL ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Demo Page</title>
  </head>
  <body>
    <!-- (B1) LOGOUT FORM -->
    <form method="post">
      <input type="hidden" name="logout" value="1">
      <input type="submit" value="Sign Out">
    </form>

    <!-- (B2) WHO IS THE CURRENT USER? -->
    <?=$_SESSION["user"]?>
    <?php echo "Bien joué ! <strong>FL4G_Hydra_LeChallenge</strong>"; ?>
  </body>
</html>
