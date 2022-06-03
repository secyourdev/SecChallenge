<?php
	session_start();
	$_SESSIONS = array();
	session_destroy();
	header('Location: index.php');
?>
