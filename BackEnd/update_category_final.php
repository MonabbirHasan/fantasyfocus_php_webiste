<?php
include("src/config.php");
global $conn;
$name=$_POST['category_name'];
$date=$_POST['date'];
$parent_category=$_POST['parent_category'];
$status=$_POST['status'];
$file_name=$_FILES['file']['name'];
echo $edit_id=$_GET['edit_id'];
if($name===''&& $date===''&&parent_category===''&&$status===''&&$file=''){
echo "All Field are required";
}else{
move_uploaded_file($file_tmp,'c_image/'.$file_name);
$update_category="UPDATE `category` SET `name`='$name',`is_sub`='$parent_category',`date`='$date',`image`='$file_name',`status`='$status' WHERE `id`=$edit_id";
if(mysqli_query($conn,$update_category)){
header("Location:http://localhost/FantasyFocus.com/BackEnd/category.php");
}
}
?>