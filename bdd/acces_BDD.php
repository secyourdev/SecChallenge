<?php
  $servername = "10.10.0.3";
  $username = "root";
  $password = "root";
  $dbname = "dbsite";

  try {
    $BDD = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    // set the PDO error mode to exception
    $BDD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "[PHP SERVER] Connected successfully";
  } catch(PDOException $e) {
    die("[PHP SERVER] Connection failed: \n" . $e->getMessage());
  }
?> 
