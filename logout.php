<?php
session_start();
// session_destroy();
$_SESSION['email'] = '';
$_SESSION['logged_in'] = 'N';
setcookie("address", "", time()-3600, "/");

//echo $_COOKIE["address"];
header("location:home.php");
?>