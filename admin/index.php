<?php
error_reporting(1);
include('../config/config.php');
session_start();
$data="SELECT * FROM admin";
$result = mysql_query($data);
$row = mysql_fetch_array($result);
$adminName =  $row[0];
$password = $row[1];

$name = $_POST['name'];
$pass = $_POST['password'];


if($adminName == $name && $password == $pass){
  $mes = ' GOOD';
  $_SESSION['admin'] = 1;
  header('location:home.php');
}else {
   $mes = ' bad';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="CSS/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

</head>
<body>
    <div class="cover"></div>

    <div class="container-fluid  ">
           <div class=" box  d-flex justify-content-center">
                     <div class="  d-flex flex-column justify-content-center  row ">
                        <h1 style="height: 50px;" class="font  animate__animated animate__bounceInDown  text-center d-flex justify-content-center align-items-center   ">
                        Login to enter Admin Pannel 
                      </h1>

                        <form method='post' action="" class=" mx-auto col-8 col-md-10 ">
                            <input name='name'  type="text" class=" animate__animated animate__bounceInUp animate__fast form-control bg-dark text-light my-5">
                            <input name='password' type="password" class=" animate__animated animate__bounceInUp   form-control bg-dark text-light my-5">
                            <div class="text-center">
                                <input type="submit" class="  animate__animated animate__bounceInUp animate__slow  btn btn-outline-info w-50  ">

                            </div>

                        </form>
                     </div>
           </div>
    </div>
</body>
</html>