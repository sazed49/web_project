
<?php
session_start();
include("navibar.php");
include "config/config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'rent_house');

				$id = $_GET["id"];
				$qui = "SELECT * FROM imgupload WHERE id = $id";
				$quiv = mysqli_query($con, $qui);
				$_quiv=mysqli_fetch_array($quiv);
				$a = $_quiv["id"];
				$b = $_quiv["ownername"];
				$c = $_quiv["image"];
				$d = $_quiv["property_type"];
				$e = $_quiv["estimated_price"];
				$f = $_quiv["total_rooms"];
				$g = $_quiv["bedroom"];
				$h = $_quiv["living_room"];
				$i = $_quiv["kitchen"];
				$j = $_quiv["bathroom"];
				$k = $_quiv["address"];
				$i = $_quiv["contact"];


				// $a = $_SESSION["houseid"];
				// $b = $_SESSION["houseusername"];
				// $c = $_SESSION["houseimage"];
				
				// echo "<tr>";
    //           echo "<td> $a </td>";
    //            echo "<td> $b </td>";
    //            echo "<td><img src= $c height='100px' width='100px'></td>";
    //          echo "</tr>";
             ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<?php
				echo "<img src= $c height='500px' width='500px'>" 
				 ?>
			</div>
			<div class="col-md-6">
				 <table class="table table-stripted table-hover text-center">
				 	<caption><h2>Home Details</h2> </caption>
				<!-- <thead>
					
					
				
				</thead> -->

				<tbody>
					<tr>
						<th>Owner Name :</th>
						<td><?php echo $b; ?></td>
					</tr>
					<tr>
						<th> property type: :</th>
						<td><?php echo $d; ?></td>
					</tr>
					<tr>
						<th>estimated price::</th>
						<td><?php echo $e; ?></td>
					</tr>
				<tr>
						<th>total rooms:</th>
						<td><?php echo $f; ?></td>
					</tr>
					<tr>
						<th>bed room:</th>
						<td><?php echo $g; ?></td>
					</tr>
					<tr>
						<th>living room:</th>
						<td><?php echo $h; ?></td>
					</tr>
					<tr>
						<th>kitchen:</th>
						<td><?php echo $i; ?></td>
					</tr>
					<tr>
						<th>bathroom:</th>
						<td><?php echo $j; ?></td>
					</tr>
					<tr>
						<th>address:</th>
						<td><?php echo $k; ?></td>
					</tr>
					<tr>
						<th>Contact:</th>
						<td><?php echo $i; ?></td>
					</tr>

             	</tbody>
    		</table>
			</div>
		</div>
	</div>

</body>
</html>