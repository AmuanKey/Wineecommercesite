<?php
error_reporting(1);
include('../config/config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users' Feedback</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="body">
  <div class="cover">
    <nav class="navbar navbar-expand-lg nav">
        <div class="container">
            
                <a class="navbar-brand font" href="#">
                  <img src="../images/admin.png" alt="Bootstrap" width="40" height="40">Admin of Vinno Vista
                </a>
            
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link font " aria-current="page" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link font" href="insert.php">Insert</a>
              </li>
              <li class="nav-item">
                <a class="nav-link font" href="order.php">Order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link font" href="productview.php">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link font" href="feedback.php">Feedback</a>
              </li>
              
            </ul>
          </div>
        </div>
    </nav>
    <h2 class="text-center font my-4">Users' Feedback Information</h2>
<?php
$data="SELECT * FROM feedback";
$val=mysql_query($data);

echo "<table class='mt-3 w-75 table table-dark  table-hover' border='1'  align='center'>";
echo "<tr class='table-header'><th>Contact_id</th><th>Name</th><th>Email</th><th>Message</th></tr>";
while(list($id,$name,$email,$mes) = mysql_fetch_array($val))
{
echo "<tr>";
echo "<td class='ps-5'>".$id."</td>";
echo "<td>".$name."</td>";
echo "<td>".$email."</td>";
echo "<td>".$mes."</td>";
echo "</tr>";
}


echo "</table>";

?>



</div>
    </body>
</html>