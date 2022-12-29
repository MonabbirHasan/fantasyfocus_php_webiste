<?php 

include("src/config.php");
global $conn;
$delet_id=$_GET['d_id'];

  $delete="DELETE FROM users WHERE id='$delet_id'";
if(mysqli_query($conn,$delete)){
    header("Location: http://localhost/FantasyFocus.com/BackEnd/users.php");
}

 ?>