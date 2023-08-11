<?php echo view('includes/header');?>

<section>

<div class="container">
  <div class="row">
    <div class="col">
    

      


      <div class="card bg-dark text-white">
  <img class="card-img" src="<?php echo base_url('/pic/picture1.jpg');?>" height="500px" alt="Card image">
  
</div>
      
     
      
    </div>
    <div class="col-5">
    <h1>User Login </h1>

   

       <form action="/" method="post">






<div class="form-group">
    <!-- <label for="Email">Email address</label> -->
    <input type="email" name="email" class="form-control" id="" value="" placeholder="Enter Email">
    
</div>


<div class="form-group">
    <!-- <label for="Password">Password</label> -->
    <input type="password" name="password" class="form-control" id="" value="" placeholder="Password">
</div>





<button type="submit" class="btn btn-primary">Login</button>
   
<br><br><p > <a href="#"> Signup page</a></p>
                
 

</form>
    </div>
    
  </div>
     
  </div>
</div>
     

</section>

<?php echo view('includes/footer');?>