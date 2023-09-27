<?php
// $con=mysql_connect("localhost","root","") or die(mysql_error());
// // select database
// mysql_select_db("wine",$con);
include('./config/config.php');
// Create table
$sql="CREATE TABLE feedback
(
fb_id int auto_increment primary key,
name char(50) not null,
email varchar(50) not null,
message varchar(255) not null
)";
if (mysql_query($sql))
{
echo "Table empInfo created successfully";
}
else
{
echo "Error creating database: " . mysql_error();
}
?>