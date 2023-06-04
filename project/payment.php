
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-align: center;
        }
        body{
            font-family: sans-serif;
            background: url('17454-scaled.jpg') no-repeat;
            background-size: cover;
        }
        h2 {
            padding-top: 50px;
            color: rgb(241, 249, 249);
            font-size: 8vh;
            
        }
        .pay{
    height: 100vh;
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .info {
    position: relative;
    width: 100%;
    max-width: 380px;
    padding: 15px 40px 40px;
    background: rgba(189,230,251,0.926);
    border-radius: 10px;
    color: rgb(7, 7, 7);
    box-shadow: 0 15px 25px rgba(0,0,0,0.5);
  }
  .info::before {
    content:'';
    position: absolute;
    top: 0;
    left: 0;
    width: 50%;
    height: 100%;
    background: rgba(255,255,255, 0.08);
    transform: skewX(-26deg);
    transform-origin: bottom left;
    border-radius: 10px;
    pointer-events: none;
  }
         .info .bank {
    position: relative;
  }
  .info .b label{
    position: relative;
    top: 0;
    left: 0;
    padding: 10px 0;
    font-size: 1rem;
    pointer-events: none;
    transition: .3s ease ease-in;
    font-weight: bold;
  }
  .info .b input{
    width: 100%;
    padding: 5px 0;
    font-size: 1rem;
    letter-spacing: 1px;
    margin-bottom: 10px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background-color: transparent;
    color: inherit;
    float:right;
    font-weight: bold;
  }
  .info .bank input {
    width: 100%;
    padding: 5px 0;
    font-size: 1rem;
    letter-spacing: 1px;
    margin-bottom: 10px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background-color: transparent;
    color: inherit;
    font-weight: bold;
  }
  .info .bank label {
    position: absolute;
    top: 0;
    left: 0;
    padding: 10px 0;
    font-size: 1rem;
    pointer-events: none;
    transition: .3s ease ease-in;
    font-weight: bold;
  }
        .button {
  border-radius: 8px;
  color: rgb(26, 26, 26);
  padding: 15px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 7px 2px;
  cursor: pointer;
  font-weight: bold;
}
.button1 {background-color:  rgb(117, 142, 255);}
.button:active {
  box-shadow: 0 3px #666;
  transform: translateY(4px);
} 
    </style>
    <script type="text/javascript">
      function cal(value){
        var x,y,z,d;
        x=document.getElementById('p').value;
        d= document.getElementById("class").value;
        if (d=="Sleeper")
        {
          z=x*100;
          document.getElementById("result").value=z;
        }
        if (d=="2A"){
          z=x*500;
          document.getElementById("result").value=z;
        }
        if (d=="3A"){
          z=x*300;
          document.getElementById("result").value=z;
        }
      }
    </script>
</head>
<body>
    <h2>PAYMENT</h2>
    <div class="pay">
    <form action="" class="info" method="post">
        <img src="D:\project\17454-scaled.jpg" alt="">
        <div class="b">
            <select name="card type" id="card type">
                    <option value="--select--">--select--</option>
                    <option value="Debit Card">Debit Card</option>
                    <option value="Credit Card">Credit Card</option>
                    <option value="Rupay Card">Rupay Card</option>
                    <option value="Visa Card">Visa Card</option>
                </select>
                <label for="card type">Card Type</label>
            </div>
        <div class="bank">
         <input type="text" name="bank">
         <label for="bank">BANK</label>
        </div>
        <br>

        <div class="bank">
            <input type="number" name="card number">
            <label for="card number">Card number</label>
        </div>
        <br>
        <div class="bank">
          <input type="number" name="people" id="p">
          <label for="people">No. of people</label>
              </div>
        <br>
        <div class="b">
          <select name="class" id ="class"  onchange="cal(this.value);">
            <option value="--select--">--select--</option>
            <option value="Sleeper">Sleeper</option>
            <option value="2A">2A</option>
            <option value="3A">3A</option>
          </select>
          <label for="class">Class</label>
        </div>
        
        <div class="bank">
        <input type="text" name="total amount" id="result">
        <label for="total amount">Total amount</label>
         </div>
        <br>
        <button class="button button1">Submit</button>
        <br>
        <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="booking";
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
        if(empty($_POST['card type']) && empty($_POST['bank']) && empty($_POST['card number']) && empty($_POST['people']) && empty($_POST['class']) && $result){
            echo "Fill all fields";
            
        }
        else
        { 
              echo "Payment successful";
        }
            
        }
        }
        
  
        
    $conn->close();
    
    
    ?> 
    </form>
    
    </div>
</body>
</html>