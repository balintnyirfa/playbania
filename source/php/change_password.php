<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jelszóváltoztatás</title>
    
</head>
<body>
    <?php
    require_once "connect.php";
    require_once "Update.php";
    #require_once "header.php";

    if(isset($_SESSION["id"])){
        echo 
        '<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profil
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="changepasswd.php">Jelszóváltoztatás</a></li>
          <li><a href="logout.php">Kijelentkezés<i class="glyphicon glyphicon-log-out"></i></a></li>
        </ul>
        </li>
        ';
    }

    if(isset($_SESSION['id'])){
      echo '
      <div class="login">
        <form name="changepasswd" method="POST" action="change_password.php">
            <p>Új jelszó:</p> <input type="password" name="password" required><br>
		    <p>Új jelszó ismét:</p> <input type="password" name="password2" required><br>
            <br>
            <input type="submit" value="Jelszóváltoztatás">
        </form>
        </div>
      ';
        if(isset($_POST["password"])&& isset($_POST["password2"])){
			updatePassword($conn,$_SESSION['id'],md5($_POST["password"]),md5($_POST["password2"]));
        }
      }
      else echo 'Nincs jogosultságod az oldal megtekintéséhez.';
    ?>
</body>
</html>