<?php error_reporting(1);
session_start();
include('./config/config.php');





// $_SESSION['login'] = 1;

$login = $_SESSION['login'];

$hquery = "SELECT * FROM registerlist WHERE name ='$login' ";

if ($result = $mysqli -> query($hquery)) {
  // echo "Returned rows are: " . $result -> num_rows;
  $hrow = $result -> fetch_array(MYSQLI_ASSOC);
// printf ("%s (%s)\n", $hrow["name"], "");
  
}else{
  echo "error".$mysqli -> error;
}

// $hdata = mysql_query($hquery);
// $hrow = mysql_fetch_array($hdata);

// $mes = print_r($hrow);
 











// }else{
//     // echo 'bad';
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinno Vista Wine Shop</title>
    <link rel="icon" href="./images/wine-logo.png">
    <link rel='stylesheet' href="CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" integrity="sha512-oAvZuuYVzkcTc2dH5z1ZJup5OmSQ000qlfRvuoTTiyTBjwX1faoyearj8KdMq0LgsBTHMrRuMek7s+CxF8yE+w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>


<body>
    <nav class="navbar navbar-expand-lg fixed-top mt-0 ">
        <div class="container-fluid bg-dark ">
            
            <a class=" d-flex align-items-center navbar-brand text-decoration-none text-light brand medium-text me-5" href="#">
                <img src="./images/wine-logo.png" alt="logo" width="60" height="60" class="d-inline-block align-text-top" />
               <font class=" fs-1" color='#B23F47'> Vinno Vista</font>
            </a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon  "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class=" way  text-light fs-4 me-5 text-decoration-none" aria-current="page"
                            href="home.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="way text-light fs-4 me-5 text-decoration-none" href="shop.php">Shop</a>
                    </li>

                  
                    <li class="nav-item">
                        <a class="way text-light fs-4 me-5 text-decoration-none " href="contact.php">Contact</a>
                    </li>
                    <li class='nav-item'>
                    <?php 
                if($_SESSION['login'] == $hrow['name']){
                 echo    "
                 <div class='dropdown  '>
                 <a class='fs-4 text-light text-decoration-none way dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                 <font color='#32ff6f'>".$hrow['name']."</font>

                 </a>
               
                 <ul class='dropdown-menu bg-dark text-light '>
                   <li><a class='dropdown-item text-light  brand' href='#'><font color='yellowgreen'>".$hrow['email']."</font></a></li>
                   <li><a class='dropdown-item text-light brand' href='logout.php'><font color='crimson'>Logout</font></a></li>
                 </ul>
               </div>
                 ";
                   
                }else {
                 echo    "<a class='  fs-4 text-light text-decoration-none  me-md-5  way ' data-bs-toggle='modal' data-bs-target='#staticBackdrop'  type='submit'><font color='orange'>Login</font></a>";

                 } ?>
                    </li>

                </ul>
                
            </div>
        </div>
    </nav>
    <div class="background "></div>
        <div class=" holder "></div>

        <!-- Modal -->
        <?php
     

       
     
     ?>
<div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content bg-dark text-light">
      <div class="modal-header">
        <h1 class="modal-title fs-4 text-center" id="staticBackdropLabel">Log in to Your Account<?php echo $ln; ?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method='post' action='login.php' class=' w-75 mx-auto'>
            <label for="name" class='form-label '>Username</label>
            <input name='username' class='form-control my-1 text-light bg-dark' type="text">
            <label for="password" class='form-label'>Password</label>
            <input name='password' class='form-control my-1 text-light bg-dark ' type="password">
            <div class='w-100  text-center my-2'>
            <input class='btn btn-info ' type="submit" value='Login'>
            </div>
            
        </form>
        <center>Don't Have an Account?</center>
        <center><a href="register.php">Register Here &#9992;</a></center>
      </div>
      <div class="modal-footer">
      
      </div>
    </div>
  </div>
</div>


      