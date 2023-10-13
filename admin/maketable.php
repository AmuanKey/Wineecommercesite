<?php 
$con=mysql_connect("localhost","root","") or die(mysql_error());
// select database
mysql_select_db("wine",$con);
// Create table

$sql="CREATE TABLE productupload 
(
p_id int auto_increment primary key,
name char(50) not null,
info varchar(1000) not null,
price varchar(255) not null,
images varchar(255) not null,
likes varchar(255)not null
)";
if (mysql_query($sql))
{
echo "Your table is created successfully";
}
else
{
echo "Error creating database: " . mysql_error();
}
?>

