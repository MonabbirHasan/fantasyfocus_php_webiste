<?php
include ("src/header.php");
include("src/config.php");
global $conn;
// ****************************************
// delte post code here
// ***************************************
// ****************************************
// delte post code here
// ***************************************
$edit_id=$_GET['e_id'];
$insert_post="SELECT * FROM post_movie WHERE id=$edit_id";
$insert_result=mysqli_query($conn,$insert_post);
if(mysqli_num_rows($insert_result)>0){
while($get_row2=mysqli_fetch_assoc($insert_result)){
?>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <!-- ***********************************
        post form  start here
        *********************************** -->
        <div class="col-sm-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4 text-uppercase">post form</h6>
                <form method="post" enctype="multipart/form-data" action="update_post.php?e_id=<?php echo $edit_id; ?>">
                    <div class="form-floating mb-3">
                        <input value="<?php echo $get_row2['name']; ?>" type="text" name="name" class="form-control" id="floatingInput"
                        placeholder="please Enter Movie Name">
                        <label for="floatingInput">Movie Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input value="<?php echo $get_row2['title']; ?>" type="text" name="title" class="form-control" id="floatingInput"
                        placeholder="please Enter Movie Title">
                        <label for="floatingInput">Movie Title</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input value="<?php echo $get_row2['release_date']; ?>" type="date" name="releas_date" class="form-control" id="floatingInput"
                        placeholder="please Enter Movie releas date">
                        <label for="floatingInput">Movie releas date</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input value="<?php echo $get_row2['date']; ?>" type="text" name="date" class="form-control" id="floatingInput"
                        placeholder="please Enter Movie date">
                        <label for="floatingInput">Movie date</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input value="<?php echo $get_row2['director']; ?>" type="text" name="director" class="form-control" id="floatingInput"
                        placeholder="please Enter Movie Director Name">
                        <label for="floatingInput">Movie Director Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input value="<?php echo $get_row2['ratting']; ?>" type="text" name="ratting" class="form-control" id="floatingInput"
                        placeholder="please Enter Movie Ratting">
                        <label for="floatingInput">Movie Ratting</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input value="<?php echo $get_row2['location']; ?>" type="text" name="location" class="form-control" id="floatingInput"
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
                            <option <?php if($get_row['id']==$get_row2['category'])echo"selected";?> value="<?php echo $get_row['id']; ?>"><?php echo $get_row['name'];?></option>
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
                            <option value="1" <?php if($get_row2['status']==1)echo "selected"; ?> >Active</option>
                            <option value="0" <?php if($get_row2['status']==0)echo "selected"; ?> >InActive</option>
                        </select>
                        <label for="floatingSelect">Movie Category</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input value="<?php echo $get_row2['video']; ?>" type="text" name="movie_link" class="form-control" id="floatingInput"
                        placeholder="please Enter Movie Link Here">
                        <label for="floatingInput">Movie Link Here</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type='file' name="file" accept="video/mp4" class="form-control" id="readUrl">
                        <label for="readUrl" class="btn btn-primary form-control">Upload</label>
                        <img id="uploadedImage" src="c_image/<?php echo $get_row2['image'];?>" alt="Uploaded Image" accept="image/jpg, image/png">
                    </div>
                    <div class="form-floating">
                        <textarea name="desc" value="<?php echo $get_row2['description']; ?>" class="form-control" placeholder="Please Enter Movie Description"
                        id="floatingTextarea" style="height: 150px;"><?php echo $get_row2['description']; ?></textarea>
                        <label for="floatingTextarea">Description</label>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <button type="submit" name="update" class="btn btn-lg btn-primary m-2">Update</button>
                    </div>
                </form>
            </div>
        </div>
        <?php
        }
        }
        include("src/footer.php");
        ?>