<?php


if(empty($_SESSION['username'])) {
  echo "<script>alert('Not logged in, please login first!...')</script>";
  echo "<script>window.location.href = 'login1.php';</script>";
}






?>