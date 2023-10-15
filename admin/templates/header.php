<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Pannel </title>
  <link rel="icon" href="./admin-img/admin.png">

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
  

<!-- some phps  -->
<?php
error_reporting(1);
// $host="localhost";
// $user="root";
// $pass="";
// //connection
// $con=mysql_connect($host,$user,$pass) or die(mysql_error());
// //db selection
// mysql_select_db("wine",$con);

 include('../../config/config.php');
?>
<!-- php for Order  -->

<?php 
$ocount = 0;
$odata = "SELECT * FROM orderlist";
$oresult = $mysqli -> query($odata);
while($orow = $oresult -> fetch_array(MYSQLI_ASSOC)){
  $ocount += 1;
}
?>
<!-- php for Order  -->



<!-- php for feedback  -->
<?php
$fcount = 0;
$data="SELECT * FROM feedback";
$val=$mysqli -> query($data);
while($frow = $val -> fetch_array(MYSQLI_ASSOC)){
  $fcount +=1;
}
?>
<!-- php for feedback  -->





<!-- some phps  -->

  
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
            <a class="nav-link font" href="orderview.php">Order
            <span class="  position-sm-absolute  top-0 badge rounded-pill bg-danger">
            <?php echo $ocount; ?>
              </span> 

            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link font" href="productview.php">View Products
          

            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link font " href="feedback.php">Feedback 

            <span class="  position-sm-absolute top-0 badge rounded-pill bg-danger">
            <?php echo $fcount; ?>
              </span> 
            </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <div class="holder"></div>
  
