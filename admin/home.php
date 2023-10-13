<?php
session_start(1);
if($_SESSION['admin']!=1){
    header('location:index.php');
}else{
?>

<?php error_reporting(1); 
    include('../config/config.php');
    include('templates/header.php'); 
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" integrity="sha512-oAvZuuYVzkcTc2dH5z1ZJup5OmSQ000qlfRvuoTTiyTBjwX1faoyearj8KdMq0LgsBTHMrRuMek7s+CxF8yE+w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php
    $arr = array();
    $data="SELECT * FROM orderlist";
    $products = mysql_query($data);
    while($row = mysql_fetch_array($products)){
        $db = $row['pname'];
        array_push($arr, $db);
        }
        $numarr = array_count_values($arr);
        $index = max($numarr);
        $info = array_keys($numarr,$index);
        $most_oitem = ($info[0]);  //  the most occured item in an array

    $most_ordered_item ="SELECT * FROM orderlist WHERE pname = '$most_oitem'";

    $m_p = mysql_query($most_ordered_item);

    $newsqy = mysql_query($most_ordered_item);
    $nrow = mysql_fetch_array($newsqy);
    


    $rdata="SELECT * FROM registerlist";
    $rquery = mysql_query($rdata);


    $Ldata="SELECT * FROM likes";
    $Lquery = mysql_query($Ldata);
    $Larr = array();
    while($Lrow = mysql_fetch_array($Lquery)){
     $Lname = $Lrow['name'];
     array_push($Larr,$Lname);
    }
    $Lcount = array_count_values($Larr);
    $Lmax = max($Lcount);
    $MLname = array_keys($Lcount,$Lmax);
    $favProduct = $MLname[0];
    $MLquery ="SELECT * FROM likes WHERE name = '$favProduct'";
    $MLdata = mysql_query($MLquery);
    $MLrow = mysql_fetch_array($MLdata);
    


  

    ?>


    <div class='container-fluid text-light  '>
    <div class=' mx-auto border border-light row rounded p-3 ' style='width:95%;'>
    <div class='border border-light rounded d-flex justify-content-center align-items-center col-md-6 mx-auto animate__animated animate__zoomIn ' style='height:120px;'>
        <h1 class='text-center font  ' ><font color='#AA77FF'> Welcome to Admin Pannel <?php echo $mes; ?>  </font> &#x1F389;</h1>
    </div>
    <!-- body  -->
    <div class='row   mx-auto p-3'>
        <div class='col-md-4 animate__animated animate__fadeInUpBig animate__fast'>
            <div class=' text-center border border-light  rounded my-2 p-3'>
            <img src="../admin/admin-img/wine-admin-bg.png" width='60%' class='' alt="">
            </div>
            <div class='my-2' >
            
                    <button class="btn btn-outline-light  w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Registered Users &nbsp; <i class="bi bi-person-circle"></i>
                    </button>
    
                <div class="collapse  " id="collapseExample">
                    <div class="card bg-dark border border-light card-body">
                    <table class='text-center'>
                        <?php while($rrow = mysql_fetch_array($rquery)){?>
                        <tr>
                            <th>  <a href='#' title='See Profile'> <?php echo $rrow['name']; ?> </a></th>
                            
                        </tr>
                        <?php }?>
                    </table>
                    </div>
                </div>
            </div>
            <div class='my-3' >
                
                <button class="btn btn-outline-light  w-100" type="button" data-bs-toggle="collapse" data-bs-target="#more" aria-expanded="false" aria-controls="collapseExample">
                More  &nbsp;<i class="bi bi-bookmark-plus"></i>
                </button>

                <div class="collapse  " id="more">
                <div class="card bg-dark border border-light card-body">
                        <div>Don't forget to logout once you done your works.</div>
                        <hr>
                        <div><a href="logout.php" class='btn btn-outline-danger'>Log Out</a></div>
                </div>
            </div>
        
            </div>


            
        </div>
        <div class='col-md-4 my-2 animate__animated animate__fadeInUpBig '>
            <div class='border border-light rounded  ' style='height:fit-content;'>
        
            <h3 class='text-center my-2 font'><font color='#d4c92b';>Most Ordered Product</font> &#11088;</h3>
                
                <div class='text-center'>
            <img src="../admin/uploadedImages/<?php  echo $nrow['photo']; ?>" width='80%' class='rounded  ' alt="most-ordered-p">

                <h1 class=' '><font color='gold'> <?php echo $most_oitem; ?></font> </h2>
                <p>This has been Ordered <font color='greenyellow' class='fs-4'><?php echo $index; ?></font> times <i class="bi bi-star-fill"></i></p>
                <button class="btn btn-outline-light mb-3  w-75" type="button" data-bs-toggle="collapse" data-bs-target="#customer" aria-expanded="false" aria-controls="collapseExample">
                    Customers of this Product  &nbsp; <i class="bi bi-bag"></i>
                    </button>
    
                <div class="collapse w-75 mx-auto " id="customer">
                    <div class="card bg-dark border border-light card-body">
                        <?php while($m_r = mysql_fetch_array($m_p)){  ?>
                    <div class='text-center'>
                    <?php echo $m_r['cusname'];  ?>
                    </div>
                     
                    <?php } ?>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class='col-md-4 my-2 animate__animated animate__fadeInUpBig animate__slow'>
            <div class='border border-light w-100 rounded col-md-4 ' style='height:fit-content;'>
            <h3 class='text-center my-2 font '><font color='#36d895';> People's Favourite</font> <font color='red'>	&#10084; </font> </h3>
            <div class='text-center'>
            <img src="../admin/uploadedImages/<?php echo $MLrow['pname']; ?>" width='80%' class='rounded  ' alt="most-ordered-p">
                <h4> <?php echo $favProduct; ?></h4>
                <p><font color='violet ' class='fs-3'><?php echo $Lmax; ?></font> <i class="bi bi-suit-heart-fill text-danger"></i> People's Favourite</p>
            </div>
            </div>

        </div>
        
        
    </div>
        <!-- body -->
    

    </div>
    </div>

    <?php include('templates/footer.php'); 
    
                        }?>