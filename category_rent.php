<?php

    $keyword=$_GET['category'];
   // echo $keyword;
?>






<?php
session_start();
include("navibar.php");

?>
 <style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
 
  background-image: url("images/home.jpg");

 
  height: 60%; 

  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}


</style>
<div class="bg"></div><br>
<div class="container active-cyan-4 mb-4 inline">
	<div class="table-responsive">
    <table class="table table-bordered table-stripted table-hover text-center">
      <thead>
   
        <th>Ownerrname</th>
        <th>pic</th>
        <th>view details</th>
      </thead>

      <tbody>

        <?php
        $con=mysqli_connect('localhost','root');
        mysqli_select_db($con,'rent_house');
        
  
            $displayquery = " select * from imgupload where property_type like '%$keyword%'";
            $querydisplay=mysqli_query($con,$displayquery);
            $row=mysqli_num_rows($querydisplay);
           // print_r($row);

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
         
           echo " <td><a href='details.php?id=$a'>Details</a></td>";
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
</div>
<br>
<br>
