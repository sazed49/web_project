<?php
session_start();
?>
<!DOCTYPE html>

<html>
<head>
  <title></title>
  <!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

<!-- jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

<!-- Popper JS -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->

<!-- Latest compiled JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-light justify-content-between" style="background-color: #090909">
	<div class="container-fluid">
		<a class="navbar-header" href="index.php">
			<img src="images/logo.jpg" alt="logo" style="height: 50px;">
		</a>
		<ul class="nav navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">About Us</a>

			</li>
		
			<li class="nav-item">
				<a class="nav-link" href="#">Contact</a>
			</li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> My Profile
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="profile.php">Profile</a></li>
          <li><a href="owner-index.php">Add Property</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </li>
</ul>
</div>
</nav>
  <div class="container">
    <?php

  //  include("navibar.php");
    // if (isset($_SESSION['phone_no'])){
    //     echo $_SESSION['phone_no'];
    // }
    // else{
    //   echo "Email Not Found";
    // }

   ?>
    <br>
    <h1 class="text-white bg-dark text-center">
      post your add
      
    </h1>

  
    <div class="col-lg-8 m-auto d-block">
    <form action="insert_property.php" method="post" enctype="multipart/form-data">
      <!-- <div class="form-group">
        <label for="user">ownerrname</label>
        <input type="text" name="ownername" id="user" class="form-control">


      </div> -->
       <div class="form-group">
               <label for="property_type">Property Type:</label>
                <select class="form-control" name="property_type">
                      <option value="">--Select Property Type--</option>
                      <option value="Full House Rent">Full House Rent</option>
                      <option value="Flat Rent">Flat Rent</option>
                      <option value="Room Rent">Room Rent</option>
                </select>
            </div> 
             <div class="form-group">
                <label for="estimated_price">Estimated Price:</label>
                <input type="estimated_price" class="form-control" id="estimated_price" placeholder="Enter Estimated Price" name="estimated_price">
            </div>
        </div>

        <div class="col-sm-6">
                  <div class="form-group">
                    <label for="total_rooms">Total No. of Rooms:</label>
                    <input type="number" class="form-control" id="total_rooms" placeholder="Enter Total No. of Rooms" name="total_rooms">
                  </div>
                  <div class="form-group">
                    <label for="bedroom">No. of Bedroom:</label>
                    <input type="number" class="form-control" id="bedroom" placeholder="Enter No. of Bedroom" name="bedroom">
                  </div>
                  <div class="form-group">
                    <label for="living_room">No. of Living Room:</label>
                    <input type="number" class="form-control" id="living_room" placeholder="Enter No. of Living Room" name="living_room">
                  </div>
                  <div class="form-group">
                    <label for="kitchen">No. of Kitchen:</label>
                    <input type="number" class="form-control" id="kitchen" placeholder="Enter No. of Kitchen" name="kitchen">
                  </div>
                  <div class="form-group">
                    <label for="bathroom">No. of Bathroom/Washroom:</label>
                    <input type="number" class="form-control" id="bathroom" placeholder="Enter No. of Bathroom/Washroom" name="bathroom">
                  </div>
                  <div class="form-group">
                    <label for="description">Full address:</label>
                    <textarea type="comment" class="form-control" id="address" placeholder="Enter Property Description" name="address"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="file">housepic</label>
                    <input type="file" name="file" id="file" class="form-control">
                  </div>
                  <input type="submit" name="submit" value="Submit" class="btn-btn-success">
    </form>
  </div>
    
  </div>
</body>
</html>