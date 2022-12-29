<?php
include("f_src/header.php");
include("../BackEnd/src/config.php");
global $conn;
?>
<!-- banner section -->
<style type="text/css">

</style>
<section id="banner">
  <div class="banner_content">
    <h1><span>Unlimited</span> Movie, TVs Shows, & More.</h1>
    <div class="time">
      <span>hd</span>
      <span>4k</span>
      <span>romance,drama</span>
      <span>
        <ion-icon name="calendar-outline"></ion-icon>2022
      </span>
      <span>
        <ion-icon name="timer-outline"></ion-icon>190.min
      </span>
    </div>
    <div class="watch_video">
      <span>
        <ion-icon name="play"></ion-icon>
      </span>
      <span>watch now</span>
    </div>
  </div>
</section>
<!-- banner section -->
<!-- main movie section -->
<section id="main-movie">
  <div class="container">
    <div class="movie_slider">
      <div class="div-title">
        <h1>populler movie</h1>
      </div>
      <div class="owl-carousel owl-theme">
        <?php
        $get_post="SELECT * FROM post_movie order by image";
        $post_result=mysqli_query($conn,$get_post);
        if(mysqli_num_rows($post_result)>0){
        while ($row=mysqli_fetch_assoc($post_result)) {
        ?>
        <div class="item">
          <div class="movie_thumbnail">
            <img src="../BackEnd/p_image/<?php echo $row['image']; ?>" alt="populler movie" class="img-fluid" />
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
        $get_post="SELECT * FROM post_movie order by image desc";
        $post_result=mysqli_query($conn,$get_post);
        if(mysqli_num_rows($post_result)>0){
        while ($row=mysqli_fetch_assoc($post_result)) {
        ?>
        <div class="item">
          <div class="movie_thumbnail">
            <img  alt="best movie"src="../BackEnd/p_image/<?php echo $row['image']; ?>" class="img-fluid" />
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
    <!-- upcommiing movies -->
    <!-- upcommiing movies -->
    <!-- upcommiing movies -->
    <!-- upcommiing movies -->
    <!-- upcommiing movies -->
    <div class="movie_slider">
      <div class="div-title d-flex">
        <h1>upcoming movie</h1>
        <div class="coming_soon_timer">
          <div class="timer">
            <div class="Year"></div>
            <div class="month"></div>
            <div class="day"></div>
            <div class="hour"></div>
            <div class="minuts"></div>
            <div class="second"></div>
          </div>
        </div>
      </div>
      <div class="owl-carousel owl-theme upcoming">
        <?php
        $get_post="SELECT * FROM post_movie order by image";
        $post_result=mysqli_query($conn,$get_post);
        if(mysqli_num_rows($post_result)>0){
        while ($row=mysqli_fetch_assoc($post_result)) {
        ?>
        <div class="item">
          <div class="movie_thumbnail">
            <img alt="hindi movie" src="../BackEnd/p_image/<?php echo $row['image']; ?>" class="img-fluid" />
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
        $get_post="SELECT * FROM post_movie order by image";
        $post_result=mysqli_query($conn,$get_post);
        if(mysqli_num_rows($post_result)>0){
        while ($row=mysqli_fetch_assoc($post_result)) {
        ?>
        <div class="item">
          <div class="movie_thumbnail">
            <img alt="english movie" src="../BackEnd/p_image/<?php echo $row['image']; ?>" class="img-fluid" />
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
    <!-- upcommiing mavies -->
    <!-- thumbnail midddle downloa details -->
    <section id="suggestion">
      <div class="container">
        <div class="wrapper">
          <div class="s_left">
            <div class="l_thumbnail">
              <img alt="china movie" src="images/movie-7.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="s_right">
            <div class="details">
              <h1>Download Your Shows Watch Offline.</h1>
              <p>Lorem ipsum dolor sit amet, consecetur adipiscing
                elseddo eiusmod tempor.There are many variations of
                passages of lorem Ipsum available, but the majority have
              suffered alteration in some injected humour.</p>
              <div class="tv">
                <span>
                  <ion-icon name="tv-outline"></ion-icon>
                </span>
                <span>Enjoy on Your TV.</span>
                <p>Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.</p>
              </div>
              <div class="video tv">
                <span>
                  <ion-icon name="videocam-outline"></ion-icon>
                </span>
                <span>Watch Everywhere.</span>
                <p>Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.</p>
              </div>
              <div class="download">
                <span>
                  <ion-icon name="cloud-download-outline"></ion-icon> Download now
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- thumbnail midddle downloa details -->
    <!-- web series -->
    <div class="movie_slider">
      <div class="div-title">
        <h1>web series</h1>
      </div>
      <div class="owl-carousel owl-theme upcoming">
        <?php
        $get_post="SELECT * FROM post_movie  WHERE category=30";
        $post_result=mysqli_query($conn,$get_post);
        if(mysqli_num_rows($post_result)>0){
        while ($row=mysqli_fetch_assoc($post_result)) {
        ?>
        <div class="item">
          <div class="movie_thumbnail">
            <img alt="science fiction movie" src="../BackEnd/p_image/<?php echo $row['image']; ?>" class="img-fluid" />
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
        $get_post="SELECT * FROM post_movie  WHERE category=30";
        $post_result=mysqli_query($conn,$get_post);
        if(mysqli_num_rows($post_result)>0){
        while ($row=mysqli_fetch_assoc($post_result)) {
        ?>
        <div class="item">
          <div class="movie_thumbnail">
            <img alt="fanny movie" src="../BackEnd/p_image/<?php echo $row['image']; ?>" class="img-fluid" />
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
    <!--web series -->
    <!-- science fiction -->
    <div class="movie_slider">
      <div class="div-title">
        <h1>science fiction movie</h1>
      </div>
      <div class="owl-carousel owl-theme upcoming">
        <?php
        $get_post="SELECT * FROM post_movie  WHERE category=3 ORDER BY image ASC";
        $post_result=mysqli_query($conn,$get_post);
        if(mysqli_num_rows($post_result)>0){
        while ($row=mysqli_fetch_assoc($post_result)) {
        ?>
        <div class="item">
          <div class="movie_thumbnail">
            <img alt="action movie" src="../BackEnd/p_image/<?php echo $row['image']; ?>" class="img-fluid" />
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
        $get_post="SELECT * FROM post_movie  WHERE category=3 ORDER BY IMAGE DESC";
        $post_result=mysqli_query($conn,$get_post);
        if(mysqli_num_rows($post_result)>0){
        while ($row=mysqli_fetch_assoc($post_result)) {
        ?>
        <div class="item">
          <div class="movie_thumbnail">
            <img alt="web series" src="../BackEnd/p_image/<?php echo $row['image']; ?>" class="img-fluid" />
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
    <!--web series -->
  </div>
  <div class="scroll-top">
    <a href="#head_top"><span>
      <ion-icon name="arrow-up-circle"></ion-icon>
    </span></a>
  </div>
</section>
<!-- movie filter section  -->
<!-- movie filter section  -->
<!-- movie filter section  -->
<!-- movie filter section  -->
<!-- movie filter section  -->
<section id="movie_filter">
  <div class="container">
    <div class="div-title text-center">
      <h1>top rated movie</h1>
    </div>
    <div class="filer_button text-center">
      <ul>
 <li class="filter active_filter">movie</li>
   <?php
$get_category="SELECT * FROM category WHERE is_sub=0";
$category_result=mysqli_query($conn,$get_category);
if(mysqli_num_rows($category_result)>0){
while ($row=mysqli_fetch_assoc($category_result)) {
?>

<li class="filter"><?php echo $row['name']; ?></li>
<?php
}
}
?>

       
      
</ul>
</div>
<!-- filtering movies -->
<div class="movie_slider">
      <!-- <div class="div-title text-center">
        <h3>BEST TV SERIES</h3>
        <h1>populler movie</h1>
      </div> -->
      <div class="owl-carousel owl-theme">
        <?php
        $get_post="SELECT * FROM post_movie  WHERE category=3 ORDER BY image ASC";
        $post_result=mysqli_query($conn,$get_post);
        if(mysqli_num_rows($post_result)>0){
        while ($row=mysqli_fetch_assoc($post_result)) {
        ?>
        <div class="item">
          <div class="movie_thumbnail">
            <img alt="upcoming movie" src="../BackEnd/p_image/<?php echo $row['image']; ?>" class="img-fluid" />
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
        $get_post="SELECT * FROM post_movie  WHERE category=3 ORDER BY image ASC";
        $post_result=mysqli_query($conn,$get_post);
        if(mysqli_num_rows($post_result)>0){
        while ($row=mysqli_fetch_assoc($post_result)) {
        ?>
        <div class="item">
          <div class="movie_thumbnail">
            <img alt="not available in youtube movie" src="../BackEnd/p_image/<?php echo $row['image']; ?>" class="img-fluid" />
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
    <!-- filtering movies -->
  </div>
</section>
<!-- movie filter section  -->
<?php include("f_src/footer.php"); ?>