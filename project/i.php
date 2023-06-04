<?php 
$conn = mysqli_connect("localhost","root","","booking");
if(!$conn){  
  	die('Could not connect: '.mysqli_connect_error());  
}

$pnr=$_POST['pnr'];
$sql = "SELECT t_status FROM tickets WHERE pnr= '$pnr'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
	if($row==NULL)
	{
		echo "<script type='text/javascript'>alert('PNR not found');</script>";
	}	
	else
	{
		echo "<script type='text/javascript'>alert('Your status is ' +'$row[t_status]');</script>";
	} 	

?>