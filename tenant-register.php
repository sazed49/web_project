<?php
include ("navibar.php");
?>
<!DOCTYPE html>
<html>
<head>

  <title>Login</title> <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
.bg {
 
 
  background-image: url("images/home.jpg");

 
  height: 100%; 

  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>

<body class="bg">
 <div class="container">
	<h3 style="font-weight:bold;
	font-size:30px;
	text-align: center;color:#DFFF00  ">Register</h3><hr><br>
	<form method="POST" action="tenant-engine.php" enctype="multipart/form-data">
		<div class="form-group">
			<label style="color:white; font-size:20px;" for="full_name">Full Name:</label>
			<input type="text"  class="form-control" id="full_name" placeholder="Enter Full Name" name="full_name" required>
		</div>
		<div class="form-group">
			<label style="color:white; font-size:20px;" for="email">email:</label>
			<input type="email"  class="form-control" id="email" placeholder="Enter email" name="email" required>
		</div>
		<div class="form-group">
			<label style="color:white; font-size:20px;" for="password1">password:</label>
			<input type="password"  class="form-control" id="password1" placeholder="Enter password" name="password" required>
		</div>
		<div class="form-group">
			<label style="color:white; font-size:20px;" for="password2">confirm password:</label>
			<input type="password"  class="form-control" id="password2" placeholder="Enter password again"  required>
		</div>
		<div class="form-group">
			<label  style="color:white; font-size:20px;"for="phone_no">phone No.:</label>
			<input type="text"  class="form-control" id="phone_no" placeholder="Enter phone number" name="phone_no" required>
		</div>
		<div class="form-group">
			<label  style="color:white; font-size:20px;"for="address">Address:</label>
			<input type="text"  class="form-control" id="address" placeholder="Enter address" name="address" required>
		</div>
		
		<div class="form-group">
			<label style="color:white; font-size:20px;" for="card_photo">Upload your photo</label>
			<input type="file"  class="form-control" id="password1" placeholder="upload your photo" name="id_photo" accept="image/*" onchange="preview_image(event)" required>
		</div>
		 <div class="form-group">
      <label style="color:white; font-size:20px;">Your selected File:</label><br>
      <img src="" id="output_image"/ height="100px" required>
          </div>
     
	 
     <center><button id="submit" name="tenant_register" class="btn btn-primary btn-block" onclick="return Validate()">Register</button></center><br>
		<br>
			</form>

</div>
</body>
		</html>
		<script type="text/javascript">
			function preview_image(event)
			{
				var reader = new FileReader();
				reader.onload = function()
				{
					var output=document.getElementById('output_image');
					output.src=reader.result;

				}
				reader.readAsDataURL(event.target.files[0]);
				}


		</script>
		<script type="text/javascript">
			function Validate()
			{
				var password=document.getElementById("password1").value;
				var confirmPassword=document.getElementById("password2").value;
				if (password != confirmPassword) {

					alert("Passwords do not match");
					return false;

				}
				return true;


			}
			


		</script>
	
		