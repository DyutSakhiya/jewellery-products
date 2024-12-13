<?php

// Connect to the database (assuming $conn is your connection variable)
require_once 'component.php';

// SQL query to retrieve products in the cart
$sql_cart_products = "SELECT p.*, c.quantity FROM cart AS c INNER JOIN products AS p ON p.id = c.fk_product_id";
$cart_product = $conn->query($sql_cart_products);

// Initialize total sum
$total_sum = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
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
</body>
</html>
