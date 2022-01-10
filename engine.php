<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>



	<div class="container">
		<h1 class="text-center text-white bg-dark"> uploaded pic with username</h1>
		<br>
		<div class="table-responsive">
		<table class="table table-bordered table-stripted table-hover text-center">
			<thead>
				<th>ID</th>
				<th>username</th>
				<th>housepic</th>
				<th>view details</th>
			</thead>

			<tbody>

				<?php
				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'rent_house');
				if (isset($_POST['submit'])) {
					//$username=$_POST['ownername'];
					 $ownername=$_POST['ownername'];
          $property_type=$_POST['property_type'];
          $estimated_price=$_POST['estimated_price'];
          $total_rooms=$_POST['total_rooms'];
          $bedroom=$_POST['bedroom'];
          $living_room=$_POST['living_room'];
          $kitchen=$_POST['kitchen'];
          $bathroom=$_POST['bathroom'];
           $address=$_POST['address'];
					$file=$_FILES['file'];
					//print_r($username);
					echo "<br>";
					//print_r($file);
					$filename=$file['name'];
					$fileerror=$file['error'];
					$filetmp=$file['tmp_name'];

					$fileext=explode('.', $filename);
					$filecheck=strtolower(end($fileext));
					$fileextstored=array('png','jpg','jpeg');
					if (in_array($filecheck, $fileextstored)){
						$destinationfile='upload/'.$filename;
						move_uploaded_file($filetmp, $destinationfile);
 $q= "INSERT INTO `imgupload`(`ownername`,`property_type`,`estimated_price`,`total_rooms`,`bedroom`,`living_room`,`kitchen`,`bathroom`,`address`, `image`) VALUES ('$ownername','$property_type','$estimated_price','$total_rooms','$bedroom','$living_room','$kitchen','$bathroom','$address',$destinationfile')";
						$query=mysqli_query($con,$q);
						$displayquery = " select * from imgupload ";
						$querydisplay=mysqli_query($con,$displayquery);
						//$row=mysqli_num_rows($querydisplay);
						//print_r($row);

						while ( $result= mysqli_fetch_array($querydisplay)) { 
							$a=$result['id'];
							$b=$result['ownername'];
							$c=$result['image'];



							

			 echo "<tr>";
              echo "<td> $a </td>";
               echo "<td> $b</td>";
               echo "<td><img src= $c height='100px' width='100px'></td>";
         
           echo " <td><a href='details.php?id=$a'>Details</a></td>";
             echo "</tr>";

                      }

                     // $details_from_database = "SELECT * FROM imgupload WHERE id=$a";
                     //  $qu = mysqli_query($con, $details_from_database);
                     //  $quiv=mysqli_fetch_array($qu);
                      
                     //  $_SESSION['houseid'] = $quiv['id'];
                     //   $_SESSION['houseusername'] = $quiv['username'];
                     //    $_SESSION['houseimage'] = $quiv['image'];






			} else{
						echo "error";
						header("location:index.php");
					}



	}
				
                ?>
				


			</tbody>
		</table>
	</div>


	</div>
</body>
</html>