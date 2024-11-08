<?php
session_start();
include('DbConnection.php');
$status="Pending";
$current_date = date('Y-m-d');
//Toyota Vios
if(isset($_POST["rentvios"])){

$id = "Select CarID from carstocks where carname = 'Toyota Vios' and CarStatus='Available'";
$caridres = $conn->query($id);
if ($caridres->num_rows > 0) {
    // output data of each row
  $row = $caridres->fetch_assoc();
        $carid = $row["CarID"];

        $carname="Toyota Vios";
        $duration=$_POST["duration"];
        $pickup=$_POST["location"];
        $dropoff=$_POST["dropoff"];
        $id=$_SESSION['user_id'];
        $total=750*$duration;
    
        mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
            values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
        
        $rid = "Select RentID from rents where carname = 'Toyota Vios' and CarID=$carid";
        $renid = $conn->query($rid);
        if ($renid->num_rows > 0) {
        $row2 = $renid->fetch_assoc();
        $rentid = $row2["RentID"];
        }
        $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
    
        echo "<script>alert('Rented succesfully ...')</script>";
        echo "<script>window.location.href = 'homelogin.php';</script>";   
    }
else{
    echo "<script>alert('Out of Stock ...')</script>";
    echo "<script>window.location.href = 'carscatlogin.php';</script>";
}
}


