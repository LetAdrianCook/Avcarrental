<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","12345","car");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>