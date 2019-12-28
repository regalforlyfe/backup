<?php
    session_start();
    //$_SESSION['isloggedin'] = true; //untuk memberi value pada session //untuk php native print_r($_SESSION);  //session_destroy(); untuk menghapus session
    if(empty($_SESSION['isloggedin'])){
        //redirect ke halaman login
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Ini halaman home</h1>
    <a href="logout.php">logout</a>
</body>
</html>