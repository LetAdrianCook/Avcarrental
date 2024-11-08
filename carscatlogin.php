<?php

include 'RentAdd.php';
include 'logout.php';
include 'checklog.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Vista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="carscatlogin.css">
   
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
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="homelogin.php">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="carscatlogin.php">Cars</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="homelogin.php#aboutus">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="carscatlogin.php#contactus">Contact Us</a>
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
      <a href="editprof.php" class="btn btn-outline-light btn-lg px-3 editprofbut">Edit Profile</a>
      <a href="rentedcars.php" class="btn btn-outline-light btn-lg px-3 rentedcarsbut">Rented Cars</a>
      <form action="logout.php" method="post">
      <input type="submit" name="logout" value="Logout" class="btn btn-outline-light btn-lgpx-3 logoutbut">
</form>
      </div>
    </div>
  </div>
</div>
          </div>
          
   
        </div>
      </nav>
  
      

<section id="eco">
<div id="card-title">
<h4>Economy</h4>
</div>
</section>

<div id="cards_landscape_wrap-2">
<div class="container">
<div class="row">

<!-- TOYOTA VIOS -->
<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#toyotaViosModal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
          <img src="./car-pic-categories/economy/car1.png" alt="" />
        </div>
        <div class="text-container">
          <h6>Toyota Vios</h6>
          <p><b>Seating capacity:</b> 5 people<br>
          <b>Fuel Type:</b> Gasoline<br>
          <b>Tank Capacity:</b> 42 Liters<br>
          <b>Fuel Consumption:</b> 12.44 km/l<br>
          <b>Transmission:</b> Automatic<br>
          <b>Rental Per Day:</b> PHP750 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="toyotaViosModal" tabindex="-1" aria-labelledby="toyotaViosModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="toyotaViosModalLabel">Toyota Vios</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="#" method="POST">
    
    <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>
  
</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="rentvios" class="btn btn-primary" value="Rent">
        </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- MITSUBISHI MIRAGE -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#mirageModal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/economy/car2.png" alt="" />
        </div>
        <div class="text-container">
        <h6>Mitsubishi Mirage</h6>
<p><b>Seating capacity:</b> 5 people</br>
<b>Fuel Type:</b> Gasoline </br>
<b>Tank Capacity:</b> 35 Liters</br>
<b>Fuel Consumption:</b> 18.8 km/l</br>
<b>Transmission:</b> Automatic/Manual</br>
<b>Rental Per Day:</b> PHP500 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="mirageModal" tabindex="-1" aria-labelledby="mirageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="mirageModalLabel">Mistubishi Mirage</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="#" method="POST">
        <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
    
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>
  
</div>
        <div class="modal-footer d-flex justify-content-center">
          <input type="submit" name="rentmirage" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- HONDA CITY -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#cityModal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/economy/car3.png" alt="" />
        </div>
        <div class="text-container">
        <h6>Honda City</h6>
<p><b>Seating capacity:</b> 5 people</br>
<b>Fuel Type:</b> Gasoline </br>
<b>Tank Capacity:</b> 40 Liters</br>
<b>Fuel Consumption:</b> 12.8 km/l</br>
<b>Transmission:</b> Automatic/Manual</br>
<b>Rental Per Day:</b> PHP700 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="cityModal" tabindex="-1" aria-labelledby="cityModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="cityModalLabel">Honda City</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="renthondacity" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- SUZUKI ALTO -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#altoModal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/economy/car4.png" alt="" />
        </div>
        <div class="text-container">
        <h6>Suzuki Alto</h6>
<p><b>Seating capacity:</b> 5 people</br>
<b>Fuel Type:</b> Gasoline </br>
<b>Tank Capacity:</b> 35 Liters</br>
<b>Fuel Consumption:</b> 22 km/l</br>
<b>Transmission:</b> Automatic/Manual</br>
<b>Rental Per Day:</b> PHP400 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="altoModal" tabindex="-1" aria-labelledby="altoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="altoModalLabel">Suzuki Alto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="rentalto" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<section id="compact">
<div id="card-title">
<h4>Compact</h4>
</div>
</section>

