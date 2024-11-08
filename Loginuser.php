<?php
session_start();
$username=" ";
$password=" ";
include('DbConnection.php');

$messAlert="";

if(isset($_POST["loginuser"])){
$username=$_POST["username"];
$password=$_POST["password"];

if($username=="admin" && $password=="admin"){
    echo "<script>alert('Admin input detected ...')</script>";
        echo "<script>window.location.href = 'adminlogin.php';</script>";  
}


$sql = "Select * from users where username = '$username' and pass = '$password'";
$result = $conn->query($sql);




if ($result->num_rows > 0) {
$_SESSION['username']=$_POST['username'];
$_SESSION['pass']=$_POST['password'];

$id = "Select user_id from users where username = '$username' and pass = '$password'";
$result2 = $conn->query($id);
if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
        $user_id = $row["user_id"];
        $_SESSION['user_id'] = $user_id; // set the session variable
        header('location: homelogin.php'); // redirect to the homepage
    }
}
}
      
     else {
        echo "<script>alert('Account doesnt exist! Check username and password ...')</script>";
     }
    
}
    


    ?>

    
