<?php
  ob_start();
  if (session_status() == PHP_SESSION_NONE) {
      session_start();
  }
	$_SESSIONS = array();
	session_destroy();
	header('Location: index.php');
?>

<?php 
ob_end_flush();
?>
