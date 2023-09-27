<!DOCTYPE html>
<html lang="en" style="background-color: #19191A;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/test.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<div class="background">
    <div class=" container  ">
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


        <div class="d-flex flex-column-reverse mb-3 flex-md-row">
            <section class="sections first-section   d-flex flex-column justify-content-center ">
                
                    <div class="title my-5  ps-5">
                        <span class="big-text animate__animated animate__fadeInUpBig">Helping you to</span>
                        <div class="medium-text animate__animated animate__fadeInUpBig">find your perfect bottle</div>
                    </div>
                    <div class="body my-3 ps-5">
                              <p class="quotes small-text animate__animated animate__fadeInUpBig">"Wine is constant proof that God loves us and loves to see us happy." - Benjamin Franklin</p>
                    </div>
                    <div class="btn  d-flex ps-5">
                        <button class="btn btn-warning animate__animated animate__fadeInUpBig">Shop Now</button>

                    </div>
                    
                
                
             
            </section>
            <section class="sections second-section   d-flex align-items-center ">
                <img class="wine-circle-img animate__animated animate__bounceInDown animate__delay-0.6s" src="images/wine-circle.png" alt="">
            </section>
        </div>
        <footer>
            <center class="footer-text">Made with Passion by Amuan <font color="red">&#10084;</font> </center>
        </footer>

    </div>
</div>

</body>

</html>