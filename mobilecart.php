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
if($params['value']==4)
{
    $name="Iphone 11 Pro";
    $price=array(699,849);
    $product=array($name,$price,1);
    $_SESSION[$name]=$product;
}
else if($params['value']==11)
{
    $name="Vivo V15 Pro";
    $price=285;
    $product=array($name,$price,1);
    $_SESSION[$name]=$product;
    
}


header('location:mobile.php');
?>