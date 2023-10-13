<?php
include('header.php');
?>
<h2 class='text-danger title text-center'>You need Login first to give a Heart  &#x2764;</h2>
<div class='row'>

<div class="col-md-4 mx-auto rounded  " >
  <div class=" ">
    <div class="p-3 bg-transparent text-light">
      <div class="">
        <h1 class="title text-info fs-4 text-center" >Log in to Your Account</h1>
      </div>
      <div class="modal-body">
        <form method='post' class=' w-75 mx-auto'>
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
</div>
</body>

</html>