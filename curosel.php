<div class="slideshow-container">

<div class="mySlides curoselfade">
  
  <img src="carousel/2.jpg" style="width:100%">
  <div class="curoseltext">Caption Text</div>
</div>

<div class="mySlides curoselfade">
  
  <img src="carousel/1.jpg" style="width:100%">
  <div class="curoseltext">Caption Two</div>
</div>

<div class="mySlides curoselfade">
  
  <img src="carousel/3.jpg" style="width:100%">
  <div class="curoseltext">Caption Three</div>
</div>
<div class="mySlides curoselfade">
  
  <img src="carousel/4.jpg" style="width:100%">
  <div class="curoseltext">Caption Four</div>
</div>

</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>



<section >
      <style>
.mySlides img{
  max-width: 1350px;
  max-height:700px ;
  margin-top: 50px;
}

.slideshow-container {
  max-width: 1400px;
  position: relative;
  margin: auto;
}

/* Caption text */
.curoseltext {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.1s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.curoselfade {
  -webkit-animation-name: curoselfade;
  -webkit-animation-duration: 0.8s;
  animation-name: curoselfade;
  animation-duration: 0.8s;
}

/@-webkit-keyframes curoselfade {
  from {opacity: 1} 
  to {opacity: 1}
}

@keyframes curoselfade {
  from {opacity: 1} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .curoseltext {font-size: 11px}
}
</style>
</section>




<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 1500); // Change image every 2 seconds
}
</script>
     </section>
        