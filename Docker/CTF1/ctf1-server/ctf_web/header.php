<?php
$file = $_GET['file'];
include('image/' . $file);

	function rng() {
		$length = rand(4, 10);
		$number = "";
		for ($i=0; $i < $length; $i++) {
			$new_rand = rand(0, 9);
			$number = $number . $new_rand;
		} return $number;
	}

?>

<!DOCTYPE html>
<html>

<style type="text/css">

    body {
        font-family: blue;
        font-size: 13px;
    }
    header {
        height: 30px;
        padding: 10px;
        background-color: black;
        color: white;
    }
    header a {
        color: white;
    }
    .input {
    	border-radius: 5px;
    	border: solid thin #aaa;
    	padding: 10px;
    	margin: 4px;
    }
    .button {
    	border-radius: 5px;
    	border: solid thin #aaa;
    	padding: 10px;
    	margin: 4px;
    	cursor: pointer;
    }
    
</style>

<body>
<header><center><a href="index.php">Home</a> . Welcome to a weirdly made Random Number Generator (RNG) . <a href="help.php">Help</a></center></header>
