<?php echo view('includes/header');?>

<section>

<div class="container">
  <div class="row">
    <div class="col">
    

      <!-- <div class="card" style="width: 18rem;">
      <img class="card-img-top"  src="<?php echo base_url('/pic/picture1.jpg');?>"  alt="Card image cap">
       <div class="card-body">
         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
      </div> -->


      <div class="card bg-dark text-white">
  <img class="card-img" src="<?php echo base_url('/pic/picture1.jpg');?>" height="500px" alt="Card image">
  
</div>
      
     
      
    </div>
    <div class="col-5">
    <h1>Signup Page</h1>

    <?php if (isset($validation)) : ?>
        <div class="col-12">
            <div class="alert alert-danger" role="alert">
                <?=$validation->listErrors()?>
            </div>
        </div>
       <?php endif; ?>



       <?php if (isset($Flash_message)) : ?>
        <div class="col-12">
            <div class="alert alert-success" role="alert">
               Congratulations ! Registration successfully
            </div>
        </div>
       <?php endif; ?>








       <form action="/signup" method="post">


<div  class="form-group">
    <!-- <label for="firstName">First Name</label> -->
    <input type="text" name="first_name" class="form-control" id=""  value="<?= set_value('first_name')?>" placeholder="First Name">
    
</div>

<div class="form-group">
    <!-- <label for="lastName">Last Name</label> -->
    <input type="text" name="last_name" class="form-control" id="" value="<?= set_value('last_name')?>" placeholder="Last Name">
    
</div>



<div class="form-group">
    <!-- <label for="Email">Email address</label> -->
    <input type="email" name="email" class="form-control" id="" value="<?= set_value('email')?>" placeholder="Enter Email">
    
</div>

<div class="form-group">
    <!-- <label for="Phone">Phone No</label> -->
    <input type="text" name="phone" class="form-control" id="" value="<?= set_value('phone')?>" placeholder="Phone NO">
</div>


<div class="form-group">
    <!-- <label for="Password">Password</label> -->
    <input type="password" name="password" class="form-control" id=""  placeholder="Password">
</div>


<div class="form-group">
    <!-- <label for="Password">Confirm Password</label> -->
    <input type="password" name="confirm_password" class="form-control" id="" placeholder="Confirm Password">
</div>




<button type="submit" class="btn btn-primary">Submit</button>
   
<br><br><p >Back to Login page</p>
                
 

</form>
    </div>
    
  </div>
     
  </div>
</div>
     

</section>

<?php echo view('includes/footer');?>