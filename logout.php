<?php 
session_start();
// session_unset();
// session_destroy();

unset($_SESSION['IS_LOGIN']);
header('location: login.php');
die();

 ?>
