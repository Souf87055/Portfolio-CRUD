<?php
 
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);



include "dbconfig.php";

session_start();

if (isset($_SESSION['email'])){

  header("Location: ../index.html");
}

if (isset($_POST['submit'])) {



$email = $_POST['email'];
$wachtwoord = $_POST['wachtwoord'];



$sql = "SELECT * FROM Gebruiker WHERE email='$email' AND wachtwoord='$wachtwoord'";

$result = mysqli_query($con, $sql);

if ($result -> num_rows > 0) {

$row = mysqli_fetch_assoc($result);



$_SESSION['email'] = $row['email'];
$_SESSION['admin-role'] = $row['admin-role'];

if($row['admin-role'] == 1){
header("Location: ../invoer-admin/invoerpage.php");
}
else{
  header("Location: index.php");
}

}else{

echo "<script>alert('Verkeerde naam of wachtwoord')</script>";

}

}

?>



