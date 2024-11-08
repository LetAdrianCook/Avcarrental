<?php
include('DbConnection.php');
$RentID = $_GET["RentID"];
$checker = mysqli_query($conn, "Select ReturnDate from rents WHERE RentID = $RentID");
$row = mysqli_fetch_assoc($checker);
if(!empty($row["ReturnDate"])){
    echo "<script>alert('Already Rented!')</script>";
    echo "<script>window.location.href = 'Admin.php';</script>";     
}else{
    

$Duration = $_GET["Duration"];
$current_date = date('Y-m-d');
$future_date = date('Y-m-d', strtotime($current_date . ' + ' . $Duration . ' days'));
$result = mysqli_query($conn, "update rents SET RentStatus = 'Rented' WHERE RentID = $RentID");
$result2 = mysqli_query($conn, "update rents SET DateRented = '$current_date' WHERE RentID = $RentID");
$result3 = mysqli_query($conn, "update rents SET ReturnDate = '$future_date' WHERE RentID = $RentID");

echo "<script>alert('Changed Status to Rented!')</script>";
echo "<script>window.location.href = 'Admin.php';</script>";   
}
?>