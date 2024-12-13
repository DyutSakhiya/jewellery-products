<?php

// Connect to the database (assuming $conn is your connection variable)
require_once 'component.php';

// SQL query for Featured products
$sql_Silver = "SELECT * from cart as c inner join products as p on p.id = c.fk_product_id";
$cart_product = $conn->query($sql_Silver);

// Initialize total sum
$total_sum = 0;

if (isset($_POST['add_to_cart'])) { 
    $product_id = $_POST['product_id']; // Get the product ID from the form
    $quantity = 1; // You can modify this to allow for user input if needed

    // Insert query to add product to the cart
    $insert_dta = "INSERT INTO cart (fk_product_id, quantity) VALUES ('$product_id', '$quantity')";

    if ($conn->query($insert_dta) === TRUE) {
    
    } else {
        echo "Error: " . $insert_dta . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silver</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">

    <link rel="stylesheet" href="Rings.css">
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
                                            <li><a href="login.html">My Account</a></li>
                                            <li><a href="#">Shopping Cart</a></li>
                                            <li><a href="#">Wishlist</a></li>
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
                                    <a href="index.html"><i class="ion-ios-search-strong"></i></a>
                                    <div class="dropdown_search">
                                        <form action="index.html">
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
                                     <div class="mini_cart">
                                      <div class="cart_close">
                                         <div class="cart_text">
                                           <h3>Cart</h3>
                                              </div>
                                         <div class="mini_cart_close">
                                          <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                                             </div>
                                                 </div>
        
                                       <?php while ($row = mysqli_fetch_assoc($cart_product)) { 
                                            // Calculate total for each product and add to total sum
                                                $product_total = $row['price'] * $row['quantity'];
                                                $total_sum += $product_total;
                                                    ?>
                                               <div class="cart_item">
                                              <div class="cart_img">
                                                   <img src="<?php echo $row['image']; ?>" alt="product1">
                                               </div>
                                                 <div class="cart_info">
                                                  <a href="#"><?php echo $row['name']; ?></a>
                                                    <span class="quantity">Qty : <?php echo $row['quantity']; ?></span>
                                                   <span class="price_cart">Rs. <?php echo number_format($product_total, 2); ?></span>
                                                   </div>
                                                     <div class="cart_remove">
                                                    <a href="#"><i class="ion-android-close"></i></a>
                                            </div>
                                                   </div> 
                                              <?php } ?>
                                            
                                              <div class="cart_total">
                                           <span>Subtotal : </span>
                                               <span>Rs. <?php echo number_format($total_sum, 2); ?></span>
                                        </div>
              
                                             <div class="mini_cart_footer">
                                               <div class="cart_button view_cart">
                                                    <a href="#">View Cart</a>
                                                      </div>
                                             <div class="cart_button checkout">
                                                 <a href="#" class="active">Checkout</a>
                                        </div>
                                         </div>
                                     </div>
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
                                                            <li><a href="WomenPendants.php">Pendant</a></li>
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
                                                            <li><a href="Giftcart.php">Gift Card</a></li>
                                                        </ul>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Uncut Diamonds <i class="ion-chevron-down"></i></a>
                                                <ul class="sub_menu pages">
                                                    <li><a href="Earring.php">Earrings</a></li>
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
             <!-- slider section ends -->
        <!-- banner section starts -->
        

         <!-- banner section ends -->
         <!-- product section area starts  -->

         <section class="product_section p_section1 product_black_section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product_area">
                            <div class="product_tab_button">
                                <ul class="nav" role="tablist">
                                    <li>
                                        <a href="#featured" class="active" data-toggle="tab" role="tab"
                                        aria-controls="featured" aria-selected="true">Silver</a>
                                    </li>
                                    <li>
                                    </ul>
                            </div>
                            <?php
// Connect to the database (assuming $conn is your connection variable)
require_once 'component.php';

// SQL query for On-Sale products
$sql_Silver = "SELECT * from products as p inner join map_products_category as mpc on mpc.fk_product_id = p.id inner join category as c on c.id = mpc.fk_category_id WHERE c.name = 'silver';
";
$Silver_products = $conn->query($sql_Silver);

?>

<section class="product_section p_section1 product_black_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product_area">
                    <div class="product_tab_button">
                        <ul class="nav" role="tablist">
                            <li>
                                <a href="Platinum" data-toggle="tab" role="tab" aria-controls="silver"
                                   aria-selected="false"></a>
                            </li>
                        </ul>
                    </div>
                    
                        <div class="tab-content ">
                        <!-- Featured Products -->
                        <div class="tab-pane fade show active" id="Silver" role="tabpanel">
                            <div class="product_container">
                            <div class="card">
                                <div class="row">
                                    <?php while ($row = mysqli_fetch_assoc($Silver_products)) { ?>
                                        <div class="col-md-3 col-sm-6 mb-4">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a href="#" class="primary_img">
                                                        <img src="<?php echo $row['image']; ?>" alt="product1">
                                                    </a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Ring, Necklace</a>
                                                        <a href="#">Earrings</a>
                                                    </div>
                                                    <h4><a href="#"><?php echo $row['name']; ?></a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price"><?php echo $row["price"] ?></span>
                                                        <span class="current_price"><?php echo $row["price"] ?></span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                        <form  method="post">
                                                        <input type="hidden" name="product_id" value="<?php echo $row["fk_product_id"]; ?>">
                                                          <button type="submit" name="add_to_cart">Add to Cart</button>
                                                           </form>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>                 

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

                                 
                        

                              <!-- footer section starts -->
        <footer class="footer_widgets footer_black">
            <div class="container">
                <div class="footer_top">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="widgets_container contact_us">
                                <h3>About Ashirwaad</h3>
                                <div class="footer_contact">
                                    <p>Address : Ashirwaad palace, Surat, Gujarat</p>
                                    <p>Phone : <a href="tel:(+91)9157433685">(+91)9157433685</a></p>
                                    <p>Email : ashirwaadjewlers@gmail.com</p>
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
                                            <a href="#"><img src="img/Silver/Silver3.jpg" alt="Silver"></a>
                                        </div>
                                        <div class="simple_product_content">
                                            <div class="tag_cate">
                                                <a href="#">Silver</a>
                                                <a href="#">Silver</a>
                                            </div>
                                            <div class="product_name">
                                                <h3><a href="#">Silver</a></h3>
                                            </div>
                                            <div class="product_price">
                                                <span class="old_price">Rs. 45612.54</span>
                                                <span class="current_price">Rs. 41612.54</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simple_product_items">
                                        <div class="simple_product_thumb">
                                            <a href="#"><img src="img/Silver/Silver7.jpg" alt="Silver"></a>
                                        </div>
                                        <div class="simple_product_content">
                                            <div class="tag_cate">
                                                <a href="#">Silver,</a>
                                                <a href="#">Silver</a>
                                            </div>
                                            <div class="product_name">
                                                <h3><a href="#">Silver</a></h3>
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
                        <div class="footer_payment">
                            <div class="copyright_area">
                                <p>Copyright &copy; 2020 <a href="#">ashirwaad</a> All rights Reserved.</p>
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
                                                <a href="#"><img src="img/Silver/Silver2.jpg" alt="Silver"></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="img/Silver/Silver3.jpg" alt="Silver"></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="img/Silver/Silver7.jpg" alt="Silver"></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="img/Silver/Silver6.jpg" alt="Silver"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li>
                                                <a href="#tab1" class="nav-link active" data-toggle="tab" role="tab"
                                                    aria-controls="tab1" aria-selected="false"><img
                                                        src="img/Silver/Silver2.jpg" alt="Silver"></a>
                                            </li>
                                            <li>
                                                <a href="#tab2" class="nav-link" data-toggle="tab" role="tab"
                                                    aria-controls="tab2" aria-selected="false"><img
                                                        src="img/Silver/Silver3.jpg" alt="Silver"></a>
                                            </li>
                                            <li>
                                                <a href="#tab3" class="nav-link button_three" data-toggle="tab"
                                                    role="tab" aria-controls="tab3" aria-selected="false"><img
                                                        src="img/Silver/Silver7.jpg" alt="Silver"></a>
                                            </li>
                                            <li>
                                                <a href="#tab4" class="nav-link" data-toggle="tab" role="tab"
                                                    aria-controls="tab4" aria-selected="false"><img
                                                        src="img/Silver/Silver6.jpg" alt="Silver"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Man's Silver</h2>
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
                                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
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
   
                        

                                
                                      







        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <!-- JavaScript Bundle with Popper.js -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    
        <script src="main.js"></script>
    </body>
    
    </html>