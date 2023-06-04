<?php
session_start();

     $server="localhost";
     $username="root";
     $password="";
    
     
    
     $conn=mysqli_connect("localhost","root","","booking");

     if(!$conn){
          die("connection to this database failed due to".mysqli_connect_error());
     }
    extract($_POST);
     $sql ="INSERT INTO `tickets` (`t_status`, `source station`, `destination station`, `journey date`, `class`) VALUES ('Waiting', '$source_station', '$destination_station', '$travel_date', '$class')";
     if(mysqli_query($conn, $sql)){
        echo "
        <script>alert('Directing to payment gateway');
         window.location.href='book tickets.php';
        </script>";
        header ("location:payment.php");
        
     }
     else{
        echo "
        <script>alert('Something went wrong!');
        window.location.href='book tickets.php';
        </script>";

     }
   


   ?>