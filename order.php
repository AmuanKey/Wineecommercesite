<?php
error_reporting(1);
session_start();
include('./config/config.php');
$id = $_REQUEST['id'];

$data = "SELECT * FROM productupload WHERE p_id = '$id'";
$oresult =  $mysqli -> query($data);
$arr = $oresult -> fetch_array(MYSQLI_ASSOC);


//form data
$cus_name = $_POST['cusname'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$ord_name = $_POST['oname'];
$price = $_POST['price'];
$ord_no = rand(100,999);
$photo = $arr['images'];
$_SESSION['img'] = $arr['images'];
$_SESSION['name'] = $cus_name;
$_SESSION['address'] = $address;


$query = "INSERT INTO `orderlist` (
    `ol_id` ,
    `cusname` ,
    `phone` ,
    `address` ,
    `pname`,
    `price`,
    `o_no`,
    `order_time`,
    `photo`
    )
    VALUES (
    NULL , '$cus_name', '$phone', '$address','$ord_name','$price','$ord_no',NOW(),'$photo'
    );";
 if($cus_name == "" || $phone == "" || $address == ""){
    $mes = "";
  }else{
           if($mysqli -> query($query)){
               $mes = "success";
               header("location:ordersent.php?o_no=$ord_no");
            }else{
              $mes ="bad";
                }
        }

include('header.php');
?>
<link rel="stylesheet" href="CSS/order.css">



    <div class="container-fluid text-light">
        <div class="my-3">
            <h3 class="text-center">Ordering From <?php echo $mes; ?> </h3>
        </div>

    <form method="post">
        <div class="">
            <div class="row w-75 mx-auto  ">

                <div class="box row col-md-8 mx-2 my-2   p-3">

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



        <div class="mt-2 ">
            <p class="  text-center  w-100 ">
                <input type='submit' value='Order Now' class="btn btn-outline-light w-50 mx-auto " />


            </p>

        </div>
    </form>


    </div>
</body>

</html>