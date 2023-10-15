<?php
error_reporting(1);
include('./config/config.php');

include('header.php');

$query = "SELECT * FROM productupload";

// $result = mysql_query($query);
if($sresult = $mysqli -> query($query)){
    $mes = $sresult -> num_rows;
}



?>

    <link rel="stylesheet" href="CSS/shop.css">



        <div class="box row mx-auto p-0 container rounded">
        <?php  while ($arr = $sresult -> fetch_array(MYSQLI_ASSOC)) {
    $i = $arr['images'];

 ?>
    <div class=' col-10 inside col-md-4 col-lg-3 '>
<div class="card w-100 animate__animated animate__backInDown  my-3 " style="height: 450px;  ">

                <img src="./admin/uploadedImages/<?php echo $i; ?>" style="height:50%; width:100;" class=" shape card-img-top  " alt="wine-pic">
                <div class="card-body text-center   h-50">
                    <h5 class="card-title quotes "><font color='#E13661'><?php echo $arr['name']; ?></font></h5>
                    <p class="card-text  text-light  mb-0  " style="height:50%; overflow:hidden; font-family: 'Acme', sans-serif; "><?php echo $arr['info']; ?>
                    </p>
                    <div class=''>
                    <h4 class=' quotes '><font color='#2AB613'><?php echo $arr['price'];?> Ks </font></h4>
                    <div class='  '>
                        <a href="order.php?id=<?php echo $arr['p_id']; ?>" class=" w-50 btn btn-outline-light title ">Buy</a>
                          
                        <?php

                            $Ldata="SELECT * FROM likes";
                            $Lquery = $mysqli -> query($Ldata);
                            $Larr = array();
                            while($Lrow = $Lquery -> fetch_array(MYSQLI_ASSOC)){
                             $Lname = $Lrow['name'];
                             array_push($Larr,$Lname);
                            }
                            $Lcount = array_count_values($Larr);
                           
                        ?>
                
                       
                         <form method='post' class=' w-25  position-absolute end-0 bottom-0' action='like.php'>
                                  <input type="hidden" name='img' value='<?php echo $arr['images']; ?>'>
                                  <input type="hidden" name='name' value='<?php echo $arr['name']; ?>'>

                                  <button type="submit" class="btn btn-transparent text-danger"><b><?php echo $Lcount[$arr['name']]; ?></b>
                                  <i class=" heart bi bi-suit-heart<?php echo $arr['likes']; ?> fs-3"></i> 
                                  </button>
                         </form>
                    </div>
                       



                    </div >
                </div>
            </div>
    </div>

  
           
<?php }


?>
        </div>
<!-- modal  -->

       <!-- modal  -->
    

</body>

</html>