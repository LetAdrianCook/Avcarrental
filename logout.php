<?php 
    if(isset($_POST["logout"]))
    {
        session_start();
        session_unset();
        session_destroy();
        echo "<script>alert('Logout succesfully ...')</script>";
        echo "<script>window.location.href = 'login1.php';</script>";
    }

?>