if(isset($_POST["rentmirage"])){

    $id = "Select CarID from carstocks where carname = 'Mitsubishi Mirage' and CarStatus='Available'";
    $caridres = $conn->query($id);
    if ($caridres->num_rows > 0) {
        // output data of each row
      $row = $caridres->fetch_assoc();
            $carid = $row["CarID"];
    
            $carname="Mitsubishi Mirage";
            $duration=$_POST["duration"];
            $pickup=$_POST["location"];
            $dropoff=$_POST["dropoff"];
            $id=$_SESSION['user_id'];
            $total=500*$duration;
        
            mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
            values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
            
            $rid = "Select RentID from rents where carname = 'Mitsubishi Mirage' and CarID=$carid";
            $renid = $conn->query($rid);
            if ($renid->num_rows > 0) {
            $row2 = $renid->fetch_assoc();
            $rentid = $row2["RentID"];
            }
            $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
        
            echo "<script>alert('Rented succesfully ...')</script>";
            echo "<script>window.location.href = 'homelogin.php';</script>";   
        }
    else{
        echo "<script>alert('Out of Stock ...')</script>";
        echo "<script>window.location.href = 'carscatlogin.php';</script>";
    }
    }

    
    if(isset($_POST["rentalto"])){

        $id = "Select CarID from carstocks where carname = 'Suzuki Alto' and CarStatus='Available'";
        $caridres = $conn->query($id);
        if ($caridres->num_rows > 0) {
            // output data of each row
          $row = $caridres->fetch_assoc();
                $carid = $row["CarID"];
                $carname="Suzuki Alto";
                $duration=$_POST["duration"];
                $pickup=$_POST["location"];
                $dropoff=$_POST["dropoff"];
                $id=$_SESSION['user_id'];
                $total=700*$duration;
            
                mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
                values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
                
                $rid = "Select RentID from rents where carname = 'Suzuki Alto' and CarID=$carid";
                $renid = $conn->query($rid);
                if ($renid->num_rows > 0) {
                $row2 = $renid->fetch_assoc();
                $rentid = $row2["RentID"];
                }
                $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
            
                echo "<script>alert('Rented succesfully ...')</script>";
                echo "<script>window.location.href = 'homelogin.php';</script>";   
            }
        else{
            echo "<script>alert('Out of Stock ...')</script>";
            echo "<script>window.location.href = 'carscatlogin.php';</script>";
        }
        }

        if(isset($_POST["renthondacity"])){

            $id = "Select CarID from carstocks where carname = 'Honda City' and CarStatus='Available'";
            $caridres = $conn->query($id);
            if ($caridres->num_rows > 0) {
                // output data of each row
              $row = $caridres->fetch_assoc();
                    $carid = $row["CarID"];
                    $carname="Honda City";
                    $duration=$_POST["duration"];
                    $pickup=$_POST["location"];
                    $dropoff=$_POST["dropoff"];
                    $id=$_SESSION['user_id'];
                    $total=700*$duration;
                
                    mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
                    values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
                    
                    $rid = "Select RentID from rents where carname = 'Honda City' and CarID=$carid";
                    $renid = $conn->query($rid);
                    if ($renid->num_rows > 0) {
                    $row2 = $renid->fetch_assoc();
                    $rentid = $row2["RentID"];
                    }
                    $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
                
                    echo "<script>alert('Rented succesfully ...')</script>";
                    echo "<script>window.location.href = 'homelogin.php';</script>";   
                }
            else{
                echo "<script>alert('Out of Stock ...')</script>";
                echo "<script>window.location.href = 'carscatlogin.php';</script>";
            }
            }

            //compact

            if(isset($_POST["rentswift"])){

                $id = "Select CarID from carstocks where carname = 'Suzuki Swift' and CarStatus='Available'";
                $caridres = $conn->query($id);
                if ($caridres->num_rows > 0) {
                    // output data of each row
                  $row = $caridres->fetch_assoc();
                        $carid = $row["CarID"];
                        $carname="Suzuki Swift";
                        $duration=$_POST["duration"];
                        $pickup=$_POST["location"];
                        $dropoff=$_POST["dropoff"];
                        $id=$_SESSION['user_id'];
                        $total=500*$duration;
                    
                        mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
                        values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
                        
                        $rid = "Select RentID from rents where carname = 'Suzuki Swift' and CarID=$carid";
                        $renid = $conn->query($rid);
                        if ($renid->num_rows > 0) {
                        $row2 = $renid->fetch_assoc();
                        $rentid = $row2["RentID"];
                        }
                        $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
                    
                        echo "<script>alert('Rented succesfully ...')</script>";
                        echo "<script>window.location.href = 'homelogin.php';</script>";   
                    }
                else{
                    echo "<script>alert('Out of Stock ...')</script>";
                    echo "<script>window.location.href = 'carscatlogin.php';</script>";
                }
                }

                
            if(isset($_POST["rentaccent"])){

                $id = "Select CarID from carstocks where carname = 'Hyundai Accent' and CarStatus='Available'";
                $caridres = $conn->query($id);
                if ($caridres->num_rows > 0) {
                    // output data of each row
                  $row = $caridres->fetch_assoc();
                        $carid = $row["CarID"];
                        $carname="Hyundai Accent";
                        $duration=$_POST["duration"];
                        $pickup=$_POST["location"];
                        $dropoff=$_POST["dropoff"];
                        $id=$_SESSION['user_id'];
                        $total=600*$duration;
                    
                        mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
                        values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
                        
                        $rid = "Select RentID from rents where carname = 'Hyundai Accent' and CarID=$carid";
                        $renid = $conn->query($rid);
                        if ($renid->num_rows > 0) {
                        $row2 = $renid->fetch_assoc();
                        $rentid = $row2["RentID"];
                        }
                        $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
                    
                        echo "<script>alert('Rented succesfully ...')</script>";
                        echo "<script>window.location.href = 'homelogin.php';</script>";   
                    }
                else{
                    echo "<script>alert('Out of Stock ...')</script>";
                    echo "<script>window.location.href = 'carscatlogin.php';</script>";
                }
                }


                if(isset($_POST["rentalmera"])){

                    $id = "Select CarID from carstocks where carname = 'Nissan Almera' and CarStatus='Available'";
                    $caridres = $conn->query($id);
                    if ($caridres->num_rows > 0) {
                        // output data of each row
                      $row = $caridres->fetch_assoc();
                            $carid = $row["CarID"];
                            $carname="Nissan Almera";
                            $duration=$_POST["duration"];
                            $pickup=$_POST["location"];
                            $dropoff=$_POST["dropoff"];
                            $id=$_SESSION['user_id'];
                            $total=610*$duration;
                        
                            mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
                            values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
                            
                            $rid = "Select RentID from rents where carname = 'Nissan Almera' and CarID=$carid";
                            $renid = $conn->query($rid);
                            if ($renid->num_rows > 0) {
                            $row2 = $renid->fetch_assoc();
                            $rentid = $row2["RentID"];
                            }
                            $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
                        
                            echo "<script>alert('Rented succesfully ...')</script>";
                            echo "<script>window.location.href = 'homelogin.php';</script>";   
                        }
                    else{
                        echo "<script>alert('Out of Stock ...')</script>";
                        echo "<script>window.location.href = 'carscatlogin.php';</script>";
                    }
                }

                if(isset($_POST["rentkiario"])){

                    $id = "Select CarID from carstocks where carname = 'Kia Rio' and CarStatus='Available'";
                    $caridres = $conn->query($id);
                    if ($caridres->num_rows > 0) {
                        // output data of each row
                      $row = $caridres->fetch_assoc();
                            $carid = $row["CarID"];
                            $carname="Kia Rio";
                            $duration=$_POST["duration"];
                            $pickup=$_POST["location"];
                            $dropoff=$_POST["dropoff"];
                            $id=$_SESSION['user_id'];
                            $total=650*$duration;
                        
                            mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
                            values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
                            
                            $rid = "Select RentID from rents where carname = 'Kia Rio' and CarID=$carid";
                            $renid = $conn->query($rid);
                            if ($renid->num_rows > 0) {
                            $row2 = $renid->fetch_assoc();
                            $rentid = $row2["RentID"];
                            }
                            $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
                        
                            echo "<script>alert('Rented succesfully ...')</script>";
                            echo "<script>window.location.href = 'homelogin.php';</script>";   
                        }
                    else{
                        echo "<script>alert('Out of Stock ...')</script>";
                        echo "<script>window.location.href = 'carscatlogin.php';</script>";
                    }
                }
