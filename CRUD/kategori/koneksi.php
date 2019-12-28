<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "db";
    $mysqli = new mysqli ($host,$user,$password,$database);
    //--------------ini oop---------------
    // if ($mysqli->connection_errno){
    //     echo "Error: " . $mysqli->connection_errno;
    //     exit(); // atau die()
    // }
    //------------------------------------

    $mysqli2 = mysqli_connect($host,$user,$password,$database);
    if (mysqli_connect_errno()){
        echo "Error: " . $mysqli->connect_errno;
        exit();
    }

?>