 <?php
error_reporting(1);
include('./config/config.php');
$name = $_POST['name'];
$email = $_POST['email'];
$mes = $_POST['message'];

$query = "INSERT INTO feedback(name,email,message) VALUES ('$name','$email','$mes')";
if ($name == "" || $email == "" || $mes == "") {
    $alert = "<div class='alert  mx-auto mt-2 title'><font  color='orange'><center> Write Your Message Please. <span class='fa-solid fa-x x' style='color: #fff000; cursor:pointer;  '></span>  </center>  </font> </div>";
}else{
    if(mysql_query($query)){
        $alert = "<div class='alert  mx-auto mt-2 title'><font  color='lightgreen'><center> Your Message is sent Successfully. <span class='fa-solid fa-x x' style='color: #fff000; cursor:pointer;  '></span>  </center>  </font> </div>";
    }else{
        $alert = "<font color='white'><center>error</center></font>";
    }
}

include('header.php');
?> 
<link rel="stylesheet" href="./CSS/contact.css" />
 <div class="container  row mx-auto mb-3 ">
              
                  
                    <section class=" col-md-6   contact-info my-2 ">
                        <h2 class="title  animate__animated animate__bounceInUp animate__slow">Contact Information</h2>
                        <address class="animate__animated animate__bounceInUp animate__slower">
                            <p class="title">123 SanChaung Street</p>
                            <p class="title">Yangon, Myanmar</p>
                            <p class="title">Phone: <font color='lightgreen'>(123) 456-7890</font></p>
                            <p class="title">Email: <a href="mailto:neoncoder77@gmail.com">Contact me Via @ email</a></p>
                        </address>
                        <div class='border border-light p-2 rounded'>
                        <img src="./images/wine-banner.jpg" class="w-100 img animate__animated animate__bounceInDown" alt="wine-poster" >

                        </div>
                    </section>
                    <section class ='col-md-6 animate__animated animate__bounceInDown animate__slow my-2'>
                        <h2 class="title">Send us a message</h2>
                        <form class="form" method="post">
                            <label class="label title" for="name">Name:</label>
                            <input class="input bg-black form-control text-light" type="text" id="name" name="name" required>
                            
                            <label class="label title" for="email">Email:</label>
                            <input class="input bg-black form-control text-light" type="email" id="email" name="email" required>
                            
                            <label class="label title" for="message">Message:</label>
                            <textarea class="textarea bg-black text-light form-control mb-3" id="message" name="message" rows="4" required></textarea>
                            <div class='text-center'>
                            <button type="submit "  class="btn btn-outline-success w-50">Send</button>

                            </div>
                            <?php 
       echo $alert; 
       ?>
                        </form>
                    </section>
                    <!-- <section class="   ">
                        
     
    
                    </section> -->
             
                <footer>
                    <center class="text-light footer-text">Made with Passion by Amuan <font color="red">	&#128293;</font> </center>
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