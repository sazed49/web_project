<?php 
session_start();
if(!isset($_SESSION["email"])){
  header("location:index.php");
}
include('navibar.php');
include('tenant-engine.php');
 ?>
<style>
	.card {
  box-shadow: 8px 8px 8px 8px rgba(0, 0, 0, 0.2);
  max-width: 300px;
  max-height: 400px;
  margin: auto;
  text-align: center;
  font-family: arial;
  background-color:black;
}
button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #79018C;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

button:hover, a:hover {
  opacity: 0.7;
}

.form-group {
  text-align: left;
}
.bg {
 
 
 background-image: url("images/profile.jpg");


 height:100%; 

 
 background-position: center;
 background-repeat: no-repeat;
 background-size: cover;
}
</style>
<!DOCTYPE html>
<html>
<head>
	<title>profile page</title>
</head>
<body class="bg">






 <center><h3 style="color:white;font-size:20px;"><b> Profile</b></h3></center>
      <div class="container">
      <?php 
        include("config/config.php");
        $u_email= $_SESSION["email"];

        $sql="SELECT * from tenant where email='$u_email'";
        $result=mysqli_query($db,$sql);

        if(mysqli_num_rows($result)>0)
      {
          while($rows=mysqli_fetch_assoc($result)){
          
       ?>
        <div class="card">
  <img src="<?php echo $rows['id_photo']; ?>" alt="John" style="height:200px; width: 50%">
  <h1 style="color:#FFD500;"><b><?php echo $rows['full_name']; ?></b></h1>
  <p style="color:white;"><b><?php echo $rows['email']; ?></b></p>
  <p style="color:white;"><b>Phone No.: <?php echo $rows['phone_no']; ?></b></p>
  <p style="color:#FFD500;"><b>Address: <?php echo $rows['address']; ?></b></p>
  
  
  <!-- Trigger the modal with a button -->
  <p><button type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal">Update Profile</button></p>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Profile</h4>
        </div>
        <div class="modal-body">

            <form method="POST">
                <div class="form-group">
                  <label for="full_name">Full Name:</label>
                  <input type="hidden" value="<?php echo $rows['tenant_id']; ?>" name="tenant_id">
                  <input type="text" class="form-control" id="full_name" value="<?php echo $rows['full_name']; ?>" name="full_name">
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" value="<?php echo $_COOKIE['email']; ?>" name="email" readonly>
                </div>
                <div class="form-group">
                  <label for="phone_no">Phone No.:</label>
                  <input type="text" class="form-control" id="phone_no" value="<?php echo $rows['phone_no']; ?>" name="phone_no">
                </div>
                <div class="form-group">
                  <label for="address">Address:</label>
                  <input type="text" class="form-control" id="address" value="<?php echo $rows['address']; ?>" name="address">
               
    <div class="form-group">
      <label>Your Id:</label><br>
      <img src="<?php echo $rows['id_photo']; ?>" id="output_image"/ height="100px" readonly>
    </div>
                <hr>
                <center><button id="submit" name="tenant_update" class="btn btn-primary btn-block">Update</button></center><br>
                
              </form>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  




</div>

<?php }} ?>
</body>
</html>