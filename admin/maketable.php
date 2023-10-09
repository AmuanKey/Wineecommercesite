<?php 
$con=mysql_connect("localhost","root","") or die(mysql_error());
// select database
mysql_select_db("wine",$con);
// Create table

$sql="CREATE TABLE orderlist 
(
p_id int auto_increment primary key,
cusname char(50) not null,
phone varchar(50) not null,
address varchar(255) not null,
pname varchar(100) not null,
price bigint not null,
o_id varchar(500) not null
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

