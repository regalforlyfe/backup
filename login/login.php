<?php
    session_start();
    //------------------------------------------------------------------
    @$username = $_POST['username'];
    @$password = $_POST['password'];
        //cek user
        if($username == 'admin' && $password == 'admin'){
            $_SESSION['isloggedin'] = true;
            $_SESSION['level'] = 'admin';
        } elseif($username == 'user' && $password == 'user'){
            $_SESSION['isloggedin'] = true;
            $_SESSION['level'] = 'user';
        } elseif(isset($username) && isset($password)) {
            //ligin gagal, tampilkan pesan gagal login
            echo "invalid credential";
        }
    //-------------------------------------------------------------------
    if (!empty($_SESSION['isloggedin'])){
        //redirect ke halaman login
        header("Location: home.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Ini halaman login</h1>
    <form method="POST">
    Username <input type="text" name="username"> <br/>
    Password <input type="password" name="password"> <br/>
    <input type="submit" name="login">
    </form>
    <?php
        
    ?>
</body>
</html>