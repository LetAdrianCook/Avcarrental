<?php

include('DbConnection.php');
$user_id=$_SESSION['user_id'];

if (isset($_POST['edituser'])) {
   
  $userdata = $_POST['edit'];
  $column = $_POST['column'];

  if ($column == "first_name") {
    $update = mysqli_query($conn, "update users SET first_name = '$userdata' WHERE User_id = $user_id");
    echo "<script>alert('edited first name succesfully ...')</script>";
    echo "<script>window.location.href = 'editprof.php';</script>";
  } 

  if ($column == "last_name") {
    $update = mysqli_query($conn, "update users SET last_name = '$userdata' WHERE User_id = $user_id");
    echo "<script>alert('edited last name succesfully ...')</script>";
    echo "<script>window.location.href = 'editprof.php';</script>";
  } 

  if ($column == "email") {
    $update = mysqli_query($conn, "update users SET email = '$userdata' WHERE User_id = $user_id");
    echo "<script>alert('edited email succesfully ...')</script>";
    echo "<script>window.location.href = 'editprof.php';</script>";
  } 

  if ($column == "Contact") {
    $update = mysqli_query($conn, "update users SET Contact = '$userdata' WHERE User_id = $user_id");
    echo "<script>alert('edited Contact succesfully ...')</script>";
    echo "<script>window.location.href = 'editprof.php';</script>";
  } 

  if ($column == "address") {
    $update = mysqli_query($conn, "update users SET address = '$userdata' WHERE User_id = $user_id");
    echo "<script>alert('edited address succesfully ...')</script>";
    echo "<script>window.location.href = 'editprof.php';</script>";
  } 

  if ($column == "pass") {
    $update = mysqli_query($conn, "update users SET pass = '$userdata' WHERE User_id = $user_id");
    echo "<script>alert('edited password succesfully ...')</script>";
    echo "<script>window.location.href = 'editprof.php';</script>";
  } 

  if ($column == "license_id") {
    $update = mysqli_query($conn, "update users SET license_id = '$userdata' WHERE User_id = $user_id");
    echo "<script>alert('edited license ID succesfully ...')</script>";
    echo "<script>window.location.href = 'editprof.php';</script>";
  } 
  
}
  ?>