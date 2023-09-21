<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Client</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@400;500;600;700;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" style="width:220px; height:48px"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('services') }}">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('gallery') }}">Vehicles</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('client') }}">Client</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                  </form>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <div class="call_text_main">
         <div class="container">
            <div class="call_taital">
               <div class="call_text"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_15">Cavite, Philippines</span></a></div>
               <div class="call_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_15">(+63) 9368746946</span></a></div>
               <div class="call_text"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_15">demcaj2017@gmail.com</span></a></div>
            </div>
         </div>
      </div>
      <!-- client section start -->
      <div class="client_section layout_padding">
         <div class="container">
            <div id="custom_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="client_taital">What Says Customers</h1>
                        </div>
                     </div>
                     <div class="client_section_2">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="client_taital_box">
                                 <div class="client_img"><img src="{{ asset('images/client-img1.png') }}"></div>
                                 <h3 class="moark_text">Josh</h3>
                                 <p class="client_text">Renting a car from this company was a breeze! The vehicle was clean, well-maintained, and the staff was friendly. I had a fantastic road trip experience.</p>
                              </div>
                              <div class="quick_icon"><img src="{{ asset('images/quick-icon.png') }}"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="client_taital_box">
                                 <div class="client_img"><img src="{{ asset('images/client-img2.png') }}"></div>
                                 <h3 class="moark_text">George</h3>
                                 <p class="client_text">Overall, a good car rental experience. The booking process was easy, and the car performed well. It would be even better if they offered more vehicle options.</p>
                              </div>
                              <div class="quick_icon"><img src="{{ asset('images/quick-icon.png') }}"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="client_taital">What Says Customers</h1>
                        </div>
                     </div>
                     <div class="client_section_2">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="client_taital_box">
                                 <div class="client_img"><img src="{{ asset('images/client-img3.png') }}"></div>
                                 <h3 class="moark_text">Mia</h3>
                                 <p class="client_text">I needed a car for a business trip, and this company exceeded my expectations. The pickup and drop-off were smooth, and the car was in excellent condition.</p>
                              </div>
                              <div class="quick_icon"><img src="{{ asset('images/quick-icon.png') }}"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="client_taital_box">
                                 <div class="client_img"><img src="{{ asset('images/client-img4.png') }}"></div>
                                 <h3 class="moark_text">Alex</h3>
                                 <p class="client_text">Renting from here was convenient, but there was a small delay during pickup. The car itself was great, and the return process was hassle-free. I'd use them again.</p>
                              </div>
                              <div class="quick_icon"><img src="{{ asset('images/quick-icon.png') }}"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- <div class="carousel-item">
                     
                  </div> -->
               </div>
               <a class="carousel-control-prev" href="#custom_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#custom_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- client section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding margin_top90">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="footeer_logo"><img src="{{ asset('images/logo.png') }}" style="width:220px; height:48px"></div>
               </div>
            </div>
            <div class="footer_section_2">
               <div class="row">
                  <div class="col">
                     <h4 class="footer_taital">Subscribe Now</h4>
                     <p class="footer_text">Stay updated with exclusive offers and travel tips by subscribing to our newsletter.
                     </p>
                   
                     <div class="form-group">
                        <textarea class="update_mail" placeholder="Enter Your Email" rows="5" id="comment" name="Enter Your Email"></textarea>
                        <div class="subscribe_bt"><a href="#">Subscribe</a></div>
                     </div>
                  </div>
                  <div class="col">
                     <h4 class="footer_taital">Information</h4>
                     <p class="lorem_text">
                        <a href="#" style="color:white;">
                           <span style="text-decoration:underline">
                              Explore travel guides and car-related articles.
                           </span>
                        </a>
                     </p>
                  </div>
                  <div class="col">
                     <h4 class="footer_taital">Helpful Links</h4>
                     <p class="lorem_text">
                        <a href="#" style="color:white;">
                           <span style="text-decoration:underline">
                              FAQ: Find answers to common questions about car rentals. 
                           </span>
                        </a>
                     </p>
                  </div>
                  <div class="col">
                     <h4 class="footer_taital">Invesments</h4>
                     <p class="lorem_text">
                        <a href="#" style="color:white;">
                           <span style="text-decoration:underline">
                              Sustainability: Explore our eco-friendly practices.
                           </span>
                        </a>
                     </p>
                  </div>
                  <div class="col">
                     <h4 class="footer_taital">Contact Us</h4>
                     <div class="location_text"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_15">Cavite, Philippines</span></a></div>
                     <div class="location_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_15">(+63) 9368746946</span></a></div>
                     <div class="location_text"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_15">demcaj2017@g.c</span></a></div>
                     <div class="social_icon">
                        <ul>
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <p class="copyright_text">2023 All Rights Reserved. Designed by Demetrio Cajayon</p>
               </div>
            </div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ asset('js/plugin.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('js/custom.js') }}"></script>
   </body>
</html>