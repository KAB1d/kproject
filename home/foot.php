<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width">
   <title>repl.it</title>
   
   <style>
     body {
       font-family: Arial
     }
     .f{
      overflow: hidden;
  background-color: gray;
  color: white;
  padding: 20px;
  font-size: 17px;
   position:absolute;
   bottom:0;
   width: 100%;
   height: 50px;
   
     }
  
   </style>
   <script>
     function todayDate(){
        var d = new Date();
        var n = d.getFullYear() + "  ";
        return document.getElementById("date").innerHTML = n;
      }
   </script>
 </head>
 <body onload=todayDate()>
     <center><footer class="f">
      &copy; <em id="date"></em> K & K Home Design
    </footer>
    </center>
 </body>
</html>