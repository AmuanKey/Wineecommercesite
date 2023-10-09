<?php
error_reporting(1);
$con=mysql_connect("localhost","root","") or die(mysql_error());
// select database
mysql_select_db("wine",$con);

$query = "SELECT * FROM productupload";

$result = mysql_query($query);



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
  <link rel="stylesheet" href="CSS/view.css">
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
  <h2 class="text-light text-center">Your Products</h2>
<div class="container">
<?php  while ($arr = mysql_fetch_array($result)) {
    $i = $arr['images'];

 ?>
  <div class="text-light my-3 p-2 row inside-box">
     <div class=" col-2  d-flex justify-content-center  align-items-center" >
      <img src="./uploadedImages/<?php echo $i; ?>" class="rounded-circle img" width="100" height="100" alt="">

     </div>
     <div class=" col-5">
      <h3><?php echo $arr['name']; ?></h3>
      <p><?php echo $arr['info']; ?> </p>
      
     </div>
     <div class=" d-flex justify-content-center align-items-center col-3">
      Price: &nbsp;<b> <?php echo $arr['price']; ?></b> &nbsp;  Ks
      
     </div>
     <div class="col-2    row p-2" >
      <div>
      <a href="#" class='btn btn-outline-light my-1 alink' style="width:100px; height:40px;">Edit</a>
      <a href="#" class='btn btn-outline-light my-1 alink'  style="width:100px; height:40px;">Delete</a>
      </div>


     </div>
  </div>
  <?php } ?>




</div>
  


</body>

</html>