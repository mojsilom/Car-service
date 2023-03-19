<?php
session_start();

session_unset();
session_destroy();

setcookie("notification","You have been successfully logged out!",time()+60*60*24,"/");
header("Location: login.php");
?>

