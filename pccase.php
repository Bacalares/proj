<?php  
$pageTitle = "PC Cases - Custom PC Creations"; // Page title for the PC case category
include 'header.php'; // Include header file for the navigation and styles
?>

<link rel="stylesheet" href="projstyle.css?v=2"> <!-- Link to your project stylesheet -->
<script src="projs.js"></script> <!-- Link to your JavaScript file -->

<!-- PC Case Products Section -->
<section class="product-section">
    <div class="section-header">
        <!-- Back Button -->
        <a href="index.php" class="btn-back"><span>&#8592;</span> Back</a>
        <h2>PC Cases</h2>
    </div>

    <div class="product-grid">
        <!-- NZXT H510 Mid Tower Case -->
        <div class="product">
            <img src="nzxt-h510.jpg" alt="NZXT H510 Mid Tower Case">
            <h3>NZXT H510</h3>
            <p>Mid Tower, ATX, Tempered Glass Side Panel</p>
            <p class="price">$79.99</p>
            <button class="btn-primary" onclick="addToCart('NZXT H510', 79.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('NZXT H510', 79.99)">Buy Now</button>
        </div>

        <!-- Corsair iCUE 4000X RGB Mid Tower Case -->
        <div class="product">
            <img src="corsair-icue-4000x.jpg" alt="Corsair iCUE 4000X RGB Mid Tower Case">
            <h3>Corsair iCUE 4000X RGB</h3>
            <p>Mid Tower, ATX, Tempered Glass, RGB Fans</p>
            <p class="price">$109.99</p>
            <button class="btn-primary" onclick="addToCart('Corsair iCUE 4000X RGB', 109.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('Corsair iCUE 4000X RGB', 109.99)">Buy Now</button>
        </div>

        <!-- Cooler Master MasterBox Q300L -->
        <div class="product">
            <img src="cooler-master-q300l.jpg" alt="Cooler Master MasterBox Q300L">
            <h3>Cooler Master MasterBox Q300L</h3>
            <p>Micro-ATX, Cube Design, Magnetic Dust Filters</p>
            <p class="price">$69.99</p>
            <button class="btn-primary" onclick="addToCart('Cooler Master MasterBox Q300L', 69.99)">Add to Cart</button>
            <button class="btn-buy-now" onclick="buyNow('Cooler Master MasterBox Q300L', 69.99)">Buy Now</button>
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
