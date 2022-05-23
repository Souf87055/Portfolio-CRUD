<?php
  $hostName = "localhost";
  $userName = "Crud87055";
  $password = "J1Souf010";
  $dbName = "Crud";

  //database connectie
$con = mysqli_connect($hostName, $userName, $password, $dbName);

if(mysqli_connect_errno()){
    echo "Failed to connect";
    exit();
}


?>