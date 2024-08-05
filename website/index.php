<?php
include("includes/header.php");


// Database configuration
$host = 'localhost';
$db   = 'mediluxe';
$user = 'root';
$pass = '';

// Establishing a connection to the database using PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}



?>


   <!-- Body main wrapper start -->
   <main>

      <!-- Banner area start -->
      <section class="banner-4 p-relative fix">
         <div class="swiper banner-active">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <div class="banner-item-4 d-flex align-items-end">
                     <div class="container">
                        <div class="row g-5 align-self-end">
                           <div class="col-xxl-6 col-lg-6">
                              <div class="banner-content-4">
                                 <span>Welcome to Mediluxe</span>
                                 <h2 class="banner-title-4">Buy Inhalers Online Now!</h2>
                                 <p>Lorem ipsum dolor sit amet consectetur adipi elit Ut et massa mi. Aliquam</p>
                                 <div class="banner-btn-wrapper">
                                    <a class="solid-btn" href="pharmacy-pharmacy-product.html">Buy Now<span><i
                                             class="fa-regular fa-angle-right"></i></span></a>
                                    <a class="text-btn" href="pharmacy-pharmacy-product.html">View More<span><i
                                             class="fa-regular fa-angle-right"></i></span></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-6 col-lg-6">
                              <div class="banner-thumb-wrapper-4 p-relative">
                                 <div class="banner-thumb-4">
                                    <img src="assets/imgs/banner/banner-4-1.png" alt="">
                                 </div>
                                 <div class="banner-discount d-none d-sm-block">
                                    <img src="assets/imgs/shapes/discount.png" alt="">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="banner-item-4 d-flex align-items-end">
                     <div class="container">
                        <div class="row align-self-end">
                           <div class="col-xxl-6 col-lg-6">
                              <div class="banner-content-4">
                                 <span>Welcome to Addina</span>
                                 <h2 class="banner-title-4">Premium Face Masks!</h2>
                                 <p>Lorem ipsum dolor sit amet consectetur adipi elit Ut et massa mi. Aliquam</p>
                                 <div class="banner-btn-wrapper">
                                    <a class="solid-btn" href="pharmacy-pharmacy-product.html">Buy Now<span><i
                                             class="fa-regular fa-angle-right"></i></span></a>
                                    <a class="text-btn" href="pharmacy-pharmacy-product.html">View More<span><i
                                             class="fa-regular fa-angle-right"></i></span></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-6 col-lg-6">
                              <div class="banner-thumb-wrapper-4 p-relative">
                                 <div class="banner-thumb-4">
                                    <img src="assets/imgs/banner/banner-4-2.png" alt="">
                                 </div>
                                 <div class="banner-discount d-none d-sm-block">
                                    <img src="assets/imgs/shapes/discount.png" alt="">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="banner-item-4 d-flex align-items-end">
                     <div class="container">
                        <div class="row g-5 align-self-end">
                           <div class="col-xxl-6 col-lg-6">
                              <div class="banner-content-4">
                                 <span>Welcome to Addina</span>
                                 <h2 class="banner-title-4">Premium Face Masks!</h2>
                                 <p>Lorem ipsum dolor sit amet consectetur adipi elit Ut et massa mi. Aliquam</p>
                                 <div class="banner-btn-wrapper">
                                    <a class="solid-btn" href="pharmacy-details.html">Buy Now<span><i
                                             class="fa-regular fa-angle-right"></i></span></a>
                                    <a class="text-btn" href="service.html">View More<span><i
                                             class="fa-regular fa-angle-right"></i></span></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-6 col-lg-6">
                              <div class="banner-thumb-wrapper-4 p-relative">
                                 <div class="banner-thumb-4">
                                    <img src="assets/imgs/banner/banner-4-2.png" alt="">
                                 </div>
                                 <div class="banner-discount d-none d-sm-block">
                                    <img src="assets/imgs/shapes/discount.png" alt="">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- If we need pagination -->
            <div class="banner-dot-inner">
               <div class="banner-dot"></div>
            </div>
            <div class="banner-4-shape">
               <img class="shape-1 d-none d-md-block" src="assets/imgs/shapes/banner-shape-4-01.png" alt="">
               <img class="shape-2 d-none d-lg-block" src="assets/imgs/shapes/banner-shape-4-02.png" alt="">
               <img class="shape-3 d-none d-md-block" src="assets/imgs/shapes/banner-shape-4-03.png" alt="">
            </div>
         </div>
      </section>
      <!-- Banner area end -->

      <!-- discount area start -->
      <section class="discount-area p-relative section-space">
         <div class="container">
            <div class="section-title-wrapper-4 mb-40">
               <span class="section-subtitle-4 mb-10">categorie</span>
               <h2 class="section-title-4">Top categories</h2>
            </div>
            <div class="discount-main p-relative">
               <div class="discount-slider-navigation">
                  <button type="button" class="discount-slider-button-prev"><i class="fa-regular fa-angle-left"></i>
                  </button>
                  <button type="button" class="discount-slider-button-next"><i
                        class="fa-regular fa-angle-right"></i></button>
               </div>
               <div class="row align-items-center">
                  <div class="col-xxl-12">
                     <div class="swiper discount-active">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="discount-item text-center">
                                 <div class="discount-content">
                                    <span>FLAT 15% OFF</span>
                                    <h3><a href="pharmacy-product.html">Medicine</a></h3>
                                 </div>
                                 <div class="discount-thumb"
                                    data-background="assets/imgs/product/discount/discount-01.png"></div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="discount-item text-center">
                                 <div class="discount-content">
                                    <span>FLAT 20% OFF</span>
                                    <h3><a href="pharmacy-product.html">Healthcare</a></h3>
                                 </div>
                                 <div class="discount-thumb"
                                    data-background="assets/imgs/product/discount/discount-02.png"></div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="discount-item text-center">
                                 <div class="discount-content">
                                    <span>FLAT 35% OFF</span>
                                    <h3><a href="pharmacy-product.html">Value Store</a></h3>
                                 </div>
                                 <div class="discount-thumb"
                                    data-background="assets/imgs/product/discount/discount-03.png"></div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="discount-item text-center">
                                 <div class="discount-content">
                                    <span>FLAT 25% OFF</span>
                                    <h3><a href="pharmacy-product.html">Lab test</a></h3>
                                 </div>
                                 <div class="discount-thumb"
                                    data-background="assets/imgs/product/discount/discount-04.png"></div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="discount-item text-center">
                                 <div class="discount-content">
                                    <span>FLAT 15% OFF</span>
                                    <h3><a href="pharmacy-product.html">Medicine</a></h3>
                                 </div>
                                 <div class="discount-thumb"
                                    data-background="assets/imgs/product/discount/discount-05.png"></div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="discount-item text-center">
                                 <div class="discount-content">
                                    <span>100% OFF</span>
                                    <h3><a href="pharmacy-product.html">Offers</a></h3>
                                 </div>
                                 <div class="discount-thumb"
                                    data-background="assets/imgs/product/discount/discount-01.png"></div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="discount-item text-center">
                                 <div class="discount-content">
                                    <span>FLAT 15% OFF</span>
                                    <h3><a href="pharmacy-product.html">Medicine</a></h3>
                                 </div>
                                 <div class="discount-thumb"
                                    data-background="assets/imgs/product/discount/discount-02.png"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- discount area end -->

      <!-- seller area start -->
      <section class="seller-area section-space-bottom">
         <div class="container">
            <div class="row gy-5 align-items-end mb-40">
               <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                  <div class="section-title-wrapper-4 ">
                     <span class="section-subtitle-4 mb-10">Arrival</span>
                     <h2 class="section-title-4">New Arrivals</h2>
                  </div>
               </div>
               <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                  <div class="seller-link text-md-end">
                     <a class="solid-btn" href="pharmacy-product.html">Shop all<span><i
                              class="fa-regular fa-angle-right"></i></span></a>
                  </div>
               </div>
            </div>
            <div class="row g-5">
               <?php
                  $query = $pdo->query("SELECT product.*, category.category_name
                  FROM product
                     INNER JOIN category ON product.category_id = category.category_id;");
                  $row = $query->fetchAll(PDO::FETCH_ASSOC);
                  foreach($row as $AllProducts){
                     ?>
                     <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="product-item">
                           <div class="product-badge">
                              <span class="product-trending">10% off</span>
                           </div>
                           <div class="product-thumb">
                              <a href="#"><img src="../admin-portal/assets/images/products-images/<?php echo $AllProducts["image"] ?>" alt=""></a>
                           </div>
                           <div class="product-action-item">
                              <button type="button" class="product-action-btn">
                                 <svg width="20" height="22" viewBox="0 0 20 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"
                                       stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                 </svg>
                                 <span class="product-tooltip">Add to Cart</span>
                              </button>
                              <button type="button" class="product-action-btn" data-bs-toggle="modal"
                                 data-bs-target="#producQuickViewModal">

                                 <svg width="26" height="18" viewBox="0 0 26 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"
                                       fill="white" />
                                 </svg>
                                 <span class="product-tooltip">Quick View</span>
                              </button>
                              <button type="button" class="product-action-btn">

                                 <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"
                                       fill="white" />
                                 </svg>
                                 <span class="product-tooltip">Add To Wishlist</span>
                              </button>
                           </div>
                           <div class="product-content">
                              <div class="product-tag">
                                 <span><?php echo $AllProducts["category_name"] ?></span>
                              </div>
                              <h4 class="product-title"><a href="pharmacy-details.html"><?php echo $AllProducts["name"] ?></a></h4>
                              <div class="product-price">
                                 <span class="product-old-price"><del>Rs.120</del></span>
                                 <span class="product-new-price"><?php echo $AllProducts["price"] ?> </span>
                              </div>
                           </div>
                        </div>
                     </div>

                     <?php
                  }
               ?>
            </div>
         </div>
      </section>
      <!-- seller area end -->

      <!-- Ad banner area start -->
      <div class="container">
         <a href="pharmacy-product.html" class="d-block">
            <img class="w-100" src="assets/imgs/banner/ad.jpg" alt="image">
         </a>
      </div>
      <!-- Ad banner area end -->

      <!-- seller area start -->
      <section class="seller-area section-space">
         <div class="container">
            <div class="row gy-5 align-items-end mb-40">
               <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                  <div class="section-title-wrapper-4 ">
                     <span class="section-subtitle-4 mb-10">Feature</span>
                     <h2 class="section-title-4">Feature Products</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xxl-12">
                  <div class="swiper product-active">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="product-item">
                              <div class="product-badge">
                                 <span class="product-trending">10% off</span>
                              </div>
                              <div class="product-thumb">
                                 <a href="pharmacy-details.html"><img src="assets/imgs/product/product-01.png"
                                       alt=""></a>
                              </div>
                              <div class="product-action-item">
                                 <button type="button" class="product-action-btn">
                                    <svg width="20" height="22" viewBox="0 0 20 22" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"
                                          stroke="white" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                    </svg>
                                    <span class="product-tooltip">Add to Cart</span>
                                 </button>
                                 <button type="button" class="product-action-btn" data-bs-toggle="modal"
                                    data-bs-target="#producQuickViewModal">

                                    <svg width="26" height="18" viewBox="0 0 26 18" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"
                                          fill="white" />
                                    </svg>
                                    <span class="product-tooltip">Quick View</span>
                                 </button>
                                 <button type="button" class="product-action-btn">

                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"
                                          fill="white" />
                                    </svg>
                                    <span class="product-tooltip">Add To Wishlist</span>
                                 </button>
                              </div>
                              <div class="product-content">
                                 <div class="product-tag">
                                    <span>ACCESSORIES</span>
                                 </div>
                                 <h4 class="product-title"><a href="pharmacy-details.html">Supradyn Daily</a></h4>
                                 <div class="product-price">
                                    <span class="product-old-price"><del>$15.00</del></span>
                                    <span class="product-new-price">$12.00</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="product-item">
                              <div class="product-badge">
                                 <span class="product-trending">10% off</span>
                              </div>
                              <div class="product-thumb">
                                 <a href="pharmacy-details.html"><img src="assets/imgs/product/product-02.png"
                                       alt=""></a>
                              </div>
                              <div class="product-action-item">
                                 <button type="button" class="product-action-btn">
                                    <svg width="20" height="22" viewBox="0 0 20 22" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"
                                          stroke="white" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                    </svg>
                                    <span class="product-tooltip">Add to Cart</span>
                                 </button>
                                 <button type="button" class="product-action-btn" data-bs-toggle="modal"
                                    data-bs-target="#producQuickViewModal">

                                    <svg width="26" height="18" viewBox="0 0 26 18" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"
                                          fill="white" />
                                    </svg>
                                    <span class="product-tooltip">Quick View</span>
                                 </button>
                                 <button type="button" class="product-action-btn">

                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"
                                          fill="white" />
                                    </svg>
                                    <span class="product-tooltip">Add To Wishlist</span>
                                 </button>
                              </div>
                              <div class="product-content">
                                 <div class="product-tag">
                                    <span>PHARMA PRODUCT</span>
                                 </div>
                                 <h4 class="product-title"><a href="pharmacy-details.html">Accu-chek Tablet</a></h4>
                                 <div class="product-price">
                                    <span class="product-old-price"><del>$20.00</del></span>
                                    <span class="product-new-price">$34.00</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="product-item">
                              <div class="product-badge">
                                 <span class="product-trending">10% off</span>
                              </div>
                              <div class="product-thumb">
                                 <a href="pharmacy-details.html"><img src="assets/imgs/product/product-03.png"
                                       alt=""></a>
                              </div>
                              <div class="product-action-item">
                                 <button type="button" class="product-action-btn">
                                    <svg width="20" height="22" viewBox="0 0 20 22" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"
                                          stroke="white" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                    </svg>
                                    <span class="product-tooltip">Add to Cart</span>
                                 </button>
                                 <button type="button" class="product-action-btn" data-bs-toggle="modal"
                                    data-bs-target="#producQuickViewModal">

                                    <svg width="26" height="18" viewBox="0 0 26 18" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"
                                          fill="white" />
                                    </svg>
                                    <span class="product-tooltip">Quick View</span>
                                 </button>
                                 <button type="button" class="product-action-btn">

                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"
                                          fill="white" />
                                    </svg>
                                    <span class="product-tooltip">Add To Wishlist</span>
                                 </button>
                              </div>
                              <div class="product-content">
                                 <div class="product-tag">
                                    <span>SKIN PRODUCT</span>
                                 </div>
                                 <h4 class="product-title"><a href="pharmacy-details.html">Curaskin Lipgel</a></h4>
                                 <div class="product-price">
                                    <span class="product-old-price"><del>$12.00</del></span>
                                    <span class="product-new-price">$8.50</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="product-item">
                              <div class="product-badge">
                                 <span class="product-trending">10% off</span>
                              </div>
                              <div class="product-thumb">
                                 <a href="pharmacy-details.html"><img src="assets/imgs/product/product-04.png"
                                       alt=""></a>
                              </div>
                              <div class="product-action-item">
                                 <button type="button" class="product-action-btn">
                                    <svg width="20" height="22" viewBox="0 0 20 22" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"
                                          stroke="white" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                    </svg>
                                    <span class="product-tooltip">Add to Cart</span>
                                 </button>
                                 <button type="button" class="product-action-btn" data-bs-toggle="modal"
                                    data-bs-target="#producQuickViewModal">

                                    <svg width="26" height="18" viewBox="0 0 26 18" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"
                                          fill="white" />
                                    </svg>
                                    <span class="product-tooltip">Quick View</span>
                                 </button>
                                 <button type="button" class="product-action-btn">

                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"
                                          fill="white" />
                                    </svg>
                                    <span class="product-tooltip">Add To Wishlist</span>
                                 </button>
                              </div>
                              <div class="product-content">
                                 <div class="product-tag">
                                    <span>ACCESSORIES</span>
                                 </div>
                                 <h4 class="product-title"><a href="pharmacy-details.html">Shelcal 500 Tablet</a></h4>
                                 <div class="product-price">
                                    <span class="product-old-price"><del>$80.00</del></span>
                                    <span class="product-new-price">$66.00</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="why-choose-pagination text-center">
                        <div class="bd-swiper-dot"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- seller area end -->

      <!-- Vaccine area start -->
      <div class="vaccine-area theme-bg-1 section-space">
         <div class="container">
            <div class="row gy-50 align-items-center">
               <div class="col-xxl-6 col-xl-6 col-lg-6">
                  <div class="vaccine-content">
                     <div class="section-title-wrapper-4 is-white mb-15">
                        <span class="section-subtitle-4 mb-10">Best sale</span>
                        <h2 class="section-title-4">Best sellers</h2>
                     </div>
                     <p>Lorem ipsum dolor sit amet consectetur adipisng elte massa mi. Aliquam in hendr Pellent.</p>
                     <div class="countdown-wrapper">
                        <ul>
                           <li><span id="days"></span>days</li>
                           <li><span id="hours"></span>hrs</li>
                           <li><span id="minutes"></span>mins</li>
                           <li><span id="seconds"></span>secs</li>
                        </ul>
                     </div>
                     <div class="btn-wrapper">
                        <a class="solid-btn" href="pharmacy-details.html">Buy Now<span><i
                                 class="fa-regular fa-angle-right"></i></span></a>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-6 col-xl-6 col-lg-6">
                  <div class="vaccine-thumb-wrapper p-relative">
                     <div class="vaccine-thumb">
                        <img src="assets/imgs/vaccine/vaccine-01.png" alt="">
                     </div>
                     <div class="vaccine-play">
                        <a href="https://www.youtube.com/watch?v=Fft5igeEIEM"
                           class="video-play-btn popup-video"><span><i class="fa-solid fa-play"></i></span></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Vaccine area end -->

      <!-- Best seller area start -->
      <section class="best-seller-area section-space">
         <div class="container">
            <div class="row gy-50">
               <div class="col-xxl-6 col-xl-6 col-lg-6">
                  <div class="row g-15">
                     <div class="col-xxl-6 col-xl-6 col-md-6 col-sm-6">
                        <div class="product-item">
                           <div class="product-badge">
                              <span class="product-trending">10% off</span>
                           </div>
                           <div class="product-thumb">
                              <a href="pharmacy-details.html"><img src="assets/imgs/product/product-01.png" alt=""></a>
                           </div>
                           <div class="product-action-item">
                              <button type="button" class="product-action-btn">
                                 <svg width="20" height="22" viewBox="0 0 20 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"
                                       stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                 </svg>
                                 <span class="product-tooltip">Add to Cart</span>
                              </button>
                              <button type="button" class="product-action-btn" data-bs-toggle="modal"
                                 data-bs-target="#producQuickViewModal">

                                 <svg width="26" height="18" viewBox="0 0 26 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"
                                       fill="white" />
                                 </svg>
                                 <span class="product-tooltip">Quick View</span>
                              </button>
                              <button type="button" class="product-action-btn">

                                 <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"
                                       fill="white" />
                                 </svg>
                                 <span class="product-tooltip">Add To Wishlist</span>
                              </button>
                           </div>
                           <div class="product-content">
                              <div class="product-tag">
                                 <span>ACCESSORIES</span>
                              </div>
                              <h4 class="product-title"><a href="pharmacy-details.html">Supradyn Daily</a></h4>
                              <div class="product-price">
                                 <span class="product-old-price"><del>$15.00</del></span>
                                 <span class="product-new-price">$12.00</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-6 col-xl-6 col-md-6 col-sm-6">
                        <div class="product-item">
                           <div class="product-badge">
                              <span class="product-trending">10% off</span>
                           </div>
                           <div class="product-thumb">
                              <a href="pharmacy-details.html"><img src="assets/imgs/product/product-02.png" alt=""></a>
                           </div>
                           <div class="product-action-item">
                              <button type="button" class="product-action-btn">
                                 <svg width="20" height="22" viewBox="0 0 20 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"
                                       stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                 </svg>
                                 <span class="product-tooltip">Add to Cart</span>
                              </button>
                              <button type="button" class="product-action-btn" data-bs-toggle="modal"
                                 data-bs-target="#producQuickViewModal">

                                 <svg width="26" height="18" viewBox="0 0 26 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"
                                       fill="white" />
                                 </svg>
                                 <span class="product-tooltip">Quick View</span>
                              </button>
                              <button type="button" class="product-action-btn">

                                 <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"
                                       fill="white" />
                                 </svg>
                                 <span class="product-tooltip">Add To Wishlist</span>
                              </button>
                           </div>
                           <div class="product-content">
                              <div class="product-tag">
                                 <span>PHARMA PRODUCT</span>
                              </div>
                              <h4 class="product-title"><a href="pharmacy-details.html">Accu-chek Tablet</a></h4>
                              <div class="product-price">
                                 <span class="product-old-price"><del>$20.00</del></span>
                                 <span class="product-new-price">$34.00</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-6 col-xl-6 col-md-6 col-sm-6">
                        <div class="product-item">
                           <div class="product-badge">
                              <span class="product-trending">10% off</span>
                           </div>
                           <div class="product-thumb">
                              <a href="pharmacy-details.html"><img src="assets/imgs/product/product-03.png" alt=""></a>
                           </div>
                           <div class="product-action-item">
                              <button type="button" class="product-action-btn">
                                 <svg width="20" height="22" viewBox="0 0 20 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"
                                       stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                 </svg>
                                 <span class="product-tooltip">Add to Cart</span>
                              </button>
                              <button type="button" class="product-action-btn" data-bs-toggle="modal"
                                 data-bs-target="#producQuickViewModal">

                                 <svg width="26" height="18" viewBox="0 0 26 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"
                                       fill="white" />
                                 </svg>
                                 <span class="product-tooltip">Quick View</span>
                              </button>
                              <button type="button" class="product-action-btn">

                                 <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"
                                       fill="white" />
                                 </svg>
                                 <span class="product-tooltip">Add To Wishlist</span>
                              </button>
                           </div>
                           <div class="product-content">
                              <div class="product-tag">
                                 <span>SKIN PRODUCT</span>
                              </div>
                              <h4 class="product-title"><a href="pharmacy-details.html">Curaskin Lipgel</a></h4>
                              <div class="product-price">
                                 <span class="product-old-price"><del>$12.00</del></span>
                                 <span class="product-new-price">$8.50</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-6 col-xl-6 col-md-6 col-sm-6">
                        <div class="product-item">
                           <div class="product-badge">
                              <span class="product-trending">10% off</span>
                           </div>
                           <div class="product-thumb">
                              <a href="pharmacy-details.html"><img src="assets/imgs/product/product-04.png" alt=""></a>
                           </div>
                           <div class="product-action-item">
                              <button type="button" class="product-action-btn">
                                 <svg width="20" height="22" viewBox="0 0 20 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"
                                       stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                 </svg>
                                 <span class="product-tooltip">Add to Cart</span>
                              </button>
                              <button type="button" class="product-action-btn" data-bs-toggle="modal"
                                 data-bs-target="#producQuickViewModal">

                                 <svg width="26" height="18" viewBox="0 0 26 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"
                                       fill="white" />
                                 </svg>
                                 <span class="product-tooltip">Quick View</span>
                              </button>
                              <button type="button" class="product-action-btn">

                                 <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"
                                       fill="white" />
                                 </svg>
                                 <span class="product-tooltip">Add To Wishlist</span>
                              </button>
                           </div>
                           <div class="product-content">
                              <div class="product-tag">
                                 <span>ACCESSORIES</span>
                              </div>
                              <h4 class="product-title"><a href="pharmacy-details.html">Shelcal 500 Tablet</a></h4>
                              <div class="product-price">
                                 <span class="product-old-price"><del>$80.00</del></span>
                                 <span class="product-new-price">$66.00</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-6 col-xl-6 col-lg-6">
                  <div class="product-banner h-100">
                     <div class="product-banner-thumb" data-background="assets/imgs/banner/product-banner.png"></div>
                     <div class="product-banner-content text-center">
                        <div class="section-title-wrapper-4 is-white mb-20">
                           <span class="section-subtitle-4 mb-10">Best sale</span>
                           <h2 class="section-title-4">50% off on all product</h2>
                        </div>
                        <div class="tp-banner-btn">
                           <a href="pharmacy-details.html" class="shop-link-btn">Shop Now
                              <svg width="15" height="13" viewBox="0 0 15 13" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path d="M13.9998 6.19656L1 6.19656" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path d="M8.75674 0.975394L14 6.19613L8.75674 11.4177" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Best seller area end -->

      <!-- Review area start -->
      <section class="review-area-2">
         <div class="container">
            <div class="review-main">
               <div class="review-inner">
                  <span class="round-1"></span>
                  <span class="round-2"></span>
                  <div class="review-singel">
                     <div class="swiper review-active">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="review-item-2">
                                 <div class="review-quote mb-40">
                                    <img src="assets/imgs/icons/quote-blue.png" alt="">
                                 </div>
                                 <div class="review-content-2">
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in
                                       hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula
                                       consectetur, ultrices mauris. Maecenas.</p>
                                 </div>
                                 <div class="review-meta">
                                    <!-- If we need navigation buttons -->
                                    <div class="review-navigation">
                                       <button class="review-button-prev"><i
                                             class="fa-regular fa-arrow-left"></i></button>
                                       <button class="review-button-next"><i
                                             class="fa-regular fa-arrow-right"></i></button>
                                    </div>
                                    <div class="review-item-content">
                                       <h4 class="avatar-name"><a href="#">Alexsia Jorgina</a></h4>
                                       <span>Director</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="review-item-2">
                                 <div class="review-quote mb-40">
                                    <img src="assets/imgs/icons/quote-blue.png" alt="">
                                 </div>
                                 <div class="review-content-2">
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in
                                       hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula
                                       consectetur, ultrices mauris. Maecenas.</p>
                                 </div>
                                 <div class="review-meta">
                                    <!-- If we need navigation buttons -->
                                    <div class="review-navigation">
                                       <button class="review-button-prev"><i
                                             class="fa-regular fa-arrow-left"></i></button>
                                       <button class="review-button-next"><i
                                             class="fa-regular fa-arrow-right"></i></button>
                                    </div>
                                    <div class="review-item-content">
                                       <h4 class="avatar-name"><a href="#">Alexsia Jorgina</a></h4>
                                       <span>Director</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="review-item-2">
                                 <div class="review-quote mb-40">
                                    <img src="assets/imgs/icons/quote-blue.png" alt="">
                                 </div>
                                 <div class="review-content-2">
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in
                                       hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula
                                       consectetur, ultrices mauris. Maecenas.</p>
                                 </div>
                                 <div class="review-meta">
                                    <!-- If we need navigation buttons -->
                                    <div class="review-navigation">
                                       <button class="review-button-prev"><i
                                             class="fa-regular fa-arrow-left"></i></button>
                                       <button class="review-button-next"><i
                                             class="fa-regular fa-arrow-right"></i></button>
                                    </div>
                                    <div class="review-item-content">
                                       <h4 class="avatar-name"><a href="#">Alexsia Jorgina</a></h4>
                                       <span>Director</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="review-thumb-wrapper">
                     <div class="review-thumb w-img">
                        <img src="assets/imgs/testimonial/review-thumb.png" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Review area end -->

      <!-- Important area start -->
      <section class="important-area p-relative section-space-bottom ">
         <div class="intro-bg">
            <div class="intro-bg-thumb include-bg" data-background="assets/imgs/bg/intro-bg.png"></div>
         </div>
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xxl-6 col-xl-6 col-lg-6">
                  <div class="section-title-wrapper-4 is-white text-center">
                     <span class="section-subtitle-4 mb-10">Important</span>
                     <h2 class="section-title-4 mb-35">Ask pharmacist not Internet</h2>
                     <a class="solid-btn" href="appointment.html">Get appointment<span><i
                              class="fa-regular fa-angle-right"></i></span></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Important area end -->

      <!-- Latest product area start -->
      <div class="section latest-product-area section-space">
         <div class="container">
            <div class="row">
               <div class="col-xxl6">
                  <div class="row gy-5 align-items-end mb-40">
                     <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="section-title-wrapper-4">
                           <span class="section-subtitle-4 mb-10">Best sale</span>
                           <h2 class="section-title-4">Latest Product</h2>
                        </div>
                     </div>
                     <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="seller-link text-md-end">
                           <a class="solid-btn" href="project-details.html">Shop all<span><i
                                    class="fa-regular fa-angle-right"></i></span></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xxl-12">
                  <div class="swiper product-active">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="product-item">
                              <div class="product-badge">
                                 <span class="product-trending">10% off</span>
                              </div>
                              <div class="product-thumb">
                                 <a href="pharmacy-details.html"><img src="assets/imgs/product/product-01.png"
                                       alt=""></a>
                              </div>
                              <div class="product-action-item">
                                 <button type="button" class="product-action-btn">
                                    <svg width="20" height="22" viewBox="0 0 20 22" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"
                                          stroke="white" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                    </svg>
                                    <span class="product-tooltip">Add to Cart</span>
                                 </button>
                                 <button type="button" class="product-action-btn" data-bs-toggle="modal"
                                    data-bs-target="#producQuickViewModal">

                                    <svg width="26" height="18" viewBox="0 0 26 18" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"
                                          fill="white" />
                                    </svg>
                                    <span class="product-tooltip">Quick View</span>
                                 </button>
                                 <button type="button" class="product-action-btn">

                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"
                                          fill="white" />
                                    </svg>
                                    <span class="product-tooltip">Add To Wishlist</span>
                                 </button>
                              </div>
                              <div class="product-content">
                                 <div class="product-tag">
                                    <span>ACCESSORIES</span>
                                 </div>
                                 <h4 class="product-title"><a href="pharmacy-details.html">Supradyn Daily</a></h4>
                                 <div class="product-price">
                                    <span class="product-old-price"><del>$15.00</del></span>
                                    <span class="product-new-price">$12.00</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="product-item">
                              <div class="product-badge">
                                 <span class="product-trending">10% off</span>
                              </div>
                              <div class="product-thumb">
                                 <a href="pharmacy-details.html"><img src="assets/imgs/product/product-02.png"
                                       alt=""></a>
                              </div>
                              <div class="product-action-item">
                                 <button type="button" class="product-action-btn">
                                    <svg width="20" height="22" viewBox="0 0 20 22" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"
                                          stroke="white" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                    </svg>
                                    <span class="product-tooltip">Add to Cart</span>
                                 </button>
                                 <button type="button" class="product-action-btn" data-bs-toggle="modal"
                                    data-bs-target="#producQuickViewModal">

                                    <svg width="26" height="18" viewBox="0 0 26 18" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"
                                          fill="white" />
                                    </svg>
                                    <span class="product-tooltip">Quick View</span>
                                 </button>
                                 <button type="button" class="product-action-btn">

                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"
                                          fill="white" />
                                    </svg>
                                    <span class="product-tooltip">Add To Wishlist</span>
                                 </button>
                              </div>
                              <div class="product-content">
                                 <div class="product-tag">
                                    <span>PHARMA PRODUCT</span>
                                 </div>
                                 <h4 class="product-title"><a href="pharmacy-details.html">Accu-chek Tablet</a></h4>
                                 <div class="product-price">
                                    <span class="product-old-price"><del>$20.00</del></span>
                                    <span class="product-new-price">$34.00</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="product-item">
                              <div class="product-badge">
                                 <span class="product-trending">10% off</span>
                              </div>
                              <div class="product-thumb">
                                 <a href="pharmacy-details.html"><img src="assets/imgs/product/product-03.png"
                                       alt=""></a>
                              </div>
                              <div class="product-action-item">
                                 <button type="button" class="product-action-btn">
                                    <svg width="20" height="22" viewBox="0 0 20 22" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"
                                          stroke="white" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                    </svg>
                                    <span class="product-tooltip">Add to Cart</span>
                                 </button>
                                 <button type="button" class="product-action-btn" data-bs-toggle="modal"
                                    data-bs-target="#producQuickViewModal">

                                    <svg width="26" height="18" viewBox="0 0 26 18" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"
                                          fill="white" />
                                    </svg>
                                    <span class="product-tooltip">Quick View</span>
                                 </button>
                                 <button type="button" class="product-action-btn">

                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"
                                          fill="white" />
                                    </svg>
                                    <span class="product-tooltip">Add To Wishlist</span>
                                 </button>
                              </div>
                              <div class="product-content">
                                 <div class="product-tag">
                                    <span>SKIN PRODUCT</span>
                                 </div>
                                 <h4 class="product-title"><a href="pharmacy-details.html">Curaskin Lipgel</a></h4>
                                 <div class="product-price">
                                    <span class="product-old-price"><del>$12.00</del></span>
                                    <span class="product-new-price">$8.50</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="product-item">
                              <div class="product-badge">
                                 <span class="product-trending">10% off</span>
                              </div>
                              <div class="product-thumb">
                                 <a href="pharmacy-details.html"><img src="assets/imgs/product/product-04.png"
                                       alt=""></a>
                              </div>
                              <div class="product-action-item">
                                 <button type="button" class="product-action-btn">
                                    <svg width="20" height="22" viewBox="0 0 20 22" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M13.0768 10.1416C13.0768 11.9228 11.648 13.3666 9.88542 13.3666C8.1228 13.3666 6.69401 11.9228 6.69401 10.1416M1.375 5.84163H18.3958M1.375 5.84163V12.2916C1.375 19.1359 2.57494 20.3541 9.88542 20.3541C17.1959 20.3541 18.3958 19.1359 18.3958 12.2916V5.84163M1.375 5.84163L2.91454 2.73011C3.27495 2.00173 4.01165 1.54163 4.81754 1.54163H14.9533C15.7592 1.54163 16.4959 2.00173 16.8563 2.73011L18.3958 5.84163"
                                          stroke="white" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                    </svg>
                                    <span class="product-tooltip">Add to Cart</span>
                                 </button>
                                 <button type="button" class="product-action-btn" data-bs-toggle="modal"
                                    data-bs-target="#producQuickViewModal">

                                    <svg width="26" height="18" viewBox="0 0 26 18" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M13.092 4.55026C10.5878 4.55026 8.55683 6.58125 8.55683 9.08541C8.55683 11.5896 10.5878 13.6206 13.092 13.6206C15.5961 13.6206 17.6271 11.5903 17.6271 9.08541C17.6271 6.5805 15.5969 4.55026 13.092 4.55026ZM13.092 12.1089C11.4246 12.1089 10.0338 10.7196 10.0338 9.05216C10.0338 7.38473 11.3898 6.02872 13.0572 6.02872C14.7246 6.02872 16.0807 7.38473 16.0807 9.05216C16.0807 10.7196 14.7594 12.1089 13.092 12.1089ZM25.0965 8.8768C25.0875 8.839 25.092 8.79819 25.0807 8.76115C25.0761 8.74528 25.0655 8.73621 25.0603 8.7226C25.0519 8.70144 25.0542 8.67574 25.0429 8.65533C22.8441 3.62131 18.1064 0.724854 13.0572 0.724854C8.00807 0.724854 3.17511 3.61677 0.975559 8.65079C0.966488 8.67196 0.968 8.69388 0.959686 8.71806C0.954395 8.73318 0.943812 8.74074 0.938521 8.7551C0.927184 8.7929 0.931719 8.83296 0.92416 8.8715C0.910555 8.93953 0.897705 9.00605 0.897705 9.07483C0.897705 9.14361 0.910555 9.20862 0.92416 9.2774C0.931719 9.31519 0.926428 9.35677 0.938521 9.39229C0.943057 9.40968 0.954395 9.41648 0.959686 9.4316C0.967244 9.45201 0.965732 9.4777 0.975559 9.49887C3.17511 14.5314 7.96121 17.381 13.0104 17.381C18.0595 17.381 22.8448 14.5374 25.0436 9.5034C25.055 9.48148 25.0527 9.45956 25.061 9.43538C25.0663 9.42253 25.0761 9.4127 25.0807 9.39758C25.092 9.36055 25.089 9.32049 25.0965 9.28118C25.1101 9.21315 25.1222 9.14739 25.1222 9.0771C25.1222 9.01058 25.1094 8.94482 25.0958 8.87604L25.0965 8.8768ZM13.0104 15.8692C8.72841 15.8692 4.51298 13.6123 2.44193 9.07407C4.49333 4.55177 8.76469 2.23582 13.0572 2.23582C17.349 2.23582 21.5251 4.55404 23.5773 9.07861C21.5266 13.6002 17.3036 15.8692 13.0104 15.8692Z"
                                          fill="white" />
                                    </svg>
                                    <span class="product-tooltip">Quick View</span>
                                 </button>
                                 <button type="button" class="product-action-btn">

                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M19.2041 2.63262C18.6402 1.97669 17.932 1.44916 17.1305 1.08804C16.329 0.726918 15.4541 0.54119 14.569 0.544237C13.0545 0.500151 11.58 1.01577 10.4489 1.98501C9.31782 1.01577 7.84334 0.500151 6.32883 0.544237C5.44368 0.54119 4.56885 0.726918 3.76735 1.08804C2.96585 1.44916 2.25764 1.97669 1.69374 2.63262C0.712132 3.77732 -0.314799 5.84986 0.366045 9.22751C1.45272 14.6213 9.60121 19.0476 9.94523 19.2288C10.0986 19.311 10.2713 19.3541 10.4469 19.3541C10.6224 19.3541 10.7951 19.311 10.9485 19.2288C11.2946 19.0436 19.4431 14.6173 20.5277 9.22751C21.2126 5.84986 20.1857 3.77732 19.2041 2.63262ZM18.5099 8.85122C17.7415 12.6646 12.1567 16.2116 10.4489 17.2196C8.04279 15.8234 3.09251 12.318 2.39312 8.85122C1.86472 6.23109 2.5878 4.70912 3.28821 3.89317C3.65861 3.46353 4.12333 3.11801 4.64903 2.88141C5.17473 2.64481 5.74838 2.52299 6.32883 2.52468C6.94879 2.47998 7.57022 2.59049 8.13253 2.84542C8.69484 3.10036 9.17884 3.49102 9.53734 3.97932C9.62575 4.13571 9.75616 4.26645 9.915 4.3579C10.0738 4.44936 10.2553 4.49819 10.4404 4.4993C10.6256 4.50041 10.8076 4.45377 10.9676 4.36423C11.1276 4.27469 11.2598 4.14553 11.3502 3.99022C11.708 3.49811 12.193 3.10414 12.7575 2.84715C13.3219 2.59016 13.9463 2.47902 14.569 2.52468C15.1507 2.52196 15.7257 2.64329 16.2527 2.87993C16.7798 3.11656 17.2456 3.46262 17.6168 3.89317C18.3152 4.70912 19.0383 6.23109 18.5099 8.85122Z"
                                          fill="white" />
                                    </svg>
                                    <span class="product-tooltip">Add To Wishlist</span>
                                 </button>
                              </div>
                              <div class="product-content">
                                 <div class="product-tag">
                                    <span>ACCESSORIES</span>
                                 </div>
                                 <h4 class="product-title"><a href="pharmacy-details.html">Shelcal 500 Tablet</a></h4>
                                 <div class="product-price">
                                    <span class="product-old-price"><del>$80.00</del></span>
                                    <span class="product-new-price">$66.00</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="why-choose-pagination text-center">
                        <div class="bd-swiper-dot"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Latest product area end -->

      <!-- Blog area start -->
      <section class="blog-area theme-bg-1 section-space">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xxl-4 col-xl-4 col-lg-4">
                  <div class="section-title-wrapper-4 is-white text-center section-title-space">
                     <span class="section-subtitle-4 mb-10">Read blog</span>
                     <h2 class="section-title-4">Recent Blog</h2>
                  </div>
               </div>
            </div>
            <div class="row gy-5">
               <div class="col-xxl-6 col-xl-6 col-lg-6">
                  <div class="blog-item-4">
                     <div class="blog-content-4">
                        <div class="blog-tag-wrapper mb-15">
                           <a class="blog-tag" href="#">Health</a>
                        </div>
                        <div class="postbox__meta mb-15">
                           <span><a href="#">By Alex Manie</a></span>
                           <span>07 jan, 2024</span>
                        </div>
                        <h4 class="blog-title">
                           <a href="blog-details.html">Experimental cancer vaccine both treats</a>
                        </h4>
                        <a class="round-link" href="blog-details.html"><i class="fa-regular fa-angle-right"></i></a>
                     </div>
                     <div class="blog-item-thumb w-img">
                        <a href="blog-details.html">
                           <img src="assets/imgs/blog/blog-5.jpg" alt="">
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-6 col-xl-6 col-lg-6">
                  <div class="blog-item-4">
                     <div class="blog-content-4">
                        <div class="blog-tag-wrapper mb-15">
                           <a class="blog-tag" href="#">Surgery</a>
                        </div>
                        <div class="postbox__meta mb-15">
                           <span><a href="#">By Alex Manie</a></span>
                           <span>07 jan, 2024</span>
                        </div>
                        <h4 class="blog-title">
                           <a href="blog-details.html">Empowering Wellness: Navigating the Path to Lifelong Health</a>
                        </h4>
                        <a class="round-link" href="blog-details.html"><i class="fa-regular fa-angle-right"></i></a>
                     </div>
                     <div class="blog-item-thumb-4 w-img">
                        <a href="blog-details.html">
                           <img src="assets/imgs/blog/blog-6.jpg" alt="">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Blog area end -->

      <!-- Support area start -->
      <section class="support-area section-space">
         <div class="container">
            <div class="row g-5">
               <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                  <div class="support-item">
                     <div class="support-content">
                        <h3>Exclusive offers for you</h3>
                        <p>Get weekly deals, valuable health information and more.</p>
                        <a class="join-btn" href="#">sing up<span><i class="fa-regular fa-angle-right"></i></span></a>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                  <div class="support-item is-light-yellow">
                     <div class="support-content">
                        <h3>Join Our Community</h3>
                        <p>Get weekly deals, valuable health information and more.</p>
                        <a class="join-btn" href="#">Join FREE now<span><i
                                 class="fa-regular fa-angle-right"></i></span></a>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                  <div class="support-item is-pale-pink">
                     <div class="support-content">
                        <h3>Get our FREE app Now!</h3>
                        <p>Get weekly deals, valuable health information and more.</p>
                        <div class="mobile__app-download">
                           <a class="app__download" href="#">
                              <img src="assets/imgs/app/play-store.png" alt="image not found">
                           </a>
                           <a class="app__download" href="#">
                              <img src="assets/imgs/app/apple-store.png" alt="image not found">
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Support area end -->

      <!-- Newsletter area start -->
      <section class="newsletter-area p-relative">
         <div class="newsletter-overlay theme-bg-3 "></div>
         <div class="container">
            <div class="newsletter-grid p-relative">
               <div class="intro-bg">
                  <div class="intro-bg-thumb include-bg" data-background="assets/imgs/bg/intro-bg.png"></div>
               </div>
               <div class="row gy-4 align-items-center">
                  <div class="col-xxl-6 col-xl-6 col-lg-6">
                     <div class="newsletter-content">
                        <h3 class="newsletter-title">Subscribe to Our News Letter</h3>
                     </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6">
                     <div class="newsletter-form">
                        <form action="#">
                           <div class="newsletter-input p-relative">
                              <input type="text" placeholder="Enter Email Address">
                              <button class="fill-btn" type="submit">
                                 <span class="fill-btn-inner">
                                    <span class="fill-btn-normal">Subscribe Us</span>
                                    <span class="fill-btn-hover">Subscribe Us</span>
                                 </span>
                                 <span class="fill-btn-inner">
                                    <span class="fill-btn-normal"><i class="fa-light fa-bell-on"></i></span>
                                    <span class="fill-btn-hover"><i class="fa-light fa-bell-on"></i></span>
                                 </span>
                              </button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Newsletter area end -->

   </main>
   <!-- Body main wrapper end -->

<?php
include("includes/footer.php");
?>