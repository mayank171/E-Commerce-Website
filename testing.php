<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="testing7.css">
</head>
<body>
     
    <div class="container">
    <form action="" method="post"> 
          <div class="card">
        
            <div class="imgbox">
              
               <img src="gshocknew.png" height="330" width="350"> 
              
            </div>
            <div class="contentbx">
            <br>
              <h2>G-Shock Watch</h2>
                
                  <div class="color">
                 <h3>Select a Color:</h3>
                
                  <a href="#"><button name="color" value="green" class="btn1"></button></a>
                  <a href="#"><button name="color" value="red" class="btn2"></button></a>
                  <a href="#"><button name="color" value="black" class="btn3"></button></a>
                 
                </div>
                 
                </div>
        </div>
    </form>
    </div>
     <button class="proceed" name="btn" value="enable"> <a href="test_ver1.php">Proceed</a></button>
    
</body>

</html>
<?php

$color="zero";
   session_start();
     if(isset($_POST['color']))
     {
         $color=$_POST['color'];
       
         if($color!="zero")
          $_SESSION['color']=$color;
         else 
             echo "select all attributes!";
     }
     
?>


   