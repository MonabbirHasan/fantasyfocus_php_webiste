<?php
include("../BackEnd/src/config.php");
global $conn;
?>
<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="UTF-8">
    <title>CodePen - Finance Mobile Application-UX/UI Design Screen One</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'><link rel="stylesheet" href="dist/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body style="overflow: scroll;">
    <!-- partial:index.partial.html -->
    <style type="text/css">
    .box{
    margin: 10px 0;
    }
    .logo{
    justify-content: center;
    align-items: center;
    margin: auto;
    padding: 10px 0;
    }
    .username{
    background: white;
    box-shadow: 0 0 2em #e6e9f9;
    padding: 1em;
    display: flex;
    flex-direction: column;
    gap: 0.5em;
    border-radius: 20px;
    color: #4d4d4d;
    margin-top: -3em;
    }
    .username input{
    outline: none;
    border: none;
    }
    </style>
    <div class="screen-1" style="width: 350px;background: orange;gap:10px;">
      <h6 class="text-capitalize text-left text-white " >please enter your information after watch movie</h6>
      <?php
      if(isset($_POST['submit_btn'])){
      $username=mysqli_real_escape_string($conn,$_POST['username']);
      $email=mysqli_real_escape_string($conn,$_POST['email']);
      $phone=mysqli_real_escape_string($conn,$_POST['phone']);
      $city=mysqli_real_escape_string($conn,$_POST['city']);
      $date=$_POST['date'];
      $file_name=$_FILES['file']['name'];
      $file_type=$_FILES['file']['type'];
      $file_tmp=$_FILES['file']['tmp_name'];
      $file_size=$_FILES['file']['size'];
      $password=mysqli_real_escape_string($conn,md5($_POST['password']));
      $insert_user="INSERT INTO `users`(`name`, `email`, `phone`, `city`, `date`, `image`, `password`)
      VALUES ('{$username}','{$email}','{$phone}','{$city}','{$date}','{$file_name}','$password')";
      $result=mysqli_query($conn,$insert_user);
      if($result){
      move_uploaded_file($file_tmp,"../BackEnd/u_image/".$file_name);
      header("Location: Login.php");
      }
      }
      ?>
      <form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">username</label>
            <input type="text" name="username" class="form-control" id="inputEmail4" placeholder="username">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">E-mail</label>
            <input type="email" name="email" class="form-control" id="inputPassword4" placeholder="E-mail">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Phone</label>
          <input type="phone" name="phone" class="form-control" id="inputAddress" placeholder="phone">
        </div>
        <div class="form-group">
          <label for="inputAddress">password</label>
          <input type="password" name="password" class="form-control" id="inputAddress" placeholder="password">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">select city</label>
          <select name="city" class="form-control" id="exampleFormControlSelect1">
            <?php
            $get_city="SELECT * FROM city";
            $city_result=mysqli_query($conn,$get_city);
            if(mysqli_num_rows($city_result)>0){
            while ($row=mysqli_fetch_assoc($city_result)) {
            ?>
            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
            <?php
            }
            }
            ?>
          </select>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">date</label>
            <input name="date" type="date" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="readUrl" class="btn btn-primary">upload</label>
            <input type='file' hidden name="file" id="readUrl">
            <img id="uploadedImage" src="#" alt="Uploaded Image" accept="image/png, image/jpeg" style="display:none;width: 60px;">
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <button name="submit_btn" type="submit" class="btn btn-primary">SignUp</button>
        <br>
        <span>if you don't have account please</span>
        <a href="Login.php" class="badge badge-success">Login</a>
      </form>
      
    </div>
    <!-- partial -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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