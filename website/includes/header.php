<?php
include("php/query.php");
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Mediluxe</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/logo/logo.png">

   <!-- CSS here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/meanmenu.min.css">
   <link rel="stylesheet" href="assets/css/animate.css">
   <link rel="stylesheet" href="assets/css/swiper.min.css">
   <link rel="stylesheet" href="assets/css/slick.css">
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <link rel="stylesheet" href="assets/css/fontawesome-pro.css">
   <link rel="stylesheet" href="assets/css/spacing.css">
   <link rel="stylesheet" href="assets/css/grocery.css">
</head>

<body class="hey-grocery">
   <?php
   
   ?>

<!-- preloader start -->
   <!-- <div id="preloader">
      <div class="bd-loader-inner">
         <div class="bd-loader">
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
         </div>
      </div>
   </div> -->
<!-- preloader start -->

<!-- Back to top start -->
   <div class="backtotop-wrap cursor-pointer">
      <svg class="backtotop-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
<!-- Back to top end -->

<!-- search area start -->
   <!-- <div class="df-search-area">
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <div class="df-search-form">
                  <div class="df-search-close text-center mb-20">
                     <button class="df-search-close-btn df-search-close-btn"></button>
                  </div>
                  <form action="#">
                     <div class="df-search-input mb-10">
                        <input type="text" placeholder="Search for product...">
                        <button type="submit"><i class="flaticon-search-1"></i></button>
                     </div>
                     <div class="df-search-category">
                        <span>Search by : </span>
                        <a href="#">Healthline, </a>
                        <a href="#">COVID-19, </a>
                        <a href="#">Surgery, </a>
                        <a href="#">Surgeon, </a>
                        <a href="#">Medical research</a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="body-overlay"></div> -->
<!-- search area end -->

<!-- Offcanvas area start -->
   <div class="fix">
      <div class="offcanvas__info grocery__offcanvas-info">
         <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
               <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                  <div class="offcanvas__logo">
                     <a href="index.php">
                        <img src="assets/imgs/logo/logo.png" alt="logo not found">
                         <h3>MEDILUXE</h3>
                     </a>
                  </div>
                  <div class="offcanvas__close">
                     <button class="grocery-bg">
                        <i class="fal fa-times"></i>
                     </button>
                  </div>
               </div>
               <div class="offcanvas__search mb-25">
                  <form action="#">
                     <input type="text" placeholder="What are you searching for?">
                     <button type="submit"><i class="far fa-search"></i></button>
                  </form>
               </div>
               <div class="mobile-menu fix mb-40"></div>
               <div class="offcanvas__contact mt-30 mb-20">
                  <h4>Contact Info</h4>
                  <ul>
                     <li class="d-flex align-items-center">
                        <div class="offcanvas__contact-icon mr-15">
                           <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="offcanvas__contact-text">
                           <a class="grocery-clr-hover" target="_blank"
                              href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">Korangi Industrial Area Karachi</a>
                        </div>
                     </li>
                     <li class="d-flex align-items-center">
                        <div class="offcanvas__contact-icon mr-15">
                           <i class="far fa-phone"></i>
                        </div>
                        <div class="offcanvas__contact-text">
                           <a class="grocery-clr-hover" href="tel:+088889797697">+923472310655</a>
                        </div>
                     </li>
                     <li class="d-flex align-items-center">
                        <div class="offcanvas__contact-icon mr-15">
                           <i class="fal fa-envelope"></i>
                        </div>
                        <div class="offcanvas__contact-text">
                           <a class="grocery-clr-hover" href="tel:+012-345-6789"><span
                                 class="mailto:support@mail.com">mediluxe.co@gmail.com</span></a>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="offcanvas__social">
                  <ul>
                     <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                     <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="offcanvas__overlay"></div>
   <div class="offcanvas__overlay-white"></div>