//Full - Size
if(isset($_POST["rentcamry"])){

    $id = "Select CarID from carstocks where carname = 'Toyota Camry' and CarStatus='Available'";
    $caridres = $conn->query($id);
    if ($caridres->num_rows > 0) {
        // output data of each row
      $row = $caridres->fetch_assoc();
            $carid = $row["CarID"];
            $carname="Toyota Camry";
            $duration=$_POST["duration"];
            $pickup=$_POST["location"];
            $dropoff=$_POST["dropoff"];
            $id=$_SESSION['user_id'];
            $total=1250*$duration;
        
            mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
            values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
            
            $rid = "Select RentID from rents where carname = 'Toyota Camry' and CarID=$carid";
            $renid = $conn->query($rid);
            if ($renid->num_rows > 0) {
            $row2 = $renid->fetch_assoc();
            $rentid = $row2["RentID"];
            }
            $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
        
            echo "<script>alert('Rented succesfully ...')</script>";
            echo "<script>window.location.href = 'homelogin.php';</script>";   
        }
    else{
        echo "<script>alert('Out of Stock ...')</script>";
        echo "<script>window.location.href = 'carscatlogin.php';</script>";
    }
}

if(isset($_POST["rentaccord"])){

    $id = "Select CarID from carstocks where carname = 'Honda Accord' and CarStatus='Available'";
    $caridres = $conn->query($id);
    if ($caridres->num_rows > 0) {
        // output data of each row
      $row = $caridres->fetch_assoc();
            $carid = $row["CarID"];
            $carname="Honda Accord";
            $duration=$_POST["duration"];
            $pickup=$_POST["location"];
            $dropoff=$_POST["dropoff"];
            $id=$_SESSION['user_id'];
            $total=1260*$duration;
        
            mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
            values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
            
            $rid = "Select RentID from rents where carname = 'Honda Accord' and CarID=$carid";
            $renid = $conn->query($rid);
            if ($renid->num_rows > 0) {
            $row2 = $renid->fetch_assoc();
            $rentid = $row2["RentID"];
            }
            $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
        
            echo "<script>alert('Rented succesfully ...')</script>";
            echo "<script>window.location.href = 'homelogin.php';</script>";   
        }
    else{
        echo "<script>alert('Out of Stock ...')</script>";
        echo "<script>window.location.href = 'carscatlogin.php';</script>";
    }
}

if(isset($_POST["rentsonata"])){

    $id = "Select CarID from carstocks where carname = 'Hyundai Sonata' and CarStatus='Available'";
    $caridres = $conn->query($id);
    if ($caridres->num_rows > 0) {
        // output data of each row
      $row = $caridres->fetch_assoc();
            $carid = $row["CarID"];
            $carname="Hyundai Sonata";
            $duration=$_POST["duration"];
            $pickup=$_POST["location"];
            $dropoff=$_POST["dropoff"];
            $id=$_SESSION['user_id'];
            $total=1300*$duration;
        
            mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
            values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
            
            $rid = "Select RentID from rents where carname = 'Hyundai Sonata' and CarID=$carid";
            $renid = $conn->query($rid);
            if ($renid->num_rows > 0) {
            $row2 = $renid->fetch_assoc();
            $rentid = $row2["RentID"];
            }
            $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
        
            echo "<script>alert('Rented succesfully ...')</script>";
            echo "<script>window.location.href = 'homelogin.php';</script>";   
        }
    else{
        echo "<script>alert('Out of Stock ...')</script>";
        echo "<script>window.location.href = 'carscatlogin.php';</script>";
    }
}

if(isset($_POST["rentoptima"])){

    $id = "Select CarID from carstocks where carname = 'Kia Optima' and CarStatus='Available'";
    $caridres = $conn->query($id);
    if ($caridres->num_rows > 0) {
        // output data of each row
      $row = $caridres->fetch_assoc();
            $carid = $row["CarID"];
            $carname="Kia Optima";
            $duration=$_POST["duration"];
            $pickup=$_POST["location"];
            $dropoff=$_POST["dropoff"];
            $id=$_SESSION['user_id'];
            $total=1700*$duration;
        
            mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
            values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
            
            $rid = "Select RentID from rents where carname = 'Kia Optima' and CarID=$carid";
            $renid = $conn->query($rid);
            if ($renid->num_rows > 0) {
            $row2 = $renid->fetch_assoc();
            $rentid = $row2["RentID"];
            }
            $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
        
            echo "<script>alert('Rented succesfully ...')</script>";
            echo "<script>window.location.href = 'homelogin.php';</script>";   
        }
    else{
        echo "<script>alert('Out of Stock ...')</script>";
        echo "<script>window.location.href = 'carscatlogin.php';</script>";
    }
}

