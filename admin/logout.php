<?php
error_reporting(1);
session_start();
$_SESSION['admin'] = 0;
header('location:index.php');

?>