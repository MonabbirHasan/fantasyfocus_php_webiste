<?php
include("src/config.php");
global $conn;
// ****************************************
// update post code here
// ***************************************
// ****************************************
// update post code here
// ***************************************
$e_id=$_GET['e_id'];
$name=$_POST['name'];
$title=mysqli_real_escape_string($conn,$_POST['title']);
$releas_date=$_POST['releas_date'];
$date=$_POST['date'];
$status=$_POST['status'];
$director=$_POST['director'];
$ratting=$_POST['ratting'];
$location=$_POST['location'];
$category=$_POST['category'];
$movie_link=mysqli_real_escape_string($conn,$_POST['movie_link']);
$desc=mysqli_real_escape_string($conn,$_POST['desc']);
$file_name=$_FILES['file']['name'];
$file_tmp=$_FILES['file']['tmp_name'];

if($name===''&&$title===''&&releas_date===''&&$date===''&&$status===''&&$director===''&&$ratting===''&&$location===''&&$category===''&&$movie_link===''&&$file_name=''){
echo "all field is required";
}else{
move_uploaded_file($file_tmp, "c_image/".$file_name);
$update="UPDATE `post_movie` SET `name`='$name',`title`='$title',`category`='$category',`video`='$movie_link',`image`='$file_name',`release_date`='$releas_date',`director`='$director',`ratting`='$ratting',`date`='$date',`description`='$desc',`location`='$location',`status`='$status' WHERE `id`=$e_id";
if(mysqli_query($conn,$update)){
	header("Location: http://localhost/FantasyFocus.com/BackEnd/post_movie.php");
}
}
// ****************************************
// update post code here
// ***************************************
// ****************************************
// update post code here
// ***************************************
?>