//Luxury

if(isset($_POST["rentbmw3"])){

    $id = "Select CarID from carstocks where carname = 'BMW 3-Series' and CarStatus='Available'";
    $caridres = $conn->query($id);
    if ($caridres->num_rows > 0) {
        // output data of each row
      $row = $caridres->fetch_assoc();
            $carid = $row["CarID"];
            $carname="BMW 3-Series";
            $duration=$_POST["duration"];
            $pickup=$_POST["location"];
            $dropoff=$_POST["dropoff"];
            $id=$_SESSION['user_id'];
            $total=3750*$duration;
        
            mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
            values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
            
            $rid = "Select RentID from rents where carname = 'BMW 3-Series' and CarID=$carid";
            $renid = $conn->query($rid);
            if ($renid->num_rows > 0) {
            $row2 = $renid->fetch_assoc();
            $rentid = $row2["RentID"];
            }
            $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
        
            echo "<script>alert('Rented succesfully ...')</script>";
            echo "<script>window.location.href = 'homelogin.php';</script>";   
        }
    else{
        echo "<script>alert('Out of Stock ...')</script>";
        echo "<script>window.location.href = 'carscatlogin.php';</script>";
    }
}

if(isset($_POST["rentbenz"])){

    $id = "Select CarID from carstocks where carname = 'Mercedes-Benz C-Class' and CarStatus='Available'";
    $caridres = $conn->query($id);
    if ($caridres->num_rows > 0) {
        // output data of each row
      $row = $caridres->fetch_assoc();
            $carid = $row["CarID"];
            $carname="Mercedes-Benz C-Class";
            $duration=$_POST["duration"];
            $pickup=$_POST["location"];
            $dropoff=$_POST["dropoff"];
            $id=$_SESSION['user_id'];
            $total=4500*$duration;
        
            mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
            values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
            
            $rid = "Select RentID from rents where carname = 'Mercedes-Benz C-Class' and CarID=$carid";
            $renid = $conn->query($rid);
            if ($renid->num_rows > 0) {
            $row2 = $renid->fetch_assoc();
            $rentid = $row2["RentID"];
            }
            $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
        
            echo "<script>alert('Rented succesfully ...')</script>";
            echo "<script>window.location.href = 'homelogin.php';</script>";   
        }
    else{
        echo "<script>alert('Out of Stock ...')</script>";
        echo "<script>window.location.href = 'carscatlogin.php';</script>";
    }
}

if(isset($_POST["rentaudia4"])){

    $id = "Select CarID from carstocks where carname = 'Audi A4' and CarStatus='Available'";
    $caridres = $conn->query($id);
    if ($caridres->num_rows > 0) {
        // output data of each row
      $row = $caridres->fetch_assoc();
            $carid = $row["CarID"];
            $carname="Audi A4";
            $duration=$_POST["duration"];
            $pickup=$_POST["location"];
            $dropoff=$_POST["dropoff"];
            $id=$_SESSION['user_id'];
            $total=4250*$duration;
        
            mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
            values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
            
            $rid = "Select RentID from rents where carname = 'Audi A4' and CarID=$carid";
            $renid = $conn->query($rid);
            if ($renid->num_rows > 0) {
            $row2 = $renid->fetch_assoc();
            $rentid = $row2["RentID"];
            }
            $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
        
            echo "<script>alert('Rented succesfully ...')</script>";
            echo "<script>window.location.href = 'homelogin.php';</script>";   
        }
    else{
        echo "<script>alert('Out of Stock ...')</script>";
        echo "<script>window.location.href = 'carscatlogin.php';</script>";
    }
}

if(isset($_POST["rentjaguar"])){

    $id = "Select CarID from carstocks where carname = 'Jaguar XJ' and CarStatus='Available'";
    $caridres = $conn->query($id);
    if ($caridres->num_rows > 0) {
        // output data of each row
      $row = $caridres->fetch_assoc();
            $carid = $row["CarID"];
            $carname="Jaguar XJ";
            $duration=$_POST["duration"];
            $pickup=$_POST["location"];
            $dropoff=$_POST["dropoff"];
            $id=$_SESSION['user_id'];
            $total=6000*$duration;
        
            mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
            values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
            
            $rid = "Select RentID from rents where carname = 'Jaguar XJ' and CarID=$carid";
            $renid = $conn->query($rid);
            if ($renid->num_rows > 0) {
            $row2 = $renid->fetch_assoc();
            $rentid = $row2["RentID"];
            }
            $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
        
            echo "<script>alert('Rented succesfully ...')</script>";
            echo "<script>window.location.href = 'homelogin.php';</script>";   
        }
    else{
        echo "<script>alert('Out of Stock ...')</script>";
        echo "<script>window.location.href = 'carscatlogin.php';</script>";
    }
}

//SUV

