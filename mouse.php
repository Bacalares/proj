<?php  
$pageTitle = "Mice - Custom PC Creations"; // Page title for the mouse category
include 'header.php'; // Include header file for the navigation and styles
?>

<link rel="stylesheet" href="projstyle.css?v=2"> <!-- Link to your project stylesheet -->
<script src="projs.js"></script> <!-- Link to your JavaScript file -->

<!-- Mouse Products Section -->
<section class="product-section">
    <div class="section-header">
        <!-- Back Button -->
        <a href="index.php" class="btn-back"><span>&#8592;</span> Back</a>
        <h2>Mice</h2>
    </div>

    <div class="product-grid">
        <!-- Logitech G Pro X Superlight -->
        <div class="product">
            <img src="logitech-g-pro-x-superlight.jpg" alt="Logitech G Pro X Superlight Mouse">
            <h3>Logitech G Pro X Superlight</h3>
            <p>Wireless, Ultra-Lightweight, HERO Sensor, 25,000 DPI</p>
            <p class="price">$149.99</p>
            <button class="btn-primary" onclick="addToCart('Logitech G Pro X Superlight', 149.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('Logitech G Pro X Superlight', 149.99)">Buy Now</button>
        </div>

        <!-- Razer DeathAdder V3 Pro -->
        <div class="product">
            <img src="razer-deathadder-v3-pro.jpg" alt="Razer DeathAdder V3 Pro Mouse">
            <h3>Razer DeathAdder V3 Pro</h3>
            <p>Ergonomic Design, Wireless, Focus Pro 30K Optical Sensor</p>
            <p class="price">$139.99</p>
            <button class="btn-primary" onclick="addToCart('Razer DeathAdder V3 Pro', 139.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('Razer DeathAdder V3 Pro', 139.99)">Buy Now</button>
        </div>

        <!-- SteelSeries Rival 600 -->
        <div class="product">
            <img src="steelseries-rival-600.jpg" alt="SteelSeries Rival 600 Mouse">
            <h3>SteelSeries Rival 600</h3>
            <p>Dual Optical Sensors, Customizable Weight System, 12,000 CPI</p>
            <p class="price">$79.99</p>
            <button class="btn-primary" onclick="addToCart('SteelSeries Rival 600', 79.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('SteelSeries Rival 600', 79.99)">Buy Now</button>
        </div>
    </div>
</section>

<?php include 'footer.php'; // Include the footer ?>

<script>
    // JavaScript function to add items to the cart
    function addToCart(product, price) {
        alert(product + " has been added to your cart. Price: $" + price);
        // Optionally, you can store the item in localStorage or use AJAX to update a shopping cart system.
    }

    // JavaScript function for the 'Buy Now' functionality
    function buyNow(product, price) {
        alert("Proceeding to checkout for: " + product + " with price $" + price);
        // Redirect to the checkout page, you can integrate with a payment system or cart.
        window.location.href = "checkout.php";
    }
</script>

<?php
// Your existing footer code
?>
    