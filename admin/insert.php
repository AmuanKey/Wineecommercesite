<?php
session_start(1);
if($_SESSION['admin']!=1){
    header('location:index.php');
}else{
?>

<?php
error_reporting(1);
// $con=mysql_connect("localhost","root","") or die(mysql_error());
// // select database
// mysql_select_db("wine",$con);
include('../config/config.php');

$name = $_POST['name'];
$info = $_POST['info'];
$price = $_POST['price'];
$img = $_FILES['img']['name'];
echo $name.$info.$price.$img;
$query = "INSERT INTO `wine`.`productupload` (
    `p_id` ,
    `name` ,
    `info` ,
    `price` ,
    `images`,
    `likes`
    )
    VALUES (
    NULL , '$name', '$info', '$price', '$img',''
    );";

  if($name == "" || $info == "" || $price == "" || $img == ""){
    $message = "Fill in the form to Upload your Products";
  }
  else{

    if(mysql_query($query)){
      $message = "Uploading Success";
	   mkdir("uploadedImages/");
		move_uploaded_file($_FILES['img']['tmp_name'],"uploadedImages/".$_FILES['img']['name']);	

      
  }else{
      $message = "Uploading error";
  }
  }


?>
  <?php include('templates/header.php'); ?>
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/insert.css">



  <div class="box row animate__animated animate__backInDown ">
    <div class="col-10 col-md-6 mx-auto">
      <form class="text-light form p-4 rounded" method="post"  enctype="multipart/form-data">
        <h2 class="text-center font"><font color='#AA77FF'>Upload your Products</font></h2>
        <div class="mb-3">
          <label for="name" class="form-label "><font color='orange'>Your Product Name</font></label>
          <input type="text" class="form-control bg-dark text-light" id="product" name="name"
            aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="info" class="form-label"><font color='skyblue'>About Product</font></label>
          <input type="text" class="form-control bg-dark text-light" id="price" name="info">
          <div id="sub" class="form-text text-light">A brief info about your Products.</div>

        </div>
        <div class="mb-3">
          <label for="price" class="form-label"><font color='lightgreen'>Price</font></label>
          <input type="number" class="form-control bg-dark text-light" id="price" name="price">

        </div>

        <div class="mb-3 ">
          <label class="form-check-label" for="img">Your image should be landscape</label>

          <input type="file" class="form-control bg-dark text-light" id="img" name="img">
        </div>
        <div class=" text-center">
          <button type="submit" class="btn btn-outline-info w-25">Submit</button>

        </div>
      </form>
  <center><font color='white'>  <?php echo $message; ?></font> </center>
    </div>
  </div>


  <?php include('templates/footer.php'); 
  
}?>
