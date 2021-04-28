<?php

// Program to display URL of current page. 

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
	$link = "https"; 
else
	$link = "http"; 

// Here append the common URL characters. 
$link .= "://"; 

// Append the host(domain name, ip) to the URL. 
$link .= $_SERVER['HTTP_HOST']; 

// Append the requested resource location to the URL 
$link .= $_SERVER['REQUEST_URI']; 
	
$url_components=parse_url($link);

parse_str($url_components['query'],$params);

error_reporting(E_ERROR |  E_PARSE);  


if($params['value']==1)
{
    
    echo '<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="buyproduct1.css">
</head>
<body>
     
    <div class="container">
    <form action="" method="post"> 
          <div class="card">
        
            <div class="imgbox">
              
               <img src="1.0.png" height="400" width="300"> 
              
            </div>
            <div class="contentbx">
            
              <h2>Mens Shoes</h2>
                <div class="size">
                 <h3>Select your Size:</h3>
                  <a href="#"><button name="size" value=9><span>9</span></button></a>
                  <a href="#"><button name="size" value=10><span>10</span></button></a>
                  <a href="#"><button name="size" value=11><span>11</span></button></a>
                </div>
                
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
     <button class="proceed" name="btn" value="enable"> <a href="checkiflogin.php">Proceed</a></button>
    
</body>

</html>';

$size=0;
$color="zero";
   session_start();
     if(isset($_POST['size']))
     {
         $size=$_POST['size'];
         if($size!=0)
          $_SESSION['size']=$size;
         else 
             echo "select all attributes!";
     }
     if(isset($_POST['color']))
     {
         $color=$_POST['color'];
         if($color!="zero")
          $_SESSION['color']=$color;
         else 
             echo "select all attributes!";
     }

}
else if($params[value]==2)
{
    echo '<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="buyproduct2.css">
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
                
                  <a href="#"><button name="color" value="green" class="btn1" required></button></a>
                  <a href="#"><button name="color" value="red" class="btn2" required></button></a>
                  <a href="#"><button name="color" value="black" class="btn3" required></button></a>
                 
                </div>
                 
                </div>
        </div>
    </form>
    </div>
     <button class="proceed" name="btn" value="enable"> <a href="checkiflogin.php">Proceed</a></button>
    
</body>

</html>';

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
     

}

