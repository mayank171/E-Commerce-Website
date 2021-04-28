<?php

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

if($params['value']==7)
{
    $size=7;
    echo $size.'&nbsp';
}
if($params['value']==8)
{
    $size=8;
    echo $size.'&nbsp';
}
if($params['value']==9)
{
    $size=9;
    echo $size.'&nbsp';
}
if($params['value']==10)
{
    $size=10;
    echo $size.'&nbsp';
}
if($params['value']=="red")
{
    $color="red";
    echo $color.'&nbsp';
}
if($params['value']=="green")
{
    $color="green";
    echo $color.'&nbsp';
}
if($params['value']=="black")
{
    $color="black";
    echo $color.'&nbsp';
}
header('location:buy.php');
?>