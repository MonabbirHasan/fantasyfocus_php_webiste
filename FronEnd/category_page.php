<?php
include("f_src/header.php");
include ("../BackEnd/src/config.php");
global $conn;
?>
<section id="main-movie">
	<div class="container">
		<div class="movie_slider">
			<div class="div-title">
				<h1>populler movie</h1>
			</div>
			<div class="owl-carousel owl-theme">
				<?php
				$item_id=$_GET['item_id'];
				$get_post="SELECT * FROM post_movie WHERE category=$item_id";
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
				$get_post="SELECT * FROM post_movie WHERE category=$item_id";
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
	</div>
</section>
<?php
include("f_src/footer.php");
?>