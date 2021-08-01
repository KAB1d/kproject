<?php
include "db.php";
$sqlt = "SELECT FirstName FROM user ";
$result = $con->query($sqlt);

if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
       
          echo  $row["FirstName"];
  
}}
 else {
  echo "0 results";
}

?>