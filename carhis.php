<?php
// start the session
session_start();
include 'logout.php';
include 'checklog.php';
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
    <link rel="stylesheet" href="homelogin.css">
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
                <a class="nav-link" aria-current="page" href="homelogin.php#cars">Cars</a>
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
      <p>Driver Name: <?php echo $_SESSION['username']; ?></p>
        <p>Driver Age: <?php echo $_SESSION['Age']; ?></p>
        <p>Driver Plate Number: ABC123</p>
        <p>Driver Email: <?php echo $_SESSION['email']; ?></p>
      </div>
      <div class="modal-footer">
      <form action="rentedcars.php" method="post">
      <input type="submit" name="history" value="rented cars" class="btn btn-outline-light btn-lgpx-3">
</form>
      <form action="logout.php" method="post">
      <input type="submit" name="logout" value="Logout" class="btn btn-outline-light btn-lgpx-3">
</form>
      </div>
    </div>
  </div>
</div>

            
        </div>
      </nav>

      <div id="reminder-text">
      <p>All car(s) that you already returned from your rental(s) will be displayed here and serves as your rental history. Note that cancelled rentals will not be displayed.</p>
    </div>
      
<?php

include('DbConnection.php');
if(isset($_SESSION['user_id'])) { // check if the user is logged in
    $userid = $_SESSION['user_id']; // retrieve the username from the session variable
    // retrieve the data from the database using the session variable as a condition in the WHERE SQL
    $sql = "SELECT * FROM history WHERE UserID = '$userid'";
$result = $conn->query($sql);

// display the data in an HTML table
if ($result->num_rows > 0) {
    echo "<div>";
    echo "<table class='table table-dark table-hover'>";
    echo "<thead>";
    echo "<tr>";
    
    echo "<th scope='col'>Rental ID</th>";
    echo "<th  scope='col'>Car Name</th>";
    echo "<th  scope='col'>Duration</th>";
    echo "<th scope='col'>Pickup Location</th>";
    echo "<th scope='col'>Dropoff Location</th>";
    echo "<th scope='col'>Requested Date</th>";
    echo "<th scope='col'>Date Rented</th>";
    echo "<th scope='col'>Return Date</th>";
    echo "<th scope='col'>Total(PHP)</th>";
    echo "<th scope='col'>Status</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        
        echo "<td>" . $row["RentID"]. "</td>";
        echo "<td>" . $row["CarName"]. "</td>";
        echo "<td>" . $row["Duration"]. "</td>";
        echo "<td>" . $row["Pickup"]. "</td>";
        echo "<td>" . $row["dropoff"]. "</td>";
        echo "<td>" . $row["DateRequested"]. "</td>";
        echo "<td>" . $row["DateRented"]. "</td>";
        echo "<td>" . $row["ReturnDate"]. "</td>";
        echo "<td>" . $row["Total"]. "</td>";
        echo "<td>" . $row["RentStatus"]. "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table> 
    <button type='button' class='btn btn-danger' onclick=\"location.href='homelogin.php'\">Go to Homepage</button>";
    echo "</div>";
} else {
  echo "<div>";
  echo "<table class='table table-dark table-hover'>";
  echo "<thead>";
  echo "<tr>";
  
  echo "<th scope='col'>Rental ID</th>";
  echo "<th  scope='col'>Car Name</th>";
  echo "<th  scope='col'>Duration</th>";
  echo "<th scope='col'>Pickup Location</th>";
  echo "<th scope='col'>Dropoff Location</th>";
  echo "<th scope='col'>Total</th>";
  echo "<th scope='col'>Status</th>";
  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";
  echo "</tbody>";
  echo "</table> 
  <button type='button' class='btn btn-danger' onclick=\"location.href='homelogin.php'\">Go to Homepage</button>";
  echo "</div>";
}
}
// close the database connection

?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
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
      <a class="text-white" href="#">autovista.infinityfreeapp.com</a>
    </div>
  </footer>
  



      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
