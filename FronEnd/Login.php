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
  <body>
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
    </style>
    <div class="screen-1" style="width: 350px;height: 620px;background: orange;">
      <h6 class="text-capitalize text-left text-white " >please enter your information after watch movie</h6>
      <?php
      session_start();
      if(isset($_POST['submit_btn'])){
      $email=mysqli_real_escape_string($conn,$_POST['email']);
      $password=mysqli_real_escape_string($conn,md5($_POST['password']));
      $read_user="SELECT * FROM users WHERE email='{$email}' AND password='{$password}'";
      $result=mysqli_query($conn,$read_user);
      if(mysqli_num_rows($result)>0){
      while ($row=mysqli_fetch_assoc($result)) {
      $_SESSION['username']=$row['name'];
      $_SESSION['password']=$row['password'];
      $_SESSION['image']=$row['image'];
      }
      }
      if($result){
      header("Location: index.php");
      }
      }
      ?>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="email box">
          <label for="email">Email Address</label>
          <div class="sec-2">
            <ion-icon name="mail-outline"></ion-icon>
            <input type="email" name="email" placeholder="Username@gmail.com"/>
          </div>
        </div>
        <div class="password box">
          <label for="password">Password</label>
          <div class="sec-2">
            <ion-icon name="lock-closed-outline"></ion-icon>
            <input class="pas" type="password" name="password" placeholder="············"/>
            <ion-icon class="show-hide" name="eye-outline"></ion-icon>
          </div>
        </div>
        <button name="submit_btn" type="submit" class="login">Login </button>
        <div class="footer" style="gap:15px;"><span>if you don't have a account => <a style="font-size: 12px" class="text-bold badge badge-success" href="SignUp.php">SignUp</a></span><span>Forgot Password?</span></div>
      </div>
    </form>
    <!-- partial -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>