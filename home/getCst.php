<?php 
session_start();
include "db.php";
$eml=$_SESSION['emai'];
$adr = $_POST['adr'];
$cate=$_POST['cate'];
$date = $_POST['order'];
$descript=$_POST['descript'];
$te=0;
$ca=mysqli_query($con,"SELECT * from user where Email='$eml'");
while ($fet=mysqli_fetch_array($ca)) {
   $first=$fet['FirstName'];
   $last=$fet['LastName'];
   $email=$fet['Email'];
   $tel=$fet['Telephone'];
   if ($email==$eml) {
       $te=1;
   }
}
if($te==1){
$sql =mysqli_query($con,"INSERT into customer values(NULL,'$first','$last','$email','$tel','$adr','$cate','$descript','$date')");
$sql1 =mysqli_query($con,"insert into ordert values(null,'$email','$cate')");
if ($sql  AND $sql1) {
echo "<script>alert('Thank You');</script>";
echo "<script>location.href='orderform.php'</script>";

}
else{
    echo "check well $eml $te".mysqli_error($con);
}
}
else
{
echo "error".mysqli_error();
}
$con->close();

 ?>