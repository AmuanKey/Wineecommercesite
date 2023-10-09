<?php
error_reporting(1);
session_start();
$o_num = $_REQUEST['o_no'];
$img =  $_SESSION['img'];
$name = $_SESSION['name'];
$address = $_SESSION['address'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OrderSent</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/ordersent.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top mt-0 ">
        <div class="container-fluid bg-dark ">
            <a class=" text-decoration-none text-light brand medium-text me-5" href="#">Vinno Vista</a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon  "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class=" way  text-light small-text me-5 text-decoration-none" aria-current="page"
                            href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="way text-light small-text me-5 text-decoration-none" href="shop.php">Shop</a>
                    </li>

                    <li class="nav-item">
                        <a class="way text-light small-text me-5 text-decoration-none " href="#">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="way text-light small-text me-5 text-decoration-none " href="contact.php">Contact</a>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2 bg-dark text-light" type="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-light " type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="background "></div>
    <div class=" holder "></div>   
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