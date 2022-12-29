<?php
include ("src/header.php");
include("src/config.php");
global $conn;
?>
<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <!-- ***********************************
        post form  start here
        *********************************** -->
        <?php
        $e_id=$_GET['e_id'];
        $get_user="SELECT * FROM users WHERE id=$e_id";
        $user_result=mysqli_query($conn,$get_user);
        if(mysqli_num_rows($user_result)>0){
        while($user_row=mysqli_fetch_assoc($user_result)){
        ?>
        <div class="col-sm-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4 text-uppercase">update form</h6>
                <form method="post" enctype="multipart/form-data" action="user_update.php?e_id=<?php echo $e_id; ?>">
                    <div class="form-floating mb-3">
                        <input value="<?php echo $user_row['name']; ?>" name="name" type="text" class="form-control" id="floatingInput"
                        placeholder="please Enter Your Name">
                        <label for="floatingInput">UserName</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input value="<?php echo $user_row['email']; ?>" name="email" type="email" class="form-control" id="floatingInput"
                        placeholder="please Enter Email">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input value="<?php echo $user_row['phone']; ?>" name="phone" type="phone" class="form-control" id="floatingInput"
                        placeholder="please Enter phone">
                        <label for="floatingInput">phone</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input value="<?php echo $user_row['password']; ?>" name="password" type="password" class="form-control" id="floatingInput"
                        placeholder="please Enter password">
                        <label for="floatingInput">password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input value="<?php echo $user_row['date']; ?>" name="date" type="text" class="form-control" id="floatingInput"
                        >
                        <label for="floatingInput">date</label>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <select name="city" class="form-select" id="floatingSelect"
                            aria-label="Floating label select example">
                            <?php
                            $get_City="SELECT * FROM city";
                            $city_result=mysqli_query($conn,$get_City);
                            if(mysqli_num_rows($city_result)>0){
                            while($city_row=mysqli_fetch_assoc($city_result)){
                            ?>
                            <option <?php if($city_row['id']==$user_row['city'])echo "selected"; ?> value="<?php echo $city_row['id']; ?>"><?php echo $city_row['name']; ?></option>
                            <?php
                            }
                            }
                            ?>
                            
                            
                        </select>
                        <label for="floatingSelect">city</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="status" class="form-select" id="floatingSelect"
                            aria-label="Floating label select example">
                            <option value="1" <?php if($user_row['status']==1)echo "selected"; ?>>Active</option>
                            <option value="0" <?php if($user_row['status']==0)echo "selected"; ?>>InActive</option>
                        </select>
                        <label for="floatingSelect">city</label>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input name="file" type='file'accept="image/jpg,png" class="form-control" id="readUrl">
                        <label for="readUrl" class="btn btn-primary form-control">Upload</label>
                        <img id="uploadedImage" src="u_image/<?php echo $user_row['image']; ?>" alt="Uploaded Image" accept="image/jpg,png, image/jpg,png" >
                    </div>
                    <div class="form-floating mb-3">
                        <button name="update" type="submit" class="btn btn-lg btn-primary m-2">update</button>
                    </div>
                </form>
            </div>
        </div>
        
        <?php
        }
        }
        include("src/footer.php");
        ?>