<div id="cards_landscape_wrap-2">
<div class="container">
<div class="row">

<!-- SUZUKI SWIFT -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#swiftModal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/compact/car1.png" alt="" />
        </div>
        <div class="text-container">
        <h6>Suzuki Swift</h6>
<p><b>Seating capacity:</b> 5 people</br>
<b>Fuel Type:</b> Gasoline </br>
<b>Tank Capacity:</b> 37 Liters</br>
<b>Fuel Consumption:</b> 20.7 km/l</br>
<b>Transmission:</b> Automatic/Manual</br>
<b>Rental Per Day:</b> PHP500 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="swiftModal" tabindex="-1" aria-labelledby="swiftModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="swiftModalLabel">Suzuki Swift</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
 
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="rentswift" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- HYUNDAI ACCENT -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#accentModal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/compact/car2.png" alt="" />
        </div>
        <div class="text-container">
        <h6>Hyundai Accent</h6>
<p><b>Seating capacity:</b> 5 people</br>
<b>Fuel Type:</b> Gasoline </br>
<b>Tank Capacity:</b> 45 Liters</br>
<b>Fuel Consumption:</b> 14.9 km/l</br>
<b>Transmission:</b> Automatic/Manual</br>
<b>Rental Per Day:</b> PHP600 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="accentModal" tabindex="-1" aria-labelledby="accentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="accentModalLabel">Hyundai Accent</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="rentaccent" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- KIA RIO -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#rioModal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/compact/car3.png" alt="" />
</div>
<div class="text-container">
<h6>Kia Rio</h6>
<p><b>Seating capacity:</b> 5 people</br>
<b>Fuel Type:</b> Gasoline </br>
<b>Tank Capacity:</b> 45 Liters</br>
<b>Fuel Consumption:</b> 14.3 km/l</br>
<b>Transmission:</b> Automatic/Manual</br>
<b>Rental Per Day:</b> PHP650 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="rioModal" tabindex="-1" aria-labelledby="rioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="rioModalLabel">Kia Rio</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
    
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>
  
</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="rentkiario" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- NISSAN ALMERA -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#almeraModal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/compact/car4.png" alt="" />
</div>
<div class="text-container">
<h6>Nissan Almera</h6>
<p><b>Seating capacity:</b> 5 people</br>
<b>Fuel Type:</b> Gasoline </br>
<b>Tank Capacity:</b> 41 Liters</br>
<b>Fuel Consumption:</b> 13.3 km/l</br>
<b>Transmission:</b> Automatic/Manual</br>
<b>Rental Per Day:</b> PHP610 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="almeraModal" tabindex="-1" aria-labelledby="almeraModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="almeraModalLabel">Nissan Almera</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
  
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
  
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>
  
</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="rentalmera" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<section id="fullsize">
<div id="card-title">
<h4>Full-Size</h4>
</div>
</section>

<div id="cards_landscape_wrap-2">
<div class="container">
<div class="row">

<!-- TOYOTA CAMRY -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#camryModal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/fullsize/car1.png" alt="" />
</div>
<div class="text-container">
<h6>Toyota Camry</h6>
<p><b>Seating capacity:</b> 5 people</br>
<b>Fuel Type:</b> Gasoline </br>
<b>Tank Capacity:</b> 70 Liters</br>
<b>Fuel Consumption:</b> 13.1 km/l</br>
<b>Transmission:</b> Automatic</br>
<b>Rental Per Day:</b> PHP1250 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="camryModal" tabindex="-1" aria-labelledby="camryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="camryModalLabel">Toyota Camry</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>
 
