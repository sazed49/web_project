<?php 
session_start();


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
 
 
 background-image: url("images/log.jpg");


 height:100%; 

 
 background-position: center;
 background-repeat: no-repeat;
 background-size: cover;
}
input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<body class="bg">

   <?php
 $db = new mysqli('localhost','root','','rent_house');
//  echo $_COOKIE['address'];
 if(isset($_POST['tenant_login'])){
  // tenant_update();
  $email=$_POST['email'];
  $password=$_POST['password'];
  $password = md5($password); 
    $sql = "SELECT * FROM tenant where email='$email' AND password='$password'";
    $result = $db->query($sql);
    if($result->num_rows==1){
      $data = $result-> fetch_assoc();
      // $logged_user = $data['email'];
      // session_start();
      $_SESSION['email']=$data['email'];
      $_SESSION['full_name']=$data["full_name"];
      $_SESSION['logged_in']= 'Y';
      $_SESSION['phone_no']= $data['phone_no'];
      setcookie("email", $email, time()+86400, "/");
      // echo $_SESSION['email'];
      // echo $_SESSION["phone_no"];
      header('location:index.php');
    }
    else {
      $message = "Username and/or Password incorrect.\\nTry again.";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
} 
 ?>

<nav class="navbar navbar-expand-sm navbar-light justify-content-between" style="background-color: #090909">
  <div class="container-fluid">
    <a class="navbar-header" href="index.php">
      <img src="images/logo.jpg" alt="logo" style="height: 50px;">
    </a>
    <ul class="nav navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">HomePage</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="category_rent.php?category=Flat_Rent">Flat</a>

      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="category_rent.php?category=FullHouse">Full-House</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="category_rent.php?category=Room">Room</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <?php
    if(isset($_SESSION["email"]) && !empty($_SESSION['email'])){
?>
<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?php $_SESSION['email'] ?>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="profile.php">Profile</a></li>
          <li><a href="owner-index.php">My property</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </li>


<?php
  
}

  else  {
    ?>
    <li class="nav-item"><a class="nav-link" href="tenant-register.php"><span class="glyphicon glyphicon-user"></span>Register </a></li>
    <li class="nav-item"><a class="nav-link" href="tenant-login.php"><span class="glyphicon glyphicon-user"></span>Login </a></li>
  <?php  }
  ?>

<li class="nav-item">
      <form  action="search_rent.php" method="get">
        <input type="text" name="search" placeholder="search by address">
        <input type="submit" name="submit" value="Search">
        </form>
      </li>
</ul>
</div>
</nav>
<div >
<div class="container">
  <h3 style="font-weight:bold;background:black;
	text-align: center;color:#DFFF00">Tenant Login</h3><hr><br><br>
  <form method="POST">
    <div class="form-group">
      <label style="color:white; font-size:20px;" for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label style="color:white; font-size:20px;" for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
    </div>
   
    <center ><input type="submit" id="submit" name="tenant_login" class="btn btn-primary btn-block" value="Login"></center>
  
  </form>
       
  </div>
</body>
</html>
