

<!DOCTYPE html>
<html>


<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    
      Drishti- A Revoluntary Concept
    
  </title>
<?php
include('header.php')
?>
  

<link href="static/events/css/main.css" rel="stylesheet">


<body>
    <section id="home" class="dzsparallaxer auto-init dzsparallaxer---window-height use-loading" style="position: relative; height: 800px;background-image: url('static/assets/images/bg_img.jpg');background-size: cover" data-options='{  mode_scroll: "normal" }'>
         <div class="divimage dzsparallaxer-=-target" id="mojojo" style="width: 100%; height: 100%; display: none;position: relative;background-size: cover">
             <div class="hero-parallax">
                <div class="hero-inner">
                  <div class="hero-inner">
                    <div class="hero-content">
              <div class="text-center">
                            <h1><span class="typed"></span></h1>  
              </div>
              <?php include('typed.php') ?>
                    </div>
                  </div>
                    <!-- <!-=-parallax image div
                    <div class="mouse-down scroll-to"> -->
                        <a href="#agency">
                           <i class="ion-mouse"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="divimage dzsparallaxer--target  lala" style="" id="jojomo">
            <div class="hero-parallax">
                <div class="hero-inner">
                    <div class="hero-content">
                        <div class="text-center">
                            <!-- <div class="row">
                                <div class="col-sm-8 col-sm-offset-2 lol">
                                    <!- <p id="div1">Innovate, Ideate, Implement</p> ->
                                    <p>Hi! Welcome to DRISHTI website.</p>
                                    <p>Please wait while we load the latest events.
                                        <span class="cur">|</span>
                                    </p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!--parallax image div-->
                <div class="mouse-down scroll-to">
                    <a href="#agency">
               <i class="ion-mouse"></i>
             </a>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
    // setTimeout(function() {
        // document.getElementById("jojomo").style.display = "none";
        document.getElementById("mojojo").style.display = "block";
    // }, 10000)
    </script>
    <!--intro section end-->



    <!--         curosel                            -->
    


     
  <!--         curosel                            -->
    


     <section class="container-fluid">
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
</head>
<body>


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
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>
     </section>
        

  
  
    <!--end features section-->
    <section class="showcase-section">
        <div class="space-90"></div>
        <div class="container teams">
           
            <div class="container">
                <div class="row vertical-align-child">
                    <div class="col-md-5 margin-b-30">
                        <h3>Technovation</h3>
                        <p>
                            Drishti has been the driving force in igniting the young minds of SVNIT in taking up various technical projects. It boasts of providing a platform to the students where they can collaborate, carry out technical projects and can see their most creative and innovative ideas, and thus their dreams materialize. 
                        </p>
                    </div>
                    
                       
                       <iframe style="max-height: 315px;max-width: 560px ; " width="100%" height="315" src="https://www.youtube.com/embed/0Zii7ZtJDOQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  
                </div>
                <div class="space-60"></div>
            </div>
    </section>
    <!--end showcase section-->
    
    <!--end showcase section-->
    <section class="pricing-section">
        <div class="space-90"></div>
        <div class="container teams">
            
            <div class="row">
                <div class="col-sm-4 margin-b-30">
                    <div class="price-box">
                        <div class="price-header">
                            <h1>What We Do</h1>
                            
                        </div>
                        <ul class="list-unstyled price-features">
                            <li>Drishti promotes student participation in nationally recognized technical festivals like Techfest-IITB and Kshitij-IIT Kharagpur. Drishti has also been representing SVNIT at the Asia- Pacific international robotics competition, ROBOCON since the last 7 years. 
                            </li>
                        </ul>
                        
                    </div>
                </div>
                <!--/col-->
                <div class="col-sm-4 margin-b-30">
                    <div class="price-box best-plan">
                        <div class="price-header">
                            <h1>Why to choose Drishti</h1>
                            
                        </div>
                        <ul class="list-unstyled price-features">
                            <li>Here we welcome all novice ideas and innovations.All those with great ideas towards developing technology  and technical advances for promoting society welfare are always welcomed here. Drishti inculcates the teamworking attitude. We strive to learn through projects and hope in building the better technology for the society.
                            </li>
                        </ul>
                        
                    </div>
                </div>
                <!--/col-->
                <div class="col-sm-4 margin-b-30">
                    <div class="price-box">
                        <div class="price-header">
                            <h1>About Us</h1>
                           
                        </div>
                        <ul class="list-unstyled price-features">
                            <li>Drishti is a technical hobby club of SVNIT that has been involved in all technical activities carried out in the college and is managed by Faculty Advisor <a href="http://svnit.ac.in/facup/4023add.pdf" >Dr.A.D.Darji </a>,<a href="http://svnit.ac.in/sjp/">Dr. Sankita Patel</a>, <a href="http://svnit.ac.in/Data/facup/pjengineer/index.html">Dr.Pinal Engineer</a> . Take the countdown timer for the Mind-bend and the sensor based electricity control system which is being installed in the various parts of the college, as the epitomes of DRISHTI projects.
                            </li>
                        </ul>
                        
                    </div>
                </div>
                <!--/col-->
            </div>
            <!-- /ROW -->
            
                    
        
        </div>
        <div class="space-60"></div>
    </section>
    <!--end pricing section-->
    <script src="static/assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script>
    setTimeout(function() {
        document.getElementById("zed").style.opacity = 1;
    }, 5000);
    </script>
    <script type="text/javascript">
    var clubid = 1;
    var totalClubs = $(".clubsTabs li").length;

    function translateClub() {
        var clubId = "#club" + clubid + " a";
        $(".smartDisplay li .active").removeClass("active");
        $(".smartDisplay li[id='bu" + clubid + "'] a").addClass("active");
        $(clubId).tab('show');
        clubid = (clubid) % totalClubs + 1;
    }
    var timers = setInterval(function() {
        translateClub();
    }, 6000);
    </script>
</body>

 <?php
 include('footer.php')
 ?>

  
  <script>
  $(document).ready(function(){
    $("#div1").hide(0).delay(600).curoselfadeIn(5000);
});
  </script>
  <script>
  function tooglezz() {
    var godd = document.getElementById("chill");
    document.getElementById("contacto").style.display = 'none';
    if (godd.style.display == 'none') {
      godd.style.display = 'block';
    } else {
      godd.style.display = 'none';
    }
  }

  function tooglez() {
    var godd = document.getElementById("contacto");
    document.getElementById("chill").style.display = 'none';
    if (godd.style.display == 'none') {
      godd.style.display = 'block';
    } else {
      godd.style.display = 'none';
    }
  }

  function revamp() {
    document.getElementById("chill").style.display = 'none';
    document.getElementById("contacto").style.display = 'none';

  }
  </script>
  <!-- Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-100614593-1', 'auto');
    ga('send', 'pageview');
  </script>
      
  <!--  Typed.js Typing Css And Js  -->
 



</html>
