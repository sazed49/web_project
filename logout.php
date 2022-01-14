<?php
session_start();
// session_destroy();
$_SESSION['email'] = '';
$_SESSION['logged_in'] = 'N';
header("location:index.php");
?>