<?php 
    if(isset($_POST["logoutadmin"]))
    {
        session_start();
        session_unset();
        session_destroy();
        echo "<script>alert('Logout succesfully ...')</script>";
        echo "<script>window.location.href = 'adminlogin.php';</script>";
    }

?>