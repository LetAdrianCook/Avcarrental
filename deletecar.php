<?php
include('DbConnection.php');
$CarID = $_GET["CarID"];
$checker = mysqli_query($conn, "Select CarStatus from carstocks WHERE CarID = $CarID");
$row = mysqli_fetch_assoc($checker);
if($row["CarStatus"]=="Rented"){
    echo "<script>alert('Unable to Delete, Car already in rent')</script>";
    echo "<script>window.location.href = 'carstock.php';</script>";     
}else{

$cardel = mysqli_query($conn, "delete from carstocks WHERE CarID = '$CarID'");

echo "<script>alert('Car Deleted!')</script>";
echo "<script>window.location.href = 'carstock.php';</script>";   

}
?>