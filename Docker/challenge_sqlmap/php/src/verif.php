<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'MYSQL_USER';

//database user password
$pass = 'MYSQL_PASSWORD';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}   

$sql = 'USE MYSQL_DATABASE';
$results = mysqli_query($conn, $sql); 

$id = $_POST["id"];
$pass = $_POST["password"];

$sql = "SELECT * FROM credit WHERE id = '$id' AND pass = '$pass'";

if ($result = $conn->query($sql)) {
    if(mysqli_num_rows($result) >= 0){
        while ($data = $result->fetch_object()) {
            echo "<br>";
            echo $data->id . " " . $data->pass;
            
        }
    }else{
    echo "You are not regsitered ";
    }
}





?>

<!-- 
$sql = "SELECT * FROM password_table WHERE name = '$name' AND password = '$password'";
$res = mysql_query($sql,$link)  or die($sql . "-" . mysql_error());
if($res){
	if(mysql_num_rows($res) > 0){
		while( $tab = mysql_fetch_array($res)) {	
			echo $tab['name'] .":" . $tab['password'];
			echo "<br />";
		}

	}else{
		echo '<center>Pas dans la BDD</center>';
	}
	
}



my_sql_close($link);

?> -->