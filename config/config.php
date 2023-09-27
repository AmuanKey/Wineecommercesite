<?php 
$host="localhost";
$user="root";
$pass="";
//connection
$con=mysql_connect($host,$user,$pass) or die(mysql_error());
//db selection
mysql_select_db("wine",$con);
?>