<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krishna Jewelry</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">

    <link rel="stylesheet" href="style.css">
    <lnk rel = "stylesheet" href="Rings.css">
    
    
    
    
</head>

<body>
    <div class="home_black_version">
        <header class="header_area header_black">
            <!-- header top starts -->
            <div class="header_top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="social_icone">
                                <ul>
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                                    <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                                    <li><a href="#"><i class="ion-social-youtube"></i></a></li>

                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="top_right text-right">
                                <ul>
                                    <li class="language">
                                        <a href="#">English <i class="ion-chevron-down"></i></a>
                                        <ul class="dropdown_language">
                                            <li><a href="#">French</a></li>
                                            <li><a href="#">Germany</a></li>
                                            <li><a href="#">Hindi</a></li>
                                        </ul>
                                    </li>
                                    <li class="currency">
                                        <a href="#">INR <i class="ion-chevron-down"></i></a>
                                        <ul class="dropdown_currency">
                                            <li><a href="#">USD - Dollar</a></li>
                                            <li><a href="#">EUR - Euro</a></li>
                                            <li><a href="#">GBP - British Pound</a></li>
                                        </ul>
                                    </li>
                                    <li class="top_links">
                                        <a href="#">My Account <i class="ion-chevron-down"></i></a>
                                        <ul class="dropdown_links">
                                            <li><a href="#">Checkout</a></li>
                                            <li><a href="login.php">My Account</a></li>
                                            <li><a href="#">Shopping Cart</a></li>
                                            
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header top ends -->

            <!-- header middle starts -->
            <div class="header_middel">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-5">
                            <div class="home_contact">
                                <div class="contact_icone">
                                    <img src="img/icon_phone.png" alt="">
                                </div>
                                <div class="contact_box">
                                    <p>Inquiry / Helpline : <a href="tel:9157433685">9313366564</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-3 col-4">
                            <div class="logo">
                                <a href="index.html"><img src="img/Krishna.png" alt=""></a>
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-7 col-6">
                            <div class="middel_right">
                                <div class="search_btn">
                                    <a href="#"><i class="ion-ios-search-strong"></i></a>
                                    <div class="dropdown_search">
                                        <form action="#">
                                            <input type="text" placeholder="Search Product ....">
                                            <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="wishlist_btn">
                                    <a href="#"><i class="ion-heart"></i></a>
                                </div>
                                <div class="cart_link">
                                    <a href="#"><i class="ion-android-cart"></i><span class="cart_text_quantity">Rs.
                                            67,598</span><i class="ion-chevron-down"></i></a>
                                            
                                    <span class="cart_quantity">2</span>

                                    <!-- mini cart -->
                                    <?php
                                    include("cart.php");
                                    ?>
                                    <!-- mini cart ends  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- header middle ends -->

            <!-- header bottom starts -->

            <div class="header_bottom sticky-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="main_menu_inner">
                                <div class="logo_sticky">
                                    <a href="#"><img src="img/Krishna.png" alt="logo"></a>
                                </div>
                                <div class="main_menu">
                                    <nav>
                                        <ul>
                                            <li class="active">
                                                <a href="# Home">Home <i class="ion-chevron-down"></i></a>
                                                <ul class="sub_menu">
                                                    <li><a href="#Banner">Banner</a></li>
                                                    <li><a href="#Featured">Featured</a></li>
                                                    <li><a href="#">Collection</a></li>
                                                    <li><a href="#">Best Selling</a></li>
                                                    <li><a href="#">News</a></li>
                                                    <li><a href="#Blog">Blog</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Category <i class="ion-chevron-down"></i></a>
                                                <ul class="mega_menu">
                                                    <li>
                                                        <a href="#">Women</a>
                                                        <ul>
                                                            <li><a href="Earrings.php">Earring</a></li>
                                                            <li><a href="WomenPendant.php">Pendant</a></li>
                                                            <li><a href="WomenRings.php">Rings</a></li>
                                                            <li><a href="WomenChain.php">Chain</a></li>
                                                            <li><a href="WomenBracelet.php">Bangles</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#">Men</a>
                                                        <ul>
                                                            <li><a href="Rings.php">Ring</a></li>
                                                            <li><a href="Pendants.php">Pendant</a></li>
                                                            <li><a href="Bracelet.php">Bracelet</a></li>
                                                            <li><a href="Chain.php">Chain</a></li>
                                                            <li><a href="Gemstone.php">Gemstone</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#">Other</a>
                                                        <ul>
                                                            <li><a href="Platinum.php">Platinium</a></li>
                                                            <li><a href="Silver.php">Silver</a></li>
                                                            <li><a href="Coin.php">Coins</a></li>
                                                            <li><a href="giftcart.php">Gift Card</a></li>
                                                        </ul>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Uncut Diamonds <i class="ion-chevron-down"></i></a>
                                                <ul class="sub_menu pages">
                                                    <li><a href="Earrings.php">Earrings</a></li>
                                                    <li><a href="Pendants.php">Pendant</a></li>
                                                    <li><a href="Rings.php">Ring</a></li>
                                                    <li><a href="Bracelet.php">Bracelet</a></li>
                                                    <li><a href="Necklace.php">Necklace Set</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">About Us</a></li>
                                            <li>
                                                <a href="#">Special Collection <i class="ion-chevron-down"></i></a>
                                                <ul class="sub_menu pages">
                                                    <li><a href="Gemstone.php">Gemstone</a></li>
                                                    <li><a href="gold.php">Gold</a></li>
                                                    <li><a href="RoseGold.php">Rose Gold</a></li>
                                                    <li><a href="Silver.php">Silver</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header bottom ends -->
        </header>

        <!-- slider section starts -->
        <div class="slider_area slider_black owl-carousel">
            <div class="single_slider" data-bgimg="img/1.png">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="slider_content">
                                <p>exclusive offer -20% off this week</p>
                                <h1>Necklace</h1>
                                <span>22 Carat gold necklace for wedding</span>
                                <p class="slider_price">starting at <span>Rs. 75,999</span></p>
                                <a href="#" class="button">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="single_slider" data-bgimg="img/4.jpg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="slider_content">
                                <p>exclusive offer -40% off this week</p>
                                <h1>Earings and Pendant</h1>
                                <span>Complete bridal set with white pearls</span>
                                <p class="slider_price">starting at <span>Rs. 89,499</span></p>
                                <a href="#" class="button">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="single_slider" data-bgimg="img/3.jpg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="slider_content">
                                <p>exclusive offer -10% off this week</p>
                                <h1>Wedding Rings</h1>
                                <span>Ashirwaad Special wedding rings for couples.</span>
                                <p class="slider_price">starting at <span>Rs. 14,999</span></p>
                                <a href="#" class="button">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- slider section ends -->
        <!-- banner section starts -->
        <section class="banner_section  banner_black" id="Banner" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="#"><img src="img/bg-1.jpg" alt="banner1"></a>
                                <div class="banner_content">
                                    <p>New Design</p>
                                    <h2>Small design Rings</h2>
                                    <span>Sale 20% </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="#"><img src="img/bg-2.jpg" alt="banner2"></a>
                                <div class="banner_content">
                                    <p>Bestselling Rings</p>
                                    <h2>White gold rings</h2>
                                    <span>Sale 10% </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="#"><img src="img/bg-3.jpg" alt="banner3"></a>
                                <div class="banner_content">
                                    <p>Featured Rings</p>
                                    <h2>Platinium Rings</h2>
                                    <span>Sale 30% </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner section ends -->
        <!-- product section area starts  -->

        <?php include ("product.php");?>  
              

        <!-- product section area sends -->

        <!-- banner full width start -->
        <section class="banner_fullwidth black_fullwidth">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="banner_text">
                            <p>Sale Off 20% All Products</p>
                            <h2>New Trending Collection</h2>
                            <span>Best Design makes you more special.</span>
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner full width end -->

        <!-- product section area starts  -->
 
        <!-- product section area ends  -->
        <!-- blog section starts -->
        <section class="blog_section blog_black" id="Blog">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title">
                            <h2>Ashirwaad Updates</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="blog_wrapper blog_column3 owl-carousel">
                        <div class="col-lg-4">
                            <div class="single_blog">
                                <div class="blog_thumb">
                                    <a href="#"><img src="img/blog/4.jpg" alt="blog 4"></a>
                                </div>
                                <div class="blog_content">
                                    <h3><a href="#">Earrings for Navratri</a></h3>
                                    <div class="author_name">
                                        <p>
                                            <span>by</span>
                                            <span class="themes">Ashirwaad</span>
                                            <span class="post_by">/ 4 November 2020</span>
                                        </p>
                                    </div>

                                    <div class="post_desc">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt fugit commodi
                                            quo eligendi laudantium quisquam, magnam hic numquam fuga illum sed aperiam
                                            sint, expedita dolor.</p>
                                    </div>
                                    <div class="read_more">
                                        <a href="#">Continue Reading</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single_blog">
                                <div class="blog_thumb">
                                    <a href="#"><img src="img/blog/1.jpg" alt="blog 1"></a>
                                </div>
                                <div class="blog_content">
                                    <h3><a href="#">Pendant for engagement</a></h3>
                                    <div class="author_name">
                                        <p>
                                            <span>by</span>
                                            <span class="themes">Ashirwaad</span>
                                            <span class="post_by">/ 3 November 2020</span>
                                        </p>
                                    </div>

                                    <div class="post_desc">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt fugit commodi
                                            quo eligendi laudantium quisquam, magnam hic numquam fuga illum sed aperiam
                                            sint, expedita dolor.</p>
                                    </div>
                                    <div class="read_more">
                                        <a href="#">Continue Reading</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single_blog">
                                <div class="blog_thumb">
                                    <a href="#"><img src="img/blog/2.jpg" alt="blog 2"></a>
                                </div>
                                <div class="blog_content">
                                    <h3><a href="#">Engagement Couple Rings</a></h3>
                                    <div class="author_name">
                                        <p>
                                            <span>by</span>
                                            <span class="themes">Ashirwaad</span>
                                            <span class="post_by">/ 2 November 2020</span>
                                        </p>
                                    </div>

                                    <div class="post_desc">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt fugit commodi
                                            quo eligendi laudantium quisquam, magnam hic numquam fuga illum sed aperiam
                                            sint, expedita dolor.</p>
                                    </div>
                                    <div class="read_more">
                                        <a href="#">Continue Reading</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single_blog">
                                <div class="blog_thumb">
                                    <a href="#"><img src="img/blog/3.jpg" alt="blog 3"></a>
                                </div>
                                <div class="blog_content">
                                    <h3><a href="#">Earrings for Party</a></h3>
                                    <div class="author_name">
                                        <p>
                                            <span>by</span>
                                            <span class="themes">Ashirwaad</span>
                                            <span class="post_by">/ 5 November 2020</span>
                                        </p>
                                    </div>

                                    <div class="post_desc">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt fugit commodi
                                            quo eligendi laudantium quisquam, magnam hic numquam fuga illum sed aperiam
                                            sint, expedita dolor.</p>
                                    </div>
                                    <div class="read_more">
                                        <a href="#">Continue Reading</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog section ends -->

        <!-- instagram section starts -->
        <div class="instagram">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                        <div class="instagram__item set-bg" data-bgimg="img/insta/insta-1.jpg">
                            <div class="instagram__text">
                                <i class="ion-social-instagram"></i>
                                <a href="#">@ Ashirwaad</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                        <div class="instagram__item set-bg" data-bgimg="img/insta/insta-2.jpg">
                            <div class="instagram__text">
                                <i class="ion-social-instagram"></i>
                                <a href="#">@ Ashirwaad</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                        <div class="instagram__item set-bg" data-bgimg="img/insta/insta-3.jpg">
                            <div class="instagram__text">
                                <i class="ion-social-instagram"></i>
                                <a href="#">@ Ashirwaad</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                        <div class="instagram__item set-bg" data-bgimg="img/insta/insta-4.jpg">
                            <div class="instagram__text">
                                <i class="ion-social-instagram"></i>
                                <a href="#">@ Ashirwaad</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                        <div class="instagram__item set-bg" data-bgimg="img/insta/insta-5.jpg">
                            <div class="instagram__text">
                                <i class="ion-social-instagram"></i>
                                <a href="#">@ Ashirwaad</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                        <div class="instagram__item set-bg" data-bgimg="img/insta/insta-6.jpg">
                            <div class="instagram__text">
                                <i class="ion-social-instagram"></i>
                                <a href="#">@ Ashirwaad</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- instagram section  ends-->

        <!-- subscribe section starts -->
        <div class="newsletter_area newsletter_black">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="newsletter_content">
                            <h2>Subscribe for Ashirwaad Magazines</h2>
                            <p>Get E-mail of all the updates about our lastest and special offers</p>
                            <div class="subscibe_form">
                                <form class="footer-newsletter">
                                    <input type="email" placeholder="Email address ..." autocapitalize="off"
                                        autocomplete="off">
                                    <button>Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- subscribe section ends -->
        <!-- banner area starts  -->
        <section class="banner_section banner_section_five">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-12">
                        <div class="port-box">
                            <div class="text-overlay">
                                <h1>New Arrivals 2024</h1>
                                <p>Crown for wife</p>
                            </div>
                            <img src="img/1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="port-box">
                            <div class="text-overlay">
                                <h1>Featured Products 2024</h1>
                                <p>Pendant for Valentine</p>
                            </div>
                            <img src="img/2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner area ends -->

        <!-- footer section starts -->
        <footer class="footer_widgets footer_black">
            <div class="container">
                <div class="footer_top">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="widgets_container contact_us">
                                <h3>About Krishna</h3>
                                <div class="footer_contact">
                                    <p>Address : Krishanjewlers,Mavdi, Rajkot, Gujarat</p>
                                    <p>Phone : <a href="tel:(+91)9157433685">(+91)9157433685</a></p>
                                    <p>Email : Krishanjewlers@gmail.com</p>
                                    <ul>
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                        <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-4 col-6">
                            <div class="widgets_container widget_menu">
                                <h3>Information</h3>
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Collection</a></li>
                                        <li><a href="#">Portfolio</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-5 col-6">
                            <div class="widgets_container widget_menu">
                                <h3>My Account</h3>
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">Contact</a></li>
                                        <li><a href="#">Wishlist</a></li>
                                        <li><a href="#">Portfolio</a></li>
                                        <li><a href="#">Checkout</a></li>
                                        <li><a href="#">Frequently Questions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-7">
                            <div class="widgets_container product_widget">
                                <h3>Top Rated Products</h3>
                                <div class="simple_product">
                                    <div class="simple_product_items">
                                        <div class="simple_product_thumb">
                                            <a href="#"><img src="img/product/14.jpg" alt=""></a>
                                        </div>
                                        <div class="simple_product_content">
                                            <div class="tag_cate">
                                                <a href="#">Women,</a>
                                                <a href="#">Earrings</a>
                                            </div>
                                            <div class="product_name">
                                                <h3><a href="#">Bracelet</a></h3>
                                            </div>
                                            <div class="product_price">
                                                <span class="old_price">Rs. 45612.54</span>
                                                <span class="current_price">Rs. 41612.54</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simple_product_items">
                                        <div class="simple_product_thumb">
                                            <a href="#"><img src="img/product/28.jpg" alt=""></a>
                                        </div>
                                        <div class="simple_product_content">
                                            <div class="tag_cate">
                                                <a href="#">Women,</a>
                                                <a href="#">Earrings</a>
                                            </div>
                                            <div class="product_name">
                                                <h3><a href="#">Ring</a></h3>
                                            </div>
                                            <div class="product_price">
                                                <span class="old_price">Rs. 75612.54</span>
                                                <span class="current_price">Rs. 71612.54</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_bottom">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright_area">
                                <p>Copyright &copy; 2020 <a href="#">Krishna</a> All rights Reserved.</p>
                                <img src="img/papyel2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </footer>
        <!-- footer section ends -->
    </div>

    <!-- modal section starts -->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="img/product/70.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="img/product/71.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="img/product/72.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="img/product/73.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li>
                                                <a href="#tab1" class="nav-link active" data-toggle="tab" role="tab"
                                                    aria-controls="tab1" aria-selected="false"><img
                                                        src="img/product/70.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a href="#tab2" class="nav-link" data-toggle="tab" role="tab"
                                                    aria-controls="tab2" aria-selected="false"><img
                                                        src="img/product/71.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a href="#tab3" class="nav-link button_three" data-toggle="tab"
                                                    role="tab" aria-controls="tab3" aria-selected="false"><img
                                                        src="img/product/72.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a href="#tab4" class="nav-link" data-toggle="tab" role="tab"
                                                    aria-controls="tab4" aria-selected="false"><img
                                                        src="img/product/73.jpg" alt=""></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Women's Necklace</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">Rs. 51164</span>
                                        <span class="old_price">Rs. 54164</span>
                                    </div>
                                    <div class="see_all">
                                        <a href="#">See All Features</a>
                                    </div>
                                    <div class="modal_add_to_cart mb-15">
                                        <form action="#">
                                            <input type="number" min="0" max="100" step="1">
                                            <button type="submit">Add To Cart</button>
                                        </form>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus quibusdam
                                            nisi voluptas consequatur tempora, recusandae nemo blanditiis eaque odit
                                            voluptatibus voluptatem, ipsa incidunt fugiat a.</p>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this Product</h2>
                                        <ul>
                                            <li><a href="#">< class="ion-social-facebook"></i></a></li>
                                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                            <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                            <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal section ends -->







    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- JavaScript Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script src="main.js"></script>
</body>

</html>