<?php 
session_start();
if (!isset($_SESSION['emal'])) {
  header("location:login.html");
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Order</title>
		<style type="text/css">
		*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

	
.frm{
  background-image: linear-gradient(rgba(4,9,12,0.7),rgba(4,9,12,0.7)),url(ord.jpg);
	background-position: center;
	background-size: cover;
	position: relative;

  margin-top: 50px;
  padding: 30px;
  width: 50%;
  height: 380px;
  border-radius: 10px;
 

}
 .frm .field input{
  width: 80%;
  height: 30px;
  border-radius: 5px;
  font-size: 19px;
}
.frm .des input{
  height: 80px;
  width: 80%;
  border-radius: 5px;
  font-size: 14px;
}
.frm .leb{
  margin-top: 7px;
  font-size: 19px;
  text-align: left;
  margin-left: 65px;
  color: white;
  display: block;
}
.frm .cat{
  margin-top: 7px;
  font-size: 19px;
  text-align: left;
  margin-left: 65px;
  color: white;
  margin-bottom: -25px;
 
}
.frm .fet{
  width: 80%;
  height: 35px;
  border-radius: 5px;
  font-size: 19px;
}
.but input{
  margin-top: 40px;
  width: 80%;
  height: 35px;
  font-size: 19px;
  background-color:orange;
  color: white;
  border-radius: 20px;
}
.footer h3{
  margin-top: 40px;
  font-size: 13px;
}
select{
  width: 80%;
  height: 30px;
  margin-top: 30px;
  text-align: center;
  font-size: 19px;
}
.fr{

  margin-top: -30px;
}
@media(max-widt: 700px){

  .fr{
    flex-direction: column;
    margin-top: 110%;
    
      }
 .frm{
 width: 100%;
 height: 100%;
}

}


	</style>

</head>
<body>
	<?php 
		include "home.php";
echo "<style>button{ display : none;} </style>";
		 ?>
<section class="fr">
	<center>
		<form class="frm" action="getCst.php" method="POST">
			<div class="leb"><span>Address</span></div>
			<div class="field"><input type="text" name="adr" required=""></div>
      <div class="cat"><span>Design Category</span></div>
<select name="cate" >
    <option disabled selected >-- Select Category Design --</option>
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
  <div class="leb"><span>Date Of Order</span></div>
  <div class="field"><input type="date" id="order" name="order"  ></div>
			<div class="leb"><span>Descritpion</span></div>
			<div class="des"><input type="text" name="descript" required=""></div>
			<div class="but"><input type="submit" name="" value="Order"></div>
		</form>
	</center>
</section>
<section class="c">
<?php 
include "foot.php";
 ?>
 </section>

</body>
</html>