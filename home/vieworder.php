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
button{

	width: 100px;
	height: 40px;
	color: white;
	background-color: blue;
	text-align: center;
	border-radius: 10px;
	margin-left: 1000px;
}

</style>
<script type="text/javascript">
	function bb(){
		location.href="admin.php";
	}
</script>
</head>
<body>
	<?php 
	include "db.php" ?>
	<section>
		<?php 
	include "try.php" ?>


		
	</section>
<section class="ord">
	<button onclick="bb()">back</button>
	<div>
		
<?php 
if (isset($_GET['action']) && $_GET['action']=='order' && $_GET['Id']) {
	?>
	<div>
		<div>

			<table class="table text-center mt-1 table-bordered" >
			<thead>
				<tr>
					
					<th>Category Name</th>
					<th>Description</th>
					<th>Status</th>
					
				</tr>
			</thead>
			<?php 
            $sql = "SELECT * FROM customer WHERE Id = ".$_GET['Id']."";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
            	while ($rows = $result->fetch_assoc()) {
            		$id = $rows['Id'];
            		$catnme = $rows['CategoryName'];
					$descr = $rows['Description'];
				 $st="Pending";
					
            

			 ?>
			 <tbody>
			 	<tr>
			 		
			 			<td><?php echo $catnme; ?></td>
			 			<td><?php echo $descr; ?></td>
			 			<td><?php echo $st;?></td>
			 			


			 	</tr>
			 </tbody>
			 <?php 
}
}
?>
		</table>
	</div>
</section>

</body>
</html>