<?php
error_reporting(1);
session_start();
if($_SESSION['admin']!=1){
    header('location:index.php');
}else{
?>

<?php

error_reporting(1);
include('../config/config.php');
session_start();
$data = "SELECT * FROM orderlist";
$result = $mysqli -> query($data);
//  if(){
  
//  }else{
//   $mes = 'bad';
//  }
include('templates/header.php');
?>
  
  <link rel="stylesheet" href="CSS/order.css">




  <div class='container-fluid  text-light'>
      
      <h2 class='text-center font animate__animated animate__zoomIn '><font color='#AA77FF'>Orderd Lists</font></h2>
      <div class=" row">
       <div class=" col-12   col-md-6 col-lg-4 mx-auto   ">
       <?php
        include('time.php');
        while( $arr = $result -> fetch_array(MYSQLI_ASSOC)){
        $otime= $arr['order_time'];
       ?>
         
         <div href="#" class=" my-4  p-3   animate__animated animate__lightSpeedInRight  border border-white rounded   text-light" >
          <span class="position-absolute start-50 top-0 translate-middle badge rounded-pill bg-primary">
               <?php echo "<font color='cyan'>".time_ago($otime)."</font>"; ?>
               <span class="visually-hidden">unread messages</span>
          </span>

          <table class=' w-100'>
            <tr>
              <td class=' w-50'><h4>Order-<?php echo $arr['ol_id']; ?>: &#128073;</h4></td>
              <td><h4><font color='orange'><?php echo $arr['pname'];  ?></font></h4></td>
            </tr>
            <tr>
              <td>Price:&#128073; </td>
              <td><font color='lightgreen'> <?php echo $arr['price'];?></font> Ks</td>
            </tr>
            <tr>
              <td>Order Number :&#128073;</td>
              <td><font color='red'>ORD<?php echo $arr['o_no']; ?></font></td>
            </tr>
          
      
          </table>
            <hr>
          <table class=' w-100'>
           <tr class="mb-0">
            <td>Customer Name: 🡆</td>
            <td><font color='yellow'><b><?php echo $arr['cusname']; ?></b></font></td>
           </tr>
           <tr>
            <td class='w-50 '>Customer Phone: 🡆 </td>
            <td><font color='yellow'><?php echo $arr['phone']; ?></font></td>
           </tr>
           <tr>
            <td class=''>Customer Address: 🡆 </td>
            <td class=''><font color='yellow'> <?php echo $arr['address']; ?></font></td>
           </tr>
          </table>

                <?php $p = 1;
                      $d = 'DELIVERED';
                      $t = '&#x2713;';
                    $class = " border border-2 border-success p-2  rounded-circle text-success";
    
                      $req = $_REQUEST['id'];
                      $place = "";
                      $query="UPDATE orderlist SET status='$d' WHERE ol_id='$req'";
                      $data="UPDATE orderlist SET ticks='$t' WHERE ol_id='$req'";
                      $qy ="UPDATE orderlist SET sty='$class' WHERE ol_id='$req'";
    
    
    
                    
                      if($req){
    
                      
                      
                      if($mysqli->query($query) && $mysqli->query($data) && $mysqli->query($qy)){
                        $place = 'success';
                      }
                      else{
                        $place = $mysqli -> error;
                      }
                    }
                      
                      
                ?>
          <div class='mt-2 '> 
            <a href="delivered.php?id=<?php echo $arr['ol_id']; ?>" class='btn btn-outline-danger '>Marked Delivered  </a>
            <span> <font color='red' class='fs-3 text-decoration-underline' ><b> <?php echo $arr['status']; ?></b></font>
              <font  class='<?php echo $arr['sty']; ?> '> <?php echo $arr['ticks']; ?>  </font>
            </span>
          </div>
        
      </div>
        
    
       
    

      <?php } ?>
    </div>
          


<?php include('templates/footer.php');

                  }?>


