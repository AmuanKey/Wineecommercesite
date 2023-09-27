<?php
error_reporting(1);
include('./config/config.php');
$name = $_POST['name'];
$email = $_POST['email'];
$mes = $_POST['message'];

$query = "INSERT INTO feedback(name,email,message) VALUES ('$name','$email','$mes')";
if(mysql_query($query)){
    $alert = "<div class='alert  mx-auto mt-2 title'><font  color='white'><center> Your Message is sent Successfully. <span class='fa-solid fa-x x' style='color: #fff000; cursor:pointer;  '></span>  </center>  </font> </div>";
}else{
    $alert = "<font color='white'><center>error</center></font>";
}

?>


<!DOCTYPE html>
<html lang="en" style="background-color: #020106;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="CSS/contact.css">
    <link rel="stylesheet" type="text/css" href="CSS/test.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <script defer src="https://kit.fontawesome.com/2d8375e017.js" crossorigin="anonymous"></script>
</head>
<body>
         <!--! nav-bar  -->
         <nav class="navbar navbar-expand-lg fixed-top mt-0 ">
            <div class="container-fluid bg-dark ">
                <a class=" text-decoration-none text-light brand medium-text me-5" href="#">Vinno Vista</a>
                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon  "></span>
                  </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class=" way  text-light small-text me-5 text-decoration-none" aria-current="page" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="way text-light small-text me-5 text-decoration-none" href="#">Shop</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="way text-light small-text me-5 text-decoration-none " href="#" >Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="way text-light small-text me-5 text-decoration-none " href="contact.php" >Contact</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2 bg-dark text-light" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light " type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <!--! nav-bar  -->

        <div class="body">
       
 
            <header class="header">
                <h1></h1>
            </header>
            <div class="container d-flex flex-column-reverse flex-lg-row">
                <section class="contact-form animate__animated animate__bounceInDown animate__slow">
                    <h2 class="title">Send us a message</h2>
                    <form class="form" method="post">
                        <label class="label title" for="name">Name:</label>
                        <input class="input bg-black form-control text-light" type="text" id="name" name="name" required>
                        
                        <label class="label title" for="email">Email:</label>
                        <input class="input bg-black form-control text-light" type="email" id="email" name="email" required>
                        
                        <label class="label title" for="message">Message:</label>
                        <textarea class="textarea bg-black text-light form-control" id="message" name="message" rows="4" required></textarea>
                        
                        <button type="submit "  class="btn btn-outline-light">Send</button>
                     
                    </form>
   <?php echo $alert; ?>

                </section>
                <section class="contact-info ">
                    <h2 class="title animate__animated animate__bounceInUp animate__slow">Contact Information</h2>
                    <address class="animate__animated animate__bounceInUp animate__slower">
                        <p class="title">123 SanChaung Street</p>
                        <p class="title">Yangon, Myanmar</p>
                        <p class="title">Phone: (123) 456-7890</p>
                        <p class="title">Email: <a href="mailto:contact@yourwebsite.com">contact@yourwebsite.com</a></p>
                    </address>
        
                    <img src="./images/wine-banner.jpg" class="img animate__animated animate__bounceInDown" alt="wine-poster" width="450px">
                </section>
            </div>
            <footer>
                <center class="footer-text">Made with Passion by Amuan <font color="red">	&#128293;</font> </center>
            </footer>
        </div>
        <script>
            let x = document.querySelector(".x");
            let alert = document.querySelector('.alert');
            x.addEventListener("click", ()=>{
                alert.remove();
            });
        </script>

</body>
</html>