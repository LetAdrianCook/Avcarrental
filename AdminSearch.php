<?php

session_start();
include 'logoutadmin.php';
include 'checkadmin.php';
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
    <link rel="stylesheet" href="adminlogin.css">
  </head>
<body>
    
    <nav class="navbar navbar-expand-sm custom-navbar" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="Admin.php">
            <img src="./pic-logo/LOGO.png" alt="Car Rental"> Auto Vista
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
            <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="Admin.php">Rent</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="History.php">History</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="Users.php">Users</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="carstock.php">Stocks</a>
              </li>
              </div>
              
          <div class="button-container">
            <a type="submit" name="view" value="viewall" class="btn btn-sm btn-outline-none custom-btn" href="Admin.php">View All</a>
          </div>
          <form action="logoutadmin.php" method="post">
          <div class="button-container">
            <input type="submit" name="logoutadmin" value="Logout" class="btn btn-sm btn-outline-none custom-btn" href="signup1.php">
          </div>
          </form>
              
          </div>
          
    
      </div>
    </div>
  </div>
</div>

            
        </div>
      </nav>

	<form method="POST" action="#" class="my-form">
		<input type="text" name="search" id="search" class="form-control" placeholder="RentID">
		<input type="submit"class="btn btn-primary mt-2 search-btn" name="SearchID"value="Search RentID">
	</form>

  


<?php

include('DbConnection.php');

if(isset($_POST["SearchID"])){
  $searchid = $_POST["search"];
  $sql = "SELECT * FROM rents WHERE RentID='$searchid'";
  $result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo "<div class='table-responsive'>";
    echo "<table class='table table-dark table-hover'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th scope='col'>User ID</th>";
    echo "<th scope='col'>Rental ID</th>";
    echo "<th scope='col'>Car Name</th>";
    echo "<th scope='col'>Duration</th>";
    echo "<th scope='col'>Pickup Location</th>";
    echo "<th scope='col'>Dropoff Location</th>";
    echo "<th scope='col'>Total(PHP)</th>";
    echo "<th scope='col'>Status</th>";
    echo "<th scope='col'>Date Rented</th>";
    echo "<th scope='col'>Return Date</th>";
    echo "<th scope='col'>CarID</th>";
    echo "<th scope='col'>Action(Accept)</th>";
    echo "<th scope='col'>Action(Return)</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["UserID"]. "</td>";
        echo "<td>" . $row["RentID"]. "</td>";
        echo "<td>" . $row["CarName"]. "</td>";
        echo "<td>" . $row["Duration"]. "</td>";
        echo "<td>" . $row["Pickup"]. "</td>";
        echo "<td>" . $row["dropoff"]. "</td>";
        echo "<td>" . $row["Total"]. "</td>";
        echo "<td>" . $row["RentStatus"]. "</td>";
        echo "<td>" . $row["DateRented"]. "</td>";
        echo "<td>" . $row["ReturnDate"]. "</td>";
        echo "<td>" . $row["CarID"]. "</td>";
        echo "<td><a href='acceptrent.php?RentID=" . $row["RentID"] . "&Duration=" . $row["Duration"] . "' class='btn btn-primary'>Rent</a></td>";
        echo "<td><a href='return.php?RentID=" . $row["RentID"] . "' class='btn btn-danger ml-2'>Return</a></td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
}
 else {
  echo "<script>alert('Rent ID does not exist ...')</script>";
  echo "<div class='table-responsive'>";
  echo "<table class='table table-dark table-hover'>";
  echo "<thead>";
  echo "<tr>";
  
  echo "<th scope='col'>Rental ID</th>";
  echo "<th  scope='col'>Car Name</th>";
  echo "<th  scope='col'>Duration</th>";
  echo "<th scope='col'>Pickup Location</th>";
  echo "<th scope='col'>Dropoff Location</th>";
  echo "<th scope='col'>Total</th>";
  echo "<th scope='col'>DateRented Status</th>";
  echo "<th scope='col'>ReturnDate</th>";
  echo "<th scope='col'>CarID</th>";
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




      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
