<!DOCTYPE html>
<html lang="en">

<head>
   <title>Addis Abeba Restaurant Jena</title>
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
   <link rel="icon" href="images/logo_icon.png">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

</head>

<body data-spy="scroll" data-target="#site-navbar" data-offset="200">

   <?php
   require 'db/populate_nav_bar.php';
   ?>



   <!-- END nav -->

   <!-- END section -->
   <section class="site-cover bg-light" id="section-slideshow">
      <!-- added by me for the slideshow -->
      <meta name="viewport" content="width=device-width, initial-scale=1">


      <?php
      require 'db/populate_sliding_background.php';
      ?>

   </section>

   <section class="site-section" id="section-home_page_2">

      <div class="col-md-12 text-center mb-5 site-animate">
         <h2 class="site-primary-title display-4">Willkommen im Addis Abeba Restaurant</h2>
         <!--<h2 class="site-primary-title display-8">Traditionelle äthiopische Gerichte in Jena</h2>
				  <h3 class="site-sub-title">Traditionelle äthiopische Gerichte in Jena</h3> -->
         <div class="row justify-content-center">
            <div class="col-md-9">
               <p class="lead text-black"> Ein Besuch in unserem Addis Abeba Restaurant ist eine Reise in die Welt k&ouml;stlicher Aromen der vielf&auml;ltigen &auml;thiopischen K&uuml;che und ein unvergessliches kulinarisches Erlebnis.
                  Yakob Kassa er&ouml;ffnete das kleine geschmackvolle Lokal 2018 und die Leidenschaft f&uuml;r die K&uuml;che seiner Heimat spiegelt sich in jedem traditionell zubereiteten Gericht wider. Viele der herzhaften Eint&ouml;pfe, die traditionell mit Injera (fluffiges Fladenbrot) serviert werden, sind auch f&uuml;r Vegetarier und Veganer geeignet.
                  Kommen Sie vorbei und lassen Sie sich vom K&ouml;nnen des K&uuml;chenchefs verzaubern. Erleben Sie au&szlig;erdem die reiche Kaffeekultur &Auml;thiopiens, von uns immer traditionell und frisch zubereitet.</p>
            </div>
         </div>
      </div>


      <div class="container">
         <div class="row">


            <div class="col-lg-6 col-md-6 col-sm-6">
               <div class="col-md-12 text-center mb-1 site-animate">
                  <h4 class="display-6">Öffnungszeiten</h4>

                  <?php
                  require 'db/populate_opening_hour_table.php';
                  ?>
               </div>

            </div>

            <div class="col-lg-6 col-md-6 col-sm-6">
               <div class="col-md-12 text-center mb-1 site-animate">
                  <h4 class="display-6">Kontakt</h4>
                  <p class="text-black">
                     Anschrift: <br> Fürstengraben 17 (Eingang Jenergasse) <br> 07743 Jena, Germany <br>
                     Telefon: +49(0)3641 79 67 670 <br> oder +49(0)151 26 25 13 84 <br>
                     Email: addisabeba.jena@gmail.com <br>
                     Inhaber: Yakob Kassa Alemayehu <br>
                  </p>
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