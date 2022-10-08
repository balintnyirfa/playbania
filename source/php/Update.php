<?php

require_once "connect.php";

function updatePassword($conn,$id, $newpassword,$newpassword2){
if($newpassword == $newpassword2){
try {

  $sql = "UPDATE users SET password='$newpassword' WHERE id='$id'";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  echo "Sikeres jelszóváltoztatás!";}
catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
}
else echo "A két jelszó nem egyezik meg...";
}


function updateEmail($conn,$id, $newemail,$newemail2){
  if($newemail == $newemail2){
  try {
  
    $sql = "UPDATE users SET email='$newemail' WHERE id='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo "Sikeres emailváltoztatás!";}
  catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
  }
  else echo "A két email nem egyezik meg...";
  }

?>