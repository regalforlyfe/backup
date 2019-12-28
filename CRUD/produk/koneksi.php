<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "db";
	$mysqli = new mysqli($host, $user, $password, $database);
	if ($mysqli->connect_errno) {
	    echo "Error: " . $mysqli->connect_error;
	    exit(); die();
	}

	// $mysqli2 = mysqli_connect($host, $user, $password, $database);
	// if (mysqli_connect_errno()) {
	//     echo "Error: ".mysqli_connect_error();
	//     exit();
	// }
