<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="home.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
    .top{
        margin: 20px;
    }
    .top img{
         box-shadow: 10px 10px 10px gray;
    }

.gg{
        display: flex;
        justify-content: space-between;
    }
    .gg h1{
    
        margin-top: 40px;
        font-size: 45px;
    text-align: center;
    color: black;
    }

    .but button{

margin-top: 50px;
width: 100px;
height: 40px;
border-radius: 20px;
margin-right: 50px;
background-color: orange;
font-family: Impact;
font-size: 20px;
color: white;
cursor: pointer;
}
.ib{
    margin-top: -40px;
}
#image{
            display: flex;
            flex-wrap: wrap;
        }
#image > div{
            background-color: whitesmoke;
            padding: 20px;
            width: 550px;
            font-size: 20px;
            margin: 20px;
            height: 700px;
            margin-left: 50px;
            
        }
#image > div >img{
            width:  100%;
            height: 80%;
        }
#image  :hover{
            box-shadow: 0 0 20px 0px rgba(0,0,0,0.2);
            color: blue;
        }
#image h2{
    font-size: 19px;
}
#image p{
    font-size: 14px;
}
input{
font-size: 16px;
color: black;
background-color: lightgray;
padding: 3px;
width: 100px;
border-radius: 15px;
cursor: pointer;
}

</style>
<script type="text/javascript">
    function lgt() {
        location.href="logout.php";
    }
</script>
</head>
<body>
<section class="gg">
        
            <div class="top"><img src="log.jpg" width="100px" height="100px" ></div>
            <div><h1>K & K Home Design</h1></div>
            <div class="but"><a href="orderform.php"><button>Order</button></a></div>
    </section>

    <section>
    <div class="nav">
        <label for="toggle">&#9776;</label>
        <input type="checkbox" id="toggle"/>
        <div class="menu">
            

                    
                    <a href="homepic.php" >Home</a>
                    <a href="living.php">Living Room Designs</a>
                   <a href="dining.php">Dining Room Designs</a>
                    <a href="bed.php">Bed Room Designs</a>
                    <a href="bathroom.php">Bathroom Designs</a>
                   <a href="kitchen.php">Kitchen Designs</a>
                    <a href="kidpic.php" >Kids Room Designs</a>
                    <input type="button" name="" value="Logout" onclick="lgt()">

                
        </div>
    </div>
    </section>
</body>
</html>