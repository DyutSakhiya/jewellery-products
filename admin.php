<?php
include 'component.php';

// Handle Add Product
if (isset($_POST['add_product'])) {
    $product_name = $_POST['product-name'];
    $product_price = $_POST['product-price'];

    // Handle image upload
    if (isset($_FILES['product-image']) && $_FILES['product-image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'img/product/'; // Directory for uploaded images
        
        $image_tmp_name = $_FILES['product-image']['tmp_name']; // Temp file name
        $image_name = basename($_FILES['product-image']['name']); // Original file name
        $image_folder = $uploadDir . $image_name; // Full path where image will be saved

        // Move uploaded image to the target directory
        if (move_uploaded_file($image_tmp_name, $image_folder)) {
            echo "Image uploaded successfully!";
        } else {
            echo "Failed to upload image. Check the permissions and folder path.";
        }

        // Insert the product into the database with the image
        $insert_query = "INSERT INTO products (name, price, image, is_featured)  VALUES ('$product_name' , '$product_price', '$image_name', true)";
        
        if ($conn->query($insert_query) === TRUE) {
            echo "<p>New product added successfully!</p>";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "<p>Failed to upload image.</p>";
    }
}

// Handle Edit Product
if (isset($_GET['action']) && $_GET['action'] == 'edit' && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch product details
    $fetch_product_query = "SELECT * FROM products WHERE id=$id";
    $product_result = $conn->query($fetch_product_query);
    if ($product_result && $product_result->num_rows > 0) {
        $product = $product_result->fetch_assoc();
    } else {
        echo "<p>Product not found!</p>";
    }

    // Handle form submission for product edit
    if (isset($_POST['update_product'])) {
        $product_name = $_POST['product-name'];
        $product_price = $_POST['product-description'];
        $product_price = $_POST['product-price'];
        $image_name = $product['image']; // Use existing image by default

        // Handle image upload
        if (isset($_FILES['product-image']) && $_FILES['product-image']['error'] === UPLOAD_ERR_OK) {
            $uploadDir = 'img/product/';
            $image_tmp_name = $_FILES['product-image']['tmp_name'];
            $image_name = basename($_FILES['product-image']['name']);
            $image_folder = $uploadDir . $image_name;

            // Move new image and remove old one
            if (move_uploaded_file($image_tmp_name, $image_folder)) {
                $old_image = $uploadDir . $product['image'];
                if (file_exists($old_image)) {
                    unlink($old_image); // Delete old image
                }
            } else {
                echo "Failed to upload image.";
            }
        }

        // Update product in database
        $update_query = "UPDATE products SET name='$product_name', price='$product_price', image='$image_name' WHERE id=$id";
        if ($conn->query($update_query) === TRUE) {
            echo "<p>Product updated successfully!</p>";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

// Handle Delete Product
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];
    // Fetch the product image to delete from the folder
    $fetch_image_query = "SELECT image FROM products WHERE id=$id";
    $image_result = $conn->query($fetch_image_query);
    if ($image_result && $row = $image_result->fetch_assoc()) {
        $image_to_delete = 'img/product/' . $row['image'];
        if (file_exists($image_to_delete)) {
            unlink($image_to_delete); // Delete the image file from the server
        }
    }
    // Delete product from the database
    $delete_query = "DELETE FROM products WHERE id=$id";
    if ($conn->query($delete_query) === TRUE) {
        echo "<p>Product deleted successfully!</p>";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Fetch All Products
$sql = "SELECT * FROM products"; // Query to fetch all products
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="admin-container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Admin Panel</h2>
            </div>
            <nav class="sidebar-nav">
                <ul>
                    <li><a href="#"><i class='bx bxs-dashboard'></i> Dashboard</a></li>
                    <li><a href="#"><i class='bx bxs-user'></i> Users</a></li>
                    <li><a href="index.php"><i class='bx bxs-cart'></i> Products</a></li>
                    <li><a href="admin1.php"><i class='bx bxs-log-out'></i> Logout</a></li>
                </ul>
            </nav>
        </aside>
        <main class="main-content">
            <header class="header">
                <h1>Welcome, Admin!</h1>
            </header>
            <section class="content">
                <div class="dashboard">
                    <div class="card">
                        <h3>Users</h3>
                        <p>100</p>
                    </div>
                    <div class="card">
                        <h3>Reports</h3>
                        <p>20</p>
                    </div>
                    <div class="card">
                        <h3>Settings</h3>
                        <p>5</p>
                    </div>
                </div>

                <!-- Add Product Section -->
                <div class="add-product">
                    <h2><?php echo isset($id) ? 'Edit Product' : 'Add New Product'; ?></h2>
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="product-name">Product Name:</label>
                            <input type="text" id="product-name" name="product-name" value="<?php echo isset($product) ? $product['name'] : ''; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="product-description">Product Description:</label>
                            <textarea id="product-description" name="product-description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="product-price">Price:</label>
                            <input type="number" id="product-price" name="product-price" value="<?php echo isset($product) ? $product['price'] : ''; ?>" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="product-image">Product Image:</label>
                            <input type="file" id="product-image" name="product-image">
                            <?php if (isset($product)) { ?>
                                <img src="img/product/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" width="100">
                            <?php } ?>
                        </div>
                        <button type="submit" class="btn" name="<?php echo isset($id) ? 'update_product' : 'add_product'; ?>">
                            <?php echo isset($id) ? 'Update Product' : 'Add Product'; ?>
                        </button>
                    </form>
                </div>

                <!-- Products List -->
                <div class="products">
                    <h2>Products</h2>
                    <?php
                    if ($result->num_rows > 0) {
                        echo "<div class='product-list'>";
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<div class='product-card'>
                                    <img src='" . $row['image'] . "' alt='" . $row['name'] . "'>
                                    <div class='product-info'>
                                        <h3>" . $row['name'] . "</h3>
                                        <p class='price'>Rs." . $row['price'] . "</p>
                                        <a href='?action=edit&id=" . $row['id'] . "'><button class='btn'>Edit</button></a>
                                        <a href='?action=delete&id=" . $row['id'] . "' onclick=\"return confirm('Are you sure you want to delete this product?');\"><button class='btn btn-delete'>Delete</button></a>
                                    </div>
                                </div>";
                        }
                        echo "</div>";
                    } else {
                        echo "<p>No products found</p>";
                    }
                    ?>
                </div>
            </section>
        </main>
    </div>
</body>
</html>

<?php
$conn->close();
?>
