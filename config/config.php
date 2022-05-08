<?php 

$db = new mysqli('localhost','root','','rent_house');

if($db->connect_error){
	echo "Error connecting database";
}

 ?>