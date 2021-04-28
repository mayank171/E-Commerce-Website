<?php
/*
to connect to your mysql server you need to specify :
  1. your hostname
  2. your username
  3. your password(if any)
*/
$mysql_host='localhost';
$mysql_user='root';
$mysql_password;
/*
to connect to your mysql server use command mysqli_connect and pass parametersas:
  1. your hostname
  2. your username
  3. your password(if any)
else if you didn't connect then you can print user defined messages also by 
writing "or die(your message)"
We use @ to remove warnings.  
*/
$dbc=mysqli_connect($mysql_host,$mysql_user,"") or die("cannot connect");

echo "connection success";
// mysqli_select_db will select your data base  
mysqli_select_db($dbc,'student');

?>