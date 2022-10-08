<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emailváltoztatás</title>

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
          <li><a href="changeemail.php">Emailváltoztatás</a></li>
          <li><a href="logout.php">Kijelentkezés<i class="glyphicon glyphicon-log-out"></i></a></li>
        </ul>
        </li>
        ';
    }

    if(isset($_SESSION['id'])){
      echo '
      <div class="login">
        <form name="changeemail" method="POST" action="change_email.php">
            <p>Új email:</p> <input type="email" name="email" required><br>
		    <p>Új email ismét:</p> <input type="email" name="email2" required><br>
            <br>
            <input type="submit" value="Emailváltoztatás">
        </form>
        </div>
      ';
        if(isset($_POST["email"])&& isset($_POST["email2"])){
			updateEmail($conn,$_SESSION['id'], $_POST["email"], $_POST["email2"]);
        }
      }
      else echo 'Nincs jogosultságod az oldal megtekintéséhez.';
    ?>
</body>
</html>