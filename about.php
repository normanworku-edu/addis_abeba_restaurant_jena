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

   <section class="site-section" id="section-about">
      <div class="container">
         <div class="row">
            <?php
            include 'db/populate_about_us.php';
            ?>
         </div>
      </div>
   </section>
   <!-- END section -->

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
                  &copy; Copyright &copy;<script>
                     document.write(new Date().getFullYear());
                  </script> All rights reserved | Addis Ababa Restaurant</a>
               </p>
            </div>
         </div>
      </div>
   </footer>
   <!-- Modal -->
   <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
            <div class="modal-body">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="bg-image" style="background-image: url(images/reservation_1.jpg);"></div>
                  </div>
                  <div class="col-lg-12 p-5">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <small>CLOSE </small><span aria-hidden="true">&times;</span>
                     </button>
                     <h1 class="mb-4">Reserve A Table</h1>
                     <form action="#" method="post">
                        <div class="row">
                           <div class="col-md-6 form-group">
                              <label for="m_fname">First Name</label>
                              <input type="text" class="form-control" id="m_fname">
                           </div>
                           <div class="col-md-6 form-group">
                              <label for="m_lname">Last Name</label>
                              <input type="text" class="form-control" id="m_lname">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12 form-group">
                              <label for="m_email">Email</label>
                              <input type="email" class="form-control" id="m_email">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6 form-group">
                              <label for="m_people">How Many People</label>
                              <select name="" id="m_people" class="form-control">
                                 <option value="1">1 People</option>
                                 <option value="2">2 People</option>
                                 <option value="3">3 People</option>
                                 <option value="4+">4+ People</option>
                              </select>
                           </div>
                           <div class="col-md-6 form-group">
                              <label for="m_phone">Phone</label>
                              <input type="text" class="form-control" id="m_phone">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6 form-group">
                              <label for="m_date">Date</label>
                              <input type="text" class="form-control" id="m_date">
                           </div>
                           <div class="col-md-6 form-group">
                              <label for="m_time">Time</label>
                              <input type="text" class="form-control" id="m_time">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12 form-group">
                              <label for="m_message">Message</label>
                              <textarea class="form-control" id="m_message" cols="30" rows="7"></textarea>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12 form-group">
                              <input type="submit" class="btn btn-primary btn-lg btn-block" value="Reserve Now">
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- END Modal -->
   <!-- 
         <script src="js/populate_menu_items.js"></script>
           -->
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