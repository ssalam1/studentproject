<?php   
session_start(); 
unset($_SESSION["pass"]);
unset($_SESSION["password"]);
session_destroy(); 
header("location:home.php"); 
exit();
?>