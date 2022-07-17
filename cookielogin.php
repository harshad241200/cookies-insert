<?php

session_start();

?>

<?php

$user=$_POST["username"];
setcookie("user_username",$user,(time()+(60)));
header("Location:http://localhost/cookie/home.php");

?>