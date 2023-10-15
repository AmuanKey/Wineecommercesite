<?php 
// $host="localhost";
// $user="root";
// $pass="";
// //connection
// $con=mysql_connect($host,$user,$pass) or die(mysql_error());
// //db selection
// mysql_select_db("wine",$con);
?>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "wine";
// Create connection

$mysqli = new mysqli("$servername","$username","$password","$db");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}else{
    // echo "success";
}
?> 