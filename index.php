
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
  max-width: 100%;
  height: auto;
 
  
}
t{
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #04AA6D;
  color: white;
}
input[type=button], input[type=submit], input[type=reset] {
  background-color:#6867AC;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
.color{
  background-color:#FFCBCB;


}
td{
  text-align:center;
}
tr:hover {background-color: #EA99D5;}

</style>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body class="color">

<video class="bg" autoplay muted loop>
  <source src="i.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<!-- <div class="container active-cyan-4 mb-4 inline"> -->
	<!-- <div class="table-responsive"> -->
    <div  >
      
    <table  style="width:100%">
      <thead>
   
        <th style="  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #570530;
  color: white;"><i>Ownerrname</i></th>
        <th style="  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #570530;
  color: white;"><i>Pic</i></th>
        <th style="  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #570530;
  color: white;"><i>Location</i></th>
        <?php
        if($_SESSION['logged_in']=='Y'){
          echo '<th style="  padding-top: 12px;
          padding-bottom: 12px;
          text-align: center;
          background-color: #570530;
          color: white;" ><i>view details</i></th>';
        }
        ?>
      </thead>
     
      <tbody>

        <?php
        $con=mysqli_connect('localhost','root');
        mysqli_select_db($con,'rent_house');
        
           // $address = $_COOKIE['address'];
            // echo $address;
            $displayquery = " select * from imgupload order by id desc";
            $querydisplay=mysqli_query($con,$displayquery);
            //$row=mysqli_num_rows($querydisplay);
            //print_r($row);
            // echo mysqli_error($querydisplay);
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
               echo "<td><b> $b</b></td>";
               echo "<td><img src= $k height='150px' width='250px'></td>";
               echo "<td><b> $j</b></td>";
              
               if($_SESSION['logged_in']=='Y'){
                echo " <td><b><a href='details.php?id=$a'>Details</a></b></td>";
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
      <html>
