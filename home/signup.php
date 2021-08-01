<?php 
include "db.php";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$pwd = $_POST['pwd'];
$client = "client";

$sql ="insert into user (FirstName,LastName,Email,Telephone,Password,status) values('$fname','$lname','$email','$tel','$pwd','$client')";
if ($con->query($sql)===TRUE) {
echo "<script>location.href='homepic.php'</script>";
}
else{
    echo "<script>alert('Account already exist');</script>";
    echo "<script>location.href='login.html'</script>";
}
$con->close();
 ?>