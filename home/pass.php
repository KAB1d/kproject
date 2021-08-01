<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script type="text/javascript">
      function back(){

        location.href="admin.php";
      }
    </script>
    <style type="text/css">
    body{
      background-color: lightgray;
    }
      form{
        background-image: linear-gradient(rgba(4,9,12,0.7),rgba(4,9,12,0.7)),url(bac.jpg);
    
  background-position: center;
  background-size: cover;
  position: relative;
  height: 500px;
  width: 50%;
  margin-top: 50px;
  padding: 20px;
      }
      h2{
        margin-top: 50px;
        padding: 10px;
        color: white;
        font-size: 35px;
      }
      
      .cur{
        padding: 10px;
        color: white;
        font-size: 25px;
        text-align: left;
        margin-left: -215px;

      }
      .nw{
        padding: 10px;
        color: white;
        font-size: 25px;
        text-align: left;
        margin-left: -245px;
      }
      .inpt{
        width: 60%;
        margin-right: 20px;
      }
      button{
        background-color: blue;
        color: white;
        height: 40px;
        margin-top: 30px;  
        width: 20%; 
        font-size: 16px;   
        font-style: bold;  
        border-radius: 15px;
      }
      .but{
        display: flex;
        justify-content: space-between;
      }
      .chn{
        margin-left: 130px;
      }
      .bac{
        margin-right: 150px;
      }
    </style>
</head>
<body>

<div class="">

  
 

    <div class="">
        <div class="">
     <center> 
      <form action="changep.php" method="POST">
<div class="">
      <center><h2>Change Password</h2></center>
  </div>
              <div class="">
                <label for="" class="cur">Current Password</label></div>
                <div>
                <input type="password" name="pwd" required="" class="inpt">
              </div> 
              <div class="">
                <label for="" class="nw">New Password  </label></div>
                <div>
                <input type="password" name="newpwd" required="" class="inpt">
              </div>

              <div class="but"><button type="submit" value="Change" class="chn">Change</button>
              <button value="Back" onclick="back()" class="bac">Back</button></div>

            </form>
          </center>

        </div>
    </div>        
</div>

</body>
</html>
