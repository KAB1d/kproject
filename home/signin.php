<?php 
session_start();
include "db.php"; 
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$admin = "admin";
$client = "client";
$check = 0;
$test = 0;

$sql= "SELECT * FROM user WHERE Email = '$email' AND Password='$pwd'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
$email=$row["Email"];
$pwd=$row["Password"];
$fnm=$row['FirstName'];
$lnm=$row['LastName'];
$type=$row['status'];
$_SESSION['emal']=$email;
   if($_POST['email']===$email && $_POST['pwd']===$pwd && $type=='client'){
        $check=1;
        $eml=$row['Email'];
    }
elseif($_POST['email']===$email && $_POST['pwd']===$pwd && $type=='admin'){
$test=1;
}
    }}

  
if($check==1){
	$_SESSION['emai']=$eml;
        $_SESSION['email'] = $email;
        echo "<script>location.href='homepic.php'</script>";
    }
elseif($test==1){

        echo "<script>location.href='admin.php'</script>";
}
    else{
        echo "<script>alert ('username or password incorrect!')</script>";
        echo "<script>location.href='login.html'</script>";
    }












$con->close();




 ?>