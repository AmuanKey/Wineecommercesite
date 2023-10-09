<?php
error_reporting(1);
$con=mysql_connect("localhost","root","") or die(mysql_error());
// select database
mysql_select_db("wine",$con);

$query = "SELECT * FROM productupload";

$result = mysql_query($query);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="CSS/shop.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top mt-0 ">
        <div class="container-fluid bg-dark ">
            <a class=" text-decoration-none text-light brand medium-text me-5" href="#">Vinno Vista</a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon  "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class=" way  text-light small-text me-5 text-decoration-none" aria-current="page"
                            href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="way text-light small-text me-5 text-decoration-none" href="shop.html">Shop</a>
                    </li>

                    <li class="nav-item">
                        <a class="way text-light small-text me-5 text-decoration-none " href="#">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="way text-light small-text me-5 text-decoration-none " href="contact.php">Contact</a>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2 bg-dark text-light" type="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-light " type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="background "></div>
        <div class=" holder "></div>
        <div class="box row mx-auto p-0 container">
        <?php  while ($arr = mysql_fetch_array($result)) {
    $i = $arr['images'];

 ?>
    <div class=' col-10 inside col-md-4 col-lg-3 my-3 '>
    <div class="card w-100  " style="height: 420px;">
                <img src="./admin/uploadedImages/<?php echo $i; ?>" style="height:50%; width:100;" class="circle card-img-top  " alt="wine-pic">
                <div class="card-body text-center  h-50">
                    <h5 class="card-title quotes "><?php echo $arr['name']; ?></h5>
                    <p class="card-text quotes " style='height:50%; overflow:hidden;'><?php echo $arr['info']; ?></p>
                    <a href="#" class=" w-50 btn btn-outline-light title">Buy</a>
                </div>
            </div>
    </div>

  
           
<?php }?>
        </div>

       
    

</body>

</html>