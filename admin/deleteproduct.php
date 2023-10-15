<?php
error_reporting(1);
include('../config/config.php');
$id = $_REQUEST['id'];

$data = "SELECT * FROM productupload WHERE p_id = '$id'";
$result = $mysqli -> query($data);
$arr =$result -> fetch_array(MYSQLI_ASSOC);
$oldImg = $arr['images'];
echo $oldImg;
unlink("uploadedImages/$oldImg");

$query = "DELETE  FROM productupload WHERE p_id = '$id' ";




if($mysqli -> query($query)){
    echo 'good';

}
else{
    echo ' bad';
}
header('location:productview.php');
?>
