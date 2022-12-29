<?php
include("f_src/header.php");
include("../BackEnd/src/config.php");
global $conn;
?>
<!-- movie view section details open---->
<!-- movie view section details open---->
<section id="details_banner">
  <div class="container">
    <style type="text/css">
    @media (min-width: 320px) and (max-width: 480px) {
    .single_movie_details{
    display: grid!important;
    }
    .single_desc .title h1 span{
    font-size: 20px;
    }
    .buttons a{
    padding: 0px;
    }
    .tags{
    display: grid;
    }
    .modal.modal_active{
    width: 300px;
    height: 300px;
    left: 0;
    }
    iframe{
    width: auto!important;
    height: 100%!important;
    }
    .modal span{
    font-size: 1rem!important;
    }
    }
    iframe{
    width: 100%!important;
    height: 100%!important;
    }
    </style>
    <?php
    $info=$_GET['info'];
    $get_movie_details="SELECT * FROM post_movie WHERE id=$info";
    $result=mysqli_query($conn,$get_movie_details);
    if(mysqli_num_rows($result)>0){
    while ($row=mysqli_fetch_assoc($result)) {
    ?>
    <div class="single_movie_details" style="width: auto!important;" >
      <div class="movie_left">
        <div class="single_movie_thumnail img-fluid" style="width: auto!important;" class="modal_btn">
          <img class="img-fluid" alt="populler movie" src="../BackEnd/p_image/<?php echo $row['image']; ?>" alt="">
          
        </div>
      </div>
      <div class="movie_right">
        
        <div class="single_desc">
          <span class="title">
            <h1><span><?php echo $row['name']; ?></span></h1>
            <span class="resulation">4k</span>
          </span>
          <span class="tags">
            <span>Comedy,</span>
            <span>Action,</span>
            <span>Adventure,</span>
            <span>Science Fiction</span>
          </span>
          <span class="d_item">
            <span class="pulish-date"><?php echo $row['release_date']; ?></span>
            <span class="durations">03:45:56.s</span>
          </span>
          <div class="movie_desc">
            <p>
              <?php echo $row['description']; ?>
            </p>
            <p>
              A bank teller called Guy realizes he is a background
              character in an open world video game called Free City
              that will soon go offline.
              It is a long established fact that a reader will be distracted
              by the readable content of a page when looking at its layout. The
              point of using Lorem Ipsum is t
            </p>
          </div>
          <div class="buttons">
            <a href="#" id="download">
              <span>
                <ion-icon name="play-outline"></ion-icon>
              </span>
              <span>watch now</span>
            </a>
            <a id="video_src" style="cursor: pointer;" onclick="movieURL();">>
              <span>
                <ion-icon name="cloud-download-outline"></ion-icon>
              </span>
              <span>download now</span>
            </a>
          </div>
        </div>
        <?php
        }
        }
        ?>
      </div>
    </div>
    <!-- related -->
    <div class="movie_slider">
      <div class="div-title text-center">
        <h3>BEST TV SERIES</h3>
        <h1>populler movie</h1>
      </div>
      <div class="owl-carousel owl-theme">
        <?php
        $get_post="SELECT * FROM post_movie ORDER BY image ASC";
        $post_result=mysqli_query($conn,$get_post);
        if(mysqli_num_rows($post_result)>0){
        while ($row=mysqli_fetch_assoc($post_result)) {
        ?>
        <div class="item">
          <div class="movie_thumbnail">
            <img alt="best movie" src="../BackEnd/p_image/<?php echo $row['image']; ?>" class="img-fluid" />
          </div>
          <div class="movie_details">
            <div class="movie-title">
              <h4><a href="movie-Details.php?info=<?php echo $row['id']; ?>"><?php echo substr($row['title'],0,25); ?></a></h4>
              <span><?php echo $row['date']; ?></span>
            </div>
            <div class="movie_size">
              <span>4k</span>
              <span>
                <ion-icon name="timer-outline"></ion-icon> mins
              </span>
              <span><?php echo $row['ratting']; ?><ion-icon name="star-half-outline"></ion-icon></span>
            </div>
          </div>
        </div>
        <?php
        }
        }
        ?>
      </div>
      <!-- slider part tow -->
      <div class="owl-carousel owl-theme">
        <?php
        $get_post="SELECT * FROM post_movie ORDER BY image ASC";
        $post_result=mysqli_query($conn,$get_post);
        if(mysqli_num_rows($post_result)>0){
        while ($row=mysqli_fetch_assoc($post_result)) {
        ?>
        <div class="item">
          <div class="movie_thumbnail">
            <img alt="survival movie" src="../BackEnd/p_image/<?php echo $row['image']; ?>" class="img-fluid" />
          </div>
          <div class="movie_details">
            <div class="movie-title">
              <h4><a href="movie-Details.php?info=<?php echo $row['id']; ?>"><?php echo substr($row['title'],0,25); ?></a></h4>
              <span><?php echo $row['date']; ?></span>
            </div>
            <div class="movie_size">
              <span>4k</span>
              <span>
                <ion-icon name="timer-outline"></ion-icon> mins
              </span>
              <span><?php echo $row['ratting']; ?><ion-icon name="star-half-outline"></ion-icon></span>
            </div>
          </div>
        </div>
        <?php
        }
        }
        ?>
      </div>
    </div>
  </div>
</section>
<!-- Modal -->
<div class="modal">
  <span id="close">
    <ion-icon name="close"></ion-icon>
  </span>
  <div class="video">
    <?php
    $info=$_GET['info'];
    $get_movie_details="SELECT * FROM post_movie WHERE id=$info";
    $result=mysqli_query($conn,$get_movie_details);
    if(mysqli_num_rows($result)>0){
    while ($row=mysqli_fetch_assoc($result)) {
    ?>
    <?php
    echo $row['video'];
    ?>
    <?php
    }}
    ?>
  </div>
</div>
<?php include("f_src/footer.php"); ?>