<?php 

include "db.php"; 
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$sql= "SELECT * FROM admin WHERE username = '$email' AND password='$pwd'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
    session_start();
if (isset($_SESSION['email'])) {
echo "<script>location.href='admin.php'</script>";
}
else{
   if ($_POST['email']===$email && $_POST['pwd']===$pwd) {
      $_SESSION['email'] = $email;
      echo "<script>location.href='admin.php'</script>";
   }
   else{

      echo "<script>alert('username or password incorrect !!!')</script>";
      echo "<script>location.href='centimeter1.php'</script>";

         }
}
  }
}
 
 ?>