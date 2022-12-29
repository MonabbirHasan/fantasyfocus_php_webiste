<?php
include("src/config.php");
global  $conn;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Admin Login</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid position-relative bg-white d-flex p-0">
            <!-- Spinner Start -->
            <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->
            <!-- Sign Up Start -->
            <div class="container-fluid">
                <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                    <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                        <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <a href="index.html" class="">
                                    
                                </a>
                                <h3>Sign Up</h3>
                            </div>


<?php

if(isset($_POST['submit'])){
    echo $username=mysqli_real_escape_string($conn,$_POST['username']);
    echo $email=mysqli_real_escape_string($conn,$_POST['email']);
    echo $password=mysqli_real_escape_string($conn,md5($_POST['password']));
    echo $phone=mysqli_real_escape_string($conn,$_POST['phone']);
    echo $date=mysqli_real_escape_string($conn,$_POST['date']);
    echo $city=mysqli_real_escape_string($conn,$_POST['city']);
    echo $file_name=$_FILES["file"]['name'];
    echo $file_tmp=$_FILES["file"]['tmp_name'];
    // $checked=$_POST['checked'];
 
if(empty($username)&&empty($email)&&empty($phone)&&empty($city)&&empty($file_name)&&empty($password)){
    echo "username is empty";
}else{
  $InsertAdmin="INSERT INTO users(name, email, phone, city, date, image, password, status) 
  VALUES ('{$username}','{$email}','{$phone}','{$city}','{$date}','{$file_name}','{$password}','1')";
  move_uploaded_file($file_tmp,"u_image/".$file_name);
$result=mysqli_query($conn,$InsertAdmin);
if($result){
    header("Location: signin.php");
}
}
}

?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" enctype="multipart/form-data">
    <div class="form-floating mb-3">
        <input type="text" name="username" class="form-control" id="floatingText" placeholder="jhondoe">
        <label for="floatingText">Username</label>
    </div>
    <div class="form-floating mb-3">
        <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating mb-4">
        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating mb-4">
        <input name="phone" type="phone" class="form-control" id="floatingPassword" placeholder="phone">
        <label for="floatingPassword">phone</label>
    </div>
    <div class="form-floating mb-4">
        <input name="date" type="date" class="form-control" id="floatingPassword">
        <label for="floatingPassword">date</label>
    </div>
    <div class="form-floating mb-4">
       <select class="form-control" name="city">
           <option value="0">Dhaka</option>
           <option value="0">Mymansingh</option>
       </select>
        <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating mb-4">
        <input name="file" type="file" class="form-control" id="readUrl">
        <label for="floatingPassword">Upload</label>
        <img width="100px" id="uploadedImage" src="#" alt="Uploaded Image" accept="image/png, image/jpeg" style="display:none;">
    </div>
    <div class="d-flex align-items-center justify-content-between mb-4">
        <div class="form-check">
            <input name="checked" type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <a href="">Forgot Password</a>
    </div>
    <button type="submit" name="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
    <p class="text-center mb-0">Already have an Account? <a href="signin.php">Sign In</a></p>
</div>
</form>
</div>
</div>
</div>
<!-- Sign Up End -->
</div>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/chart/chart.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Template Javascript -->
<script src="js/main.js"></script>

<script type="text/javascript">
    document.getElementById('readUrl').addEventListener('change', function(){
  if (this.files[0] ) {
    var picture = new FileReader();
    picture.readAsDataURL(this.files[0]);
    picture.addEventListener('load', function(event) {
      document.getElementById('uploadedImage').setAttribute('src', event.target.result);
      document.getElementById('uploadedImage').style.display = 'block';
    });
  }
});
</script>
</body>
</html>