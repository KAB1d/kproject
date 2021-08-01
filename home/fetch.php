<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    .tx{
      font-size: 19px;
      height: 35px;
      width: 100%;

    }
    body{
        font-size: 19px;
      height: 35px;
      width: 100%;
    }
  </style>
  </head>
<body>
  <div class="tx">
  <select>
    <option disabled selected>-- Select Category Design --</option>
    <?php
        include "db.php";  // Using database connection file here
        $records = mysqli_query($con, "SELECT CategoryName From design");  // Use select query here 
        if($records)
        {
          echo "correct";
        }
        else
        {
          echo "incorrect".mysqli_error();
        }

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['CategoryName'] ."'>" .$data['CategoryName'] ."</option>";  // displaying data in option menu
        } 
    ?>  
  </select>
<?php mysqli_close($con);  // close connection ?>
</div>
</body>
</html>