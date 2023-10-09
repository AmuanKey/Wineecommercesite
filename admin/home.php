<?php include('templates/header.php');  ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" integrity="sha512-oAvZuuYVzkcTc2dH5z1ZJup5OmSQ000qlfRvuoTTiyTBjwX1faoyearj8KdMq0LgsBTHMrRuMek7s+CxF8yE+w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class='container-fluid text-light  '>
<div class=' mx-auto border border-light row rounded p-3 ' style='width:95%;'>
   <div class='border border-light rounded d-flex justify-content-center align-items-center col-md-6 mx-auto' style='height:120px;'>
       <h1 class='text-center'> Welcome Admin  &#x1F389;</h1>
   </div>
   <div class='row   mx-auto p-3'>
      <div class='col-md-4 '>
      <div class=' text-center border border-light rounded my-2 p-3'>
           <img src="../admin/admin-img/wine-admin-bg.png" width='60%' class='' alt="">
         </div>
         <div class='my-2' >
        
                  <button class="btn btn-outline-light  w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                  Registered Users &nbsp; <i class="bi bi-person-circle"></i>
                  </button>
   
               <div class="collapse  " id="collapseExample">
                  <div class="card bg-dark border border-light card-body">
                  <table class='text-center'>
                     <tr>
                        <th>  <a href='#' title='See Profile'> Simon </a></th>
                        
                     </tr>
                     <tr>
                           <th>Nathon</th>
                     </tr>
                     <tr>
                        <th>Beard</th>
                     </tr>
                  </table>
                  </div>
               </div>
         </div>
         <div class='my-3' >
            
            <button class="btn btn-outline-light  w-100" type="button" data-bs-toggle="collapse" data-bs-target="#more" aria-expanded="false" aria-controls="collapseExample">
            More  &nbsp;<i class="bi bi-bookmark-plus"></i>
            </button>

            <div class="collapse  " id="more">
            <div class="card bg-dark border border-light card-body">
                     <div>Don't forget to logout once you done your works.</div>
                     <hr>
                     <div><a href="#" class='btn btn-outline-danger'>Log Out</a></div>
            </div>
         </div>
      
      </div>


        
      </div>
      <div class='col-md-4 my-2 '>
         <div class='border border-light rounded  ' style='height:fit-content;'>
          <h3 class='text-center my-2'>Most Ordered Product &#11088;</h3>
             <div class=' text-center'>
             <img src="../admin/uploadedImages/fertilizer-2.jpg" width='80%' class='rounded  ' alt="most-ordered-p">
             </div>
             <div class='text-center'>
               <h4 class=' '> Product Name </h4>
               <p>This has been Ordered 44 times <i class="bi bi-star-fill"></i></p>

             </div>
         </div>
      </div>
      <div class='col-md-4 my-2 '>
         <div class='border border-light w-100 rounded col-md-4 ' style='height:fit-content;'>
           <h3 class='text-center my-2'> People's Favourite 	&#10084; </h3>
           <div class='text-center'>
           <img src="../admin/uploadedImages/wine-3.jpg" width='80%' class='rounded  ' alt="most-ordered-p">
            <h4> Product name</h4>
            <p>55 <i class="bi bi-suit-heart-fill"></i> People's Favourite</p>
           </div>
         </div>

      </div>
    
       
  </div>
 

</div>
</div>

<?php include('templates/footer.php');  ?>