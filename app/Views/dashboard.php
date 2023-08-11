<?php echo view('includes/header');?>

<div class="card text-center">
  <div class="card-header">
 
<div class="container">
<header>
    <div class="menu">
       <ul>
           <li class="logo"><h2>Welcome to deshboard</h2> </li>
           <h4>
            <li >Welcome User</li>
            <li ><a href="#" >Logout</a></li>
           </h4>
                         
        </ul>
       
    </div>

</header>
</div>
 
  </div>


  <div class="card-body">
     <h5 class="card-title">User Statments</h5>
          
     <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Created at</th>
      <th scope="col"> Action</th>

    
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td> <a href="#">Edit</a> | <a href="#">Delete</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
   
  </tbody>
</table>





    
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Back to Home </a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
</div>









<section>

<h1>Go further</h1>


<p>The User Guide contains an introduction, tutorial, a number of "how to"
    guides, and then reference documentation for the components that make up
    the framework. Check the 

</section>

<?php echo view('includes/footer');?>