else if($params[value]==4)
{
    echo '<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="buyproduct4.css">
</head>
<body>
     
    <div class="container">
    <form action="" method="post"> 
          <div class="card">
        
            <div class="imgbox">
              
               <img src="newiphone.png" height="330" width="390"> 
              
            </div>
            <div class="contentbx">
            
              <h2>Iphone 11 Pro</h2>
                <div class="size">
                 <h3>Select your Configuration:</h3>
                  <a href="#"><button name="size" value=64><span>64GB</span></button></a>
                  <a href="#"><button name="size" value=128><span>128GB</span></button></a>
                  <a href="#"><button name="size" value=256><span>256GB</span></button></a>
                  
                </div>
                
                <div class="color">
                 <h3>Select a Color:</h3>
                
                  <a href="#"><button name="color" value="golden" class="btn1"></button></a>
                  <a href="#"><button name="color" value="grey" class="btn2"></button></a>
                  <a href="#"><button name="color" value="black" class="btn3"></button></a>
                 
                </div>
              
            </div>
              
          </div>
    </form>
    </div>
     <button class="proceed" name="btn" value="enable"> <a href="checkiflogin.php">Proceed</a></button>
    
</body>

</html>

';

$size=0;
$color="zero";
   session_start();
     if(isset($_POST['size']))
     {
         $size=$_POST['size'];
         if($size!=0)
          $_SESSION['size']=$size;
         else 
             echo "select all attributes!";
     }
     if(isset($_POST['color']))
     {
         $color=$_POST['color'];
         if($color!="zero")
          $_SESSION['color']=$color;
         else 
             echo "select all attributes!";
     }
    
}
else if($params[value]==5)
{
    echo '<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="buyproduct5.css">
</head>
<body>
     
    <div class="container">
    <form action="" method="post"> 
          <div class="card">
        
            <div class="imgbox">
              
               <img src="newsherpa.png" height="330" width="390"> 
              
            </div>
            <div class="contentbx">
            
              <h2>MEN’S COLLINSTON BRUSHED FLEECE SHERPA-LINED SWEATSHIRT</h2>
                <div class="size">
                 <h3>Select your Configuration:</h3>
                  <a href="#"><button name="size" value="medium"><span>M</span></button></a>
                  <a href="#"><button name="size" value="large"><span>L</span></button></a>
                  <a href="#"><button name="size" value="extralarge"><span>XL</span></button></a>
                  
                </div>
                
                <div class="color">
                 <h3>Select a Color:</h3>
                
                  <a href="#"><button name="color" value="darkblue" class="btn1"></button></a>
                  <a href="#"><button name="color" value="black" class="btn2"></button></a>
                  <a href="#"><button name="color" value="grey" class="btn3"></button></a>
                 
                </div>
              
            </div>
              
          </div>
    </form>
    </div>
     <button class="proceed" name="btn" value="enable"> <a href="buy2.php">Proceed</a></button>
    
</body>

</html>';

$size="zero";
$color="zero";
   session_start();
     if(isset($_POST['size']))
     {
         $size=$_POST['size'];
        
         if($size!="zero")
          $_SESSION['size']=$size;
         else 
             echo "select all attributes!";
     }
     if(isset($_POST['color']))
     {
         $color=$_POST['color'];
       
         if($color!="zero")
          $_SESSION['color']=$color;
         else 
             echo "select all attributes!";
     }



}
else if($params[value]==6)
{
    echo '<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="buyproduct6.css">
</head>
<body>
     
    <div class="container">
    <form action="" method="post"> 
          <div class="card">
        
            <div class="imgbox">
              
               <img src="newwomensherpa.png" height="330" width="350"> 
              
            </div>
            <div class="contentbx">
            
              <h2>Womens Cashmere Knitted Turtleneck Long Sleeve Winter Wool Pullover Long Sweater Dress</h2>
                <div class="size">
                 <h3>Select your Size:</h3>
                  <a href="#"><button name="size" value="medium"><span>M</span></button></a>
                  <a href="#"><button name="size" value="large"><span>L</span></button></a>
                  <a href="#"><button name="size" value="elarge"><span>XL</span></button></a>
                  
                </div>
                
                
              
            </div>
              
          </div>
    </form>
    </div>
     <button class="proceed" name="btn" value="enable"> <a href="buy2.php">Proceed</a></button>
    
</body>

</html>';

$size="zero";
   session_start();
     if(isset($_POST['size']))
     {
         $size=$_POST['size'];
        
         if($size!="zero")
          $_SESSION['size']=$size;
         else 
             echo "select all attributes!";
     }



   
}
else if($params[value]==7)
{
    echo '<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="buyproduct7_1.css">
</head>
<body>
     
    <div class="container">
    <form action="" method="post"> 
          <div class="card">
        
            <div class="imgbox">
              
               <img src="newoled.png" height="330" width="350"> 
              
            </div>
            <div class="contentbx">
            
              <h2>LG C9 Class 4K Smart OLED TV w/ AI ThinQ</h2>
                <div class="size">
                 <h3>Select your Size:</h3>
                  <a href="#"><button name="size" value="55 inches"><span>55"</span></button></a>
                  <a href="#"><button name="size" value="65 inches"><span>65"</span></button></a>
                  <a href="#"><button name="size" value="77 inches"><span>77"</span></button></a>
                  
                </div>
                
                
              
            </div>
              
          </div>
    </form>
    </div>
     <button class="proceed" name="btn" value="enable"> <a href="buy2.php">Proceed</a></button>
    
</body>

</html>';

$size="zero";
   session_start();
     if(isset($_POST['size']))
     {
         $size=$_POST['size'];
        
         if($size!="zero")
          $_SESSION['size']=$size;
         else 
             echo "select all attributes!";
     }

}
else if($params[value]==8)
{
    echo '<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="buyproduct8.css">
</head>
<body>
     
    <div class="container">
    <form action="" method="post"> 
          <div class="card">
        
            <div class="imgbox">
              
               <img src="newmacbook.png" height="330" width="350"> 
              
            </div>
            <div class="contentbx">
            
              <h2>MacBook Pro (16-inch, 2019)</h2>
                
                
                <div class="color">
                 <h3>Select a Color:</h3>
                
                  <a href="#"><button name="color" value="darkblue" class="btn1"></button></a>
                  <a href="#"><button name="color" value="brown" class="btn2"></button></a>
                  <a href="#"><button name="color" value="grey" class="btn3"></button></a>
                 
                </div>
              
            </div>
              
          </div>
    </form>
    </div>
     <button class="proceed" name="btn" value="enable"> <a href="buy2.php">Proceed</a></button>
    
</body>

</html>';
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

   
}
else if($params[value]==9)
{
    echo '<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="buyproduct9.css">
</head>
<body>
     
    <div class="container">
    <form action="" method="post"> 
          <div class="card">
        
            <div class="imgbox">
              
               <img src="newfridge.png" height="330" width="350"> 
              
            </div>
            <div class="contentbx">
            <br>
              <h2>W Series Side by Side 603 L Refrigerator Sterling Steel</h2>
                
                
                <div class="color">
                 <h3>Select a Color:</h3>
                
                  <a href="#"><button name="color" value="orange" class="btn1"></button></a>
                    <a href="#"><button name="color" value="grey" class="btn2"></button></a>
                 
                </div>
              
            </div>
              
          </div>
    </form>
    </div>
     <button class="proceed" name="btn" value="enable"> <a href="buy2.php">Proceed</a></button>
    
</body>

</html>';

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

   
}
else if($params[value]==10)
{
    echo '<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="buyproduct10.css">
</head>
<body>
     
    <div class="container">
    <form action="" method="post"> 
          <div class="card">
        
            <div class="imgbox">
              
               <img src="newjogger.png" height="330" width="350"> 
              
            </div>
            <div class="contentbx">
            <br>
              <h2>THE ARCHER Men Green Jogger</h2>
                
                
                <div class="color">
                 <h3>Select a Color:</h3>
                
                  <a href="#"><button name="color" value="golden" class="btn1"></button></a>
                    <a href="#"><button name="color" value="dark-green" class="btn2"></button></a>
                 
                </div>
              
            </div>
              
          </div>
    </form>
    </div>
     <button class="proceed" name="btn" value="enable"> <a href="buy2.php">Proceed</a></button>
    
</body>

</html>';
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
 

   
}
else if($params['value']==16)
{
    echo '<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="buyproduct16.css">
</head>
<body>
     
    <div class="container">
    <form action="" method="post"> 
          <div class="card">
        
            <div class="imgbox">
              
               <img src="echo.png" height="330" width="350"> 
              
            </div>
            <div class="contentbx">
            <br>
              <h2>Amazon Echo (3rd Gen)</h2>
                
                
                <div class="color">
                 <h3>Select a Color:</h3>
                
                  <a href="#"><button name="color" value="black" class="btn1"></button></a>
                    <a href="#"><button name="color" value="grey" class="btn2"></button></a>
                 
                </div>
              
            </div>
              
          </div>
    </form>
    </div>
     <button class="proceed" name="btn" value="enable"> <a href="buy2.php">Proceed</a></button>
    
</body>

</html>';


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

   
}
else if($params['value']==18)
{
    echo '<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="buyproduct18.css">
</head>
<body>
     
    <div class="container">
    <form action="" method="post"> 
          <div class="card">
        
            <div class="imgbox">
              
               <img src="newwomen.png" height="330" width="350"> 
              
            </div>
            <div class="contentbx">
            <br>
              <h2>Women Sea Green Solid Longline Wool Trench Coat With Fabric Belt</h2>
                <div class="size">
                 <h3>Select your Size:</h3>
                  <a href="#"><button name="size" value="large"><span>L</span></button></a>
                  <a href="#"><button name="size" value="extra-large"><span>XL</span></button></a>
                  <a href="#"><button name="size" value="extra extra large"><span>XXL</span></button></a>
                  
                </div>
                
                <div class="color">
                 <h3>Select a Color:</h3>
                
                  <a href="#"><button name="color" value="turquishe" class="btn1"></button></a>
                    <a href="#"><button name="color" value="red" class="btn2"></button></a>
                 
                </div>
              
            </div>
              
          </div>
    </form>
    </div>
     <button class="proceed" name="btn" value="enable"> <a href="buy2.php">Proceed</a></button>
    
</body>

</html>';
$size="zero";
$color="zero";
   session_start();
     if(isset($_POST['size']))
     {
         $size=$_POST['size'];
         if($size!="zero")
          $_SESSION['size']=$size;
         else 
             echo "select all attributes!";
     }
     if(isset($_POST['color']))
     {
         $color=$_POST['color'];
         if($color!="zero")
          $_SESSION['color']=$color;
         else 
             echo "select all attributes!";
     }

   
}
else if($params['value']==20)
{
    echo '<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="buyproduct20.css">
</head>
<body>
     
    <div class="container">
    <form action="" method="post"> 
          <div class="card">
        
            <div class="imgbox">
              
               <img src="newshoe.png" height="330" width="350"> 
              
            </div>
            <div class="contentbx">
            <br>
              <h2>Nike Men Hypervenom Phantom II NJR FG Football Boots</h2>
                
                  <div class="size">
                 <h3>Select your Size:</h3>
                  <a href="#"><button name="size" value="9"><span>9</span></button></a>
                  <a href="#"><button name="size" value="10"><span>10</span></button></a>
                  <a href="#"><button name="size" value="11"><span>11</span></button></a>
                  
                </div>
                 
                </div>
        </div>
    </form>
    </div>
     <button class="proceed" name="btn" value="enable"> <a href="buy2.php">Proceed</a></button>
    
</body>

</html>';

$size=0;
   session_start();
     if(isset($_POST['size']))
     {
         $size=$_POST['size'];
       
         if($size!=0)
          $_SESSION['size']=$size;
         else 
             echo "select all attributes!";
     }

   
}
else if($params[value]==3)
{
    header('location:buy2.php?value=3');
}
else if($params['value']==11)
{
    header('location:buy2.php?value=11');
}
else if($params['value']==12)
{
    header('location:buy2.php?value=12');
}
else if($params['value']==13)
{
    header('location:buy2.php?value=13');
}
else if($params['value']==14)
{
    header('location:buy2.php?value=14');
}
else if($params['value']==15)
{
    header('location:buy2.php?value=15');
}
else if($params['value']==17)
{
    header('location:buy2.php?value=17');
}
else if($params['value']==19)
{
    header('location:buy2.php?value=19');
}
?>