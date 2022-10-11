<?php
if(isset($_POST["email"]) && isset($_POST["username"]) && isset($_POST["password"])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  session_start();
  $_SESSION["username"] = $_POST["username"];

  require_once "dbms.php";
  $dbname="jokeorama";
  $conn=connect("root","", $dbname);

  $query = "INSERT INTO users(email, username,password) 
            VALUES ('$email', '$username', '$password')";
  mysqli_query($conn, $query);
  mysqli_close($conn);

  header("Location: login.php");
}

?>