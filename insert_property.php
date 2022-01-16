<?php
session_start();
?>
<?php
				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'rent_house');
        // echo "Checking";
        // echo $_POST['submit'];
				if (isset($_POST['submit'])) {
					//$username=$_POST['ownername'];
					 // $ownername=$_POST['ownername'];
					// if($_SESSION['full_name']){
					// 	echo $_SESSION['full_name'];
					// }
					// else{
					// 	echo "No value";
					// }
					
					$ownername=$_SESSION['full_name'];
					
					$property_type=$_POST['property_type'];
					$estimated_price=$_POST['estimated_price'];
					$total_rooms=$_POST['total_rooms'];
					$bedroom=$_POST['bedroom'];
					$living_room=$_POST['living_room'];
					$kitchen=$_POST['kitchen'];
					$bathroom=$_POST['bathroom'];
					$address=$_POST['address'];
					$fulladdress=$_POST['fulladdress'];
					$file=$_FILES['file'];
					$contact = $_SESSION['phone_no'];
					//print_r($username);
					echo "<br>";
					//print_r($file);
					$filename=$file['name'];
					$fileerror=$file['error'];
					$filetmp=$file['tmp_name'];

					$fileext=explode('.', $filename);
					$filecheck=strtolower(end($fileext));
					$fileextstored=array('png','jpg','jpeg');
        //   echo "Checkimg 2";
        
					if (in_array($filecheck, $fileextstored)){
						$destinationfile='upload/'.$filename;
						move_uploaded_file($filetmp, $destinationfile);
					$q = "INSERT INTO imgupload (`ownername`, `property_type`, `estimated_price`, `total_rooms`, `bedroom`, `living_room`, `kitchen`, `bathroom`, `address`,`fulladdress`, `image`, `contact`) VALUES ('$ownername','$property_type', '$estimated_price', '$total_rooms', '$bedroom', '$living_room', '$kitchen', '$bathroom', '$address','$fulladdress', '$destinationfile', '$contact')";
//  $q= "INSERT INTO `imgupload`(`ownername`,`property_type`,`estimated_price`,`total_rooms`,`bedroom`,`living_room`,`kitchen`,`bathroom`,`address`, `image`) VALUES ('$ownername','$property_type','$estimated_price','$total_rooms','$bedroom','$living_room','$kitchen','$bathroom','$address',$destinationfile')";
						$query=mysqli_query($con,$q);
						// $displayquery = " select * from imgupload ";
						// $querydisplay=mysqli_query($con,$displayquery);
						//$row=mysqli_num_rows($querydisplay);
						//print_r($row);

			// 			while ( $result= mysqli_fetch_array($querydisplay)) { 
			// 				$a=$result['id'];
			// 				$b=$result['ownername'];
			// 				$c=$result['image'];
            echo $query;
        if($query){
          header("location:index.php");
        }
        else{
          echo "INsertion Query Error";
          echo mysqli_error($query);
        }


							

// 			//  echo "<tr>";
//       //         echo "<td> $a </td>";
//       //          echo "<td> $b</td>";
//       //          echo "<td><img src= $c height='100px' width='100px'></td>";
         
//       //      echo " <td><a href='details.php?id=$a'>Details</a></td>";
//       //        echo "</tr>";

                      }

//                      // $details_from_database = "SELECT * FROM imgupload WHERE id=$a";
//                      //  $qu = mysqli_query($con, $details_from_database);
//                      //  $quiv=mysqli_fetch_array($qu);
                      
//                      //  $_SESSION['houseid'] = $quiv['id'];
//                      //   $_SESSION['houseusername'] = $quiv['username'];
//                      //    $_SESSION['houseimage'] = $quiv['image'];






			} else{
						echo "error";
						header("location:index.php");
					}

				
                ?>