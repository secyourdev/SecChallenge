<?php
session_start();



if (!isset($_SESSION['username'])) {
  $full_name = 'anonymous';
}else{
$full_name = $_SESSION['username'];
}
header('X-XSS-Protection: 0');

$db = new PDO('sqlite:/tmp/greetings.db');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->exec("CREATE TABLE IF NOT EXISTS greetings
  (author VARCHAR(100), message TEXT)");
if (isset($_POST['greeting'])) {
  $greeting = $_POST['greeting'];
  $pstmt = $db->prepare("INSERT INTO greetings VALUES (:full_name, :greeting)");
  $pstmt->execute(array(':full_name' => $full_name, ':greeting' => $greeting));
}
$result = $db->query("SELECT author, message FROM greetings")->fetchAll();
?>

<html>
<head>
  <title>Secure system</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <style type="text/css">
    .Table {
        display: table;
    }
    .Heading {
        display: table-row;
        font-weight: bold;
        text-align: center;
    }
    .Row {
        display: table-row;
    }
    .Cell {
        display: table-cell;
        border: solid;
        border-width: thin;
        padding-left: 5px;
        padding-right: 5px;
    }
    .Praetorian {
      font-family: sans-serif;
      font-size: 14pt;
      position: fixed;
      bottom: 1%;
      right: 1%;
      color: black;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <p>Welcome to our secure system, <?php echo $_SESSION['full_name'] ?></p>
  <form action="index.php" method="POST">
    <label for="greeting">Say Hello:</label>
    <input id="greeting" name="greeting" type="text">
    <input type="submit" value="Send">
  </form>

  <?php if (count($result) > 0) { ?>
  <div class="Table">
    <div class="Heading">
      <div class="Cell">Author</div>
      <div class="Cell">Message</div>
    </div>
    <?php foreach ($result as $row) { ?>
    <div class="Row">
      <div class="Cell"><?php echo $row['author'] ?></div>
      <div class="Cell"><?php echo $row['message'] ?></div>
    </div>
    <?php } ?>
  </div>
  <?php
  }
  $db = null;
  ?>

  <p><a href="index.php">Home</a></p>
  <p><a href="login.php">Login</a></p>
</body>
</html>