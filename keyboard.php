<?php  
$pageTitle = "Keyboards - Custom PC Creations"; // Page title for the keyboard category
include 'header.php'; // Include header file for the navigation and styles

// Start the session to handle cart
session_start();

// Initialize the cart if not already set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Handle adding products to the cart
if (isset($_POST['action']) && $_POST['action'] == 'add_to_cart') {
    $product = $_POST['product'];  // Product name
    $price = $_POST['price'];      // Product price

    // Add product to the cart session
    $_SESSION['cart'][] = array('product' => $product, 'price' => $price);

   
}

// Handle Buy Now button action
if (isset($_POST['action']) && $_POST['action'] == 'buy_now') {
    $product = $_POST['product'];  // Product name
    $price = $_POST['price'];      // Product price

    // Add product to the cart session (same as add_to_cart)
    $_SESSION['cart'][] = array('product' => $product, 'price' => $price);

    // Redirect to checkout page
    header('Location: checkout.php');
    exit();
}
?>
<link rel="stylesheet" href="projstyle.css?v=2">
<link rel="stylesheet" href="productcss.css?v=2"> <!-- Link to your project stylesheet -->
<script src="projs.js"></script> <!-- Link to your JavaScript file -->

<!-- Keyboard Products Section -->
<section class="product-section">
    <div class="section-header">
        <!-- Back Button -->
        <a href="index.php" class="btn-back"><span>&#8592;</span> Back</a>
        <h2>Keyboards</h2>
    </div>

    <?php if (isset($message)) { echo "<p class='success'>$message</p>"; } ?>

    <div class="product-grid">
        <!-- Razer BlackWidow V4 Pro -->
        <div class="product">
            <img src="razer-blackwidow-v4-pro.jpg" alt="Razer BlackWidow V4 Pro Keyboard">
            <h3>Razer BlackWidow V4 Pro</h3>
            <p>Mechanical, RGB Lighting, USB-C, Programmable Keys</p>
            <p class="price">$229.99</p>
            <!-- Buttons Container -->
            <div class="product-buttons">
                <!-- Add to Cart Button (Form-based) -->
                <form method="POST" action="">
                    <input type="hidden" name="product" value="Razer BlackWidow V4 Pro">
                    <input type="hidden" name="price" value="229.99">
                    <input type="hidden" name="action" value="add_to_cart">
                    <button type="submit" class="btn-primary">Add to Cart</button>
                </form>
                <!-- Buy Now Button (Form-based) -->
                <form method="POST" action="">
                    <input type="hidden" name="product" value="Razer BlackWidow V4 Pro">
                    <input type="hidden" name="price" value="229.99">
                    <input type="hidden" name="action" value="buy_now">
                    <button type="submit" class="btn-buy-now">Buy Now</button>
                </form>
            </div>
        </div>

        <!-- Corsair K95 RGB Platinum XT -->
        <div class="product">
            <img src="corsair-k95-rgb-platinum-xt.jpg" alt="Corsair K95 RGB Platinum XT Keyboard">
            <h3>Corsair K95 RGB Platinum XT</h3>
            <p>Mechanical, Cherry MX, PBT Keycaps, RGB</p>
            <p class="price">$199.99</p>
            <!-- Buttons Container -->
            <div class="product-buttons">
                <!-- Add to Cart Button (Form-based) -->
                <form method="POST" action="">
                    <input type="hidden" name="product" value="Corsair K95 RGB Platinum XT">
                    <input type="hidden" name="price" value="199.99">
                    <input type="hidden" name="action" value="add_to_cart">
                    <button type="submit" class="btn-primary">Add to Cart</button>
                </form>
                <!-- Buy Now Button (Form-based) -->
                <form method="POST" action="">
                    <input type="hidden" name="product" value="Corsair K95 RGB Platinum XT">
                    <input type="hidden" name="price" value="199.99">
                    <input type="hidden" name="action" value="buy_now">
                    <button type="submit" class="btn-buy-now">Buy Now</button>
                </form>
            </div>
        </div>

        <!-- Logitech MX Keys Advanced Wireless -->
        <div class="product">
            <img src="logitech-mx-keys-advanced.jpg" alt="Logitech MX Keys Advanced Wireless Keyboard">
            <h3>Logitech MX Keys Advanced</h3>
            <p>Wireless, Backlit, Bluetooth, Multi-Device Support</p>
            <p class="price">$119.99</p>
            <!-- Buttons Container -->
            <div class="product-buttons">
                <!-- Add to Cart Button (Form-based) -->
                <form method="POST" action="">
                    <input type="hidden" name="product" value="Logitech MX Keys Advanced">
                    <input type="hidden" name="price" value="119.99">
                    <input type="hidden" name="action" value="add_to_cart">
                    <button type="submit" class="btn-primary">Add to Cart</button>
                </form>
                <!-- Buy Now Button (Form-based) -->
                <form method="POST" action="">
                    <input type="hidden" name="product" value="Logitech MX Keys Advanced">
                    <input type="hidden" name="price" value="119.99">
                    <input type="hidden" name="action" value="buy_now">
                    <button type="submit" class="btn-buy-now">Buy Now</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; // Include the footer ?>

<script>
    // JavaScript function for the 'Buy Now' functionality
    function buyNow(product, price) {
        alert("Proceeding to checkout for: " + product + " with price $" + price);
        window.location.href = "checkout.php";
    }
</script>

<?php
// Your existing footer code
?>
