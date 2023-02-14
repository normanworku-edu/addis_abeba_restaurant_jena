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
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

</head>

<body data-spy="scroll" data-target="#site-navbar" data-offset="200" style="width: 86%; margin-left: 7%;">

   <?php
   require 'db/populate_nav_bar.php';
   ?>

   <!-- END section -->
   <section class="site-section bg-light" id="section-contact">

      <div class="container">
         <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
               <div class="col-md-12 text-center mb-5 site-animate">
                  <h4 class="display-6">Anschrift</h4>
                  <div class="media d-block mb-4 text-center site-media site-animate">
                     <iframe class="google_map_frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d314.3337892856519!2d11.586431091575717!3d50.9298154189982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1d529d0eef985ded!2sAddis+Abeba+Restaurant+Jena!5e0!3m2!1sen!2sde!4v1529603159401" frameborder="0" style="border:0" allowfullscreen></iframe> <!-- <img src="images/about_img_1.jpg" alt="" class="img-fluid"> -->
                  </div>
               </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
               <div class="col-md-12 text-center mb-5 site-animate">

                  <h4 class="display-6">Kontakt</h4>
                  <p class="text-black">
                     Fürstengraben 17 (Eingang Jenergasse) <br> 07743 Jena, Germany <br> <br>
                     Telefon: +49(0)3641 79 67 670 Oder +49(0)151 26 25 13 84 <br> <br>
                     Email: addisabeba.jena@gmail.com <br> <br>
                     Inhaber: Yakob Kassa Alemayehu <br> <br>
                  </p>
                  <!--
                  <div class="media d-block mb-4 text-center site-media site-animate">
                     <?php  //require 'db/populate_sliding_fb_review.php'; 
                     ?>
                  </div>
               -->
               </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
               <div class="media d-block mb-4 text-center site-media site-animate">
                  <div class="col-md-12 text-center mb-5 site-animate">
                     <h4 class="display-6">Öffnungszeit</h4>
                     <?php
                     require 'db/populate_opening_hour_table.php';
                     ?>
                  </div>

               </div>
            </div>

         </div>
      </div>

   </section>



   <section class="site-section" id="section-home_page_3">
      <div class="container">
         <div class="row mb-40">
            <div class="col-xs-3 mx-auto">
               <a href="https://www.facebook.com/addisabeba.restaurant.jena/" target="_blank"><i class="fab fa-facebook-square" style="font-size: 40px; color: #3b5998;"></i></a>
            </div>
            <div class="col-xs-3 mx-auto">
               <a href="https://www.tripadvisor.de/Restaurant_Review-g187422-d25297389-Reviews-Addis_Abeba_Restaurant-Jena_Thuringia.html" target="_blank"><i class="fab fa-tripadvisor" style="font-size: 40px; color: #00a680;"></i></a>
            </div>
            <div class="col-xs-3 mx-auto">
               <a href="https://goo.gl/maps/uSsLYbFjZ2N2" target="_blank"><i class="fas fa-map-marked-alt" style="font-size: 40px; color: #dd4b39;"></i></a>
            </div>
            <div class="col-xs-3 mx-auto">
               <a href="https://www.instagram.com/addisabeba.jena/?hl=en" target="_blank"><i class="fab fa-instagram" style="font-size: 40px; color: #c13584;"></i></a>
            </div>
         </div>
      </div>
   </section>

   <!-- END section -->
   <footer class="site-footer site-bg-dark site-section"> <!--  site-bg-dark -->
      <div class="container">
         <div class="row site-animate">
            <div class="col-md-12 text-center">
               <p>
                  &copy; Copyright &copy;<script>
                     document.write(new Date().getFullYear());
                  </script> All rights reserved | Addis Ababa Restaurant</a>
               </p>
            </div>
         </div>
      </div>
   </footer>

   <!-- loader -->
   <div id="site-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
         <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
         <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
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