<?php echo view('includes/header');?>
<section>

<div class="container">
  <div class="row">
    <div class="col">
     <p>The Dark Room, the Guide, Waiting for the Mahatma and The Man Eater of
      Malgudi Raja Rao is a good short story writer and has written only four
       novels but they are significant. They include Kanthapura, The Serpent
        and the Rope, and The Cat and Shakespeare. Besides the legendary and 
        hugely venerated Indian English literary personalities like Rabindranath Tagore 
        or R K Narayan, later novelists like Kamala Markandaya</p>
      
    </div>
    <div class="col-5">
    <h1>Signup Page</h1>

<form>
     <div class="form-group">
    <input type="text" name="first_name" class="form-control" id=""  placeholder="Enter First Name">
    </div>

     <div class="form-group">
     <input type="text" name="last_name" class="form-control" id="" placeholder="Enter Last Name">
     </div>

     <div class="form-group">
       <input type="email" name="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Entet Email">
    </div>

    <div class="form-group">
      <input type="text" name="phone" class="form-control" id="" placeholder="Phone">
    </div>

    <div class="form-group">
      <input type="password" name="password" class="form-control" id="" placeholder="Password">
    </div>

    <div class="form-group">
      <input type="confirmpassword" name="confirmpassword" class="form-control" id="" placeholder="Confirm Password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    
  </div>
     
  </div>
</div>
     

</section>
<?php echo view('includes/footer');?>