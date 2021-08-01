<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<title>Home</title>
	<style type="text/css">
		.vu{
			margin-top: 50px;
		}
		@media (max-width: 700px){
			.vu{
				margin-top: 110%;
			}
		}
	</style>
</head>
<body><section>
	<?php 
		include "home.php";
echo "<style>input{ display : none;} </style>";
		 ?>
		 	
		 </section>
		 <section class="vu">
	<?php 
include "visitus.php";
	 ?>
	 	
	 </section>
</section>
</body>
</html>