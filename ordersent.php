<?php
error_reporting(1);
session_start();
$o_num = $_REQUEST['o_no'];
$img =  $_SESSION['img'];
$name = $_SESSION['name'];
$address = $_SESSION['address'];
include('header.php');
?>
    <link rel="stylesheet" href="CSS/ordersent.css">


    <div class="container text-light">
        <h3 class="text-center">THANK YOU FOR SHOPPING</h3>
        <h4 class="text-center text-success"> Your Order has been sent Successfully.</h4>
        <div class=" ">
            <div class="card mb-3 mx-auto" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="./admin/uploadedImages/<?php echo $img; ?>" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Order Number :<font color='#F94C10'> ORD<?php echo $o_num; ?></font></h5>
                      <p class="card-text">Name: <?php echo $name; ?> </p>
                      <p class="card-text">Address: <?php echo $address; ?> </p>

                      
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div>
            <p class="text-center">Thanks Please come shopping again.</p>
        </div>
        <div class=" text-center">
            <a href="shop.php" class="btn btn-outline-light ">Back to Shop</a>
        </div>
    </div>
</body>
</html>