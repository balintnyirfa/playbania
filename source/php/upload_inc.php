<?php
    if (isset($_POST["joke"])) {
        //session_start();
        $joke = $_POST["joke"];
        $meme = $_POST["meme"];
        //$userId = $_SESSION["ID"];
        //$userName = $_SESSION["userName"];

        $meme = $_FILES["meme"]["name"];
        $strMeme = basename($_FILES["meme"]["tmp_name"]);
        $fileDir = "../img/$userName/meme/"."/$strMeme";
        mkdir("../img/$userName/meme", 0777, true);
        move_uploaded_file($_FILES["meme"]["tmp_name"], $fileDir);

        require_once "./connect.php";

        $query = "INSERT INTO jokes(userId, text, pic) VALUES ('1','$joke','$strMeme')";
        $result = mysqli_query($conn, $query) or die ("Nem sikerült ".$query);
        header('Location: ../list.php');
    }
?>