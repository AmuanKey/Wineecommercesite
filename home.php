<?php
include('header.php');
session_start();
if($_SESSION['login'] == 1){
    $name = 'Random Customer';
}else{
    $name = $hrow['name'];
}
?>
<link rel="stylesheet" href="./CSS/home.css">
<link rel="stylesheet" href="./CSS/style.css" />



        <div class="container mx-auto row  ">

                <section class="sections first-section col-md-7    d-flex flex-column justify-content-center ">
                    
                        <div class="title  my-3  ">
                            <span  class="fs-1 title my-1 animate__animated animate__fadeInUpBig"><font color='#963CA8'>Welcome</font><font color='yellowgreen'> <?php echo $name; ?></font></span>
                            <div class="fs-2 title my-1 animate__animated animate__fadeInUpBig"><font color='lightblue'>Ejoy your perfect bottle</font></div>
                        </div>
                        <div class="body my-2 ">
                                  <p class="quotes   animate__animated animate__fadeInUpBig"><font color='lightblue'>"Wine is constant proof that God loves us and loves to see us happy."</font> <font color='lightgreen'>- Benjamin Franklin</font></p>
                        </div>
                        <div class="btn  d-flex ">
                            <a href='shop.php' class="btn btn-outline-info animate__animated animate__fadeInUpBig">Shop Now</a>
    
                        </div>
                        
                    
                    
                 
                </section>
                <section class="sections second-section col-md-5  my-5   text-center ">
                    <div class=''>
                    <img class="  wine-circle-img rounded-circle border border-light p-1 animate__animated animate__bounceInDown animate__delay-0.6s" src="images/wine-circle.png"
                    style='width:50%; height:50%;' alt="">
                    </div>
                </section>
        


        </div>
     
        <footer>
                <center class="footer-text">Made with Passion by Amuan <font color="red">&#10084;</font> </center>
            </footer>
    </div>
 
</div>

</body>

</html>