</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="rentcamry" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- HONDA ACCORD -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#accordModal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/fullsize/car2.png" alt="" />
</div>
<div class="text-container">                                    
<h6>Honda Accord</h6>
<p><b>Seating capacity:</b> 5 people</br>
<b>Fuel Type:</b> Gasoline </br>
<b>Tank Capacity:</b> 65 Liters</br>
<b>Fuel Consumption:</b> 11.9 km/l</br>
<b>Transmission:</b> Automatic</br>
<b>Rental Per Day:</b> PHP1260 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="accordModal" tabindex="-1" aria-labelledby="accordModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="accordModalLabel">Honda Accord</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="rentaccord" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- HYUNDAI SONATA -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#sonataModal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/fullsize/car4.png" alt="" />
</div>
<div class="text-container">
<h6>Hyundai Sonata</h6>
<p><b>Seating capacity:</b> 5 people</br>
<b>Fuel Type:</b> Gasoline </br>
<b>Tank Capacity:</b> 70 Liters</br>
<b>Fuel Consumption:</b> 11.7 km/l</br>
<b>Transmission:</b> Automatic/Manual</br>
<b>Rental Per Day:</b> PHP1300 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="sonataModal" tabindex="-1" aria-labelledby="sonataModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="sonataModalLabel">Hyundai Sonata</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>
  
</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="rentsonata" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>




<!-- KIA OPTIMA -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#optimaModal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/fullsize/car6.png" alt="" />
</div>
<div class="text-container">
<h6>Kia Optima</h6>
<p><b>Seating capacity:</b> 5 people</br>
<b>Fuel Type:</b> Gasoline </br>
<b>Tank Capacity:</b> 70 Liters</br>
<b>Fuel Consumption:</b> 12.1 km/l</br>
<b>Transmission:</b> Automatic</br>
<b>Rental Per Day:</b> PHP1700 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="optimaModal" tabindex="-1" aria-labelledby="optimaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="optimaModalLabel">Kia Optima</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>
  
</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="rentoptima" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<section id="luxury">
<div id="card-title">
<h4>Luxury</h4>
</div>
</section>

<div id="cards_landscape_wrap-2">
<div class="container">
<div class="row">

<!-- BMW 3 SERIES -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#bmw3Modal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/luxury/car1.png" alt="" />
</div>
<div class="text-container">
<h6>BMW 3-Series</h6>
<p><b>Seating capacity:</b> 5 people</br>
<b>Fuel Type:</b> Gasoline </br>
<b>Tank Capacity:</b> 60 Liters</br>
<b>Fuel Consumption:</b> 13.8 km/l</br>
<b>Transmission:</b> Automatic</br>
<b>Rental Per Day:</b> PHP3750 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="bmw3Modal" tabindex="-1" aria-labelledby="bmw3ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="bmw3ModalLabel">BMW 3-Series</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
    
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="rentbmw3" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- MERCEDES BENZ C CLASS -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#benzcModal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/luxury/car2.png" alt="" />
</div>
<div class="text-container">                                    
<h6>Mercedes-Benz C-Class</h6>
<p><b>Seating capacity:</b> 5 people</br>
<b>Fuel Type:</b> Diesel </br>
<b>Tank Capacity:</b> 66 Liters</br>
<b>Fuel Consumption:</b> 17 km/l</br>
<b>Transmission:</b> Automatic</br>
<b>Rental Per Day:</b> PHP4500 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="benzcModal" tabindex="-1" aria-labelledby="benzcModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="benzcModalLabel">Mercedes-Benz C-Class</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
    
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>
 
