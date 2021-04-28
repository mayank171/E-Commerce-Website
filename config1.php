<?php

$mysql_host='localhost';
$mysql_user='root';
$mysql_password;
$mysql_database="useraccounts";

$db=mysqli_connect($mysql_host,$mysql_user,"",$mysql_database) or die("cannot connect");

?>