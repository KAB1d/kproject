<?php
include 'db.php';
$p = $_POST["pwd"];
$newp = $_POST['newpwd'];

$check=0;
$test=0;
$sql = "SELECT Password,Uid FROM user WHERE Password = '$p'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  
  while($row = mysqli_fetch_assoc($result)) {
$pwd=$row["Password"];
$id=$row["Uid"];
if($p===$pwd){
$check=1;
}
}}
if ($check===1) {
	$sqlt = "UPDATE  user SET Password = '$newp' WHERE Uid = '$id'";
$result1 = mysqli_query($con, $sqlt);
echo "<script>alert ('password changed successfully')</script>";
        echo "<script>location.href='admin.php'</script>";
	}
	else{
echo "<script>alert ('you have put wrong current password please change')</script>";
        echo "<script>location.href='pass.php'</script>";
	}
	
?>
