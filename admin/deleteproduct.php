<?php
error_reporting(1);
include('../config/config.php');
$id = $_REQUEST['id'];

$data = "SELECT * FROM productupload WHERE p_id = '$id'";
$result = mysql_query($data);
$arr = mysql_fetch_array($result);
$oldImg = $arr['images'];
echo $oldImg;
unlink("uploadedImages/$oldImg");

$query = "DELETE  FROM productupload WHERE p_id = '$id' ";




if(mysql_query($query)){
    echo 'good';

}
else{
    echo ' bad';
}
header('location:productview.php');
?>
