<?php 
$server = "localhost";
$username = "root";
$password = "";
$db = "home";
$con = new mysqli($server,$username,$password,$db);
if ($con->connect_error) {
	die("Connection Failed! ".connect_error);
}

 ?>
