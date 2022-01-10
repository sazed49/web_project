<!DOCTYPE html>
<html>
<head>
	<title>Navigation bar</title> <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
		<?php
		if(isset($_SESSION["email"]) && !empty($_SESSION['email'])){
?>
<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> My Profile
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="profile.php">Profile</a></li>
          <li><a href="owner-index.php">Add Property</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </li>


<?php
  
}

	else	{
		?>
		<div class="row">
		<li><a href="tenant-register.php"><span class="glyphicon glyphicon-user"></span>Register </a></li>
		<li><a href="tenant-login.php"><span class="glyphicon glyphicon-user"></span>Login </a></li>
	</div>
	<?php  }
	?>

<li class="nav-item">
			<form action="search_rent.php" method="get">
				<input type="text" name="search">
				<input type="submit" name="submit" value="Search">
				</form>
			</li>
</ul>
</div>
</nav>

</body>
</html>