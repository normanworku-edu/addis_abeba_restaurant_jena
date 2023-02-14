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
   </head>
   <body data-spy="scroll" data-target="#site-navbar" data-offset="200">
   
		<?php
         require 'db/populate_nav_bar.php';
        ?>
      <!-- END section -->
      <section class="site-section bg-light" id="section-message-submitted">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center mb-5 site-animate">
                  <h2 class="display-4">Message Submitted</h2>
                  <div class="row justify-content-center">
                     <div class="col-md-7">
                        <!--
                           <p class="lead">+++++++++++ Simple saying describing the dishes +++++++++++++.</p>
                           -->
                     </div>
                  </div>
               </div>
			   
			   
			   <?php
$to = "normangirma2012@gmail.com";
$subject = "Contact from addis-ababa-restaurnat.de";


$message = "
<html>
<head>
<title>Customer Feedback</title>
</head>
<body>
<h1>Name</h1>
<h2>".$_POST["name"]."</h2>
<h1>Email</h1>
<h2>".$_POST["email"]."</h2>
<h1>Message</h1>
<h2>".$_POST["message"]."</h2>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@addis-ababa-restaurnat.de>' . "\r\n";
$headers .= 'Cc: normangirma2012@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);
echo "DONE"
//require "index.php";
?>
            </div>
         </div>
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