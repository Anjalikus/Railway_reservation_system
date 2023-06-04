<?php
     $server="localhost";
     $username="root";
     $password="";
    
     
     
    
     $conn=mysqli_connect("localhost","root","","booking");

     if(!$conn){
          die("connection to this database failed due to".mysqli_connect_error());
     }
    extract($_POST);
    $pnr=$_POST['pnr'];
    $sql = "DELETE from `tickets` where pnr='$pnr'";
    $result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if(!$row)
{
    // js alert
    echo "
    <script>alert('Your ticket is cancelled successfully');
        window.location.href='cancelend.php';
    </script>";
}
else
{
    echo "
    <script>alert('Something went wrong!');
        window.location.href='cancelend.php';
    </script>";
}
?>
