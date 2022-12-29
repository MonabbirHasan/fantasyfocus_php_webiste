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
        if(isset($_POST['submit'])){
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
        $insert_user="INSERT INTO users(name,email,phone,city,date,image,password,status)
        VALUES('{$name}','{$email}','{$phone}','{$city}','{$date}','{$file_name}','{$password}','{$status}')";
        $insert_result=mysqli_query($conn,$insert_user);
        if($insert_result){
        echo "data is inserted";
        }
        }
        
        }
        ?>
        <div class="col-sm-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4 text-uppercase">post form</h6>
                <form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="form-floating mb-3">
                        <input name="name" type="text" class="form-control" id="floatingInput"
                        placeholder="please Enter Your Name">
                        <label for="floatingInput">UserName</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="email" type="email" class="form-control" id="floatingInput"
                        placeholder="please Enter Email">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="phone" type="phone" class="form-control" id="floatingInput"
                        placeholder="please Enter phone">
                        <label for="floatingInput">phone</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="password" type="password" class="form-control" id="floatingInput"
                        placeholder="please Enter password">
                        <label for="floatingInput">password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="date" type="date" class="form-control" id="floatingInput"
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
                            <option value="<?php echo $city_row['id']; ?>"><?php echo $city_row['name']; ?></option>
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
                            <option value="1">Active</option>
                            <option value="0">InActive</option>
                        </select>
                        <label for="floatingSelect">city</label>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input name="file" type='file'accept="image/jpg,png" class="form-control" id="readUrl">
                        <label for="readUrl" class="btn btn-primary form-control">Upload</label>
                        <img id="uploadedImage" src="#" alt="Uploaded Image" accept="image/jpg,png, image/jpg,png" style="display:none;">
                    </div>
                    <div class="form-floating mb-3">
                        <button name="submit" type="submit" class="btn btn-lg btn-primary m-2">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- ***********************************
        pose table start here
        *********************************** -->
        <div class="bg-light text-center rounded p-4">
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col" class="text-uppercase text-bold bg-primary text-white">image</th>
                            <th scope="col" class="text-uppercase text-bold bg-primary text-white">name</th>
                            <th scope="col" class="text-uppercase text-bold bg-primary text-white">email</th>
                            <th scope="col" class="text-uppercase text-bold bg-primary text-white">phone</th>
                            <th scope="col" class="text-uppercase text-bold bg-primary text-white">date</th>
                            <th scope="col" class="text-uppercase text-bold bg-primary text-white">city</th>
                            <th scope="col" class="text-uppercase text-bold bg-primary text-white">status</th>
                            <th scope="col" class="text-uppercase text-bold bg-primary text-white">action</th>
                        </tr>
                    </thead>
                    <tbody class="text-capitalize">
                        <?php
                        $get_user="SELECT * FROM users";
                        $user_result=mysqli_query($conn,$get_user);
                        if(mysqli_num_rows($user_result)>0){
                        while($user_row=mysqli_fetch_assoc($user_result)){
                        ?>
                        <tr>
                            <td><img
                                class="rounded-circle flex-shrink-0"
                                src="u_image/<?php echo $user_row['image']; ?>"
                                alt=""
                                style="width: 40px; height: 40px;">
                            </td>
                            <td><?php echo $user_row['name']; ?></td>
                            <td><?php echo $user_row['email']; ?></td>
                            <td><?php echo $user_row['phone']; ?></td>
                            <td><?php echo $user_row['date']; ?></td>
                            <td>
                                <?php
                                $city_id=$user_row['city'];
                                $get_City="SELECT * FROM city WHERE id=$city_id";
                                $city_result=mysqli_query($conn,$get_City);
                                if(mysqli_num_rows($city_result)>0){
                                while($city_row=mysqli_fetch_assoc($city_result)){
                                echo "<span class='btn-sm btn-primary text-light'>{$city_row['name']}</span>";
                                }
                                }
                            ?></td>
                            <td>
                                <?php
                                if($user_row['status']==1){
                                echo "<span class='btn-sm btn-primary text-light'>Active</span>";
                                }else{
                                echo "<span class='btn-sm btn-danger text-light'>InActive</span>";
                                }
                            ?></td>
                            <td>
                                <span class="d-flex">
                                    <a class="btn btn-sm btn-primary p-1 m-2" href="delete_user.php?d_id=<?php echo $user_row['id']; ?>"><ion-icon name="trash-outline"></ion-icon></a>
                                    <a class="btn btn-sm btn-primary p-1 m-2" href="update_user_form.php?e_id=<?php echo $user_row['id']; ?>"><ion-icon name="create-outline"></ion-icon></a>
                                </span>
                            </td>
                        </tr>
                        <?php
                        }
                        }
                        ?>
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</div>
<!-- Form End -->
<?php
include("src/footer.php");
?>