if(isset($_POST["rentfortuner"])){

    $id = "Select CarID from carstocks where carname = 'Toyota Fortuner' and CarStatus='Available'";
    $caridres = $conn->query($id);
    if ($caridres->num_rows > 0) {
        // output data of each row
      $row = $caridres->fetch_assoc();
            $carid = $row["CarID"];
            $carname="Toyota Fortuner";
            $duration=$_POST["duration"];
            $pickup=$_POST["location"];
            $dropoff=$_POST["dropoff"];
            $id=$_SESSION['user_id'];
            $total=2000*$duration;
        
            mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
            values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
            
            $rid = "Select RentID from rents where carname = 'Toyota Fortuner' and CarID=$carid";
            $renid = $conn->query($rid);
            if ($renid->num_rows > 0) {
            $row2 = $renid->fetch_assoc();
            $rentid = $row2["RentID"];
            }
            $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
        
            echo "<script>alert('Rented succesfully ...')</script>";
            echo "<script>window.location.href = 'homelogin.php';</script>";   
        }
    else{
        echo "<script>alert('Out of Stock ...')</script>";
        echo "<script>window.location.href = 'carscatlogin.php';</script>";
    }
}

if(isset($_POST["rentmonterosport"])){

    $id = "Select CarID from carstocks where carname = 'Mitsubishi Montero Sport' and CarStatus='Available'";
    $caridres = $conn->query($id);
    if ($caridres->num_rows > 0) {
        // output data of each row
      $row = $caridres->fetch_assoc();
            $carid = $row["CarID"];
            $carname="Mitsubishi Montero Sport";
            $duration=$_POST["duration"];
            $pickup=$_POST["location"];
            $dropoff=$_POST["dropoff"];
            $id=$_SESSION['user_id'];
            $total=2500*$duration;
        
            mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
            values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
            
            $rid = "Select RentID from rents where carname = 'Mitsubishi Montero Sport' and CarID=$carid";
            $renid = $conn->query($rid);
            if ($renid->num_rows > 0) {
            $row2 = $renid->fetch_assoc();
            $rentid = $row2["RentID"];
            }
            $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
        
            echo "<script>alert('Rented succesfully ...')</script>";
            echo "<script>window.location.href = 'homelogin.php';</script>";   
        }
    else{
        echo "<script>alert('Out of Stock ...')</script>";
        echo "<script>window.location.href = 'carscatlogin.php';</script>";
    }
}

if(isset($_POST["renteverest"])){

    $id = "Select CarID from carstocks where carname = 'Ford Everest' and CarStatus='Available'";
    $caridres = $conn->query($id);
    if ($caridres->num_rows > 0) {
        // output data of each row
      $row = $caridres->fetch_assoc();
            $carid = $row["CarID"];
            $carname="Ford Everest";
            $duration=$_POST["duration"];
            $pickup=$_POST["location"];
            $dropoff=$_POST["dropoff"];
            $id=$_SESSION['user_id'];
            $total=2200*$duration;
        
            mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
            values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
            
            $rid = "Select RentID from rents where carname = 'Ford Everest' and CarID=$carid";
            $renid = $conn->query($rid);
            if ($renid->num_rows > 0) {
            $row2 = $renid->fetch_assoc();
            $rentid = $row2["RentID"];
            }
            $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
        
            echo "<script>alert('Rented succesfully ...')</script>";
            echo "<script>window.location.href = 'homelogin.php';</script>";   
        }
    else{
        echo "<script>alert('Out of Stock ...')</script>";
        echo "<script>window.location.href = 'carscatlogin.php';</script>";
    }
}

if(isset($_POST["rentterra"])){

    $id = "Select CarID from carstocks where carname = 'Nissan Terra' and CarStatus='Available'";
    $caridres = $conn->query($id);
    if ($caridres->num_rows > 0) {
        // output data of each row
      $row = $caridres->fetch_assoc();
            $carid = $row["CarID"];
            $carname="Nissan Terra";
            $duration=$_POST["duration"];
            $pickup=$_POST["location"];
            $dropoff=$_POST["dropoff"];
            $id=$_SESSION['user_id'];
            $total=2250*$duration;
        
            mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
            values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
            
            $rid = "Select RentID from rents where carname = 'Nissan Terra' and CarID=$carid";
            $renid = $conn->query($rid);
            if ($renid->num_rows > 0) {
            $row2 = $renid->fetch_assoc();
            $rentid = $row2["RentID"];
            }
            $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
        
            echo "<script>alert('Rented succesfully ...')</script>";
            echo "<script>window.location.href = 'homelogin.php';</script>";   
        }
    else{
        echo "<script>alert('Out of Stock ...')</script>";
        echo "<script>window.location.href = 'carscatlogin.php';</script>";
    }
}

//VAN

