<!-- movei modal  -->
<footer id="footer_details" style="position:relative;bottom:-120pc;">
  <div class="footer_content">
    <div class="left">
      <img src="images/logo.svg" class="img-fluid" />
    </div>
    <div class="right">
      <ul class="navbar">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.html">tv shwo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.html">action</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.html">sereis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.html">pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.html">Contact</a>
        </li>
      </ul>
    </div>
    <div class="footer_social">
      <div class="cards">
        <img src="images/footer-bottom-img (1).png" alt="">
      </div>
      <div class="social">
        <a href="#"><span>
          <ion-icon name="logo-facebook"></ion-icon>
        </span></a>
        <a href="#"><span>
          <ion-icon name="logo-google"></ion-icon>
        </span></a>
        <a href="#"><span>
          <ion-icon name="logo-google-playstore"></ion-icon>
        </span></a>
        <a href="#"><span>
          <ion-icon name="logo-twitter"></ion-icon>
        </span></a>
        <a href="#"><span>
          <ion-icon name="logo-instagram"></ion-icon>
        </span></a>
        <a href="#"><span>
          <ion-icon name="logo-youtube"></ion-icon>
        </span></a>
        <a href="#"><span>
          <ion-icon name="videocam-outline"></ion-icon>
        </span></a>
      </div>
    </div>
  </div>
</footer>>
<!-- main movie section -->
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript">
// details page js
var modal = document.querySelector(".modal")
var watch_btn = document.getElementById("download")
var close = document.getElementById("close")
var video = document.querySelector("video")
watch_btn.onclick = function() {
modal.classList.add("modal_active")
}
close.onclick = function() {
// video.setAttribute("muted", "muted")
modal.classList.remove("modal_active")
// modal.classList.add("modal_active")
// modal.style.display = 'none';
}
video.onmouseover = () => {
video.classList.add("filter_active")
video.pause()
video.volume = 1
video.setAttribute("controls", "controls")
}
video.onmouseout = () => {
video.play()
video.classList.remove("filter_active")
}
function movieURL(){
document.getElementById("video_src");
// body...
var video_src= document.querySelector("iframe").src;

document.getElementById("video_src").setAttribute("href",video_src)

}
function searchBTN(){
document.getElementById("searc").setAttribute("class","active_search")
}
function close_searc(){
document.getElementById("searc").style.display = "none"
}
</script>
</body>
</html>
<!--  <footer id="footer_home">
<div class="footer_content">
<div class="left">
  <img src="images/logo.svg" class="img-fluid" />
</div>
<div class="right">
  <ul class="navbar">
    <li class="nav-item">
      <a class="nav-link" href="index.html">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.html">tv shwo</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.html">action</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.html">sereis</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.html">pricing</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.html">Contact</a>
    </li>
  </ul>
</div>
<div class="footer_social">
  <div class="cards">
    <img src="images/footer-bottom-img (1).png" alt="">
  </div>
  <div class="social">
    <a href="#"><span>
      <ion-icon name="logo-facebook"></ion-icon>
    </span></a>
    <a href="#"><span>
      <ion-icon name="logo-google"></ion-icon>
    </span></a>
    <a href="#"><span>
      <ion-icon name="logo-google-playstore"></ion-icon>
    </span></a>
    <a href="#"><span>
      <ion-icon name="logo-twitter"></ion-icon>
    </span></a>
    <a href="#"><span>
      <ion-icon name="logo-instagram"></ion-icon>
    </span></a>
    <a href="#"><span>
      <ion-icon name="logo-youtube"></ion-icon>
    </span></a>
    <a href="#"><span>
      <ion-icon name="videocam-outline"></ion-icon>
    </span></a>
  </div>
</div>
</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html> -->