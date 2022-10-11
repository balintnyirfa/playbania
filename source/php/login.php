<?php
    require_once "connect.php";
    require_once "header.php";
?>

<div id="main">
    <div id="logreg">
        <h2> Bejelentkezés </h2>
        <br>
        <form name="login" method="POST">
            Felhasználónév: <input type="text" name="username" required><br>
            Jelszó: <input type="password" name="password" required><br>
            <br><input type="submit" value="Bejelentkezés">
        </form>
        <?php
            if (isset($_POST["username"]) && isset($_POST["password"])){
                $username = $_POST["username"];
                $password = md5($_POST["password"]);
                $sql = "SELECT id, username FROM users WHERE username = '$username' AND password = '$password'";
                $result = mysqli_query($conn, $sql);
                $record = mysqli_fetch_all($result);
                var_dump($record);
                if (count($record) == 0) {       
                    //echo "Sikertelen bejelentkezés!<br>";
                    header('Location: ./login.php');
                }
                else {
                    session_start();          
                    $_SESSION["id"] = $record[0][0];
                    $_SESSION["username"] = $record[0][1];
                    header('Location: ./index.php');
                }
            }
        ?>
        <p>Ha még nem vagy beregisztrálva: </p><a href="register.php"><button>Regisztráció </button></a>
    </div>
</div>

<?php
    require_once "footer.php";
?>