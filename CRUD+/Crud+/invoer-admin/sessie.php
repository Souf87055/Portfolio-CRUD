    <?php
    session_start();

    require 'dbconfig.php';
    
    $_SESSION['id'] = 2; // admin nmmr

    if(isset($_SESSION['id']) == 2){// lab
        header("location: invoer.html");
        exit();

     }

     else{
        echo  "niet gelukt";
        }
  ?>