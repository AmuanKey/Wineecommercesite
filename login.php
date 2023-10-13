<?php
error_reporting(1);
session_start();
include('./config/config.php');

$ln = $_POST['username'];
$lp = $_POST['password'];

$lquery = "SELECT * FROM registerlist WHERE name ='$ln' ";
$ldata = mysql_query($lquery);
$lrow = mysql_fetch_array($ldata);

if($ln == $lrow['name'] && $lp == $lrow['password'] ){
    $_SESSION['login'] = $ln;
    header('location:home.php');
}
else{ ?>
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./CSS/register.css">
    <link rel='stylesheet' href = " https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css ">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body class="">
    <div class="layer"></div>
    <div class="bg-transparent border border-light rounded text-center p-3 animate_animated animate__rotateIn ">

        <h2 ><font color="crimson" > Password Incorrect </font></h2>
        <h3 class="text-success animate__zoomInUp">Please <a href="home.php" class="text-info">Try again</a>  Or</h3>
        <h3 class='animate_animated animate__fadeInUpBig'><font color="#963CA8"><a href="register.php" class=" fs-3">Register</a> New Account?</font></h3>
        
    </div>

    
</body>
</html>

<?php
}


?>