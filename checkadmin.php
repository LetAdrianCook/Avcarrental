<?php


if(empty($_SESSION['adminuser'])) {
  echo "<script>alert('Admin not recognized')</script>";
  echo "<script>window.location.href = 'adminlogin.php';</script>";
}






?>