if(isset($_POST["rentl300"])){

    $id = "Select CarID from carstocks where carname = 'Mitsubishi L300' and CarStatus='Available'";
    $caridres = $conn->query($id);
    if ($caridres->num_rows > 0) {
        // output data of each row
      $row = $caridres->fetch_assoc();
            $carid = $row["CarID"];
            $carname="Mitsubishi L300";
            $duration=$_POST["duration"];
            $pickup=$_POST["location"];
            $dropoff=$_POST["dropoff"];
            $id=$_SESSION['user_id'];
            $total=450*$duration;
        
            mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
            values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
            
            $rid = "Select RentID from rents where carname = 'Mitsubishi L300' and CarID=$carid";
            $renid = $conn->query($rid);
            if ($renid->num_rows > 0) {
            $row2 = $renid->fetch_assoc();
            $rentid = $row2["RentID"];
            }
            $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
        
            echo "<script>alert('Rented succesfully ...')</script>";
            echo "<script>window.location.href = 'homelogin.php';</script>";   
        }
    else{
        echo "<script>alert('Out of Stock ...')</script>";
        echo "<script>window.location.href = 'carscatlogin.php';</script>";
    }
}

if(isset($_POST["renthiace"])){

    $id = "Select CarID from carstocks where carname = 'Toyota Hiace' and CarStatus='Available'";
    $caridres = $conn->query($id);
    if ($caridres->num_rows > 0) {
        // output data of each row
      $row = $caridres->fetch_assoc();
            $carid = $row["CarID"];
            $carname="Toyota Hiace";
            $duration=$_POST["duration"];
            $pickup=$_POST["location"];
            $dropoff=$_POST["dropoff"];
            $id=$_SESSION['user_id'];
            $total=2000*$duration;
        
            mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
            values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
            
            $rid = "Select RentID from rents where carname = 'Toyota Hiace' and CarID=$carid";
            $renid = $conn->query($rid);
            if ($renid->num_rows > 0) {
            $row2 = $renid->fetch_assoc();
            $rentid = $row2["RentID"];
            }
            $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
        
            echo "<script>alert('Rented succesfully ...')</script>";
            echo "<script>window.location.href = 'homelogin.php';</script>";   
        }
    else{
        echo "<script>alert('Out of Stock ...')</script>";
        echo "<script>window.location.href = 'carscatlogin.php';</script>";
    }
}

if(isset($_POST["rentstarex"])){

    $id = "Select CarID from carstocks where carname = 'Hyundai Starex 2007' and CarStatus='Available'";
    $caridres = $conn->query($id);
    if ($caridres->num_rows > 0) {
        // output data of each row
      $row = $caridres->fetch_assoc();
            $carid = $row["CarID"];
            $carname="Hyundai Starex 2007";
            $duration=$_POST["duration"];
            $pickup=$_POST["location"];
            $dropoff=$_POST["dropoff"];
            $id=$_SESSION['user_id'];
            $total=1500*$duration;
        
            mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
            values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
            
            $rid = "Select RentID from rents where carname = 'Hyundai Starex 2007' and CarID=$carid";
            $renid = $conn->query($rid);
            if ($renid->num_rows > 0) {
            $row2 = $renid->fetch_assoc();
            $rentid = $row2["RentID"];
            }
            $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
        
            echo "<script>alert('Rented succesfully ...')</script>";
            echo "<script>window.location.href = 'homelogin.php';</script>";   
        }
    else{
        echo "<script>alert('Out of Stock ...')</script>";
        echo "<script>window.location.href = 'carscatlogin.php';</script>";
    }
}

if(isset($_POST["rentgrandcarn"])){

    $id = "Select CarID from carstocks where carname = 'Kia Grand Carnival' and CarStatus='Available'";
    $caridres = $conn->query($id);
    if ($caridres->num_rows > 0) {
        // output data of each row
      $row = $caridres->fetch_assoc();
            $carid = $row["CarID"];
            $carname="Kia Grand Carnival";
            $duration=$_POST["duration"];
            $pickup=$_POST["location"];
            $dropoff=$_POST["dropoff"];
            $id=$_SESSION['user_id'];
            $total=2750*$duration;
        
            mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
            values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
            
            $rid = "Select RentID from rents where carname = 'Kia Grand Carnival' and CarID=$carid";
            $renid = $conn->query($rid);
            if ($renid->num_rows > 0) {
            $row2 = $renid->fetch_assoc();
            $rentid = $row2["RentID"];
            }
            $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
        
            echo "<script>alert('Rented succesfully ...')</script>";
            echo "<script>window.location.href = 'homelogin.php';</script>";   
        }
    else{
        echo "<script>alert('Out of Stock ...')</script>";
        echo "<script>window.location.href = 'carscatlogin.php';</script>";
    }
}

//sports