</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="rentbenz" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- AUDI A4 -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#audiModal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/luxury/car3.png" alt="" />
</div>
<div class="text-container">
<h6>Audi A4</h6>
<p><b>Seating capacity:</b> 5 people</br>
<b>Fuel Type:</b> Gasoline </br>
<b>Tank Capacity:</b> 54 Liters</br>
<b>Fuel Consumption:</b> 10.9 km/l</br>
<b>Transmission:</b> Manual</br>
<b>Rental Per Day:</b> PHP4250 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="audiModal" tabindex="-1" aria-labelledby="audiModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="audiModalLabel">Audi A4</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
 
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="rentaudia4" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- JAGUAR XJ -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#jaguarModal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/luxury/car4.png" alt="" />
</div>
<div class="text-container">
<h6>Jaguar XJ</h6>
<p><b>Seating capacity:</b> 8-11 people</br>
<b>Fuel Type:</b> Gasoline </br>
<b>Tank Capacity:</b> 77 Liters</br>
<b>Fuel Consumption:</b> 9.2 km/l</br>
<b>Transmission:</b> Automatic</br>
<b>Rental Per Day:</b> PHP6000 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="jaguarModal" tabindex="-1" aria-labelledby="jaguarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="jaguarModalLabel">Jaguar XJ</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="rentjaguar" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<section id="Suv">
<div id="card-title">
<h4>SUV</h4>
</div>
</section>

<div id="cards_landscape_wrap-2">
<div class="container">
<div class="row">

<!-- TOYOTA FORTUNER -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#fortunerModal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/suv/car1.png" alt="" />
</div>
<div class="text-container custom-text-container1">
<h6>Toyota Fortuner</h6>
<p><b>Seating capacity:</b> 7 people</br>
<b>Fuel Type:</b> Diesel </br>
<b>Tank Capacity:</b> 80 Liters</br>
<b>Fuel Consumption:</b> 10 km/l</br>
<b>Transmission:</b> Automatic</br>
<b>Rental Per Day:</b> PHP2000 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="fortunerModal" tabindex="-1" aria-labelledby="fortunerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="fortunerModalLabel">Toyota Fortuner</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
  
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
 
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="rentfortuner" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- MISTUBISHI MONTERO SPORT -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#monteroModal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/suv/car2.png" alt="" />
</div>
<div class="text-container custom-text-container1">                                   
<h6>Mitsubishi Montero Sport</h6>
<p><b>Seating capacity:</b> 7 people</br>
<b>Fuel Type:</b> Diesel </br>
<b>Tank Capacity:</b> 68 Liters</br>
<b>Fuel Consumption:</b> 11 km/l</br>
<b>Transmission:</b> Automatic</br>
<b>Rental Per Day:</b> PHP2500 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="monteroModal" tabindex="-1" aria-labelledby="monteroModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="monteroModalLabel">Mitsubishi Montero Sport</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
    
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
  
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>
 
</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="rentmonterosport" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- FORD EVEREST -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#everestModal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/suv/car3.png" alt="" />
</div>
<div class="text-container custom-text-container1">
<h6>Ford Everest</h6>
<p><b>Seating capacity:</b> 7 people</br>
<b>Fuel Type:</b> Diesel </br>
<b>Tank Capacity:</b> 80 Liters</br>
<b>Fuel Consumption:</b> 11 km/l</br>
<b>Transmission:</b> Automatic/Manual</br>
<b>Rental Per Day:</b> PHP2200 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="everestModal" tabindex="-1" aria-labelledby="everestModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="everestModalLabel">Ford Everest</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>
</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="renteverest" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- NISSAN TERRA -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#terraModal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/suv/car5.png" alt="" />
</div>
<div class="text-container custom-text-container1">
<h6>Nissan Terra</h6>
<p><b>Seating capacity:</b> 7 people</br>
<b>Fuel Type:</b> Diesel </br>
<b>Tank Capacity:</b> 80 Liters</br>
<b>Fuel Consumption:</b> 12 km/l</br>
<b>Transmission:</b> Automatic/Manual</br>
<b>Rental Per Day:</b> PHP2250 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="terraModal" tabindex="-1" aria-labelledby="terraModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="terraModalLabel">Nissan Terra</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>
</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="rentterra" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<section id="van">
<div id="card-title">
<h4>Van</h4>
</div>
</section>

