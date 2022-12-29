<?php
include("src/config.php");
global $conn;
$e_id=$_GET['e_id'];
if(isset($_POST['update'])){
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$date=$_POST['date'];
$city=$_POST['city'];
$status=$_POST['status'];
$file_name=$_FILES['file']['name'];
$file_tmp=$_FILES['file']['tmp_name'];
$file_type=$_FILES['file']['type'];
$file_size=$_FILES['file']['size'];

if($name===''&&$email===''&&$phone=''&&$password===''&&$date===''&&$file_name===''&&$city===''){
echo "all field are required";
}else{
move_uploaded_file($file_tmp,"u_image/".$file_name);
$update="UPDATE `users` SET `name`='$name',`email`='$email',`phone`='$phone',`city`='$city',`date`='$date',`image`='$file_name',`password`='$password',`status`='$status' WHERE id=$e_id";
$update=mysqli_query($conn,$update);
if($update){
header("Location: http://localhost/FantasyFocus.com/BackEnd/users.php");
}
}

}
?>