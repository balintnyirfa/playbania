<?php
    if (isset($_POST["joke"])) {
        session_start();
        $joke = $_POST["joke"];
        $meme = $_POST["meme"];
        $userId = $_SESSION["id"];
        $userName = $_SESSION["username"];

        $meme = $_FILES["meme"]["name"];
        $strMeme = basename($_FILES["meme"]["tmp_name"]);
        $fileDir = "../img/$userName/meme/"."/$strMeme";
        mkdir("../img/$userName/meme", 0777, true);
        move_uploaded_file($_FILES["meme"]["tmp_name"], $fileDir);

        require_once "./connect.php";

        $query = "INSERT INTO jokes(userId, text, pic) VALUES ('$userId','$joke','$strMeme')";
        $result = mysqli_query($conn, $query) or die ("Nem sikerült ".$query);
        header('Location: ./index.php');
    }
?>