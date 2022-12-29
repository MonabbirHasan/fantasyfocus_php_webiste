<?php 

include("config.php");

function GetName($id){
	global $conn;
	$getname="SELECT * FROM category WHERE id=$id";
	$name_result=mysqli_query($conn,$getname);
	
		while($row=mysqli_fetch_assoc($name_result)){
			echo $row['name'];
		}

}















 ?>