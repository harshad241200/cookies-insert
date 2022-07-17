<?php

session_start();

?>

<!doctype html>
<html lang="en">
  <head>

  </head>
  <body>

  <?php

  $_SESSION["user_username"]=$_POST["username"];
  header("Location:http://localhost/cookie/home.php");


   ?>
    
  </body>
</html>