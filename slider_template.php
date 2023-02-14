<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Addis Abeba Restaurnat Jena</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
      <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/bootstrap-datepicker.css">
      <link rel="stylesheet" href="css/jquery.timepicker.css">
      <link rel="stylesheet" href="css/icomoon.css">
      <link rel="stylesheet" href="css/style.css">
      <!-- added by me for social media icons -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  
	  <!-- added by me for the slideshow -->
	  <meta name="viewport" content="width=device-width, initial-scale=1">


   </head>
   <body data-spy="scroll" data-target="#site-navbar" data-offset="200">
		<?php
         require 'db/populate_nav_bar.php';
        ?>
		
      <!-- END section -->
      <section class="site-cover bg-light" id="section-slideshow">
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/background/bg_1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/background/bg_2.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/background/bg_3.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);
            carousel();
            
            function carousel() {
                plusSlides(1);
                setTimeout(carousel, 3000); // Change image every 2 seconds
            }
			

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

      </section>
      <!-- END section -->
	  
      <footer class="site-footer site-bg-dark site-section">
         <div class="container">
            <div class="row site-animate">
               <div class="col-md-12 text-center">
                  <div class="site-footer-widget mb-4">
                     <ul class="site-footer-social list-unstyled ">
                        <li class="site-animate"><a href="https://www.facebook.com/addisabeba.restaurant.jena/"><span class="icon-facebook"></span></a></li>
                        <li class="site-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        <li class="site-animate"><a href="#"><span class="icon-youtube"></span></a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-12 text-center">
                  <p>
                     &copy; Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Addis Ababa Restaurant</a>
                  </p>
               </div>
            </div>
         </div>
      </footer>

      <!-- loader -->
      <div id="site-loader" class="show fullscreen">
         <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
         </svg>
      </div>
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.easing.1.3.js"></script>
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/bootstrap-datepicker.js"></script>
      <script src="js/jquery.timepicker.min.js"></script>
      <script src="js/jquery.animateNumber.min.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
      <script src="js/google-map.js"></script>
      <script src="js/main.js"></script>
   </body>
</html>




<!DOCTYPE html>
<html>
<head>

</head>
<body>


</body>
</html> 
