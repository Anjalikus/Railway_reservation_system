<?php
     $server="localhost";
     $username="root";
     $password="";
    
     
    
     $conn=mysqli_connect("localhost","root","","info_signup");
     if(!$conn)
     {
          die("connection to this database failed due to".mysqli_connect_error());
     }
   
       extract($_POST);
       $exists=false;
       if(($Password== $Confirm_Password) && $exists==false)
       {
        $sql = "INSERT INTO `signup` ( `first`, `last`, `password`,`email`, `phone`, `gender`, `dob`) VALUES ('$First_Name','$Last_Name','$Password','$Email','$Phone','$gender','$Date_of_birth')";
        if(mysqli_query($conn, $sql)){
            echo "
            <script>alert('Your account is created');
             window.location.href='sign up.php';
            </script>";
            
         }
        }
         else{
            echo "
            <script>alert('Something went wrong!');
            window.location.href='sign up.php';
            </script>";
    
         }
        
    
    
    
       ?>