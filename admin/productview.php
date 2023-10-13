<?php
session_start(1);
if($_SESSION['admin']!=1){
    header('location:index.php');
}else{
?>

<?php
error_reporting(1);
include('../config/config.php');


$query = "SELECT * FROM productupload";

$result = mysql_query($query);



?>
 <?php include('templates/header.php'); ?>
 <link rel="stylesheet" href="CSS/view.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" integrity="sha512-oAvZuuYVzkcTc2dH5z1ZJup5OmSQ000qlfRvuoTTiyTBjwX1faoyearj8KdMq0LgsBTHMrRuMek7s+CxF8yE+w==" crossorigin="anonymous" referrerpolicy="no-referrer" />




  <h2 class="text-light text-center font animate__animated animate__zoomIn"><font color='#AA77FF'>Your Products</font></h2>
<div class="container ">
<?php  while ($arr = mysql_fetch_array($result)) {
    $i = $arr['images'];
   $id = $arr['p_id'];


 ?>
  <div class="text-light my-3 p-2 row inside-box animate__animated animate__fadeInDown">
     <div class=" col-md-2  d-flex justify-content-center  align-items-center" >
      <img src="./uploadedImages/<?php echo $i; ?>" class="rounded-circle img" width="100" height="100" alt="">

     </div>
     <div class=" col-md-5">
      <h3><font color='orange'><?php echo $arr['name']; ?></font></h3>
      <p><font color='skyblue'><?php echo $arr['info']; ?></font> </p>
      
     </div>
     <div class=" d-flex justify-content-center align-items-center col-md-3">
      Price: &nbsp;<b><font color='lightgreen'> <?php echo $arr['price']; ?></font></b> &nbsp;  Ks
      
     </div>
     <div class="col-md-2    row p-2" >
      <div class='text-center'>
      <a href="update.php?id=<?php echo $id; ?>" class='btn btn-outline-info my-1 alink'    style="width:100px; height:40px;"> <i class="bi bi-pencil-square"></i> </a>
      <a href="deleteproduct.php?id=<?php echo $id; ?>" class='btn btn-outline-danger my-1 alink delete'  style="width:100px; height:40px;"> <i class="bi bi-trash"></i> </a>
      </div>


     </div>
  </div>
  <?php } ?>




</div>




      </div>
     
    </div>
  </div>
 
</div>

<?php include('templates/footer.php'); 

}?>