<div id="cards_landscape_wrap-2">
<div class="container">
<div class="row">

<!-- MITSUBISHI L300 -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#l300Modal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/van/car1.png" alt="" />
</div>
<div class="text-container">
<h6>Mitsubishi L300</h6>
<p><b>Seating capacity:</b> 17 people</br>
<b>Fuel Type:</b> Diesel </br>
<b>Tank Capacity:</b> 55 Liters</br>
<b>Fuel Consumption:</b> 15.43 km/l</br>
<b>Transmission:</b> Automatic</br>
<b>Rental Per Day:</b> PHP450 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="l300Modal" tabindex="-1" aria-labelledby="l300ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="l300ModalLabel">Mitsubishi L300</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
  
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
    
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>
</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="rentl300" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- TOYOTA HIACE COMMUTER -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#commuterModal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/van/car2.png" alt="" />
</div>
<div class="text-container">                                    
<h6>Toyota Hiace Commuter</h6>
<p><b>Seating capacity:</b> 15 people</br>
<b>Fuel Type:</b> Diesel </br>
<b>Tank Capacity:</b> 70 Liters</br>
<b>Fuel Consumption:</b> 12.5 km/l</br>
<b>Transmission:</b> Manual</br>
<b>Rental Per Day:</b> PHP2000 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="commuterModal" tabindex="-1" aria-labelledby="commuterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="commuterModalLabel">Toyota Hiace Commuter</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
    
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>
</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="renthiace" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- HYUNDAI STAREX 2007 -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#starexModal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/van/car3.png" alt="" />
</div>
<div class="text-container">
<h6>Hyundai Starex 2007</h6>
<p><b>Seating capacity:</b> 10 people</br>
<b>Fuel Type:</b> Diesel </br>
<b>Tank Capacity:</b> 75 Liters</br>
<b>Fuel Consumption:</b> 9.2 km/l</br>
<b>Transmission:</b> Manual</br>
<b>Rental Per Day:</b> PHP1500 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="starexModal" tabindex="-1" aria-labelledby="starexModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="starexModalLabel">Hyundai Starex 2007</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
    
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>
</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="rentstarex" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- KIA GRAND CARNIVAL -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#carnivalModal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/van/car4.png" alt="" />
</div>
<div class="text-container">
<h6>Kia Grand Carnival</h6>
<p><b>Seating capacity:</b> 8-11 people</br>
<b>Fuel Type:</b> Diesel </br>
<b>Tank Capacity:</b> 80 Liters</br>
<b>Fuel Consumption:</b> 12.5 km/l</br>
<b>Transmission:</b> Automatic</br>
<b>Rental Per Day:</b> PHP2750 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="carnivalModal" tabindex="-1" aria-labelledby="carnivalModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="carnivalModalLabel">Kia Grand Carnival</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
    
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>
</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="rentgrandcarn" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>


<section id="Sports">
<div id="card-title">
<h4>Sports</h4>
</div>
</section>

<div id="cards_landscape_wrap-2">
<div class="container">
<div class="row">

