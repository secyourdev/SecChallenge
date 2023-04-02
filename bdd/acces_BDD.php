<?php
  $servername = "10.10.0.3";
  $username = "root";
  $password = "root";
  $dbname = "dbsite";

  try {
    $BDD = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  } catch(PDOException $e) {
    die("[PHP SERVER] Connection failed: \n" . $e->getMessage());
  }
?> 

