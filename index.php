<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
<?php
include 'db.php';
$pDatabase = Database::getInstance(); // ye db.php wale class ka object
?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Feeding Hands</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Oblige Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);

         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <!-- //font-awesome icons -->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Oxygen:400,700" rel="stylesheet">
   </head>
   <body>
      <div class="main-top" id="home">
         <!-- header -->
         <div class="headder-top">
            <div class="container-fluid">
               <!-- nav -->
               <nav >
                  <div id="logo">
                     <img src="images/logo.jpg" style="width: 100px;height: 100px;">
                  </div>
                  <label for="drop" class="toggle">Menu</label>
                  <input type="checkbox" id="drop">
                  <ul class="menu mt-2">
                     <li class="active"><a href="index.html"><h5>Home</h5></a></li>
                     <li class="mx-lg-3 mx-md-2 my-md-0 my-1"><a href="#about">About</a></li>
                     <li><a href="#service">Services</a></li>
                     <li class="mx-lg-3 mx-md-2 my-md-0 my-1">
                        <!-- First Tier Drop Down -->
                        <label for="drop-2" class="toggle toogle-2">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
                        </label>
                        <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                        <input type="checkbox" id="drop-2">
                        <ul>
                           <li><a href="#gallery" class="drop-text"><h5>Gallery</h5></a></li>
                           <li><a href="#team" class="drop-text"><h5>Volunteers</h5></a></li>
                           <li><a href="#blog" class="drop-text"><h5>Blog</h5></a></li>
                        </ul>
                     </li>
                     <li><a href="#contact"><h5>Contact Us</h5></a></li>
                  </ul>
               </nav>
               <!-- //nav -->
            </div>
         </div>
         <!-- //header -->
         <!-- banner -->
         <div class="main-banner">
            <div class="container">
               <div class="style-banner ">
                  <h4 class="mb-1">Better Care and Better World</h4>
                  <h5>You have a good life,some other don't
                  </h5>
               </div>
               <div class="two-demo-button mt-lg-4 mt-3">
                  <p> A platform for leftovers to reach the needy.<p>
                   <p>We are a start up which takes leftover food to the poor / orphanage / old age homes.. For the people who need it. And we would like the opportunity  by partnering with you ,lulu to create a better world. We would like the leftovers which you would otherwise throw away </p>
               </div>
               <div class="view-buttn mt-md-4 mt-sm-4 mt-3">
                  <a href="#about" class="btn scroll">About Us</a>
               </div>
            </div>
         </div>
      </div>
      <!-- //banner -->
      <section class="three-grids">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                  <div class="img-abt-info1">

                  </div>
              	</div>

               <div class="col-lg-3 col-md-6 col-sm-6 banner-bottom-grid p-0">
                  <div class="w3layouts-abt-info">
                     <div class="mb-lg-3 mb-md-3 mb-2 abut-headder">
                        <h5>Share and Help</h5>
                     </div>
                     <p>Want to contribute towards society? Click the button below to feel good.</p>
                     <div class="view-price mt-3">
                        <a href="#contact" class=" scroll">Register</a>
                     </div>
                     <div class="view-price mt-3">
                        <a href="login.php" class=" scroll">Login</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                  <div class="img-abt-info2">
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 banner-bottom-grid p-0">
                  <div class="w3layouts-abt-info">
                     <div class="mb-lg-3 mb-md-3 mb-2 abut-headder">
                        <h4>Fundraising</h4>
                     </div>
                     <p>Help us too! Pay some amount if you like and be a part of this noble cause.</p>
                     <div class="view-price mt-3">
                        <a href="payment.php" class=" scroll">Contribute</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- about -->
      <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="row">
               <div class="col-lg-7 col-md-6">
                  <div class="wthree-about-txt mb-lg-5 mb-md-4 mb-3">
                     <h5>Our Mission</h5>
                  </div>
                  <div class="about-para-txt">
                     <p>sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, eiusmod tempor incididunt ut labore et consectetur adipiscing sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, eiusmod tempor incididunt ut labore et consectetur adipiscing</p>
                     <p class="mt-2">sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, eiusmod tempor incididunt ut labore et consectetur adipiscing sed do eiusmod</p>
                  </div>
                  <div class="view-price mt-lg-5 mt-md-4 mt-3">
                     <a href="#contact" class=" scroll">Read More</a>
                  </div>
               </div>
               <div class="col-lg-5 col-md-6 about-imgs-txt">
               </div>
            </div>
         </div>
      </section>
      <!-- about  -->
      <!--state -->
      <section class="stats py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="stats-info row ">
               <div class="col-lg-3 col-md-3 col-sm-6 col-6 stats-grid ">
                  <div class="register-left-num ">
                     <div class="count-icon">
                        <span class="fa fa-paw" aria-hidden="true"></span>
                     </div>
                     <div class="counter-number">1200</div>
                     <div class="stat-info pt-lg-3 pt-md-3 pt-sm-3 pt-3">
                        <h4>Share</h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 col-6 stats-grid ">
                  <div class="register-left-num">
                     <div class="count-icon">
                        <span class="fa fa-smile-o" aria-hidden="true"></span>
                     </div>
                     <div class="counter-number">2000</div>
                     <div class="stat-info pt-lg-3 pt-md-3 pt-sm-3 pt-3">
                        <h4>Volunteers</h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 col-6 stats-grid">
                  <div class="register-left-num">
                     <div class="count-icon">
                        <span class="fa fa-leaf" aria-hidden="true"></span>
                     </div>
                     <div class="counter-number">4000</div>
                     <div class="stat-info pt-lg-3 pt-md-3 pt-sm-3 pt-3">
                        <h4>Rescued</h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 col-6 stats-grid">
                  <div class="register-left-num">
                     <div class="count-icon">
                        <span class="fa fa-globe" aria-hidden="true"></span>
                     </div>
                     <div class="counter-number">30+</div>
                     <div class="stat-info pt-lg-3 pt-md-3 pt-sm-3 pt-3">
                        <h4>Countries</h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--//state -->
      <!-- service -->
      <section class="service py-lg-4 py-md-3 py-sm-3 py-3" id="service">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-md-4 mb-sm-3 mb-3 mb-2">Our Service</h3>
            <div class="title-wls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum </p>
            </div>
            <div class="row">
               <div class="col-lg-5 service-two-grids">
                  <div class="color-img-five">
                     <div class="ser-sevice-grid text-center">
                        <h4 class="pb-3">Make A Donation</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non Lorem ipsum dolor sit amet</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-7 service-two-grids">
                  <div class="img-cols-grid row">
                     <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class=" color-img-one" >
                           <div class="ser-sevice-grid text-center">
                              <h4 class="pb-3">Become volunteer</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 ">
                        <div class=" color-img-two">
                           <div class="ser-sevice-grid text-center">
                              <h4 class="pb-3">Make A Donation</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 mt-md-4 mt-3">
                        <div class=" color-img-three">
                           <div class="ser-sevice-grid text-center">
                              <h4 class="pb-3">Sponsor a Child</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 mt-md-4 mt-3">
                        <div class=" color-img-four">
                           <div class="ser-sevice-grid text-center">
                              <h4 class="pb-3">Human Rights</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--//service -->
      <!--team -->
      <section class="team py-lg-4 py-md-3 py-sm-3 py-3" id="team">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-md-4 mb-sm-3 mb-3 mb-2 clr">Our Volunteers</h3>
            <div class="title-wls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3 sub-colors">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum </p>
            </div>
            <div class="row ">
               <div class="col-lg-3 col-md-6 col-sm-6 team-grid-colum text-center">
                  <img src="images/t1.jpg" alt="" class="img-fluid">
                  <div class="text-grid-gried">
                     <h4>Atticus Will</h4>
                     <ul class="d-flex justify-content-center pt-3 social-icons">
                        <li>
                           <a href="#">
                           <span class="fa fa-facebook-f"></span>
                           </a>
                        </li>
                        <li class="mx-3">
                           <a href="#">
                           <span class="fa fa-twitter"></span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <span class="fa fa-google-plus"></span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 team-grid-colum text-center">
                  <img src="images/t2.jpg" alt="" class="img-fluid">
                  <div class="text-grid-gried">
                     <h4>Jacob Will</h4>
                     <ul class="d-flex justify-content-center pt-3 social-icons">
                        <li>
                           <a href="#">
                           <span class="fa fa-facebook-f"></span>
                           </a>
                        </li>
                        <li class="mx-3">
                           <a href="#">
                           <span class="fa fa-twitter"></span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <span class="fa fa-google-plus"></span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 team-grid-colum text-center">
                  <img src="images/t3.jpg" alt="" class="img-fluid">
                  <div class="text-grid-gried">
                     <h4>Isabella Den</h4>
                     <ul class="d-flex justify-content-center pt-3 social-icons">
                        <li>
                           <a href="#">
                           <span class="fa fa-facebook-f"></span>
                           </a>
                        </li>
                        <li class="mx-3">
                           <a href="#">
                           <span class="fa fa-twitter"></span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <span class="fa fa-google-plus"></span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 team-grid-colum text-center">
                  <img src="images/t4.jpg" alt="" class="img-fluid">
                  <div class="text-grid-gried">
                     <h4>Liam Willson</h4>
                     <ul class="d-flex justify-content-center pt-3 social-icons">
                        <li>
                           <a href="#">
                           <span class="fa fa-facebook-f"></span>
                           </a>
                        </li>
                        <li class="mx-3">
                           <a href="#">
                           <span class="fa fa-twitter"></span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <span class="fa fa-google-plus"></span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--//team -->
      <!-- gallery-main -->
      <section class="gallery py-lg-4 py-md-3 py-sm-3 py-3" id="gallery">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-md-4 mb-sm-3 mb-3 mb-2">Our Gallery</h3>
            <div class="title-wls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum
               </p>
            </div>
            <div class="row gallery-info">
               <div class="col-lg-3 col-md-3 col-sm-6 gallery-img-grid p-0">
                  <div class="gallery-grids">
                     <a href="#gal1"><img src="images/g1.jpg" alt="news image" class="img-fluid"></a>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 gallery-img-grid p-0">
                  <div class="gallery-grids">
                     <a href="#gal2"><img src="images/g2.jpg" alt="news image" class="img-fluid"></a>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 gallery-img-grid p-0">
                  <div class="gallery-grids">
                     <a href="#gal3"><img src="images/g3.jpg" alt="news image" class="img-fluid"></a>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 gallery-img-grid p-0">
                  <div class="gallery-grids p-0">
                     <a href="#gal4"><img src="images/g4.jpg" alt="news image" class="img-fluid"></a>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 gallery-img-grid gallery-mid-two p-0">
                  <div class="gallery-grids">
                     <a href="#gal5"><img src="images/ga3.jpg" alt="news image" class="img-fluid"></a>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 gallery-img-grid gallery-mid-two p-0">
                  <div class="gallery-grids">
                     <a href="#gal6"><img src="images/ga4.jpg" alt="news image" class="img-fluid"></a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-12 gallery-img-three p-0">
                  <div class="gallery-grids">
                     <a href="#gal7"><img src="images/hless.jpg" alt="news image" class="img-fluid"></a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-12 gallery-img-three p-0">
                  <div class="gallery-grids">
                     <a href="#gal8"><img src="images/g8.jpg" alt="news image" class="img-fluid"></a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-12 gallery-img-three p-0">
                  <div class="gallery-grids">
                     <a href="#gal9"><img src="images/g9.jpg" alt="news image" class="img-fluid"></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--// gallery-main -->
      <!-- popup-->
      <div id="gal1" class="popup-effect">
         <div class="popup">
            <img src="images/g1.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal2" class="popup-effect">
         <div class="popup">
            <img src="images/g2.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal3" class="popup-effect">
         <div class="popup">
            <img src="images/g3.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal4" class="popup-effect">
         <div class="popup">
            <img src="images/g4.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal5" class="popup-effect">
         <div class="popup">
            <img src="images/ga3.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal6" class="popup-effect">
         <div class="popup">
            <img src="images/ga4.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal7" class="popup-effect">
         <div class="popup">
            <img src="images/hless.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal8" class="popup-effect">
         <div class="popup">
            <img src="images/g8.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal9" class="popup-effect">
         <div class="popup">
            <img src="images/g9.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- //gallery popups -->
      <!-- //gallery -->
      <!-- blog -->
      <section class="blog py-lg-4 py-md-3 py-sm-3 py-3" id="blog">
         <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-md-4 mb-sm-3 mb-3 mb-2">Latest Blog</h3>
            <div class="title-wls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum </p>
            </div>
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6 busness-tip-one">
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 mid-text-info">
                  <div class="blog-info">
                     <a href="#contact" class="scroll">
                        <ul>
                           <li>JUL</li>
                           <li>15</li>
                        </ul>
                     </a>
                  </div>
                  <h4 class="mb-lg-4 mb-3"><a href="#contact">Better Care and Better World</a></h4>
                  <p>Lorem Ipsum is simply text the printing and typesetting standard industry.Lorem Ipsum has been the industry's standard
                  </p>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 busness-tip-two ">
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 mid-text-info">
                  <div class="blog-info">
                     <a href="#contact" class="scroll">
                        <ul>
                           <li>JUL</li>
                           <li>15</li>
                        </ul>
                     </a>
                  </div>
                  <h4 class="mb-lg-4 mb-3"><a href="#contact">We Need Your Help For Rescue Child</a></h4>
                  <p>Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry's standard
                  </p>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6 mid-text-info">
                  <h4 class="mb-lg-4 mb-3"><a href="#contact">Better Care and Better World</a></h4>
                  <p>Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry's standard
                  </p>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 busness-tip-two ">
                  <div class="blog-info">
                     <a href="#contact" class="scroll">
                        <ul>
                           <li>JUL</li>
                           <li>15</li>
                        </ul>
                     </a>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 mid-text-info">
                  <h4 class="mb-lg-4 mb-3"><a href="#contact">We Need Your Help For Rescue Child</a></h4>
                  <p>Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry's standard
                  </p>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 busness-tip-one pl-sm-0">
                  <div class="blog-info">
                     <a href="#contact" class="scroll">
                        <ul>
                           <li>JUL</li>
                           <li>15</li>
                        </ul>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- //blog -->
      <!-- Info-matter -->
      <section class="info-matter py-lg-4 py-md-3 py-sm-3 py-3" id="info-matter">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="row">
               <div class="col-lg-6 text-sm-center">
                  <img src="images/info.png" alt="" class="img-fluid">
               </div>
               <div class="col-lg-6 info-matter-join mt-lg-4 mt-3">
                  <h5 class="mb-lg-4 mb-3">Ready To Volunteer?</h5>
                  <p>
                  </p>
                  <p class="mt-2">Let's do some real thing together.Let's make a change that we've been looking forward for years.
                  </p>
                  <div class="view-buttn mt-md-4 mt-sm-4 mt-3">
                     <a href="#contact" class="btn scroll">Join Us</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--// Info-matter-->
      <!-- contact -->
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3" id="contact">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-md-4 mb-sm-3 mb-3 mb-2">Let's join hands together</h3>
            <div class="title-wls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <p>Register with us and let's make a world together in which no single person sleeps hungry.
               </p>
            </div>



