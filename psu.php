<?php  
$pageTitle = "Power Supplies - Custom PC Creations"; // Page title for the Power Supply category
include 'header.php'; // Include header file for the navigation and styles
?>

<link rel="stylesheet" href="projstyle.css?v=2"> <!-- Link to your project stylesheet -->
<script src="projs.js"></script> <!-- Link to your JavaScript file -->

<!-- Power Supply Products Section -->
<section class="product-section">
    <div class="section-header">
        <!-- Back Button -->
        <a href="index.php" class="btn-back"><span>&#8592;</span> Back</a>
        <h2>Power Supplies</h2>
    </div>

    <div class="product-grid">
        <!-- Corsair RM850e -->
        <div class="product">
            <img src="corsair-rm850e.jpg" alt="Corsair RM850e Power Supply">
            <h3>Corsair RM850e</h3>
            <p>850W, Fully Modular, 80+ Gold Certified, Low-Noise Operation</p>
            <p class="price">$129.99</p>
            <button class="btn-primary" onclick="addToCart('Corsair RM850e', 129.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('Corsair RM850e', 129.99)">Buy Now</button>
        </div>

        <!-- EVGA 600 W1 -->
        <div class="product">
            <img src="evga-600-w1.jpg" alt="EVGA 600 W1 Power Supply">
            <h3>EVGA 600 W1</h3>
            <p>600W, 80+ White Certified, Non-Modular, Quiet Fan Design</p>
            <p class="price">$49.99</p>
            <button class="btn-primary" onclick="addToCart('EVGA 600 W1', 49.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('EVGA 600 W1', 49.99)">Buy Now</button>
        </div>

        <!-- Seasonic Focus GX-750 -->
        <div class="product">
            <img src="seasonic-focus-gx-750.jpg" alt="Seasonic Focus GX-750 Power Supply">
            <h3>Seasonic Focus GX-750</h3>
            <p>750W, Fully Modular, 80+ Gold Certified, Compact Size</p>
            <p class="price">$119.99</p>
            <button class="btn-primary" onclick="addToCart('Seasonic Focus GX-750', 119.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('Seasonic Focus GX-750', 119.99)">Buy Now</button>
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

