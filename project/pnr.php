
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PNR Enquiry</title>
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
            background-size:cover;
        }
        h2 {
            padding-top: 30px;
            color: rgb(14, 15, 15);
            font-size: 10vh;
            font-weight: bold;
            
        }
        .pnr {
    position: relative;
    width: 100%;
    max-width: 380px;
    padding: 80px 40px 40px;
    background: rgba(0,0,0,0.7);
    border-radius: 10px;
    color: #fff;
    box-shadow: 0 15px 25px rgba(0,0,0,0.5);
     margin-top: 7%;
     margin-left: 4%;       
  }
  .pnr label{
    font-size:  20px;
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
.button1 {background-color:  rgb(117, 142, 255);}
.button:active {
  box-shadow: 0 2px #666;
  transform: translateY(4px);
} 
    </style>
</head>
<body>
    <h2>PNR ENQUIRY</h2>
    <div class="p">
    <form action="i.php"   method="post">
   <div class="pnr">
<input type="number" name="pnr">
<label for="pnr">Enter PNR</label>

     <br>
     <br>

     <div>
        <button class="button button1">Submit</button>
    </div>
    
</div>
    


      

   
</form>
</div>
    
</body>
</html>
