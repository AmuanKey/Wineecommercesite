<?php
error_reporting(1);
include('../config/config.php');

?>
  <?php include('templates/header.php'); ?>

<link rel="stylesheet" href="CSS/feedback.css">

    <h2 class="text-center font my-4"><font color='#AA77FF'>Users' Feedback Information</font></h2>
    <table border="1" >
        <thead>
            <tr class="table-header">
                <th class="white">Id</th>
                <th class="white">name</th>
                <th class="white">email</th>
                <th class="white">Message</th>
    
            </tr>
        </thead>
        <tbody>
        <?php
$data="SELECT * FROM feedback";
$val=mysql_query($data);

?>

<?php
while(list($id,$name,$email,$mes) = mysql_fetch_array($val))
{ ?>
        <tr>
            <td class="red " data-label="id"><?php echo $id; ?></td>
            <td class="yellow" data-label="name"><?php echo $name; ?></td>
            <td class="pink" data-label="email"><?php echo $email; ?></td>
            <td class="blue" data-label="Message"><?php echo $mes; ?></td>

        </tr>
        
        <?php
}
?>
    </tbody>

    </table>
  <?php include('templates/footer.php'); ?>
