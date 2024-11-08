<?php
session_start();

include('DbConnection.php');


if(isset($_POST["adminlogin"])){
    $adminuser=$_POST["adminuser"];
    $adminpass=$_POST["adminpass"];
      
    $sql = "Select * from admin where adminuser = '$adminuser' and adminpass = '$adminpass'";
    $result = $conn->query($sql);
    
    
    
    
    if ($result->num_rows > 0) {
    $_SESSION['adminuser']=$_POST['adminuser'];
    $_SESSION['adminpass']=$_POST['adminpass'];
    
    $id = "Select adminID from admin where adminuser = '$adminuser' and adminpass = '$adminpass'";
    $result2 = $conn->query($id);
    if ($result2->num_rows > 0) {
        // output data of each row
        while($row = $result2->fetch_assoc()) {
            $adminID = $row["adminID"];
            $_SESSION['adminID'] = $adminID; // set the session variable
            echo "<script>window.location.href = 'Admin.php';</script>";   
        }
    }
    }
          
         else {
            echo "<script>alert('Account doesnt exist! Check username and password ...')</script>";
         }
        
    }
        
    
    
        ?>
    
    