<!-- MAZDA MX5 MIATA -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#miataModal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/sport/car1.png" alt="" />
</div>
<div class="text-container custom-text-container2">
<h6>Mazda MX-5 Miata</h6>
<p><b>Seating capacity:</b> 2 people</br>
<b>Fuel Type:</b> Gasoline </br>
<b>Tank Capacity:</b> 45 Liters</br>
<b>Fuel Consumption:</b> 14.4 km/l</br>
<b>Transmission:</b> Automatic/Manual 6 Speed</br>
<b>Horsepower:</b> 181hp </br>
<b>Rental Per Day:</b> PHP3500 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="miataModal" tabindex="-1" aria-labelledby="miataModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="miataModalLabel">Mazda MX-5 Miata</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
    
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>
</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="rentmiata" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- FORD MUSTANG GT -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#mustangModal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/sport/car2.png" alt="" />
</div>
<div class="text-container custom-text-container2">                                   
<h6>Ford Mustang GT</h6>
<p><b>Seating capacity:</b> 4 people</br>
<b>Fuel Type:</b> Gasoline </br>
<b>Tank Capacity:</b> 60 Liters</br>
<b>Fuel Consumption:</b> 9.8 km/l</br>
<b>Transmission:</b> Automatic/Manual </br>
<b>Horsepower:</b> 460hp </br>
<b>Rental Per Day:</b> PHP5000 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="mustangModal" tabindex="-1" aria-labelledby="mustangModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="mustangModalLabel">Ford Mustang GT</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
    
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="rentmustang" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- TOYOTA 86 -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#86Modal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/sport/car3.png" alt="" />
</div>
<div class="text-container custom-text-container2">
<h6>Toyota 86</h6>
<p><b>Seating capacity:</b> 4 people</br>
<b>Fuel Type:</b> Gasoline </br>
<b>Tank Capacity:</b> 50 Liters</br>
<b>Fuel Consumption:</b> 12.5 km/l</br>
<b>Transmission:</b> Manual</br>
<b>Horsepower:</b> 200hp </br>
<b>Rental Per Day:</b> PHP3200 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="86Modal" tabindex="-1" aria-labelledby="86ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="86ModalLabel">Toyota 86</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
    
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>
</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="rent86" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- SUBARU BRZ -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#brzModal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/sport/car4.png" alt="" />
</div>
<div class="text-container custom-text-container2">
<h6>Subaru BRZ</h6>
<p><b>Seating capacity:</b> 4 people</br>
<b>Fuel Type:</b> Gasoline </br>
<b>Tank Capacity:</b> 65 Liters</br>
<b>Fuel Consumption:</b> 12.5 km/l</br>
<b>Transmission:</b> Manual</br>
<b>Horsepower:</b> 200hp</br>
<b>Rental Per Day:</b> PHP2750 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="brzModal" tabindex="-1" aria-labelledby="brzModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="brzModalLabel">Subaru BRZ</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
    
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="rentsubaru" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>


<section id="Truck">
<div id="card-title">
<h4>Truck</h4>
</div>
</section>

<div id="cards_landscape_wrap-2">
<div class="container">
<div class="row">

<!-- ISUZU N SERIES NHR -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#nhrModal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/truck/car1.png" alt="" />
</div>
<div class="text-container">
<h6>Isuzu N-Series NHR</h6>
<p><b>Seating capacity:</b> 3 people</br>
<b>Fuel Type:</b> Diesel </br>
<b>Tank Capacity:</b> 50 Liters</br>
<b>Fuel Consumption:</b> 10 km/l</br>
<b>Transmission:</b> Manual</br>
<b>Rental Per Day:</b> PHP1750 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="nhrModal" tabindex="-1" aria-labelledby="nhrModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="nhrModalLabel">Isuzu N-Series NHR</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
    
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="rentisuzutruck" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- MITSUBISHI FUSO CANTER -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#canterModal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/truck/car2.png" alt="" />
</div>
<div class="text-container">                                    
<h6>Mitsubishi Fuso Canter</h6>
<p><b>Seating capacity:</b> 3 people</br>
<b>Fuel Type:</b> Diesel </br>
<b>Tank Capacity:</b> 100 Liters</br>
<b>Fuel Consumption:</b> 8 km/l</br>
<b>Transmission:</b> Manual</br>
<b>Rental Per Day:</b> PHP2000 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="canterModal" tabindex="-1" aria-labelledby="canterModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="canterModalLabel">Mitsubishi Fuso Canter</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
    
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="rentcanter" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- HYUNDAI H100 -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#h100Modal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/truck/car3.png" alt="" />
</div>
<div class="text-container">
<h6>Hyundai H-100</h6>
<p><b>Seating capacity:</b> 3 people</br>
<b>Fuel Type:</b> Diesel </br>
<b>Tank Capacity:</b> 65 Liters</br>
<b>Fuel Consumption:</b> 10 km/l</br>
<b>Transmission:</b> Manual</br>
<b>Rental Per Day:</b> PHP1700 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="h100Modal" tabindex="-1" aria-labelledby="h100ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="h100ModalLabel">Hyundai H-100</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="renth100" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- FOTON TORNADO -->

