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
if($params['value']==10)
{
    $name="The ARCHER Men's Jogger";
    $price=18;
    $product=array($name,$price,1);
    $_SESSION[$name]=$product;
}
else if($params['value']==14)
{
    $name="NIVIA Storm Assorted Football (Size-5)";
    $price=12;
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

header('location:sports.php');
?>