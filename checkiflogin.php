<?php

session_start();
$x=$_SESSION['x'];
if($x==0)
    header('location:loginsignupform.php');
else
    header('location:buy2.php');


?>