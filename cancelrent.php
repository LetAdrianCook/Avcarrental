<?php
include('DbConnection.php');
$RentID = $_GET["RentID"];
$getreqdate = mysqli_query($conn, "Select DateRequested from rents WHERE RentID = $RentID");
$row = mysqli_fetch_array($getreqdate);

$current_date = date('Y-m-d');


// Compare the fetched date with the calculated date
if ($row['DateRequested'] < $current_date) {
    echo "<script>alert('Unable to cancel, cancellation is overdue go to nearest autovista branch')</script>";
    echo "<script>window.location.href = 'rentedcars.php';</script>";  
} else {
    $cancel = mysqli_query($conn, "Delete from rents WHERE RentID = $RentID");
    $updatestat = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Available', RentID = '0' WHERE RentID = '$RentID'");
    echo "<script>alert('Rent Cancelled!')</script>";
    echo "<script>window.location.href = 'rentedcars.php';</script>";  
    
   
}


?>