<!--registration form -->


            <div class="row">
               <div class="col-lg-6 col-md-6 contact-details">
                  <form action="index.php" method="post">
                     <div class=" form-group contact-forms">
                        <input type="text" class="form-control" placeholder="Name" required="" name="name">
                     </div>
                     <div class="form-group contact-forms">
                        <input type="email" class="form-control" placeholder="Email" required="" name="mail">
                     </div>
                     <div class="form-group contact-forms">
                        <input type="text" class="form-control" placeholder="Phone" required="" name="phone">
                     </div>
                     <div class="form-group contact-forms">
                        <input type="Password" class="form-control" placeholder="Password" required="" name="pass">
                     </div>
                     <div class="form-group contact-forms">
                        <textarea class="form-control" placeholder="Message" rows="3" required="" name="message"></textarea>
                     </div>
                     <fieldset class="form-group">
                       <div class="row">
                         <legend class="col-form-label col-sm-3 pt-0">Type</legend>
                         <div class="col-sm-6">
                           <div class="form-check">
                             <input class="form-check-input" type="radio" name="type" id="gridRadios1" value="Individual" checked>
                             <label class="form-check-label" for="gridRadios1">
                               Individual
                             </label>
                           </div>
                           <div class="form-check">
                             <input class="form-check-input" type="radio" name="type" id="gridRadios2" value="Organization">
                             <label class="form-check-label" for="gridRadios2">
                               Organization
                             </label>
                           </div>
                           <div class="form-check">
                             <input class="form-check-input" type="radio" name="type" id="gridRadios2" value="Hotel / Restaurant / Shop">
                             <label class="form-check-label" for="gridRadios2">
                               Hotels/Restaurants/Local Shops
                             </label>
                           </div>
                           <div class="form-check">
                             <input class="form-check-input" type="radio" name="type" id="gridRadios2" value="Event Organisers">
                             <label class="form-check-label" for="gridRadios2">
                               Event Organisers
                             </label>
                           </div>
                         </div>
                       </div>
                     </fieldset>
                     <button type="submit" class="btn sent-butnn" name="register">Register</button>
                  </form>
               </div>

