<?php
session_start();
include("navibar.php");

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
    
  
  background-image: url("images/home.jpg"), linear-gradient(#eb01a5, #d13531); 

  
  height: 100%; 

 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.caption{
    position: absolute;
    left:0;
    top:50%;
    width:100%;
    text-align:center;
    color:white;
    
}

</style>
</head>
<body>

<div class="bg">
    <div class="caption">
        <span style="font-size:80px;"><b>Rent Your <i style="color:#F99E09;">HOUSE</i></b></span>
        <br>
        <span style="color:#C3FA4B;font-size:30px;"><b> A safer place to find your dream Home</b></span>
        
</div>
</div>



</body>
</html>