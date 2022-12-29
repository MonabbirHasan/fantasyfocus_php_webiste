<?php
include ("src/header.php");
include("src/config.php");
include("src/function.php");
global $conn;
// ****************************************
// delte post code here
// ***************************************
// ****************************************
// delte post code here
// ***************************************
if(isset($_POST['submit'])){
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
move_uploaded_file($file_tmp, "p_image/".$file_name);
$insert_post="INSERT INTO post_movie(name,title,category,video,image,release_date,director,ratting,date,description,location,status)
VALUES('{$name}','{$title}','{$category}','{$movie_link}','{$file_name}','{$releas_date}','{$director}','{$ratting}','{$date}','{$desc}','{$location}','{$status}')";
$insert_result=mysqli_query($conn,$insert_post);
if($insert_result){
echo "data is inserted";
}
}
}
// ****************************************
// delte post code here
// ***************************************
// ****************************************
// delte post code here
// ***************************************
?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <!-- ***********************************
        post form  start here
        *********************************** -->
        <div class="col-sm-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4 text-uppercase">post form</h6>
                <form method="post" enctype="multipart/form-data" accept="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control" id="floatingInput"
                        placeholder="please Enter Movie Name">
                        <label for="floatingInput">Movie Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="title" class="form-control" id="floatingInput"
                        placeholder="please Enter Movie Title">
                        <label for="floatingInput">Movie Title</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" name="releas_date" class="form-control" id="floatingInput"
                        placeholder="please Enter Movie releas date">
                        <label for="floatingInput">Movie releas date</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" name="date" class="form-control" id="floatingInput"
                        placeholder="please Enter Movie date">
                        <label for="floatingInput">Movie date</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="director" class="form-control" id="floatingInput"
                        placeholder="please Enter Movie Director Name">
                        <label for="floatingInput">Movie Director Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="ratting" class="form-control" id="floatingInput"
                        placeholder="please Enter Movie Ratting">
                        <label for="floatingInput">Movie Ratting</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="location" class="form-control" id="floatingInput"
                        placeholder="please Enter Location">
                        <label for="floatingInput">shoting Location</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="category" class="form-select" id="floatingSelect"
                            aria-label="Floating label select example">
                            <?php
                            $get_category="SELECT * FROM category";
                            $get_result=mysqli_query($conn,$get_category);
                            if(mysqli_num_rows($get_result)>0){
                            while($get_row=mysqli_fetch_assoc($get_result)){
                            ?>
                            <option value="<?php echo $get_row['id']; ?>"><?php echo $get_row['name'];?></option>
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
                        <label for="floatingSelect">Movie Category</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="movie_link" class="form-control" id="floatingInput"
                        placeholder="please Enter Movie Link Here">
                        <label for="floatingInput">Movie Link Here</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type='file' name="file" accept="image/jpg, image/png" class="form-control" id="readUrl">
                        <label for="readUrl" class="btn btn-primary form-control">Upload</label>
                        <video id="uploadedImage" src="#" alt="Uploaded Image" accept="image/jpg, image/png" style="display:none;">
                        </video>
                    </div>
                    <div class="form-floating">
                        <textarea name="desc" class="form-control" placeholder="Please Enter Movie Description"
                        id="floatingTextarea" style="height: 150px;"></textarea>
                        <label for="floatingTextarea">Description</label>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <button type="submit" name="submit" class="btn btn-lg btn-primary m-2">Submit</button>
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
                            <th scope="col" class="text-uppercase text-bold bg-primary text-white">title</th>
                            <th scope="col" class="text-uppercase text-bold bg-primary text-white">category</th>
                            <th scope="col" class="text-uppercase text-bold bg-primary text-white">video</th>
                            <th scope="col" class="text-uppercase text-bold bg-primary text-white">releas</th>
                            <th scope="col" class="text-uppercase text-bold bg-primary text-white">director</th>
                            <th scope="col" class="text-uppercase text-bold bg-primary text-white">ratting</th>
                            <th scope="col" class="text-uppercase text-bold bg-primary text-white">date</th>
                            <th scope="col" class="text-uppercase text-bold bg-primary text-white">desc</th>
                            <th scope="col" class="text-uppercase text-bold bg-primary text-white">location</th>
                            <th scope="col" class="text-uppercase text-bold bg-primary text-white">status</th>
                            <th scope="col" class="text-uppercase text-bold bg-primary text-white">action</th>
                        </tr>
                    </thead>
                    <tbody class="text-capitalize">
                        <?php
                        $get_post="SELECT * FROM post_movie";
                        $get_result=mysqli_query($conn,$get_post);
                        if(mysqli_num_rows($get_result)>0){
                        while($get_row=mysqli_fetch_assoc($get_result)){
                        ?>
                        <tr>
                            <td><img
                                class="rounded-circle flex-shrink-0"
                                src="p_image/<?php echo $get_row['image']; ?>"
                                alt=""
                                style="width: 40px; height: 40px;">
                            </td>
                            <td><span class="btn-sm btn-primary text-light"><?php echo $get_row['name']; ?></span></td>
                            <td><?php echo substr($get_row['title'],0,10); ?></td>
                            <td><?php GetName($get_row['category']);?></td>
                            <td class="text-lowercase"><?php echo substr($get_row['video'],0,5); ?></td>
                            <td><?php echo $get_row['release_date']; ?></td>
                            <td><?php echo $get_row['director']; ?></td>
                            <td><span class="btn-sm btn-primary text-light"><?php echo $get_row['ratting']; ?></span></td>
                            <td><?php echo $get_row['date']; ?></td>
                            <td><?php echo substr($get_row['image'],0,10); ?></td>
                            <td><?php echo $get_row['location']; ?></td>
                            <td>
                                <?php
                                if($get_row['status']==1){
                                echo "<span class='btn-sm btn-success'>Active</span>";
                                }else{echo "<span class='btn-sm btn-danger'>InActive</span>";}
                                ?>
                                
                            </td>
                            <td>
                                <span class="d-flex">
                                    <a class="btn btn-sm btn-primary p-1 m-2" href="delete_item.php?d_id=<?php echo $get_row['id']; ?>"><ion-icon name="trash-outline"></ion-icon></a>
                                    <a class="btn btn-sm btn-primary p-1 m-2" href="update_post_form.php?e_id=<?php echo $get_row['id']; ?>"><ion-icon name="create-outline"></ion-icon></a>
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
<?php
include("src/footer.php");
?>