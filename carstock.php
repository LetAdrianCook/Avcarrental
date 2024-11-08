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
          <a class="navbar-brand" href="#">
            <img src="./pic-logo/LOGO.png" alt="Car Rental"> Auto Vista
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="Admin.php">Rent</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="History.php">History</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="Users.php">Users</a>
              </li>

              <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="carstock.php">Stocks</a>
              </li>
             
              
          </div>
          <div class="button-container">
            <a type="button" name="search" value="Search by RentID" class="btn btn-sm btn-outline-none custom-btn" href="addstock.php">Add Stock</a>
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
      </nav>
      
 
	<form method="post" action="#" class="my-form">
	<input type="text" name="search" id="search" class="form-control" placeholder="Type all to show">
	<input type="submit" name="StockSearch" class="btn btn-primary mt-2 search-btn" value="Search">

  <select name="column" id="column" class="btn btn-secondary dropdown-toggle filter-btn1 ">
    
      <option value="CarStatus">Car Status</option>
			<option value="CarName">Car Name</option>
			<option value="CarType">Car Type</option>
      <option value="LicensePlate">License</option>
      <option value="CarID">Car ID</option>
		</select>
	</form>


<?php

include('DbConnection.php');

if (isset($_POST['search'])) {
  $search = $_POST['search'];
  $column = $_POST['column'];
  if ($search == "all") {
    $sql = "SELECT * FROM carstocks";
  } else {
    $sql = "SELECT * FROM carstocks WHERE $column LIKE '%$search%'";
  }

$result = $conn->query($sql);

// display the data in an HTML table
if ($result->num_rows > 0) {
  echo "<div class='table-responsive'>";
    echo "<table class='table table-dark table-hover'>";
    echo "<thead>";
    echo "<tr>";
    
    echo "<th scope='col'>CarID</th>";
    echo "<th scope='col'>Car Name</th>";
    echo "<th scope='col'>Car Type</th>";
    echo "<th scope='col'>License</th>";
    echo "<th scope='col'>Car Status</th>";
    echo "<th scope='col'>RentID</th>";
    echo "<th scope='col'>Delete Car</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["CarID"]. "</td>";
        echo "<td>" . $row["CarName"]. "</td>";
        echo "<td>" . $row["CarType"]. "</td>";
        echo "<td>" . $row["LicensePlate"]. "</td>";
        echo "<td>" . $row["CarStatus"]. "</td>";
        echo "<td>" . $row["RentID"]. "</td>";
        echo "<td><a href='deletecar.php?CarID=" . $row["CarID"] . "' class='btn btn-danger ml-2'>Delete</a></td>";
       
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
}
 else {
  echo "<script>alert('Unidentified Search ...')</script>";
  
}
}
// close the database connection

?>




      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
