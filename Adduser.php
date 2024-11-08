<?php

include('DbConnection.php');

if(isset($_POST["saveuser"])){
$username=$_POST["username"];
$password=$_POST["password"];
$fname=$_POST["firstname"];
$lname=$_POST["lastname"];
$license=$_POST["license"];
$gender=$_POST["gender"];
$age=$_POST["age"];
$contact=$_POST["phone"];
$address=$_POST["address"];
$email=$_POST["email"];

$sql = "Select * from users where username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<script>alert('User exists already ...')</script>";
   
         
      }
     else {
        mysqli_query($conn,"insert into users (username, pass,first_name, last_name, license_id, Gender,
    Age, Contact, email, address) values ('$username','$password','$fname', '$lname','$license','$gender',
    '$age','$contact','$email','$address')");

        echo "<script>alert('Created succesfully ...')</script>";
    
        echo "<script>window.location.href = 'login1.php';</script>";
    }
}


?>