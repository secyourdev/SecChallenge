<?php
// (A) START SESSION
session_start();

// (B) LOGOUT REQUEST
if (isset($_POST["logout"])) {
  session_destroy();
  unset($_SESSION);
}

// (C) REDIRECT TO LOGIN PAGE IF NOT SIGNED IN
if (!isset($_SESSION["user"])) {
  header("Location: 1-login.php");
  exit();
}