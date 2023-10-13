<?php
error_reporting(1);
session_start();
include('./config/config.php');
$n = $_POST['username'];
$email = $_POST['email'];
$pw = $_POST['password'];

if(isset($_POST['submit'])){
    $query = "INSERT INTO `wine`.`registerlist` (
        `p_id` ,
        `name` ,
        `email` ,
        `password`
        )
        VALUES ( NULL , '$n', '$email', '$pw' );
    ";
    
    if(mysql_query($query)){
        $_SESSION['login'] = $n;
        header('location:home.php');
    }else{
         $mes=mysql_error();
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./CSS/register.css">
</head>
<body>
    <div class="layer"></div>
   

    <div id="container">
        <header>Register new account <?php echo $mes.$_SESSION['login']; ?> </header>
        <form method="post">
           <fieldset>
              <br/>
              <input type="text" name="username" id="username" placeholder="Username" required autofocus>
              <br/><br/>
              <input type="email" name="email" id="email" placeholder="E-mail" required>
              <br/><br/>
              <input type="password" name="" id="password" placeholder="Password" required>
              <br/><br/>
              <input type="password" name="password" id="confirm-password" placeholder="Confirm Password" required>
              <br/> <br/> <br/>
              <label for="submit"></label>
              <div id="submit">
                <div class="a">
                    <a href="home.php"  >Back</a>

                </div>

                <input type="submit" name="submit"  value="REGISTER">
              </div>
             
           </fieldset>
        </form>
     </div>
    
</body>
</html>