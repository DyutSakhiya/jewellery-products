<?php
// Connect to the database (assuming $conn is your connection variable)
require_once 'component.php';

// SQL query for Featured products
$sql_featured = "SELECT * FROM products WHERE is_featured = true";
$featured_products = $conn->query($sql_featured);

// SQL query for New Arrivals products
$sql_arrivals = "SELECT * FROM products WHERE is_arrival = true";
$new_arrivals = $conn->query($sql_arrivals);

// SQL query for On-Sale products
$sql_onsale = "SELECT * FROM products WHERE is_onsale = true";
$on_sale_products = $conn->query($sql_onsale);


// Handling Add to Cart functionality
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

<section class="product_section p_section1 product_black_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product_area">
                    <div class="product_tab_button">
                        <ul class="nav" role="tablist">
                            <li>
                                <a href="#featured" class="active" data-toggle="tab" role="tab"
                                   aria-controls="featured" aria-selected="true">Featured</a>
                            </li>
                            <li>
                                <a href="#arrivals" data-toggle="tab" role="tab" aria-controls="arrivals"
                                   aria-selected="false">New Arrivals</a>
                            </li>
                            <li>
                                <a href="#onsale" data-toggle="tab" role="tab" aria-controls="onsale"
                                   aria-selected="false">On-Sale</a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content flex-wrap">
                        <!-- Featured Products -->
                        <div class="tab-pane fade show active" id="featured" role="tabpanel">
                            <div class="product_container">
                                <div class="row">
                                    <?php while ($row = mysqli_fetch_assoc($featured_products)) { ?>
                                        <div class="col-md-3 col-sm-6 mb-4">
                                           <form method="POST">
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
                                                    <h3><a href="#"><?php echo $row['name']; ?></a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price"><?php echo $row["price"] ?></span>
                                                        <span class="current_price"><?php echo $row["price"] ?></span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart">
                                                                <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                                                                <button type="submit" name="add_to_cart" value="add_to_cart">Add to Cart</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                           </form>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!-- New Arrivals -->
                        <div class="tab-pane fade show active" id="arrivals" role="tabpanel">
                            <div class="product_container">
                                <div class="row">
                                    <?php while ($row = mysqli_fetch_assoc($new_arrivals)) { ?>
                                        <div class="col-md-3 col-sm-6 mb-4">
                                           <form method="POST">
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
                                                    <h3><a href="#"><?php echo $row['name']; ?></a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price"><?php echo $row["price"] ?></span>
                                                        <span class="current_price"><?php echo $row["price"] ?></span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart">
                                                                <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                                                                <button type="submit" name="add_to_cart" value="add_to_cart">Add to Cart</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                           </form>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div> 
                        
                        <!-- On-Sale Products -->  
                        <div class="tab-pane fade show active" id="onsale" role="tabpanel">
                            <div class="product_container">
                                <div class="row">
                                    <?php while ($row = mysqli_fetch_assoc($on_sale_products)) { ?>
                                        <div class="col-md-3 col-sm-6 mb-4">
                                           <form method="POST">
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
                                                    <h3><a href="#"><?php echo $row['name']; ?></a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price"><?php echo $row["price"] ?></span>
                                                        <span class="current_price"><?php echo $row["price"] ?></span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart">
                                                                <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                                                                <button type="submit" name="add_to_cart" value="add_to_cart">Add to Cart</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                           </form>
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
</section>
