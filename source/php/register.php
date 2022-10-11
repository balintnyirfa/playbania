<?php
    require_once "connect.php";
    require_once "Create.php";
    require_once "header.php";
?>

<div id="main">
    <div id="logreg">
        <h2>Regisztráció:</h2>
        <p></p>
            <form name="register" method="POST" action="register.php" enctype="multipart/form-data">
                Email: <input type="email" name="email" required><br>
                <br>Felhasználónév: <input  type="text" name="username" pattern="[A-Z a-z 0-9]*" required><br>
                <br>Jelszó: <input type="password" name="password" minlength = "8" required><br>
                <p><input type="submit" name="upload" value="Regisztráció">
            </form> 
        <p>Ha már be vagy regisztrálva: </p><a href="login.php"><button>Bejelentkezés</button></a>
    </div>
</div>


<?php
    require_once "footer.php";
?>