<?php

require_once('config.php');

?>

<!DOCTYPE html>
<html> 
<head>
    
   <title>User registration</title>    
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
                   echo "new record creted";
             else
                   echo mysqli_error($db);
             
        }
        
       ?>    
        
    </div>
       <form action="registration.php" method="post">
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                <h1>Registration</h1>
                <p>Fill up the form</p>
                <hr class="mb-3">
                <label for="firstname">First-Name</label>
                <input class="form-control" type="text" name="firstname" id="firstname" required>
              
                <label for="lastname">Last-Name</label>
                <input class="form-control" type="text" name="lastname" id="lastname" required>
              
                <label for="email">Email-Address</label>
                <input class="form-control" type="text" name="email" id="email" required>
              
                <label for="firstname">Phone-Number</label>
                <input class="form-control" type="text" name="phonenumber" id="phonenumber" required>
              
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password"  required>
              
                <hr class="mb-3">
                <input class="btn btn-primary" type="submit" id="register" name="create" value="sign up">
              </div>
           
           </div> 
          </div>
        
        
       </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript">
          
        $(function(){
            
           // alert('hello.');
            Swal.fire({
                'title':'hello world',
                'text':'this is from sweatalert2',
                'type':'success'
            })
            
        });
        
    </script>
    </body>


</html>