<?php
// start the session
session_start();
include('DbConnection.php');
$user_id=$_SESSION['user_id'];
$id = "Select * from users where User_id = '$user_id'";
$result2 = $conn->query($id);
if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
        $mail = $row["email"];
        $_SESSION['email'] = $mail; // set the session variable

        $age = $row["Age"];
        $_SESSION['Age'] = $age;

        $address = $row["address"];
        $_SESSION['address'] = $address;

        $username = $row["username"];
        $_SESSION['username'] = $username;

        $first_name = $row["first_name"];
        $_SESSION['first_name'] = $first_name;

        $last_name = $row["last_name"];
        $_SESSION['last_name'] = $last_name;

        $Gender = $row["Gender"];
        $_SESSION['Gender'] = $Gender;

        $license_id = $row["license_id"];
        $_SESSION['license_id'] = $license_id;

        $Contact = $row["Contact"];
        $_SESSION['Contact'] = $Contact;
    }
}


  
?>