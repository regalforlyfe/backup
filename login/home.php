<?php
    session_start();
    //$_SESSION['isloggedin'] = true; //untuk memberi value pada session //untuk php native print_r($_SESSION);  //session_destroy(); untuk menghapus session
    if(empty($_SESSION['isloggedin'])){
        //redirect ke halaman login
        header("Location: login.php");
    }

    // if($_SESSION['level'] == 'admin'){
    //     exit('forbidden');
    // }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Ahmad Rifal - a Web Designer & Developer</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" href="Images/rainbow.png">
  </head>
<body>
  <div id="wrapper">
    <header>
      <div class="logo"></div>
      <ul class="nav-list">
      <li class="nav"><a class="list" href="home.php">Home</a></li>
        <?php
            if($_SESSION['level'] == 'admin'){
        ?>
        <li class="nav"><a class="list" href="profil.php">Profil</a></li>
        <?php
            }
        ?>
        <li class="nav"><a class="list" href="about.php">About</a></li>
        <li class="nav"><a class="list" href="logout.php">Logout</a></li>
      </ul>
    </header>
    <main>
      <div class="main1">
          <p class="ripal"></p>
          <p class="nama" style="font-size: 50px; font-family: sans-serif;">Hello My Name is Ahmad Rifal</p>
          <p class="nama" style="font-size: 30px; font-family: serif;">I'm a Gadjah Mada University Student</p></div>
      </div>

      <div class="main2">
        <div class="alien1"> </div>
        <div class="alien2"> </div>
        <div class="alien3"> </div>
      </div>

      <div class="main3">
        <p></p>
        <div class="mars"></div>
      </div>
    </main>

      <div class="footer">
        <div class="container">
          <ul class="bawah">
            <li><a href="https://twitter.com/regalforlyfe"><img src="Images/twitters.png" width="50" height="50"></a></li>
            <li><a href="https://instagram.com/rifalahmd2"><img src="Images/instagram.png" width="50" height="50"></a></li>
            <li><a href="regalforlyfe.github.io"><img src="Images/github.png" width="50" height="50"></a></li>
          </ul>
        </div>
      </div>

</div>
  </body>
</html>
