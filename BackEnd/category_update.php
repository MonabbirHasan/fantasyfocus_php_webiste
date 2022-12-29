<?php
include("src/config.php");
include("src/header.php");
global $conn;
$edit_id=$_GET['edit_id'];
$show_category="SELECT * FROM category WHERE id={$edit_id}";
$show_result=mysqli_query($conn,$show_category);
if(mysqli_num_rows($show_result)>0){
while($show_row2=mysqli_fetch_assoc($show_result)){
?>
<h6 class="mb-4 text-uppercase">Edit form</h6>
<form action="update_category_final.php?edit_id=<?php echo $show_row2['id']; ?>" method="post" enctype="multipart/form-data">
    
    <div class="form-floating mb-3">
        <input type="text" value="<?php echo $show_row2['name']; ?>" name="category_name" class="form-control" id="floatingInput"
        placeholder="please Enter Movie Name">
        <label for="floatingInput">Movie Name</label>
    </div>
    
    <div class="form-floating mb-3">
        <input type="text" value="<?php echo $show_row2['date']; ?>" name="date" class="form-control" id="floatingInput"
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
            <option <?php if($show_row['id']==$show_row2['id'])echo "selected"; ?> value="<?php echo $show_row['id']; ?>"><?php echo $show_row['name']; ?></option>
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
            <option value="1" <?php if($show_row2['status']==1)echo "selected"; ?> >Active</option>
            <option value="0" <?php if($show_row2['status']==0)echo "selected"; ?> >InActive</option>
        </select>
        <label for="floatingSelect">status</label>
    </div>
    
    <div class="form-floating mb-3">
        <input type='file' name="file" accept="video/mp4" class="form-control" id="readUrl">
        <label for="readUrl" class="btn btn-primary form-control">Upload</label>
        <img id="uploadedImage" src="c_image/<?php echo$show_row2['image']; ?>" alt="Uploaded Image" accept="image/jpg, image/png"/>
    </div>
    <div class="form-floating mb-3">
        <button name="Update" type="submit" class="btn btn-lg btn-primary m-2">Update</button>
    </div>
</form>
<?php
}
}
include("src/footer.php");
?>