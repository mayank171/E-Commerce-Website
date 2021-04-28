<?php



session_start();
if($_SESSION['size']) 
{
    $size=$_SESSION['size'];
    echo $size;
}
if($_SESSION['color'])
{
    $color=$_SESSION['color'];
    echo $color;
}

?>