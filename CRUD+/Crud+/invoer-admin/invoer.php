<?php
    require 'dbconfig.php';


    $id = $_POST['id'];
    echo($id);
    $naam = $_POST['naam'];
    echo($naam);
    $afbeelding = $_POST['afbeelding'];
    echo($afbeelding);
    $omschrijving = $_POST['omschrijving'];
    echo($omschrijving);
    $link = $_POST['link'];
    echo($link);
    
    
    if (empty($id)) {
      echo "Name is empty";
    } else {
      echo $id;
    }
    
    $sql = "INSERT INTO `Projecten`(`id`, `naam`, `afbeelding`, `omschrijving`, `link`) 
    VALUES ('$id', '$naam', '$afbeelding', '$omschrijving','$link')";

if ($con->query($sql) === TRUE) {
  header("location: ../ingelogd/index.php");
  exit();
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>