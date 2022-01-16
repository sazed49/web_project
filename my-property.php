
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
 
  /* background-image: url("images/home.jpg");

 
  height: 50%; 

  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover; */
}


</style>

<div >

</div><br>
<div class="container active-cyan-4 mb-4 inline">
	<div class="table-responsive">
    <table class="table table-bordered table-stripted table-hover text-center">
      <thead>
   
        
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
         $tenant_name=$_SESSION['full_name'];
  
            $displayquery = " select * from imgupload where ownername='$tenant_name'";
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
               
               echo "<td><img src= $k height='100px' width='100px'></td>";
               echo "<td> $j</td>";
              
               
                echo " <td><a href='my-property.php?action=delete&id=$a'>Delete</a></td>";
                // echo "<td><a href='my-property.php?action=delete&id=$a'>Delete</a></td>";
               
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
                if(isset($_GET['action'])){
                  $id = $_GET['id'];

                  $q = "DELETE FROM imgupload WHERE id=$id";
                  $res = mysqli_query($con, $q);
                  // if($res){
                  //   // header('locaiton:my-property.php');
                  // }
                  // else{
                  //   echo mysqli_error($res);
                  // echo 'Delete success';
                  header('location:my-property.php');
                  }
        
                ?>
        


      </tbody>
    </table>
  </div>
</div>
<br>
<br>

