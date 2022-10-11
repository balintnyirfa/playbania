<?php
  $servername = "localhost";
  $username = "root";
  $dbname = "jokeorama";
  $password = "";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!isset($conn)) {
      die("Connection failed: ".mysqli_errno());
  }
  else {
      return $conn;
  }
?>