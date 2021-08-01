<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
 display:inline-flex;
 justify-content: space-between;
 padding: 0;
 width: 100%;
 background-color: gray;

 
}

.topnav  a {
 
  color: #f2f2f2;
  float: left;
  padding:  16px;
  text-decoration: none;
  font-size: 17px;
  text-align: center;
  width: 150px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.topnav a.active {
  background-color: lightblue;
  color: white;
}
.home{
  margin-left: -100px;
}
.pass{
  margin-left: -100px;
}
img{
  margin-left: 60px;
  margin-top: 3px;
}
.log{
   margin-right: 100px;
}
</style>
</head>
<body>

<div class="topnav">
 <img src="log.jpg" width="48px" height="48px"> 
  
<div class="home"><a class="active" href="admin.php">Home</a></div>
   <div class="pass"><a href="pass.php">Change Password</a></div> 
  <div class="log"><a href="logout.php">LOGOUT</a></div>
 
</div>

</body>
</html>