<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#tornadoModal">
    <div class="card-flyer">
      <div class="text-box">
        <div class="image-box">
        <img src="./car-pic-categories/truck/car4.png" alt="" />
</div>
<div class="text-container">
<h6>Foton Tornado</h6>
<p><b>Seating capacity:</b> 3 people</br>
<b>Fuel Type:</b> Diesel </br>
<b>Tank Capacity:</b> 65 Liters</br>
<b>Fuel Consumption:</b> 9 km/l</br>
<b>Transmission:</b> Manual</br>
<b>Rental Per Day:</b> PHP1800 </p>
        </div>
      </div>
    </div>
  </a>
  <div class="modal fade" id="tornadoModal" tabindex="-1" aria-labelledby="tornadoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tornadoModalLabel">Foton Tornado</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <form action="#" method="POST">
  <div class="mb-3">
      <label for="rentDurationInput" class="form-label">Rent Duration (days)</label>
      <input type="number" name="duration" class="form-control" id="rentDurationInput" min="1" max="30" oninput="validity.valid||(value='');" required>
    </div>
    <div class="mb-3">
  <label for="pickupLocationInput" class="form-label">Pickup Location</label>
  <select name="location" class="form-control" id="pickupLocationInput">
   
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

<div class="mb-3">
  <label for="dropOffLocationInput" class="form-label">Drop-off Location</label>
  <select name="dropoff" class="form-control" id="dropOffLocationInput">
  
    <option value="Tagum branch">Tagum branch</option>
    <option value="Agdao branch">Agdao branch</option>
    <option value="Matina branch">Matina branch</option>
  </select>
</div>

</div>
        <div class="modal-footer d-flex justify-content-center">
        <input type="submit" name="renttornado" class="btn btn-primary" value="Rent">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>




<footer style="background-color: #e89c31;">
    <div class="container p-4" id="contactus">
    <div class="row">
        <div class="col-lg-6 col-md-12 mb-4">
          <h5 class="mb-3 text-dark">We are Happy to Serve You</h5>
          <p>
          Auto Vista is a leading car rental company that aims 
          to provide affordable and reliable rental cars to customers. 
          Our mission is to offer a hassle-free car rental experience 
          with a focus on customer satisfaction and safety. We strive to 
          exceed customer expectations by providing top-quality rental vehicles, 
          excellent customer service, and competitive pricing. Our goal is to make 
          renting a car an easy and enjoyable experience for everyone.
          </p>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
        <h5 class="mb-3 text-dark">Contact Us</h5>
          <p><b>Email:</b> avcarrentals@gmail.com</br>
          <b>Contact Number:</b> 12345678910 </br>
          <b>Facebook:</b> Auto Vista Rents </br>
<b>Twitter:</b> @AVRENTS</br>
<b>Instagram:</b> @AVRENTSOFFICIAL</br>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <h5 class="mb-1 text-dark">Opening Hours</h5>
          <table class="table" style="border-color: #666;">
            <tbody>
              <tr>
                <td>Mon - Fri:</td>
                <td>8am - 9pm</td>
              </tr>
              <tr>
                <td>Sat - Sun:</td>
                <td>8am - 1am</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="text-center p-3" style="background-color: black;">
      ©2023 Copyright:
      <a class="text-white" href="homelogin.php">autovista.infinityfreeapp.com</a>
    </div>
  </footer>
  



      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>