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
        if(isset($_POST['submit_btn'])){
        $name=$_POST['category_name'];
        $date=$_POST['date'];
        $parent_category=$_POST['parent_category'];
        $status=$_POST['status'];
        $file_name=$_FILES['file']['name'];
        $file_tmp=$_FILES['file']['tmp_name'];
        $file_type=$_FILES['file']['type'];
        $file_size=$_FILES['file']['size'];
        if($name===''&& $date===''&&parent_category===''&&$status===''&&$file=''){
        echo "All Field are required";
        }else{
        move_uploaded_file($file_tmp,'c_image/'.$file_name);
        $insert_category="INSERT INTO category(name,is_sub,date,image,status)
        VALUES('{$name}','{$parent_category}','{$date}','{$file_name}','{$status}')";
        if(mysqli_query($conn,$insert_category)){
        echo "date is inserted";
        }
        }
        }
        ?>
        <div class="col-sm-12">
            <div class="bg-light rounded h-100 p-4">
                <?php
                if(isset($_GET["d_id"])){
                $d_id=$_GET['d_id'];
                $delete="DELETE FROM category WHERE id=$d_id";
                if(mysqli_query($conn,$delete)){
                
                }
                }
                ?>
                <h6 class="mb-4 text-uppercase">post form</h6>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post" enctype="multipart/form-data">
                    <div class="form-floating mb-3">
                        <input type="text" name="category_name" class="form-control" id="floatingInput"
                        placeholder="please Enter Movie Name">
                        <label for="floatingInput">Movie Name</label>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="date" name="date" class="form-control" id="floatingInput"
                        placeholder="please Enter Movie releas date">
                        <label for="floatingInput">Movie date</label>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <select name="parent_category" class="form-select" id="floatingSelect"
                            aria-label="Floating label select example">
                            <?php
                            $show_category="SELECT * FROM category WHERE is_sub=0";
                            $show_result=mysqli_query($conn,$show_category);
                            if(mysqli_num_rows($show_result)>0){
                            while($show_row=mysqli_fetch_assoc($show_result)){
                            ?>
                            <option value="<?php echo $show_row['id']; ?>"><?php echo $show_row['name']; ?></option>
                            <?php
                            }
                            }
                            ?>
                        </select>
                        <label for="floatingSelect">Movie Category</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="status" class="form-select" id="floatingSelect"
                            aria-label="Floating label select example">
                            <option value="1">Active</option>
                            <option value="0">InActive</option>
                        </select>
                        <label for="floatingSelect">status</label>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type='file' name="file" accept="video/mp4" class="form-control" id="readUrl">
                        <label for="readUrl" class="btn btn-primary form-control">Upload</label>
                    <video id="uploadedImage" src="#" alt="Uploaded Image" accept="video/mp4, video/mp4" style="display:none;"></video>
                </div>
                <div class="form-floating mb-3">
                    <button name="submit_btn" type="submit" class="btn btn-lg btn-primary m-2">Submit</button>
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
                        <th scope="col" class="text-uppercase text-bold">name</th>
                        <th scope="col" class="text-uppercase text-bold">image</th>
                        <th scope="col" class="text-uppercase text-bold">date</th>
                        <th scope="col" class="text-uppercase text-bold">sub</th>
                        <th scope="col" class="text-uppercase text-bold">status</th>
                        <th scope="col" class="text-uppercase text-bold">action</th>
                    </tr>
                </thead>
                <tbody class="text-capitalize">
                    <?php
                    $show_category="SELECT * FROM category";
                    $show_result=mysqli_query($conn,$show_category);
                    if(mysqli_num_rows($show_result)>0){
                    while($show_row=mysqli_fetch_assoc($show_result)){
                    ?>
                    <tr>
                        <td><?php echo $show_row['name']; ?></td>
                        <td><img
                            class="rounded-circle flex-shrink-0"
                            src="c_image/<?php echo $show_row['image']; ?>"
                            alt=""
                            style="width: 40px; height: 40px;">
                        </td>
                        <td>12-12-2022</td>
                        <td><?php echo $show_row['is_sub']; ?></td></td>
                        <td><?php if($show_row['status']==1)echo "<span class='btn-sm btn-primary'>Active</span>";else echo"<span class='btn-sm btn-danger'>InActive</span>"; ?></td>
                        <td>
                            <span class="d-flex">
                                <a class="btn btn-sm btn-primary p-1 m-2" name="delete" href="category.php?d_id=<?php echo $show_row['id'];?>"><ion-icon name="trash-outline"></ion-icon></a>
                                <a class="btn btn-sm btn-primary p-1 m-2" name="edite" href="category_update.php?edit_id=<?php echo $show_row['id']; ?>"><ion-icon name="create-outline"></ion-icon></a>
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