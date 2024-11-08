<?php
include('DbConnection.php');
$RentID = $_GET["RentID"];
$checker = mysqli_query($conn, "Select ReturnDate from rents WHERE RentID = $RentID");
$row = mysqli_fetch_assoc($checker);
if(empty($row["ReturnDate"])){
    echo "<script>alert('Not Rented, No return needed!')</script>";
    echo "<script>window.location.href = 'Admin.php';</script>";     
}else{
$sql1 = "INSERT INTO history SELECT * FROM rents WHERE RentID = '$RentID';";   
$updatestat = mysqli_query($conn, "UPDATE carstocks SET CarStatus = 'Available', RentID = '0' WHERE RentID = '$RentID'");
if (!mysqli_query($conn, $sql1)) {
    mysqli_rollback($conn);
    
    die("Error inserting data into history table: " . mysqli_error($conn));
}
$sql = "DELETE FROM rents WHERE RentID = '$RentID';";
if (!mysqli_query($conn, $sql)) {
    mysqli_rollback($conn);
    die("Error deleting data from rents table: " . mysqli_error($conn));
}


if (mysqli_multi_query($conn, $sql1)) {

echo "<script>alert('Succesfully Returned')</script>";
echo "<script>window.location.href = 'Admin.php';</script>";   
}
}
?>