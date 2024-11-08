<?php
include('DbConnection.php');
$User_id = $_GET["User_id"];
$checker =  "Select User_id from users WHERE User_id = $User_id";
$delete = mysqli_query($conn, "DELETE from users WHERE User_id = $User_id");


echo "<script>alert('User deleted succesfully ...')</script>";
echo "<script>window.location.href = 'Users.php';</script>";   
         
      

?>