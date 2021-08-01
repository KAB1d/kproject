<?php 
include "db.php";


$sql = "INSERT INTO ordert {user_email,desgnType} SELECT Email,Categoryname
FROM customer ";

if ($con->query($sql)===TRUE) {
//echo "<script>location.href='homepic.php'</script>";
}
else{
    //echo "<script>alert('Account already exist');</script>";
    //echo "<script>location.href='login.html'</script>";
    echo "impossible";

}
$con->close();
 ?>