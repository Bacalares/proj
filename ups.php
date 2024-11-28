<?php  
$pageTitle = "UPS - Custom PC Creations"; // Page title for the UPS category
include 'header.php'; // Include header file for the navigation and styles
?>

<link rel="stylesheet" href="projstyle.css?v=2"> <!-- Link to your project stylesheet -->
<script src="projs.js"></script> <!-- Link to your JavaScript file -->

<!-- UPS Products Section -->
<section class="product-section">
    <div class="section-header">
        <!-- Back Button -->
        <a href="index.php" class="btn-back"><span>&#8592;</span> Back</a>
        <h2>UPS</h2>
    </div>

    <div class="product-grid">
        <!-- APC Back-UPS Pro 1500 -->
        <div class="product">
            <img src="apc-back-ups-pro-1500.jpg" alt="APC Back-UPS Pro 1500">
            <h3>APC Back-UPS Pro 1500</h3>
            <p>1500VA/865W, LCD Display, AVR, 10 Outlets</p>
            <p class="price">$249.99</p>
            <button class="btn-primary" onclick="addToCart('APC Back-UPS Pro 1500', 249.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('APC Back-UPS Pro 1500', 249.99)">Buy Now</button>
        </div>

        <!-- CyberPower CP1500PFCLCD -->
        <div class="product">
            <img src="cyberpower-cp1500pfclcd.jpg" alt="CyberPower CP1500PFCLCD">
            <h3>CyberPower CP1500PFCLCD</h3>
            <p>1500VA/900W, Pure Sine Wave, LCD Display, 12 Outlets</p>
            <p class="price">$199.99</p>
            <button class="btn-primary" onclick="addToCart('CyberPower CP1500PFCLCD', 199.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('CyberPower CP1500PFCLCD', 199.99)">Buy Now</button>
        </div>

        <!-- Eaton 5S1500LCD -->
        <div class="product">
            <img src="eaton-5s1500lcd.jpg" alt="Eaton 5S1500LCD">
            <h3>Eaton 5S1500LCD</h3>
            <p>1500VA/900W, Compact Design, LCD Display, 10 Outlets</p>
            <p class="price">$179.99</p>
            <button class="btn-primary" onclick="addToCart('Eaton 5S1500LCD', 179.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('Eaton 5S1500LCD', 179.99)">Buy Now</button>
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