if(isset($_POST["rentmiata"])){

    $id = "Select CarID from carstocks where carname = 'Mazda MX-5 Miata' and CarStatus='Available'";
    $caridres = $conn->query($id);
    if ($caridres->num_rows > 0) {
        // output data of each row
      $row = $caridres->fetch_assoc();
            $carid = $row["CarID"];
            $carname="Mazda MX-5 Miata";
            $duration=$_POST["duration"];
            $pickup=$_POST["location"];
            $dropoff=$_POST["dropoff"];
            $id=$_SESSION['user_id'];
            $total=3500*$duration;
        
            mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
            values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
            
            $rid = "Select RentID from rents where carname = 'Mazda MX-5 Miata' and CarID=$carid";
            $renid = $conn->query($rid);
            if ($renid->num_rows > 0) {
            $row2 = $renid->fetch_assoc();
            $rentid = $row2["RentID"];
            }
            $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
        
            echo "<script>alert('Rented succesfully ...')</script>";
            echo "<script>window.location.href = 'homelogin.php';</script>";   
        }
    else{
        echo "<script>alert('Out of Stock ...')</script>";
        echo "<script>window.location.href = 'carscatlogin.php';</script>";
    }
}

if(isset($_POST["rentmustang"])){

    $id = "Select CarID from carstocks where carname = 'Ford Mustang GT' and CarStatus='Available'";
    $caridres = $conn->query($id);
    if ($caridres->num_rows > 0) {
        // output data of each row
      $row = $caridres->fetch_assoc();
            $carid = $row["CarID"];
            $carname="Ford Mustang GT";
            $duration=$_POST["duration"];
            $pickup=$_POST["location"];
            $dropoff=$_POST["dropoff"];
            $id=$_SESSION['user_id'];
            $total=5000*$duration;
        
            mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
            values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
            
            $rid = "Select RentID from rents where carname = 'Ford Mustang GT' and CarID=$carid";
            $renid = $conn->query($rid);
            if ($renid->num_rows > 0) {
            $row2 = $renid->fetch_assoc();
            $rentid = $row2["RentID"];
            }
            $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
        
            echo "<script>alert('Rented succesfully ...')</script>";
            echo "<script>window.location.href = 'homelogin.php';</script>";   
        }
    else{
        echo "<script>alert('Out of Stock ...')</script>";
        echo "<script>window.location.href = 'carscatlogin.php';</script>";
    }
}

if(isset($_POST["rent86"])){

    $id = "Select CarID from carstocks where carname = 'Toyota 86' and CarStatus='Available'";
    $caridres = $conn->query($id);
    if ($caridres->num_rows > 0) {
        // output data of each row
      $row = $caridres->fetch_assoc();
            $carid = $row["CarID"];
            $carname="Toyota 86";
            $duration=$_POST["duration"];
            $pickup=$_POST["location"];
            $dropoff=$_POST["dropoff"];
            $id=$_SESSION['user_id'];
            $total=3200*$duration;
        
            mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
            values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
            
            $rid = "Select RentID from rents where carname = 'Toyota 86' and CarID=$carid";
            $renid = $conn->query($rid);
            if ($renid->num_rows > 0) {
            $row2 = $renid->fetch_assoc();
            $rentid = $row2["RentID"];
            }
            $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
        
            echo "<script>alert('Rented succesfully ...')</script>";
            echo "<script>window.location.href = 'homelogin.php';</script>";   
        }
    else{
        echo "<script>alert('Out of Stock ...')</script>";
        echo "<script>window.location.href = 'carscatlogin.php';</script>";
    }
}

if(isset($_POST["rentsubaru"])){

    $id = "Select CarID from carstocks where carname = 'Subaru BRZ' and CarStatus='Available'";
    $caridres = $conn->query($id);
    if ($caridres->num_rows > 0) {
        // output data of each row
      $row = $caridres->fetch_assoc();
            $carid = $row["CarID"];
            $carname="Subaru BRZ";
            $duration=$_POST["duration"];
            $pickup=$_POST["location"];
            $dropoff=$_POST["dropoff"];
            $id=$_SESSION['user_id'];
            $total=2750*$duration;
        
            mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
            values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
            
            $rid = "Select RentID from rents where carname = 'Subaru BRZ' and CarID=$carid";
            $renid = $conn->query($rid);
            if ($renid->num_rows > 0) {
            $row2 = $renid->fetch_assoc();
            $rentid = $row2["RentID"];
            }
            $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
        
            echo "<script>alert('Rented succesfully ...')</script>";
            echo "<script>window.location.href = 'homelogin.php';</script>";   
        }
    else{
        echo "<script>alert('Out of Stock ...')</script>";
        echo "<script>window.location.href = 'carscatlogin.php';</script>";
    }
}

//truck

