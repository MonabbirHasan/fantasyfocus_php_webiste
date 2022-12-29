<?php 

include("src/config.php");
global $conn;
$delet_id=$_GET['d_id'];

  $delete="DELETE FROM post_movie WHERE id='$delet_id'";
if(mysqli_query($conn,$delete)){
    header("Location: http://localhost/FantasyFocus.com/BackEnd/post_movie.php");
}

 ?>