<?php
if (isset($_POST['register'])) 
 {
   $name=$_POST['name'];
   $email=$_POST['mail'];
   $phone=$_POST['phone'];
   $pass=$_POST['pass'];
   $msg=$_POST['message']; 
    $type=$_POST['type'];

    $quer="SELECT `email` FROM `register` WHERE email='$email'";
    $q1=$pDatabase->query($quer);
    $row=mysqli_num_rows($q1);

   if($row==0)
   {
      $qu= "INSERT INTO `register`(`name`, `email`, `phone`, `message`, `type`) VALUES ('$name','$email','$phone','$msg','$type')";
      $res1=$pDatabase->query($qu);

      $qu1= "INSERT INTO `login`(`email`, `pass`) VALUES ('$email','$pass')";
      $res2=$pDatabase->query($qu1);
      if ($res1 && $res2) 
         {
      ?>
        <script>
        if(confirm("Registered successfully,  Want to register more ??"))
        {
          window.location="index.php";
        }
        else
        {
          window.location="login.php";
        }

        </script> 
      <?php
         }
   }
}
?>

<!-- end of form-->

               <div class="col-lg-6 col-md-6 address-grid text-center">
                  <div class="contact-address-info mb-md-4 mb-3">
                     <h2><a href="index.html">Funding</a></h2>
                  </div>
                  <div class="contact-address-grid mb-3">
                     <h4>Contact Us</h4>
                  </div>
                  <div class=" footer-contact-list mb-2">
                     <p>Melbourne,south Brisbane,<br>QLD 4101,Aurstralia.</p>
                  </div>
                  <div class=" footer-contact-list mb-2">
                     <p>+ 1 (234) 567 8901</p>
                  </div>
                  <div class=" footer-contact-list mb-2">
                     <p><a href="mailto:info@example.com">info2@example.com</a></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--//contact -->
      <div class="address_mail_footer_grids">
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3539.812628729253!2d153.014155!3d-27.4750921!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915a0835840a2f%3A0xdd5e3f5c208dc0e1!2sMelbourne+St%2C+South+Brisbane+QLD+4101%2C+Australia!5e0!3m2!1sen!2sin!4v1492257477691"></iframe>
      </div>
      <!-- footer -->
      <footer class=" py-3">
         <div class="container">
            <div class="icons mt-3 text-center">
               <ul class="d-flex justify-content-center pb-3 social-icons">
                  <li>
                     <a href="#">
                     <span class="fa fa-facebook-f"></span>
                     </a>
                  </li>
                  <li class="mx-3">
                     <a href="#">
                     <span class="fa fa-twitter"></span>
                     </a>
                  </li>
                  <li class="mr-3">
                     <a href="#">
                     <span class="fa fa-google-plus"></span>
                     </a>
                  </li>
                  <li><a href="#"><span class="fa fa-vk"></span></a></li>
               </ul>
            </div>
         </div>
         <div class="footer-main txt-center">
            <p>
               © 2019 Feeding Hands. All Rights Reserved
            </p>
         </div>
         <!-- move icon -->
         <div class="txt-center">
            <a href="#home" class="move-top txt-center mt-3"></a>
         </div>
         <!--//move icon -->
      </footer>
      <!--//footer -->
   </body>
</html>
