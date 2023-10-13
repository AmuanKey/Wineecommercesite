<?php
error_reporting(1);
session_start();
$_SESSION['login']=1;
header('location:home.php');
?>