if(isset($_POST["rentisuzutruck"])){

    $id = "Select CarID from carstocks where carname = 'Isuzu N-Series NHR' and CarStatus='Available'";
    $caridres = $conn->query($id);
    if ($caridres->num_rows > 0) {
        // output data of each row
      $row = $caridres->fetch_assoc();
            $carid = $row["CarID"];
            $carname="Isuzu N-Series NHR";
            $duration=$_POST["duration"];
            $pickup=$_POST["location"];
            $dropoff=$_POST["dropoff"];
            $id=$_SESSION['user_id'];
            $total=1750*$duration;
        
            mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
            values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
            
            $rid = "Select RentID from rents where carname = 'Isuzu N-Series NHR' and CarID=$carid";
            $renid = $conn->query($rid);
            if ($renid->num_rows > 0) {
            $row2 = $renid->fetch_assoc();
            $rentid = $row2["RentID"];
            }
            $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
        
            echo "<script>alert('Rented succesfully ...')</script>";
            echo "<script>window.location.href = 'homelogin.php';</script>";   
        }
    else{
        echo "<script>alert('Out of Stock ...')</script>";
        echo "<script>window.location.href = 'carscatlogin.php';</script>";
    }
}

if(isset($_POST["rentcanter"])){

    $id = "Select CarID from carstocks where carname = 'Mitsubishi Fuso Canter' and CarStatus='Available'";
    $caridres = $conn->query($id);
    if ($caridres->num_rows > 0) {
        // output data of each row
      $row = $caridres->fetch_assoc();
            $carid = $row["CarID"];
            $carname="Mitsubishi Fuso Canter";
            $duration=$_POST["duration"];
            $pickup=$_POST["location"];
            $dropoff=$_POST["dropoff"];
            $id=$_SESSION['user_id'];
            $total=2000*$duration;
        
            mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
            values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
            
            $rid = "Select RentID from rents where carname = 'Mitsubishi Fuso Canter' and CarID=$carid";
            $renid = $conn->query($rid);
            if ($renid->num_rows > 0) {
            $row2 = $renid->fetch_assoc();
            $rentid = $row2["RentID"];
            }
            $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
        
            echo "<script>alert('Rented succesfully ...')</script>";
            echo "<script>window.location.href = 'homelogin.php';</script>";   
        }
    else{
        echo "<script>alert('Out of Stock ...')</script>";
        echo "<script>window.location.href = 'carscatlogin.php';</script>";
    }
}

if(isset($_POST["renth100"])){

    $id = "Select CarID from carstocks where carname = 'Hyundai H-100' and CarStatus='Available'";
    $caridres = $conn->query($id);
    if ($caridres->num_rows > 0) {
        // output data of each row
      $row = $caridres->fetch_assoc();
            $carid = $row["CarID"];
            $carname="Hyundai H-100";
            $duration=$_POST["duration"];
            $pickup=$_POST["location"];
            $dropoff=$_POST["dropoff"];
            $id=$_SESSION['user_id'];
            $total=1700*$duration;
        
            mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
            values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
            
            $rid = "Select RentID from rents where carname = 'Hyundai H-100' and CarID=$carid";
            $renid = $conn->query($rid);
            if ($renid->num_rows > 0) {
            $row2 = $renid->fetch_assoc();
            $rentid = $row2["RentID"];
            }
            $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
        
            echo "<script>alert('Rented succesfully ...')</script>";
            echo "<script>window.location.href = 'homelogin.php';</script>";   
        }
    else{
        echo "<script>alert('Out of Stock ...')</script>";
        echo "<script>window.location.href = 'carscatlogin.php';</script>";
    }
}

if(isset($_POST["renttornado"])){

    $id = "Select CarID from carstocks where carname = 'Foton Tornado' and CarStatus='Available'";
    $caridres = $conn->query($id);
    if ($caridres->num_rows > 0) {
        // output data of each row
      $row = $caridres->fetch_assoc();
            $carid = $row["CarID"];
            $carname="Foton Tornado";
            $duration=$_POST["duration"];
            $pickup=$_POST["location"];
            $dropoff=$_POST["dropoff"];
            $id=$_SESSION['user_id'];
            $total=1800*$duration;
        
            mysqli_query($conn,"insert into rents (UserID, CarName, Duration, Pickup, dropoff, total, RentStatus, DateRequested, DateRented,ReturnDate,CarID) 
            values ('$id','$carname','$duration', '$pickup', '$dropoff','$total','$status','$current_date','','','$carid')");
            
            $rid = "Select RentID from rents where carname = 'Foton Tornado' and CarID=$carid";
            $renid = $conn->query($rid);
            if ($renid->num_rows > 0) {
            $row2 = $renid->fetch_assoc();
            $rentid = $row2["RentID"];
            }
            $occupycar = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Rented', RentID = '$rentid' WHERE CarID = '$carid'");
        
            echo "<script>alert('Rented succesfully ...')</script>";
            echo "<script>window.location.href = 'homelogin.php';</script>";   
        }
    else{
        echo "<script>alert('Out of Stock ...')</script>";
        echo "<script>window.location.href = 'carscatlogin.php';</script>";
    }
}