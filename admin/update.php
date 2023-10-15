<?php
error_reporting(1);
include('../config/config.php');

$id = $_REQUEST['id'];

$query = "SELECT * FROM productupload where p_id = '$id' ";
$result = $mysqli -> query($query);
$arr = $result -> fetch_array(MYSQLI_ASSOC);
$oldImg = $arr['images'];

$n = $_POST['name'];
$i = $_POST['info'];
$p = $_POST['price'];
$img = $_FILES['img']['name'];


  $data="UPDATE productupload SET name='$n',info='$i',price='$p',images='$img' WHERE p_id='$id'";
  if(isset($_POST['btn'])){
    unlink("uploadedImages/$oldImg");
    move_uploaded_file($_FILES['img']['tmp_name'],"uploadedImages/".$_FILES['img']['name']);
    $mysqli -> query($data);
    header('location:productview.php');

  }
  




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
  <div class="cover"> </div>
  <nav class="navbar navbar-expand-lg fixed-top nav">
    <div class="container">

      <a class="navbar-brand font" href="#">
        <img src="../images/admin.png" alt="Bootstrap" width="40" height="40">Admin of Vinno Vista
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link font " aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font" href="insert.php">Insert</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font" href="order.php">Order</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font" href="productview.php">View Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font" href="feedback.php">Feedback</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <div class="holder"></div>

<!-- Modal  -->
<div class="box row  ">
    <div class="col-10 col-md-6 mx-auto">
      <form class="text-light form p-4 rounded" method="post"  enctype="multipart/form-data">
        <h2 class="text-center">Updating your Products?<?php echo $mes; ?> </h2>
        <div class="mb-3">
          <label for="name" class="form-label ">Your Product Name</label>
          <input type="text" class="form-control bg-dark text-light" value='<?php echo $arr['name']; ?>' id="product" name="name"
            aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="info" class="form-label">About Product</label>
          <input type="text" class="form-control bg-dark text-light" value='<?php echo $arr['info']; ?>' id="info" name="info">
          <div id="sub" class="form-text text-light">A brief info about your Products.</div>

        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="number" class="form-control bg-dark text-light" value='<?php echo $arr['price']; ?>' id="price" name="price">

        </div>

        <div class="mb-3 ">
          <label class="form-check-label" for="img">Your image :: <?php echo $oldImg; ?> </label>
      <img src="./uploadedImages/<?php echo $arr['images']; ?>" class=" img" width="80" height="80" alt="">
          

          <input type="file" class="form-control bg-dark text-light" id="img" name="img">
        </div>
        <div class=" text-center">
        <a href='productview.php' class="btn btn-outline-danger mx-2 w-25">Cancel</a>

          <button type="submit" name='btn' class="btn btn-outline-light  mx-2 w-25">Update</button>

        </div>
      </form>
    </div>
  </div>
<!-- modal  -->
</body>
</html>