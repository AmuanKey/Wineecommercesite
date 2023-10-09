<?php
error_reporting(1);
session_start();
include('./config/config.php');
$id = $_REQUEST['id'];

$data = "SELECT * FROM productupload WHERE p_id = '$id'";
$result = mysql_query($data);
$arr = mysql_fetch_array($result);


//form data
$cus_name = $_POST['cusname'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$ord_name = $_POST['oname'];
$price = $_POST['price'];
$ord_no = rand(100,999);
$_SESSION['img'] = $arr['images'];
$_SESSION['name'] = $cus_name;
$_SESSION['address'] = $address;

$query = "INSERT INTO `wine`.`orderlist` (
    `ol_id` ,
    `cusname` ,
    `phone` ,
    `address` ,
    `pname`,
    `price`,
    `o_no`,
    `order_time`
    )
    VALUES (
    NULL , '$cus_name', '$phone', '$address','$ord_name','$price','$ord_no',NOW()
    );";
 if($cus_name == "" || $phone == "" || $address == ""){
    $mes = "";
  }else{
           if(mysql_query($query)){
               $mes = "success";
               header("location:ordersent.php?o_no=$ord_no");
            }else{
              $mes ="bad";
                }
        }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/order.css">
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
    <div class="container-fluid text-light">
        <div class="my-3">
            <h3 class="text-center">Ordering From <?php echo $mes; ?> </h3>
        </div>

    <form method="post">
        <div class="">
            <div class="row w-75 mx-auto ">

                <div class="box row col-md-8 mx-2 my-2  p-3">

                    <div class=" col-md-8 ps-3 ">
                        <h2>
                            <?php echo $arr['name']; ?>
                        </h2>
                        <p>
                            <?php echo $arr['info']; ?>
                        </p>
                        <div class="">
                            <h4> Price : <font color='lightgreen'>
                                    <?php echo $arr['price']; ?>
                                </font> Ks</h4>
                        </div>

                    </div>
                    <div class=" col-md-4">
                        <img src="./admin/uploadedImages/<?php echo $arr['images']; ?>" class="rounded" alt="wine-3"
                            width="100%">


                    </div>

                </div>
                <div class="box  col-md-3 mx-2 my-2  p-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name='cusname' class="form-control bg-dark text-light" id="name">

                    <label for="phone" class="form-label">Phone Number</label>
                    <input class="form-control bg-dark text-light" name='phone' id="phone" type="text">

                    <label for="address" class="form-label">Address</label>
                    <textarea name='address' class="form-control bg-dark text-light" id="address" rows="3"></textarea>
                    <input type="hidden" name='price' value="<?php echo $arr['price']; ?>">
                    <input type="hidden" name='oname' value="<?php echo $arr['name']; ?>">
                </div>
            </div>
        </div>



        <div class="mt-2">
            <p class="  text-center  w-100 ">
                <input type='submit' value='Order Now' class="btn btn-outline-light w-50 mx-auto " />


            </p>

        </div>
    </form>


    </div>
</body>

</html>