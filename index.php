<?php
require_once('session.php');
require('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SSAMJANG Korean Grill Reservation App</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/ssamjang.png" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Rubik:wght@400;500;600;700&family=Shadows+Into+Light&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">

  <!-- 
    - preload images
  -->
  <!-- <link rel="preload" as="image" href="./assets/images/set.png" media="min-width(768px)"> -->
  <!--<link rel="preload" as="image" href="./assets/images/hero-banner-bg.png" media="min-width(768px)">-->
  <!--link rel="preload" as="image" href="./assets/images/hero-bg.jpg">-->
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">
      <img src="./assets/images/ssamjang.png" width="50" height="50">
      <h1>
        <a href="#" class="logo">SSAMJANG Korean Grill Reservation App<span class="span">.</span></a>
      </h1>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="nav-item">
            <a href="#home" class="navbar-link" data-nav-link><i class="fas fa-home"></i> Home</a>
          </li>

          <li class="nav-item">
            <a href="#about" class="navbar-link" data-nav-link><i class="fas fa-users" ></i> About</a>
          </li>

          <li class="nav-item">
            <a href="#food-menu" class="navbar-link" data-nav-link><i class="fas fa-utensils"></i> Dishes</a>
          </li>
          <?php

          $select_rows = mysqli_query($conn, "SELECT * FROM `tblcart`");
          $row_count = mysqli_num_rows($select_rows);

          ?>

          <li class="nav-item">
            <a href="cart.php" class="navbar-link" data-nav-link><i class="fa fa-shopping-cart"></i> Cart <span><?php echo $row_count; ?></span></a>
          </li>

          <li class="nav-item">
            <a href="profile.php" class="navbar-link" data-nav-link><i class="fa fa-fw fa-user"></i><?php echo $_SESSION['name'] ?></a>
          </li>

          <li class="nav-item">
            <a href="logout.php" class="navbar-link" data-nav-link><i class="fas fa-sign-out-alt"></i> Log Out</a>
          </li>

    </div>
    </ul>
    </nav>
    <!-- 
      <div class="header-btn-group">
        <button class="search-btn" aria-label="Search" data-search-btn>
          <ion-icon name="search-outline"></ion-icon>
        </button>

        <button class="btn btn-hover">Reservation</button>-->

    <button class="nav-toggle-btn" aria-label="Toggle Menu" data-menu-toggle-btn>
      <span class="line top"></span>
      <span class="line middle"></span>
      <span class="line bottom"></span>
    </button>
    </div>


    </div>
  </header>

  <!-- 
    - #SEARCH BOX
  -->

  <div class="search-container" data-search-container>

    <div class="search-box">
      <input type="search" name="search" aria-label="Search here" placeholder="Type keywords here..." class="search-input">

      <button class="search-submit" aria-label="Submit search" data-search-submit-btn>
        <ion-icon name="search-outline"></ion-icon>
      </button>
    </div>

    <button class="search-close-btn" aria-label="Cancel search" data-search-close-btn></button>

  </div>

  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home" style="background-image: url('./assets/images/backssss.png')">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">TRY TO VIST US FOR THE </p>

            <h2 class="h1 hero-title">BEST EXPERIENCE BBQ IN BALIWAG!</h2>

            <p class="hero-text">Enjoy Unlimited Korean BBQ with your family.</p>


          </div>

          <figure class="hero-banner">
            <!--<img src="./assets/images/hero-banner-bg.png" width="820" height="716" alt="" aria-hidden="true"
              class="w-100 hero-img-bg">-->

            <img src="./assets/images/set.png" width="700" height="637" loading="lazy" alt="Burger" class="w-100 hero-img">
          </figure>

        </div>
      </section>

      <!-- 
        - #PROMO
      -->

      <section class="section section-divider white promo">
        <div class="container">

          <ul class="promo-list has-scrollbar">

            <li class="promo-item">
              <div class="promo-card">

                <h3 class="h3 card-title">Cheese Tteokbokki <br>치즈떡볶이</h3>

                <p class="card-text">
                  Chewy Korean rice cakes smothered in a sweet and spicy gochujang sauce and molten cheese.
                </p>

                <img src="./assets/images/ricecake.png" width="400" height="400" loading="lazy" alt="Maxican Pizza" class="w-100 card-banner">

              </div>
            </li>

            <li class="promo-item">
              <div class="promo-card">

                <h3 class="h3 card-title">Jeyuk Bokkeum <br> 제육볶음</h3>

                <p class="card-text">
                  Tender pork stir-fried with onions, carrots, and garlic in a spicy, sweet, and savory gochujang sauce.
                </p>

                <img src="./assets/images/eme.png" width="300" height="300" loading="lazy" alt="Soft Drinks" class="w-100 card-banner">

              </div>
            </li>

            <li class="promo-item">
              <div class="promo-card">

                <h3 class="h3 card-title">Haemul Pajeon <br> 해물파전</h3>

                <p class="card-text">
                  delightful crispy savoury pancake made of green onions, garlic chives, and it's served with a variety
                  of seafood.
                </p>

                <img src="./assets/images/eme3.png" width="300" height="300" loading="lazy" alt="French Fry" class="w-100 card-banner">

              </div>
            </li>

            <li class="promo-item">
              <div class="promo-card">

                <h3 class="h3 card-title">Samgyetang<br> 삼계탕</h3>

                <p class="card-text">
                  It is a korean soup principally consists of a whole young chicken stuffed with garlic, rice, jujube,
                  and ginseng.
                </p>

                <img src="./assets/images/food1.png" width="300" height="300" loading="lazy" alt="Burger Kingo" class="w-100 card-banner">

              </div>
            </li>

            <li class="promo-item">
              <div class="promo-card">

                <h3 class="h3 card-title">Ddukbegi Bulgogi<br> 뚝배기불고기</h3>

                <p class="card-text">
                  is a traditional Korean beef soup made with marinated beef, carrots, mushrooms, and Dangmyeon noodles.
                </p>

                <img src="./assets/images/eat2.png" width="300" height="300" loading="lazy" alt="Burger Kingo" class="w-100 card-banner">

              </div>
            </li>

            <li class="promo-item">
              <div class="promo-card">

                <h3 class="h3 card-title">Kimchi Jjigae<br> 김치찌개</h3>

                <p class="card-text">
                  is a Korean stew cooked with kimchi and additional ingredients including pork or shellfish, and cubed
                  tofu.
                </p>

                <img src="./assets/images/eat1.png" width="500" height="500" loading="lazy" alt="Burger Kingo" class="w-100 card-banner">

              </div>
            </li>

          </ul>

        </div>
      </section>
      <!-- 
        - #ABOUT
      -->

      <section class="section section-divider gray about" id="about">
        <div class="container">

          <div class="about-banner">
            <img src="./assets/images/restau.png" width="509" height="459" loading="lazy" alt="SSAMJANG Restaurant" class="w-100 about-img">

          </div>

          <div class="about-content">

            <h2 class="h2 section-title">
              Try to visit us for the best expierence Korean BBQ
              <span class="span">in Baliwag!</span>
            </h2>

            <p class="section-text">
              Ssam means "wrapped" and Jang means "paste" or "thick sauce". Together as SsamJang they mean "wrapping Sauce". It is korea's representative sauce and add to meat taste unique.
            </p>

            <ul class="about-list">

              <li class="about-item">
                <ion-icon name="checkmark-outline"></ion-icon>

                <span class="span">Delicious & Affortable Foods</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-outline"></ion-icon>

                <span class="span">Family suitable Meals</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-outline"></ion-icon>

                <span class="span">Ala Carte Meals and Solo Meals</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-outline"></ion-icon>

                <span class="span">Serve our Meals with Love and Care</span>
              </li>

            </ul>

            <button class="btn btn-hover">RESERVE YOUR TABLE NOW!</button>

          </div>

        </div>
      </section>

      <!-- 
        - #FOOD MENU
      -->

      <section class="section food-menu" id="food-menu">
        <div class="container">

          <!--<p class="section-subtitle">Top Dishes</p>-->

          <h2 class="h2 section-title">
            Our Delicious <span class="span"> BENTO MEALS</span>
          </h2>

          <!--<p class="section-text">
            Food is any substance consumed to provide nutritional support for an organism.
          </p>-->

          <ul class="fiter-list">

            <!-- <li>
              <button class="filter-btn  active">Bento Set</button>
            </li>-->

          </ul>

          <?php
          $select_products = mysqli_query($conn, "SELECT * FROM tblproduct");
          if (mysqli_num_rows($select_products) > 0) {
            while ($fetch_product = mysqli_fetch_assoc($select_products)) {

          ?>
              <form action="addcart.php" method="post">
                <img class="" src="images/<?php echo $fetch_product['image']; ?>" alt="">
                <h3><?php echo $fetch_product['name']; ?></h3>
                <h4><?php echo $fetch_product['price']; ?></h4>
                <input type="hidden" name="product_photo" value="<?php echo $fetch_product['image']; ?>">
                <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                <input type="submit" value="add to cart" name="add_to_cart">
              </form>
          <?php
            };
          };
          ?>

        </div>
      </section>

      <!-- 
        - #CTA
      -->

      <section class="section section-divider white cta" style="background-image: url('./assets/images/hero-bg.jpg')">
        <div class="container">

          <div class="cta-content">

            <h2 class="h2 section-title">
              Enjoy our Unlimited and premiun
              <span class="span"> Korea BBQ!</span>
            </h2>

            <p class="section-text">
              Samgyupsal lovers, This is a must-try! Our Unlimited Set A includes 5 kinds of premium pork, ramyun,
              grilled kimchi fried rice with side dishes and our special sauces! And it’s just P399 per person! 🐷🔥❤️

              📍G/F, near BDO, SM City Baliwag

              #SsamjangKoreanRestaurant #UnlimitedBBQ #korea #koreanfood #koreanrestaurant #unlisamgyupsal #kpop
              #kfoodlovers #Baliwag #baliwagbulacan
            </p>

            <button class="btn btn-hover">Reserve Now</button>
          </div>

          <!-- <video width="700" height="637" autoplay>
            <source src="./assets/video/VIDEO.mp4" type="video/ogg">
            Your browser does not support the video tag.
          </video> -->

          <!-- <figure class="cta-banner">
            <img src="./assets/images/VIDEO.mp4" width="700" height="637" loading="lazy" alt="Burger"
              class="w-100 cta-img">
          </figure>-->

        </div>
      </section>
      <!-- 
        - #DELIVERY
      -->

      <section class="section section-divider white testi">
        <div class="container">

          <!-- <p class="section-subtitle">Testimonials</p> -->

          <h2 class="h2 section-title">
            Booking <span class="span">Calendar</span>
          </h2>

          <p class="section-text">
            Here are the whole calendar of the year that user enables to book any date of the year
          </p>
          <button class="btn btn-hover" type="submit">Click to See the Calendar!</button>
        </div>
      </section>
      <!-- 
        - #BANNER
      -->

      <section class="section section-divider gray banner">
        <div class="container">

          <ul class="banner-list">

            <li class="banner-item banner-lg">
              <div class="banner-card">

                <img src="./assets/images/unlirice.png" width="550" height="450" loading="lazy" alt="Discount For Delicious Tasty Burgers!" class="banner-img">

                <div class="banner-item-content">


                  <!-- <button class="btn">Reserve Now</button> -->
                </div>

              </div>
            </li>

            <li class="banner-item banner-sm">
              <div class="banner-card">

                <img src="./assets/images/hotteok.png" width="550" height="465" loading="lazy" alt="Delicious Pizza" class="banner-img">

                <div class="banner-item-content">
                  <!--<h3 class="banner-title">Delicious Hotteok</h3>

                  <p class="banner-text">We serve it Here</p>-->

                  <!-- <button class="btn">Reserve Now</button> -->
                </div>

              </div>
            </li>

            <li class="banner-item banner-sm">
              <div class="banner-card">

                <img src="./assets/images/kimchis.png" width="550" height="465" loading="lazy" alt="American Burgers" class="banner-img">

                <div class="banner-item-content">
                  <!-- <h3 class="banner-title">Authentic Kimchi</h3>

                  <p class="banner-text">Taste it Now!</p>-->

                  <!-- <button class="btn">Reserve Now</button> -->
                </div>

              </div>
            </li>

            <li class="banner-item banner-md">
              <div class="banner-card">

                <img src="./assets/images/unlicheese.png" width="400" height="200" loading="lazy" alt="Tasty Buzzed Pizza" class="banner-img">

                <div class="banner-item-content">
                  <!-- <h3 class="banner-title">Unli Cheese Unli Ice Tea</h3>

                  <p class="banner-text">Come on and Tase it!</p>-->

                  <!-- <button class="btn">Reserve Now</button> -->
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

      <!-- 
    - #FOOTER
  -->

      <footer class="footer">

        <div class="footer-top" style="background-image: url('./assets/images/Untitled.png')">
          <div class="container">

            <div class="footer-brand">

              <a href="" class="logo">SSAMJANG Korean Grill Reservation App <span class="span"></span></a>

              <p class="footer-text">
                An Asian Restaurant that provides you the best Korean BBQ in Town.
              </p>

              <ul class="social-list">

                <li>
                  <a href="https://www.facebook.com/ssamjangkoreanrestaurant" class="social-link">
                    <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/ssamjang_korean_restaurant/" class="social-link">
                    <ion-icon name="logo-instagram"></ion-icon>
                  </a>
                </li>
              </ul>

            </div>

            <ul class="footer-list">

              <li>
                <p class="footer-list-title">Contact Info</p>
              </li>

              <li>
                <p class="footer-list-item">0906 385 1004</p>
              </li>

              <li>
                <p class="footer-list-item">ssamjang@gmail.com</p>
              </li>

              <li>
                <address class="footer-list-item">Unit 109-110, Ground Level, SM City Baliwag, Baliuag, Philippines
                </address>
              </li>

            </ul>

            <ul class="footer-list">

              <li>
                <p class="footer-list-title">Opening Hours</p>
              </li>

              <li>
                <p class="footer-list-item">Sunday-Saturday: 10:00am-21:00pm</p>
              </li>

            </ul>

          </div>
        </div>

        <div class="footer-bottom">
          <div class="container">
            <p class="copyright-text">
              &copy; 2023 <a href="#" class="copyright-link">SSAMJANG Korean Grill || </a> All Rights Reserved.
            </p>
          </div>
        </div>

      </footer>

      <!-- 
    - #BACK TO TOP
  -->

      <a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
        <ion-icon name="chevron-up"></ion-icon>
      </a>

      <!-- 
    - custom js link
  -->
      <script src="./assets/js/script.js" defer></script>

      <!-- 
    - ionicon link
  -->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>

</html>