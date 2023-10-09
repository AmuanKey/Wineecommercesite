<?php

error_reporting(1);
include('../config/config.php');
session_start();
$data = "SELECT * FROM orderlist";
$result = mysql_query($data);
//  if(){
  
//  }else{
//   $mes = 'bad';
//  }

?>
  <?php include('templates/header.php'); ?>




    <div class='container-fluid text-light'>
      
<h2 class='text-center font'><font color='#AA77FF'>Orderd Lists</font></h2>
<div class=" row">
<div class="list-group col-11 col-md-6 col-lg-4 mx-auto  ">
<?php
include('time.php');

while(  $arr = mysql_fetch_array($result)    ){
$otime= $arr['order_time'];

?>
  <div href="#" class=" my-2 bg-transparent  border border-white rounded list-group-item list-group-item-action  text-light" aria-current="true">
    <div class="">
    <span class="position-absolute top-0  translate-middle badge rounded-pill bg-primary">
    <?php echo "<font color='cyan'>".time_ago($otime)."</font>"; ?>
    <span class="visually-hidden">unread messages</span>
  </span>
      <table class=' w-100'>
        <tr>
          <td class=' w-50'><h4>Order-<?php echo $arr['ol_id']; ?>: &#128073;</h4></td>
          <td><h4><font color='orange'><?php echo $arr['pname']; ?></font></h4></td>
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
    </div>
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

      
      
      if(mysql_query($query) && mysql_query($data) && mysql_query($qy)){
        $place = 'success';
      }
      else{
        $place = mysql_error();
      }
    }
      
      
?>
    <div class='mt-2 '> 
      <a href="delivered.php?id=<?php echo $arr[ol_id]; ?>" class='btn btn-outline-danger me-2'>Marked as Delivered  </a>
      <span> <font color='red' class='fs-3' ><b> <?php echo $arr[status]; ?></b></font>
         <font  class='<?php echo $arr[sty]; ?>'> <?php echo $arr[ticks]; ?>  </font>
    </span>

 
  </div>
  <?php } ?>
  
</div>
</div>
      


<?php include('templates/footer.php'); ?>


