<?php

require_once('config1.php');

?>


<!doctype html>
<html>
<head>
    
<title></title>
<link rel="stylesheet" href="loginsignup6.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
  <div>
   <?php    
        if(isset($_POST['create']))
        {
              $firstname=$_POST['firstname'];
              $lastname=$_POST['lastname'];
              $email=$_POST['email'];
              $phonenumber=$_POST['phonenumber'];
              $password=$_POST['password'];
             
             $sql="insert into users(firstname,lastname,email,phonenumber,password) values ('$firstname','$lastname', '$email', '$phonenumber', '$password')";
             
             if(mysqli_query($db,$sql))
                   header('location:se3.php');
             
        }
        else if(isset($_POST['create1']))
        {     

            $email = $_POST['email']; 
            $password = $_POST['password']; 
            
            $sql="select firstname from users where email='".$email."' AND password='".$password."' limit 1";
            
            
            $result=mysqli_query($db,$sql);
            
            if(mysqli_num_rows($result))
            {
                session_start();
                mysqli_fetch_array($db,$sql);
                $firstname=$row['firstname'];
                $x=1;
                $_SESSION['firstname']=$firstname;
                $_SESSION['x']=$x;
                header('location:se3.php');
            }
            
            else
            {
                header("refresh: 1");
            }
            
            


        } 
        
  ?>  
</div>
    <span class="dot"></span>
    <span class="dot1"></span>
    <span class="half"></span>
    <form action="loginsignupform.php" method="post">
    <div class="container">
    <div class="one">
         <h1>SignUp</h1>
                <hr class="mb-3">
            
                <input class="firstname" type="text" name="firstname" id="firstname" placeholder="Enter Firstname" required>
              
                <input class="lastname" type="text" name="lastname" id="lastname" placeholder="Enter Lastname"  required>
              
                <input class="email" type="text" name="email" id="email" placeholder="Enter Email" required>
              
            
                <input class="phonenumber" type="text" name="phonenumber" id="phonenumber" placeholder="Enter Phonenumber" required>
              
              
                <input class="password" type="password" name="password" id="password" placeholder="Enter Password" required>
              
                <hr class="mb-3">
                <input class="btn" type="submit" id="register" name="create" value="Sign Up">
        </div>
    
    </div>
    </form>
    
    
    <span class="laser"></span>
    <span class="dot10"></span>
    <span class="dot11"></span>
    <span class="half11"></span>
    
    <div>
    
    
    
    
    </div>
    <form action="loginsignupform.php" method="post">
    <div class="container1">
    <div class="one1">
         <h1>SignUp</h1>
                <hr class="mb-3">
            
                <input class="firstname_email" type="text" name="email" id="firstname_email" placeholder="Enter Email" required>
              
              
                <input class="password" type="password" name="password" id="password" placeholder="Enter Password" required>
              
                <hr class="mb-3">
                <input class="btn" type="submit" id="register" name="create1" value="Login">
        </div>
    
    </div>
    </form>
    
</body>


</html>