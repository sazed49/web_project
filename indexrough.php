<?php
session_start();
include("navibar.php");

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
  font-size: 17px;
}

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}
</style>
</head>
<body>

<video autoplay muted loop id="myVideo">
  <source src="intro.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<div class="content">
<table class="table table-bordered table-stripted table-hover text-center">
      <thead>
   
        <th>Ownerrname</th>
        <th>pic</th>
        <th>Address</th>
        <?php
        if($_SESSION['logged_in']=='Y'){
          echo "<th>view details</th>";
        }
        ?>
      </thead>
     
      <tbody>

        <?php
        $con=mysqli_connect('localhost','root');
        mysqli_select_db($con,'rent_house');
        
  
            $displayquery = " select * from imgupload ";
            $querydisplay=mysqli_query($con,$displayquery);
            //$row=mysqli_num_rows($querydisplay);
            //print_r($row);

            while ( $result= mysqli_fetch_array($querydisplay)) { 
              $a=$result['id'];
              $b=$result['ownername'];
              $c=$result['property_type'];
              
              $d=$result['estimated_price'];
              $e=$result['total_rooms'];
              $f=$result['bedroom'];
              $g=$result['living_room'];
              $h=$result['kitchen'];
              $i=$result['bathroom'];
              $j=$result['address'];
              

              

              $k=$result['image'];




              

       echo "<tr>";
              //echo "<td> $a </td>";
               echo "<td> $b</td>";
               echo "<td><img src= $k height='100px' width='100px'></td>";
               echo "<td> $j</td>";
              
               if($_SESSION['logged_in']=='Y'){
                echo " <td><a href='details.php?id=$a'>Details</a></td>";
               }
              echo "</tr>";

                      }

                     // $details_from_database = "SELECT * FROM imgupload WHERE id=$a";
                     //  $qu = mysqli_query($con, $details_from_database);
                     //  $quiv=mysqli_fetch_array($qu);
                      
                     //  $_SESSION['houseid'] = $quiv['id'];
                     //   $_SESSION['houseusername'] = $quiv['username'];
                     //    $_SESSION['houseimage'] = $quiv['image'];






      // } else{
      //       echo "error";
      //       header("location:index.php");
      //     }



  // }
        
                ?>
        


      </tbody>
    </table>
      </div>


</body>
</html>