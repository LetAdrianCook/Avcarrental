<?php
session_start();
include 'addstockphp.php';
include 'logoutadmin.php';
include 'checkadmin.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Vista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="login1.css">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-sm custom-navbar" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="./pic-logo/LOGO.png" alt="Car Rental"> Auto Vista
          </a>
       
        
          <div class="button-container">
            <a type="submit" name="logout" value="Logout" class="btn btn-sm btn-outline-none custom-btn" href="carstock.php">Stocks</a>
          </div>
            
      
</nav>
</div>
<form  method="POST">
 
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white">
          <div class="card-body p-5 text-center">

            <div>

              <h2 class="fw-bold mb-2 text-uppercase">Admin</h2>
              <p class="text-white-50 mb-5">Select a car and input the license plate</p>

              <div class="form-outline form-white mb-4">
              <label class="form-label" for="cartype">Car</label>
              <select id="cartype" name="cartype" required class="form-control form-control-lg ">
              <option value="" disabled selected>Select the car you want to add</option>
              <option value="" disabled id="sampleeto"><b>Economy</b></option>
              <option value="Toyota Vios">Toyota Vios</option>
              <option value="Mitsubishi Mirage">Mitsubishi Mirage</option>
              <option value="Honda City">Honda City</option>
              <option value="Suzuki Alto">Suzuki Alto</option>

              <option value="" disabled>Compact</option>
              <option value="Suzuki Swift">Suzuki Swift</option>
              <option value="Hyundai Accent">Hyundai Accent</option>
              <option value="Kia Rio">Kia Rio</option>
              <option value="Nissan Almera">Nissan Almera</option>

              <option value="" disabled>Full-Size</option>
              <option value="Toyota Camry">Toyota Camry</option>
              <option value="Honda Accord">Honda Accord</option>
              <option value="Hyundai Sonata">Hyundai Sonata</option>
              <option value="Kia Optima">Kia Optima</option>

              <option value="" disabled>Luxury</option>
              <option value="BMW 3-Series">BMW 3-Series</option>
              <option value="Mercedes-Benz C-Class">Mercedes-Benz C-Class</option>
              <option value="Audi A4">Audi A4</option>
              <option value="Jaguar XJ">Jaguar XJ</option>

              <option value="" disabled>SUV</option>
              <option value="Toyota Fortuner">Toyota Fortuner</option>
              <option value="Mitsubishi Montero Sport">Mitsubishi Montero Sport</option>
              <option value="Ford Everest">Ford Everest</option>
              <option value="Nissan Terra">Nissan Terra</option>

              <option value="" disabled>Van</option>
              <option value="Mitsubishi L300">Mitsubishi L300</option>
              <option value="Toyota Hiace">Toyota Hiace</option>
              <option value="Hyundai Starex 2007">Hyundai Starex 2007</option>
              <option value="Kia Grand Carnival">Kia Grand Carnival</option>

              <option value="" disabled>Sports</option>
              <option value="Mazda MX-5 Miata">Mazda MX-5 Miata</option>
              <option value="Ford Mustang GT">Ford Mustang GT</option>
              <option value="Toyota 86">Toyota 86</option>
              <option value="Subaru BRZ">Subaru BRZ</option>

              <option value="" disabled>Truck</option>
              <option value="Isuzu N-Series NHR">Isuzu N-Series NHR</option>
              <option value="Mitsubishi Fuso Canter">Mitsubishi Fuso Canter</option>
              <option value="Hyundai H-100">Hyundai H-100</option>
              <option value="Foton Tornado">Foton Tornado</option>
            </select>
                
              </div>

              <div class="form-outline form-white mb-4">
              <label class="form-label" for="LicensePlate">License Plate</label>
              <input type="text" id="LicensePlate" name="licensestock" required class="form-control form-control-lg" /><br><br>
              <input class="btn btn-outline-light btn-lg px-5" type="submit" name="addstock" id="submit" value="ADD CAR">
              
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </form>

 





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>