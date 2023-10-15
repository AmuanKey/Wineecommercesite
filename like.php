<?php
error_reporting(1);
session_start();
include('./config/config.php');
if($_SESSION['login'] == 1){
header('location:pop.php');
}else{

$name=$_REQUEST['name'];

$img=$_REQUEST['img'];
echo $name;
echo $img;

$likequery="UPDATE productupload SET likes = '-fill' WHERE images = '$img'";

$likeinsert ="INSERT INTO `wine`.`likes` ( `pname`,`name` ) VALUES ( '$img','$name')";

if($mysqli -> query($likequery) && $mysqli -> query($likeinsert) ){
  echo 'success';
    header("location:shop.php?like=1");
}else{
    echo $mysqli -> error;
}

}
?>


