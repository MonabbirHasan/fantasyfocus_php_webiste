var scrolltop = document.querySelector(".scroll-top")
var header = document.querySelector("header")
var year=document.querySelector(".Year")
var month=document.querySelector(".month")
var day=document.querySelector(".day")
var hour=document.querySelector(".hour")
var minuts=document.querySelector(".minuts")
var second=document.querySelector(".second")
var filter=document.querySelectorAll(".filter")
window.addEventListener("scroll", () => {
  scrolltop.classList.toggle("top", window.scrollY > 300)
});
window.addEventListener("scroll", () => {
  header.classList.toggle("sticky", window.scrollY > 150);
});

function dateTime(){
  var nowDate=new Date()
  var d=nowDate.getDay()
  var mn=nowDate.getMonth()
  var h=nowDate.getHours()
  var m=nowDate.getMinutes()
  var s=nowDate.getSeconds()
  var f=nowDate.getFullYear()
  console.log(second);

  minuts.innerHTML=m;
  second.innerHTML=s;
  day.innerHTML=d;
  month.innerHTML=mn;
  year.innerHTML=f;
  if(h>=12){
    h=h-12;
      hour.innerHTML=h;
  }
}

setInterval(()=>{
dateTime()
},1000)

for(var i=0;i<filter.length;i++){
  filter[i].addEventListener("click",(e)=>{
    for(var j=0;j<filter.length;j++){
      filter[j].classList.remove("active_filter")
    }
  e.target.classList.add("active_filter")
  })
}

var loader=document.querySelector(".loader")
window.onload=()=>{
  loader.classList.add("loader_active")
  setTimeout(()=>{
    loader.classList.remove("loader_active")
  },3000)

}


// slider js
$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 20,
  smartSpeed: 1500,
  autoplay: true,
  nav: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1000: {
      items: 4
    }
  }
});
$('.upcoming').owlCarousel({
  loop: true,
  margin: 20,
  smartSpeed: 500,
  autoplay: true,
  nav: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1000: {
      items: 4
    }
  }
});
$('.owl-carousel').owlCarousel({
  animateOut: 'slideOutDown',
  animateIn: 'flipInX',
  items: 1,
  margin: 30,
  stagePadding: 30,
  smartSpeed: 450
});
