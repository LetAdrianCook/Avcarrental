<?php
include('DbConnection.php');


if(isset($_POST["addstock"])){
    $stockname=$_POST["cartype"];
    $licplate=$_POST["licensestock"];
    
    $checkLicense = "Select LicensePlate from carstocks where LicensePlate = '$licplate'";
        $checker = $conn->query($checkLicense);
        if ($checker->num_rows == 0) {
            if ($stockname == "Toyota Vios" || $stockname == "Mitsubishi Mirage" || $stockname == "Honda City" || $stockname == "Suzuki Alto") {
             
                $cartype = "Economy";
              }

              if ($stockname == "Suzuki Swift" || $stockname == "Hyundai Accent" || $stockname == "Kia Rio" || $stockname == "Nissan Almera") {
              
                $cartype = "Compact";
              }

              if ($stockname == "Toyota Camry" || $stockname == "Honda Accord" || $stockname == "Hyundai Sonata" || $stockname == "Kia Optima") {
              
                $cartype = "Full-Size";
              }

              if ($stockname == "BMW 3-Series" || $stockname == "Mercedes-Benz C-Class" || $stockname == "Audi A4" || $stockname == "Jaguar XJ") {
              
                $cartype = "Luxury";
              }

              if ($stockname == "Toyota Fortuner" || $stockname == "Mitsubishi Montero Sport" || $stockname == "Ford Everest" || $stockname == "Nissan Terra") {
              
                $cartype = "SUV";
              }

              if ($stockname == "Mitsubishi L300" || $stockname == "Toyota Hiace" || $stockname == "Hyundai Starex 2007" || $stockname == "Kia Grand Carnival") {
              
                $cartype = "Van";
              }

              if ($stockname == "Mazda MX-5 Miata" || $stockname == "Ford Mustang GT" || $stockname == "Toyota 86" || $stockname == "Subaru BRZ") {
              
                $cartype = "Sports";
              }

              if ($stockname == "Isuzu N-Series NHR" || $stockname == "Mitsubishi Fuso Canter" || $stockname == "Hyundai H-100" || $stockname == "Foton Tornado") {
              
                $cartype = "Truck";
              }
            
        
            mysqli_query($conn,"insert into carstocks (CarName,CarType,LicensePlate,CarStatus,RentID) 
            values ('$stockname','$cartype','$licplate','Available', '0')");
            echo "<script>alert('Car Succesfully added to stocks ...')</script>";
            echo "<script>window.location.href = 'carstock.php';</script>";
        }else{
            echo "<script>alert('License Plate Already exists! ...')</script>";
            echo "<script>window.location.href = 'carstock.php';</script>";
        }
    
    }
