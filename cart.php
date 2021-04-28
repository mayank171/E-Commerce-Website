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

session_start();
if($params['value']==1)
{
    $name="mens boots";
    $price=30.99;
    $product=array($name,$price,1);
    $_SESSION[$name]=$product;
}
else if($params['value']==2)
{
    $name="G-Shock Watch";
    $price=25;
    $product=array($name,$price,1);
    $_SESSION[$name]=$product;
    
}
else if($params['value']==3)
{
    $name="Razor Basilisk Ultimate";
    $price=169.99;
    $product=array($name,$price,1);
    $_SESSION[$name]=$product;
    
}
else if($params['value']==4)
{
    $name="Iphone 11 pro";
    $price=array(699,849);
    $product=array($name,$price,1);
    $_SESSION[$name]=$product;
    
}
else if($params['value']==5)
{
    $name="MEN’S COLLINSTON BRUSHED FLEECE SHERPA-LINED SWEATSHIRT";
    $price=array(64.66,105.99);
    $product=array($name,$price,1);
    $_SESSION[$name]=$product;
    
}
else if($params['value']==6)
{
    $name="Women's Cashmere Knitted Turtleneck Long Winter Pullover Sweater Dress";
    $price=array(44.93,57.38);
    $product=array($name,$price,1);
    $_SESSION[$name]=$product;
    
}
else if($params['value']==7)
{
    $name="LG C9 Class 4K Smart OLED TV w/ AI ThinQ";
    $price=array(1500,4500);
    $product=array($name,$price,1);
    $_SESSION[$name]=$product;
    
}
else if($params['value']==8)
{
    $name="MacBook Pro (16-inch, 2019)";
    $price=2399;
    $product=array($name,$price,1);
    $_SESSION[$name]=$product;
    
}
else if($params['value']==9)
{
    $name="W Series Side by Side 603 L Refrigerator Sterling Steel";
    $price=1300;
    $product=array($name,$price,1);
    $_SESSION[$name]=$product;
    
}
else if($params['value']==10)
{
    $name="THE ARCHER Men's Green Jogger";
    $price=18;
    $product=array($name,$price,1);
    $_SESSION[$name]=$product;
    
}
else if($params['value']==11)
{
    $name="Vivo V15 Pro (Ruby Red, 6GB RAM, 128GB Storage)";
    $price=285;
    $product=array($name,$price,1);
    $_SESSION[$name]=$product;
    
}
else if($params['value']==12)
{
    $name=" Zanussi Lindo 300 ZWF01483W";
    $price=377;
    $product=array($name,$price,1);
    $_SESSION[$name]=$product;
    
}
else if($params['value']==13)
{
    $name="CORSICA(Women White Solid Mid-Top Heeled Boots)";
    $price=28;
    $product=array($name,$price,1);
    $_SESSION[$name]=$product;
    
}
else if($params['value']==14)
{
    $name="Nivia STORM Assorted Football Size- 5";
    $price=12;
    $product=array($name,$price,1);
    $_SESSION[$name]=$product;
    
}
else if($params['value']==15)
{
    $name="RESIST - Mens Black Round Sunglasses";
    $price=11;
    $product=array($name,$price,1);
    $_SESSION[$name]=$product;
    
}
else if($params['value']==16)
{
    $name="Amazon Echo (3rd Gen)";
    $price=125;
    $product=array($name,$price,1);
    $_SESSION[$name]=$product;
    
}
else if($params['value']==17)
{
    $name="O GENERAL ASGA18FTTA 1.5 TON 5 STAR SPLIT AC";
    $price=819.99;
    $product=array($name,$price,1);
    $_SESSION[$name]=$product;
    
}
else if($params['value']==18)
{
    $name="Women Sea Green Solid Longline Wool Trench Coat With Fabric Belt";
    $price=42.99;
    $product=array($name,$price,1);
    $_SESSION[$name]=$product;
    
}
else if($params['value']==19)
{
    $name="Eureka Forbes Aquaguard Delight 7-litres Table Top/Wall Water Purifier";
    $price=228;
    $product=array($name,$price,1);
    $_SESSION[$name]=$product;
    
}
else if($params['value']==20)
{
    $name="Nike Men's Hypervenom Phantom II NJR FG Football Boots";
    $price=155.99;
    $product=array($name,$price,1);
    $_SESSION[$name]=$product;
    
}

header('location:se3.php');

?>
    
    
