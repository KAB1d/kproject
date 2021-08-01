<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
 margin-left: 50px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: blue;
  color: white;
}
#customers td a{
	display: block;
	background-color: green;
	color: white;
	font-size: 16px;
	border-radius: 10px;
	text-decoration: none;

}
.ord{
	margin: 20px;
}
.text-center{
	color: red;
}
input{
	width: 80%;
	background-color: green;
	color: black;
	text-align: center;
	border-radius: 10px;
	margin-top: 3px;
}
</style>
<script type="text/javascript">
	function onclick() {
   document.getElementById("demo").innerHTML = "checked";
	}
</script>
</head>
<body>
	<?php 
	include "db.php" ?>
	<section>
		<?php 
	include "top.php" ?>
	</section>
<section class="ord">
	<div>
		<table id="customers" >
			<thead>
				<tr>
					<th>Id</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Telephone</th>
					<th>Address</th>
					<th>Category Name</th>
					<th>Description</th>
					<th>Date of Order</th>
					<th class="text-center">Status</th>
					<th>Check Out</th>
					
					
				</tr>
			</thead>
			<?php 
            $sql = "SELECT * FROM customer";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
            	while ($rows = $result->fetch_assoc()) {
            		$Id = $rows['Id'];
					$FirstName = $rows['FirstName'];
					$LastName = $rows['LastName'];
					$Email = $rows['Email'];
					$Telephone = $rows['Telephone'];
					$Address = $rows['Address'];
					$ctan = $rows['CategoryName'];
					$des = $rows['Description'];
					$dat = $rows['Date'];
					$sts = "Pending";
					
            

			 ?>
			 <tbody>
			 	<tr>
			 		
			 			<td><?php echo $Id; ?></td>
			 			<td><?php echo $FirstName; ?></td>
			 			<td><?php echo $LastName; ?></td>
			 			<td><?php echo $Email; ?></td>
			 			<td><?php echo $Telephone; ?></td>
			 			<td><?php echo $Address; ?></td>
			 			<td><?php echo $ctan; ?></td>
			 			<td><?php echo $des; ?></td>
			 			<td><?php echo $dat; ?></td>
			 			<td><?php echo $sts; ?></td>
			 			<td><input  type="button" name="" onclick="reply()" value="Reply"><p id="demo"></p></td>
			 			
            


			 	</tr>
			 </tbody>
			 <?php 
}
}
?>
		</table>
	</div>
</section>

		</div>

	</div>


 </body>
</html>

