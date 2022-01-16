<style>
input[type=button], input[type=submit], input[type=reset] {
  background-color: #6867AC;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}

</style>

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-sm navbar-light justify-content-between" style="background-color: #090909">
	<div  class="container-fluid">
		
		<a class="navbar-header" href="index.php">
			<img src="images/logo.jpg" alt="logo" style="height: 50px;">
		</a>
		<ul  class="nav navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="index.php"><b>HomePage</b></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="category_rent.php?category=Flat Rent"><b>Flat</b></a>

			</li>
		
			<li class="nav-item">
				<a class="nav-link" href="category_rent.php?category=Full House Rent"><b>Full-House</b></a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="about.php"><b>About</b></a>
			</li>
		</ul>
		
		<ul class="nav navbar-nav navbar-right">
		<?php
		if(isset($_SESSION["email"]) && !empty($_SESSION['email'])){
?>
<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['full_name']; ?>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="profile.php">Profile</a></li>
          <li><a href="my-property.php">My property</a></li>
		  <li><a href="owner-index.php">Add property</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </li>


<?php
  
}

	else	{
		?>
		<li class="nav-item"><a class="nav-link" href="tenant-register.php"><span class="glyphicon glyphicon-user"></span><b>Register</b> </a></li>
		<li class="nav-item"><a class="nav-link" href="tenant-login.php"><span class="glyphicon glyphicon-user"></span><b>Login</b> </a></li>
	<?php  }
	?>

<li class="nav-item">
			<form  action="search_rent.php" method="get">
				<input type="text" name="search" placeholder="search by location">
				<input type="submit" name="submit"  value="Search">
				</form>
			</li>
</ul>
</div>
</nav>

</body>
</html>