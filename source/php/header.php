<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Jokerama</title>
</head>
<body>
    
<div class="header">
  <h1>Jokerama</h1>
  <p>Mémek minden mennyiségben - a programozás szerelmeseinek</p>
</div>

<div class="topnav">
  <a href="register.php">Regisztráció</a>
  <a href="login.php">Bejelentkezés</a>
  <a href="posts.php">Bejegyzések</a>
  <a href="upload.php">Feltöltés</a>
  <?php
  /*if(isset($_SESSION["id"])){ */
    echo '
    <li class="dropdown" style="float:right">
    <a href="javascript:void(0)" class="dropbtn">Profil</a>
    <div class="dropdown-content">
      <a href="change_password.php">Jelszó módosítása</a>
      <a href="change_email.php">Email módosítása</a>
      <a href="logout.php">Kijelentkezés</a>
    </div>
    </li>
    ';
  /*  }  */
  ?>
  
  <!--div class="column"--> 
    
  <!--/div-->
  
</div>
