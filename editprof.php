<?php

include 'homelogindata.php';
include 'logout.php';
include 'checklog.php';
include 'edituserdata.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<style> .modal-body p {
    color: white;
  }
  </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Vista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="editprof.css">
  </head>
<body>
    
    <nav class="navbar navbar-expand-sm custom-navbar" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="homelogin.php">
            <img src="./pic-logo/LOGO.png" alt="Car Rental"> Auto Vista
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
            <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="homelogin.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="carscatlogin.php">Cars</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="homelogin.php#aboutus">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="homelogin.php#contactus">Contact Us</a>
              </li>
              
          </div>
          
          <a class="navbar-brand" href="#" data-bs-toggle="modal" data-bs-target="#myModal">
  <img src="./pic-logo/images.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill"> 
</a>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Driver Info</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row">
    <div class="col-md-6">
      <div class="info-container">
        <p class="info-item">Username: <?php echo $_SESSION['username']; ?></p>
        <p class="info-item">First Name: <?php echo $_SESSION['first_name']; ?></p>
        <p class="info-item">Age: <?php echo $_SESSION['Age']; ?></p>
        <p class="info-item">Address: <?php echo $_SESSION['address']; ?></p>
        <p class="info-item">License ID: <?php echo $_SESSION['license_id']; ?></p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="info-container">
      <p class="info-item">User ID: <?php echo $_SESSION['user_id']; ?></p>
        <p class="info-item">Gender: <?php echo $_SESSION['Gender']; ?></p>
        <p class="info-item">Last Name: <?php echo $_SESSION['last_name']; ?></p>
        <p class="info-item">Phone Number: <?php echo $_SESSION['Contact']; ?></p>
        <p class="info-item">Email: <?php echo $_SESSION['email']; ?></p>
      </div>
    </div>
  </div>
</div>
      <div class="modal-footer">
      
      <form action="logout.php" method="post">
      <a href="editprofile.php" class="btn btn-outline-light btn-lg px-3 editprofbut">Edit Profile</a>
      <a href="rentedcars.php" class="btn btn-outline-light btn-lg px-3 rentedcarsbut">Rented Cars</a>
      <input type="submit" name="logout" value="Logout" class="btn btn-outline-light btn-lgpx-3 logoutbut">
</form>
      
      </div>
    </div>
  </div>
</div>

            
        </div>
      </nav>
      
      <form action="#" method="POST">
 
 <div class="container py-5 h-100">
   <div class="row justify-content-center align-items-center h-100">
     <div class="col-12 col-lg-9 col-xl-7">
       <div class="card bg-dark text-white cstm-card-edit">
         <div class="card-body p-5 text-center ">
         <h2 class="fw-bold mb-2 text-uppercase">Edit Information</h2>
             <p class="text-white-50 mb-5">Select you want to edit</p>
           
             <form action="#" method="POST">
                  <div class="form-outline">
                    <input type="text" id="edit" name="edit" required class="form-control form-control-lg custm-form" />
                    <select name="column" id="column" class="btn btn-secondary dropdown-toggle edit-btn1 ">
                    </div>
      <option value="first_name">First Name</option>
	<option value="last_name">Last Name</option>
	  <option value="email">Email</option>
      <option value="Contact">Phone Number</option>
      <option value="address">Address</option>
      <option value="pass">Password</option>
      <option value="license_id">License ID</option>
		</select>
                  </div>

<br><br>
<input class="btn btn-outline-light btn-lg px-5" type="submit" name="edituser" id="submit" value="Edit">
</form>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>