<!-- Offcanvas area start -->

   <!-- Header area start -->
   <header>
      <div class="header">
         <div class="header-top-area">
            <div class="header-layout-4">
               <div class="header-to-main d-none d-sm-flex">
                  <div class="link-text">
                     <span><svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M13.9136 19.6698C15.769 20.6036 17.9534 21.277 20.5157 21.5651C21.1375 21.6351 21.6668 21.1368 21.6668 20.5111V18.1791C21.6668 17.682 21.3284 17.2486 20.8461 17.1281L17.9285 16.3987C17.5593 16.3064 17.1688 16.4146 16.8997 16.6837L13.9136 19.6698ZM13.9136 19.6698C10.5382 17.9711 8.2519 15.4103 6.76136 12.7386M6.76136 12.7386C5.34127 10.1933 4.6435 7.54722 4.41447 5.45C4.34797 4.84116 4.84102 4.33325 5.45347 4.33325H7.77864C8.29504 4.33325 8.73966 4.69775 8.84094 5.20412L9.63638 9.1814C9.70742 9.53658 9.59625 9.90376 9.34012 10.1599L6.76136 12.7386Z"
                              stroke="white" stroke-width="2" />
                           <path
                              d="M14.0337 7.68297C15.0996 7.89016 16.0786 8.41289 16.8436 9.18336C17.6088 9.95381 18.1247 10.9365 18.3243 12.0037M14.1884 3.32275C16.336 3.58645 18.335 4.55708 19.8704 6.08177C21.4057 7.60645 22.3903 9.59855 22.6689 11.7443"
                              stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                     </span>
                     <a href="tel:+923472310655">+923472310655</a>
                  </div>
                  <div class="header-top-notice d-none d-lg-block">
                     <p>TAKE CARE OF YOUR Health <span class="grocery-clr">25% OFF</span> </p>
                  </div>
                  <div class="tp-header-top-menu d-flex align-items-center justify-content-end">
                     <!-- <div class="header-lang-item header-lang">
                        <span class="header-lang-toggle grocery-clr-hover" id="header-lang-toggle">English</span>
                        <ul class="">
                           <li>
                              <a class="grocery-clr-hover" href="#">Spanish</a>
                           </li>
                           <li>
                              <a class="grocery-clr-hover" href="#">Russian</a>
                           </li>
                           <li>
                              <a class="grocery-clr-hover" href="#">Portuguese</a>
                           </li>
                        </ul>
                     </div> -->
                     <!-- <div class="header-lang-item tp-header-currency">
                        <span class="header-currency-toggle grocery-clr-hover" id="header-currency-toggle">USD</span>
                        <ul>
                           <li>
                              <a class="grocery-clr-hover" href="#">EUR</a>
                           </li>
                           <li>
                              <a class="grocery-clr-hover" href="#">CHF</a>
                           </li>
                           <li>
                              <a class="grocery-clr-hover" href="#">GBP</a>
                           </li>
                           <li>
                              <a class="grocery-clr-hover" href="#">KWD</a>
                           </li>
                        </ul>
                     </div> -->
                     <div class="header-lang-item tp-header-setting">
                        <span class="header-setting-toggle grocery-clr-hover" id="header-setting-toggle">Setting</span>
                        <ul>
                           <li>
                              <a class="grocery-clr-hover" id="profile-link" href="#">My Profile</a>
                           </li>
                           
                           <li>
                              <a class="grocery-clr-hover" href="wishlist.php">Wishlist</a>
                           </li>
                           <li>
                              <a class="grocery-clr-hover" href="cart.php">Cart</a>
                           </li>
                           <li>
                              <a class="grocery-clr-hover" href="#">Logout</a>
                           </li>
                        </ul>
                     </div>
                     <div>
                        <img src="assets/imgs/icons/user2.png" class="" alt="" width="20px" height="20px">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="header-layout-4 header-bottom">
            <div id="header-sticky" class="header-4">
               <div class="mega-menu-wrapper">
                  <div class="header-main-4">
                     <div class="header-left">
                        <div class="header-logo">
                           <a href="grocery.php">
                              <img src="assets/imgs/logo/3.png" alt="logo not found">
                               <!-- <h3>MEDILUXE</h3> -->
                           </a>
                        </div>
                        <div class="mean__menu-wrapper grocery__menu d-none d-lg-block">
                           <div class="main-menu">
                              <nav id="mobile-menu" > 
                                 <ul >
                                    <li class="has-dropdown pl-5 ">
                                       <a href="index.php">Home</a>
                                       <!-- <ul class="submenu">
                                          <li><a href="pharmacy.php">Pharmacy Store</a></li>
                                          <li><a href="index.php">Furniture Store</a></li>
                                          <li><a href="grocery.php">Grocery Store</a></li>
                                       </ul> -->
                                    </li>
                                    <li class="has-dropdown">
                                       <a href="product.php">Shop</a>
                                       <ul class="submenu">
                                          <li><a href="product.php">Product</a></li>
                                          <li><a href="details.php">Product Details</a></li>
                                          <li><a href="wishlist.php">Wishlist</a></li>
                                          <li><a href="cart.php">Cart</a></li>
                                          <li><a href="checkout.php">Checkout</a></li>
                                       </ul>
                                    </li>
                                    <li>
                                       <a href="about.php">About</a>
                                    </li> 
                                    <li>
                                       <a href="contact.php">Contact</a>
                                    </li>
                                 </ul>
                              </nav>
                           </div>
                        </div>
                     </div>
                     <div class="header-right d-inline-flex align-items-center justify-content-end">
                        <div class="header-search d-xxl-block">
                           <form action="#" method="post">
                              <input type="text" id="live_search" placeholder="Search...">
                              <div id="" style="display:none;"></div>
                              <button class="grocery-bg" type="submit">
                              <i class="fa-solid fa-magnifying-glass fa-lg" style="color: #ffffff;"></i>
                              </button>
                           </form>
                           <div>
                              <div class="list-group" id="search-result">
                                 <a href="#" class="list-group-item list-group-item-action d-none border-1"></a>
                              </div>
                           </div>
                        </div>
                        <div class="header-action d-flex align-items-center ml-30">
                           <div class="header-action-item">
                              <a href="wishlist.php" class="header-action-btn">
                              <i class="fa-solid fa-heart fa-lg"></i>
                                 <span class="header-action-badge grocery-bg">3</span>
                              </a>
                           </div>
                           <div class="header-action-item">
                              <a href="cart.php" class="header-action-btn cartmini-open-btn">
                              <i class="fa-solid fa-cart-shopping fa-lg"></i>
                                 <span class="header-action-badge grocery-bg"><?php echo $count ?></span>
                              </a>
                           </div>
                           
                        </div>
                        <div class="header-humbager ml-30">
                           <a class="sidebar__toggle" href="javascript:void(0)">
                              <div class="bar-icon-2">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                              </div>
                           </a>
                           <!-- for wp -->
                           <div class="header__hamburger ml-50 d-none">
                              <button type="button" class="hamburger-btn offcanvas-open-btn">
                                 <span>01</span>
                                 <span>01</span>
                                 <span>01</span>
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- Header area end -->