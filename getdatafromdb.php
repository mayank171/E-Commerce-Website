<?php

include_once('connect.php');
$query="SELECT * FROM user_info";
$result=mysqli_query($dbc,$query);
while($rows=mysqli_fetch_assoc($result))
{
    echo $rows['Name'];
}