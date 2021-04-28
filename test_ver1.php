<?php

session_start();
$size=$_SESSION['size'];
$color=$_SESSION['color'];
echo $size . '&nbsp' . $color;

?>