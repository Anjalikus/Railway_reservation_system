<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train Enquiry</title>
    <style>
        *{
           margin: 0;
           padding: 0;
           box-sizing: border-box;
           text-align: center;
       }
       body{
           font-family: sans-serif;
           background: url('6069388.jpg') no-repeat;
           background-size: cover;
       }
       h2 {
           padding-top: 30px;
           color: rgb(14, 15, 15);
           font-size: 6vh;
           font-weight: bold;
           
       }
       .details {
    position: relative;
    width: 100%;
    max-width: 380px;
    padding: 80px 40px 40px;
    background: rgba(0,0,0,0.7);
    border-radius: 10px;
    color: #fff;
    box-shadow: 0 15px 25px rgba(0,0,0,0.5);
     margin-top: 4%; 
     margin-left: 3%;     
  }
  .details .info label{
    font-size:  18px;
    font-weight: bold;
    color: rgb(254, 247, 247);
    font-family: 'Times New Roman', Times, serif;
    display: inline block;
    
  }
  .details .info input{
      float:right
  }
  .details .train label{
    font-size:  15px;
    font-weight: bold;
    color: rgb(254, 247, 247);
    font-family: 'Times New Roman', Times, serif;
    text-align: left;
    float: left; 
  }
       .button {
  border-radius: 8px;
  color: rgb(26, 26, 26);
  padding: 12px 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 12px 2px;
  cursor: pointer;
  font-weight: bold;
}
        .button1 {background-color: rgb(117, 142, 255);} 
        .button2 {background-color: rgb(117, 142, 255);} 
       </style>
</head>

<body>
    
    <h2>TRAIN ENQUIRY</h2>
    <div class="details">
    <form action="" method="post">
        <div class="info">
            <label for="station">SOURCE   </label>
        <select name="source" id="s_station">
            
            <option value="--select--">--select--</option>
            <option value="Mumbai Central">Mumbai Central</option>
            <option value="NEW DELHI">New Delhi</option>
            <option value="PRAYAGRAJ JN">Prayagraj Jn</option>
            <option value="CHENNAI CENTRAL">Chennai Central</option>
            <option value="Jammu">Jammu</option>  
            </select>
            
        </div>
        <br>
        <div class="info">
            <label for="station">DESTINATION</label>
            <select name="destination" id="d_station">
                <option value="--select--">--select--</option>
                <option value="Mumbai Central">Mumbai Central</option>
            <option value="NEW DELHI">New Delhi</option>
            <option value="PRAYAGRAJ JN">Prayagraj Jn</option>
            <option value="CHENNAI CENTRAL">Chennai Central</option>
            <option value="Jammu">Jammu</option>  
                
            </select>
        </div>
        <br>
        <div class="info">
            <label for="date">
             Journey date   
            </label>
        <input type="date" id="d" >
        </div>
        <br>
        <div>
            <button class="button button1">ENQUIRE</button>
        </div>
    </form>
    <?php
$servername="localhost";
$username="root";
$password="";
$database="train";
$conn =  mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
    die("Sorry we failed to connect : " . mysqli_connect_error());
}
else
{
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        extract($_POST);
        $s=$_POST['source'];
        $d=$_POST['destination'];
    $sql="SELECT * FROM `train_names` WHERE Source='$s' AND Destination='$d'";
    $result=mysqli_query($conn,$sql);
    if($result && $s!=$d  ){
        $row= mysqli_fetch_assoc($result);
        echo "Train No:". $row['Train No'] ."<br>" . "<br>" ."Train Name:" .$row['Train Name']."<br>"."<br>"  ."Source Stn :" .$row['Source'] ."<br>"."<br>"  ."Destination Stn :" .$row['Destination'] ."<br>" ."<br>" ."Departure Time :" .$row['Departure'] ."<br>"."<br>"  ."Arrival Time :" .$row['Arrival'];
    }
    else
    {    
        echo "No train found";
    }
    }
    
}
    
$conn->close();


?> 
    
</div> 

</body>
</html>
