<?php
include ("navibar.php");
?>
<div class="container">
	<h3 style="font-weight:bold;
	text-align: center;">Register</h3><hr><br>
	<form method="POST" action="tenant-engine.php" enctype="multipart/form-data">
		<div class="form-group">
			<label for="full_name">Full Name:</label>
			<input type="text"  class="form-control" id="full_name" placeholder="Enter Full Name" name="full_name" required>
		</div>
		<div class="form-group">
			<label for="email">email:</label>
			<input type="email"  class="form-control" id="email" placeholder="Enter email" name="email" required>
		</div>
		<div class="form-group">
			<label for="password1">password:</label>
			<input type="password"  class="form-control" id="password1" placeholder="Enter password" name="password" required>
		</div>
		<div class="form-group">
			<label for="password2">confirm password:</label>
			<input type="password"  class="form-control" id="password2" placeholder="Enter password again"  required>
		</div>
		<div class="form-group">
			<label for="phone_no">phone No.:</label>
			<input type="text"  class="form-control" id="phone_no" placeholder="Enter phone number" name="phone_no" required>
		</div>
		<div class="form-group">
			<label for="address">Address:</label>
			<input type="text"  class="form-control" id="address" placeholder="Enter address" name="address" required>
		</div>
		
		<div class="form-group">
			<label for="card_photo">Upload your photo</label>
			<input type="file"  class="form-control" id="password1" placeholder="upload your photo" name="id_photo" accept="image/*" onchange="preview_image(event)" required>
		</div>
		 <div class="form-group">
      <label>Your selected File:</label><br>
      <img src="" id="output_image"/ height="200px" required>
    </div>
    <hr>
    <center><button id="submit" name="tenant_register" class="btn btn-primary btn-block" onclick="return Validate()">Register</button></center><br>

			</form>
		</div>
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