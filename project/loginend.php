<?php 
session_start();
$conn = mysqli_connect("localhost","root","","info_signup");
if(!$conn){  
  	die('Could not connect: '.mysqli_connect_error());
}

extract($_POST);
$sql = "SELECT * FROM `signup` WHERE email= '$loginUser' and  password='$loginPassword'";
$sql_result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($sql_result)==1){
        
		echo "
        <script>alert('Logged in successfully');
        </script>";
        header("location:navi2.php");
		
		
		

	
	
}
	else{
		echo "
        <script>alert('Wrong email or password');
        </script>";
	}

	



?>