<?php
session_start(1);
if($_SESSION['admin']!=1){
    header('location:index.php');
}else{
?>

<?php
error_reporting(1);
include('../config/config.php');

?>
  <?php include('templates/header.php'); ?>

<link rel="stylesheet" href="CSS/feedback.css">

    <h2 class="text-center font my-4 animate__animated animate__zoomIn "><font color='#AA77FF'>Users' Feedback Information</font></h2>
    <table border="1" class='animate__animated animate__fadeIn' >
        <thead>
            <tr class="table-header">
                <th class="white">No</th>
                <th class="white">name</th>
                <th class="white">email</th>
                <th class="white">Message</th>
    
            </tr>
        </thead>
        <tbody>
        <?php
$data="SELECT * FROM feedback";
$val=mysql_query($data);
$count = 0;
?>

<?php
while(list($id,$name,$email,$mes) = mysql_fetch_array($val))
{ $count += 1; ?>
        <tr>
            <td class="red " data-label="id"><?php echo $count; ?></td>
            <td class="yellow" data-label="name"><?php echo $name; ?></td>
            <td class="pink" data-label="email"><?php echo $email; ?></td>
            <td class="blue" data-label="Message"><?php echo $mes; ?></td>

        </tr>
        
        <?php
}
?>
    </tbody>

    </table>
  <?php include('templates/footer.php'); 
  
}?>
