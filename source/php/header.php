 <?php
 session_start();
 ?>
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
    <img src="logo.png">
    <p>Mémek minden mennyiségben - a programozás szerelmeseinek</p>
  </div>

  <div class="topnav">
    <?php
      if (!isset($_SESSION["id"])) {
        echo "<a href='register.php'>Regisztráció</a>";
        echo "<a href='login.php'>Bejelentkezés</a>";
      }
      else {
        echo "<a href='index.php'>Kezdőlap</a>";
        echo "<a href='profile.php'>Profil</a>";
        echo "<a href='upload.php'>Feltöltés</a>";
        echo "<a href='logout.php'>Kijelentkezés</a>";
      }
    ?>
  </div>
